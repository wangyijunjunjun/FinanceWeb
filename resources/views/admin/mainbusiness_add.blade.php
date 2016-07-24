@extends('admin.master')

@section('content')
    <form action="" method="post" class="form form-horizontal" id="form-business-edit">
        {{ csrf_field() }}
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>业务名字：</label>
            <div class="formControls col-8">
                <input type="text" class="input-text" value=""
                       placeholder=""
                       name="business_name" datatype="*" nullmsg="名称不能为空">
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>业务描述：</label>
            <div class="formControls col-8">
                {{--<input type="text" class="input-text" value="{{$News_item->desc}}"--}}
                {{--placeholder="{{$News_item->desc}}"--}}
                {{--name="desc" datatype="*" nullmsg="序号不能为空">--}}
                <script id="edit_desc" type="text/plain" style="width:100%; height:400px;"></script>
            </div>
            <input type="hidden" name="content" id="hidden_desc" value="">
            <div class="col-4"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>新闻页面：</label>
            <div class="formControls col-8">
                {{--<input type="tel" class="input-text" value="{{$News_item->content}}"--}}
                {{--placeholder="{{$News_item->content}}"--}}
                {{--name="content" datatype="*" nullmsg="序号不能为空">--}}
                <script id="edit_content" type="text/plain" style="width:100%; height:400px;"></script>
            </div>
            <input type="hidden" name="content" id="hidden_content" value="">
            <div class="col-4"></div>
        </div>

        <div class="row cl">
            <div class="col-9 col-offset-3">

                <ul id="Huifold1" class="Huifold" style="width: 85%;">
                    <li class="item">
                        <h4>点击查看代码模板和说明<b>+</b></h4>
                        <div class="info">
                            在添加业务页面代码的时候,<br>
                            0)请点击富文本编辑框的左上角编写HTML代码<br>
                            1)请严格按照这个代码模板来修改<br>
                            <br>
                            <p style="color: green;">
                                复制这个链接查看代码:https://gist.github.com/wangyijunjunjun/d601292ee6f6e2e743b5ca380185396d</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        </div>
        <div class="row cl">
            <label class="form-label col-3">业务展示图片：</label>
            <div class="formControls col-8">
                <img id="business_img" src="/admin/images/icon-add.png"
                     style="border: 1px solid #B8B9B9; width: 100px; height: 100px;"
                     onclick="$('#input_id').click()"/>
                <input type="file" name="file" id="input_id" style="display: none;"
                       onchange="return uploadImageToServer('input_id','images', 'business_img');"/>
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
        var hidden_desc = document.getElementById("hidden_desc").value;
        var hidden_content = document.getElementById("hidden_content").value;

        var opts_content = {
            //定制工具按钮
            toolbars: [["fullscreen", "source", "undo", "redo", "bold", "Italic", "Underline", "|",
                "StrikeThrough", "Horizontal", "Date", "FontFamily", "FontSize", "LineHeight", "CustomStyle",
                "JustifyLeft", "JustifyRight", "JustifyCenter", "RemoveFormat"]],
            //初始化UEditor内容
            initialContent: hidden_content,
            //获取光标是，是否自动清空初始化数据
            autoClearinitialContent: false,
            //是否展示元素路径
            elementPathEnabled: false,
            //是否计数
            wordCount: false,
            //高度是否自动增长
            autoHeightEnabled: false,
            //后台接受UEditor的数据的参数名称
            textarea: "contact_content"
        };

        var opts_desc = {
            //定制工具按钮
            toolbars: [["fullscreen", "source", "undo", "redo", "bold", "Italic", "Underline", "|",
                "StrikeThrough", "Horizontal", "Date", "FontFamily", "FontSize", "LineHeight", "CustomStyle",
                "JustifyLeft", "JustifyRight", "JustifyCenter", "RemoveFormat"]],
            //初始化UEditor内容
            initialContent: hidden_desc,
            //获取光标是，是否自动清空初始化数据
            autoClearinitialContent: false,
            //是否展示元素路径
            elementPathEnabled: false,
            //是否计数
            wordCount: false,
            //高度是否自动增长
            autoHeightEnabled: false,
            //后台接受UEditor的数据的参数名称
            textarea: "contact_content"
        };
        var ue_content = UE.getEditor('edit_content', opts_content);
        var ue_desc = UE.getEditor('edit_desc', opts_desc);
        ue_content.execCommand("getlocaldata");
        ue_desc.execCommand("getlocaldata");

        $("#form-business-edit").Validform({
            tiptype: 2,
            callback: function (form) {
                $('#form-business-edit').ajaxSubmit({
                    type: 'post', // 提交方式 get/post
                    url: '/admin/service/main_business/add', // 需要提交的 url
                    dataType: 'json',
                    data: {
                        content: ue_content.getContent(),
                        desc: ue_desc.getContent(),
                        title: $('input[name=business_name]').val(),
                        img: ($('#business_img').attr('src') != '/admin/images/icon-add.png' ? $('#business_img').attr('src') : ''),
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

        $(function () {
            $.Huifold("#Huifold1 .item h4", "#Huifold1 .item .info", "fast", 1, "click");
            /*5个参数顺序不可打乱，分别是：相应区,隐藏显示的内容,速度,类型,事件*/
        });

    </script>
@endsection
