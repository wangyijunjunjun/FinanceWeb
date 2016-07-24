@extends('admin.master')

@section('content')

    <style>
        .row.cl {
            margin: 20px 0;
        }
    </style>

    <div class="panel panel-default">
        <div class="panel-header">第一屏</div>
        <div class="panel-body">

            <table class="table table-border table-bordered table-striped">
                <thead>
                <tr>
                    <th width="20%">项目</th>
                    <th>内容</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>网站名称</th>
                    <td>{{$Home_first->web_name}}</td>
                </tr>
                <tr>
                    <th>首页LOGO</th>
                    <td><img src="{{$Home_first->icon}}" alt="" style="height: 83px"></td>
                </tr>
                <tr>
                    <th>首页首屏背景图</th>
                    <td><img src="{{$Home_first->backgroundImg}}" alt="" style="height: 183px"></td>
                </tr>
                <tr>
                    <th>首页首屏Slogan</th>
                    <td>{{$Home_first->slogan}}</td>
                </tr>
                <tr>
                    <th>首页首屏Slogan英文</th>
                    <td>{{$Home_first->slogan_english}}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

    <div class="panel panel-default">

        <div class="panel-header">第二屏</div>
        <div class="panel-body">
            <a href="javascript:;" onclick="contactus_edit('第二屏效果','/admin/home_secondpage')"
               class="btn btn-success radius"
               style="margin: 14px 0 0 0px;">点击查看第二屏的效果</a>

        </div>
    </div>

    <div class="panel panel-default">

        <div class="panel-header">第三屏</div>
        <div class="panel-body">
            <a href="javascript:;" onclick="contactus_edit('第三屏效果','/admin/home_thirdpage')"
               class="btn btn-success radius"
               style="margin: 14px 0 0 0px;">点击查看第三屏的效果</a>

        </div>
    </div>

    <a href="javascript:;" onclick="contactus_edit('修改公司信息','/admin/aboutus_edit')" class="btn btn-success radius"
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