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
            <th width="20%">序号</th>
            <th width="20%">新闻图片</th>
            <th width="20%">标题</th>
            <th width="20%">新闻描述语</th>
            <th>新闻内容</th>
        </tr>
        </thead>
        <tbody>
        @foreach($News as $item)
            <tr>
                <th>{{$item->id}}</th>
                <th><img src="{{$item->img}}" alt="" style="width: 150px;height: 80px;"></th>
                <th>{{$item->title}}</th>
                <th>{{$item->desc}}</th>
                <th><a href="javascript:;" onclick="news_content('新闻内容','/admin/news_content/{{$item->id}}')"
                       class="btn btn-success radius"
                       style="margin: 14px 0 0 0px;">点击查看内容</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="javascript:;" onclick="news_add('添加新闻','/admin/news_add')" class="btn btn-success radius"
       style="width: 168px;margin: 14px 0 0 0px;">添加新闻</a>
@endsection
@section('my-js')
    <script>
        function news_content(title, url) {

            var index = layer.open({
                type: 2,
                title: title,
                content: url
            });
            layer.full(index);
        }

        function news_add(title , url) {
            var index = layer.open({
                type: 2,
                title: title,
                content: url
            });
            layer.full(index);
        }
    </script>
@endsection