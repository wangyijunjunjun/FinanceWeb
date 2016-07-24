@extends('admin.master')

@section('content')
    <form action="" method="post" class="form form-horizontal" id="form-contact-edit">
        {{ csrf_field() }}
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>地址：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" value="{{$Contact_us->address_text}}"
                       placeholder="{{$Contact_us->address_text}}"
                       name="address_text" datatype="*" nullmsg="名称不能为空">
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>电话：</label>
            <div class="formControls col-5">
                <input type="tel" class="input-text" value="{{$Contact_us->telephone}}"
                       placeholder="{{$Contact_us->telephone}}"
                       name="telephone" datatype="*" nullmsg="序号不能为空">
            </div>
            <div class="col-4"></div>
        </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3">地址背景图：</label>
            <div class="formControls col-5">
                @if($Contact_us->background_img != null)
                    <img id="background_img" src="{{$Contact_us->background_img}}"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id').click()"/>
                @else
                    <img id="background_img" src="/admin/images/icon-add.png"
                         style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                         onclick="$('#input_id').click()"/>
                @endif
                    <input type="file" name="file" id="input_id" style="display: none;" onchange="return uploadImageToServer('input_id','images', 'background_img');" />
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
        $("#form-contact-edit").Validform({
            tiptype: 2,
            callback: function (form) {
                $('#form-contact-edit').ajaxSubmit({
                    type: 'post', // 提交方式 get/post
                    url: '/admin/service/contactus/edit', // 需要提交的 url
                    dataType: 'json',
                    data: {
                        address_text: $('input[name=address_text]').val(),
                        telephone: $('input[name=telephone]').val(),
                        background_img: ($('#background_img').attr('src') != '/admin/images/icon-add.png' ? $('#background_img').attr('src') : ''),
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
