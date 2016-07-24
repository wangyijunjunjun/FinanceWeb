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
            <th width="20%">项目</th>
            <th>内容</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>详细地址</th>
            <td>{{$Contact_us->address_text}}</td>
        </tr>
        <tr>
            <th>电话</th>
            <td>{{$Contact_us->telephone}}</td>
        </tr>
        <tr>
            <th>地图截图</th>
            <td><img src="{{$Contact_us->background_img}}" alt="" style="height: 183px"></td>
        </tr>
        </tbody>
    </table>

    <a href="javascript:;" onclick="contactus_edit('联系我们','/admin/contactus_edit')" class="btn btn-success radius"
       style="margin: 14px 0 0 0px;">修改</a>
@endsection

@section('my-js')

    <script>
        function contactus_edit(title, url) {
            var index = layer.open({
                type: 2,
                title: title,
                content: url
            });
            layer.full(index);
        }

    </script>
@endsection