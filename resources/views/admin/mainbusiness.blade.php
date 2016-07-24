@extends('admin.master')

@section('content')

    <style>
        .row.cl {
            margin: 20px 0;
        }
    </style>

    <table class="table table-border table-bordered table-striped">
        <thead>
        <tr>
            <th width="18%">序号</th>
            <th width="18%">业务名称</th>
            <th width="18%">业务描述</th>
            <th width="18%">业务对应的页面</th>
            <th width="18%">业务展示图</th>
            <th width="10%"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($Main_business as $item)
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->business_name}}</th>
                <th>{!! $item->business_desc!!}</th>
                <th><a href="javascript:;"
                       onclick="main_business_page('业务对应的页面','/admin/mainbusiness_page/{{$item->id}}')"
                       class="btn btn-success radius"
                       style="margin: 14px 0 0 0px;">点击查看业务对应的页面</a></th>
                <th><img src="{{$item->business_img}}" alt="" style="width: 150px;height: 80px;"></th>
                <th><a href="javascript:;"
                       onclick="main_business_del({{$item->id}})"
                       class="btn btn-success radius"
                       style="width: 168px;margin: 14px 0 0 0px;">删除</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="javascript:;" onclick="main_business_add('添加业务','/admin/main_business_add')" class="btn btn-success radius"
       style="width: 168px;margin: 14px 0 0 0px;">添加业务</a>
@endsection
@section('my-js')
    <script>
        function main_business_page(title, url) {

            var index = layer.open({
                type: 2,
                title: title,
                content: url
            });
            layer.full(index);
        }

        function main_business_add(title, url) {
            var index = layer.open({
                type: 2,
                title: title,
                content: url
            });
            layer.full(index);
        }


        function main_business_del(id) {
            layer.confirm('确认要删除吗?', function (index) {
                $.ajax({
                    type: 'post',
                    url: 'service/mainbusiness/del',
                    dataType: 'json',
                    data: {
                        id: id,
                        _token: "{{csrf_token()}}"
                    },
                    success: function (data) {
                        if (data == null) {
                            layer.msg('服务端错误', {icon: 2, time: 2000});
                            return;
                        }
                        if (data.status != 0) {
                            layer.msg(data.message, {icon: 2, time: 2000});
                            return;
                        }

                        layer.msg(data.message, {icon: 1, time: 2000});
                        location.replace(location.href);
                    },

                    error: function (xhr, status, error) {
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                        layer.msg('ajax error', {icon: 2, time: 2000});
                    },
                    beforeSend: function (xhr) {
                        layer.load(0, {shade: false});
                    }
                });
            })
        }

    </script>
@endsection