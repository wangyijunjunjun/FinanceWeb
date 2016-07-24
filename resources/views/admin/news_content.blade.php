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
            <th>新闻内容</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>{{$News_item->id}}</th>
            <th><p>{!!  $News_item->content!!}</p></th>
        </tr>
        </tbody>
    </table>
    <a href="/admin/news_edit/{{$News_item->id}}" class="btn btn-success radius"
       style="margin: 14px 0 0 0px;">修改</a>
@endsection
@section('my-js')
    {{--<script>--}}
        {{--function news_content_edit(title, url) {--}}
            {{--var index = layer.open({--}}
                {{--type: 2,--}}
                {{--title: title,--}}
                {{--content: url--}}
            {{--});--}}
            {{--layer.full(index);--}}
        {{--}--}}

    {{--</script>--}}
@endsection