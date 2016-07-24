@extends('admin.master')

@section('content')
    <header class="Hui-header cl"><a class="Hui-logo l" title="Fenzotech后台" href="/admin/index">Fenzotech后台</a><span
                class="Hui-subtitle l">后台</span>
        <ul class="Hui-userbar">
            {{--<li>{{$admin->username}}</li>--}}
            <li><a href="/admin/exit">退出</a></li>
            <li id="Hui-msg"><a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont"
                                                                                                style="font-size:18px">
                        &#xe68a;</i></a></li>
        </ul>
        <a href="javascript:;" class="Hui-nav-toggle Hui-iconfont" aria-hidden="false">&#xe667;</a>
    </header>
    <aside class="Hui-aside">
        <input runat="server" id="divScrollValue" type="hidden" value=""/>
        <div class="menu_dropdown bk_2">
            <dl id="menu-product">
                <dt><i class="Hui-iconfont">&#xe625;</i> "首页"管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li><a _href="/admin/home" data-title="网站信息管理" href="javascript:void(0)">网站信息管理</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-order">
                <dt><i class="Hui-iconfont">&#xe643;</i> "关于我们"管理<i class="Hui-iconfont menu_dropdown-arrow">
                        &#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a _href="/admin/aboutus" data-title="订单列表" href="javascript:void(0)">公司信息管理</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-member">
                <dt><i class="Hui-iconfont">&#xe6bf;</i> "主要业务"管理<i class="Hui-iconfont menu_dropdown-arrow">
                        &#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a _href="/admin/main_business" data-title="业务列表" href="javascript:;">业务列表</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-member">
                <dt><i class="Hui-iconfont">&#xe616;</i> "新闻"管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li><a _href="/admin/news" data-title="会员列表" href="javascript:;">新闻列表</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-member">
                <dt><i class="Hui-iconfont">&#xe671;</i> "联系我们"管理<i class="Hui-iconfont menu_dropdown-arrow">
                        &#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a _href="/admin/contactus" data-title="联系我们" href="javascript:;">网站联系信息管理</a></li>
                    </ul>
                </dd>
            </dl>
        </div>
    </aside>
    <div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
    <section class="Hui-article-box">
        <div id="Hui-tabNav" class="Hui-tabNav">
            <div class="Hui-tabNav-wp">
                <ul id="min_title_list" class="acrossTab cl">
                    <li class="active"><span title="我的桌面" data-href="/">我的桌面</span><em></em></li>
                </ul>
            </div>
            <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S"
                                                      href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a
                        id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i
                            class="Hui-iconfont">&#xe6d7;</i></a></div>
        </div>
        <div id="iframe_box" class="Hui-article">
            <div class="show_iframe">
                <div style="display:none" class="loading"></div>
                <iframe scrolling="yes" frameborder="0" src="/"></iframe>
            </div>
        </div>
    </section>
@endsection
