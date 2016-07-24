@extends('admin.master')

@section('content')
    <form action="" method="post" class="form form-horizontal" id="form-aboutus-edit">
        {{ csrf_field() }}
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>公司简介：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" value="{{$About_us->company_desc}}"
                       placeholder="{{$About_us->company_desc}}"
                       name="company_desc" datatype="*" nullmsg="名称不能为空">
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>行业背景：</label>
            <div class="formControls col-5">
                <input type="tel" class="input-text" value="{{$About_us->industry_background}}"
                       placeholder="{{$About_us->industry_background}}"
                       name="industry_background" datatype="*" nullmsg="序号不能为空">
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>核心竞争力：</label>
            <div class="formControls col-5">
                <input type="tel" class="input-text" value="{{$About_us->core_competence}}"
                       placeholder="{{$About_us->core_competence}}"
                       name="core_competence" datatype="*" nullmsg="序号不能为空">
            </div>
            <div class="col-4"></div>
        </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3">牌照图片：</label>
            <div class="formControls col-5">
                @if($About_us->license_img != null)
                    <img id="license_img" src="{{$About_us->license_img}}"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id').click()"/>
                @else
                    <img id="license_img" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id').click()"/>
                @endif
                <input type="file" name="file" id="input_id" style="display: none;"
                       onchange="return uploadImageToServer('input_id','images', 'license_img');"/>
            </div>
        </div>
        <div class="row cl">
            <div class="col-9 col-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
@endsection

@section('my-js')
    <script type="text/javascript">
        $("#form-aboutus-edit").Validform({
            tiptype: 2,
            callback: function (form) {
                $('#form-aboutus-edit').ajaxSubmit({
                    type: 'post', // 提交方式 get/post
                    url: '/admin/service/aboutus/edit', // 需要提交的 url
                    dataType: 'json',
                    data: {
                        company_desc: $('input[name=company_desc]').val(),
                        industry_background: $('input[name=industry_background]').val(),
                        core_competence: $('input[name=core_competence]').val(),
                        license_img: ($('#license_img').attr('src') != '/admin/images/icon-add.png' ? $('#license_img').attr('src') : ''),
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
                        parent.location.reload();
                    },
                    error: function (xhr, status, error) {
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                        layer.msg('ajax error', {icon: 2, time: 2000});
                    },
                    beforeSend: function (xhr) {
                        layer.load(0, {shade: false});
                    },
                });

                return false;
            }
        });
    </script>
@endsection
