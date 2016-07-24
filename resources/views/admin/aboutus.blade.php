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
            <th>公司简介</th>
            <td>{{$About_us->company_desc}}</td>
        </tr>
        <tr>
            <th>行业背景</th>
            <td>{{$About_us->industry_background}}</td>
        </tr>
        <tr>
            <th>核心竞争力</th>
            <td>{{$About_us->core_competence}}</td>
        </tr>
        <tr>
            <th>牌照</th>
            <td><img src="{{$About_us->license_img}}" alt="" style="height: 183px"></td>
        </tr>
        </tbody>
    </table>

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