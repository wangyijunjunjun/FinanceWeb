<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>主要业务 - 中国支付通集团控股有限公司 </title>
    <link rel="icon" href="http://www.chinasmartpay.com/images/favicon.ico">
    <link rel="stylesheet" href="http://www.chinasmartpay.com/data/template/zh-cn/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.chinasmartpay.com/data/template/zh-cn/css/less.css">
    <script src="http://www.chinasmartpay.com/data/template/zh-cn/js/jquery.min.js"></script>
    <script src="http://www.chinasmartpay.com/data/template/zh-cn/js/modernizr.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        .logo {

            width: 206px;
            height: 59px;
            background: url('{{$Home_first->icon}}') no-repeat center center;
            /*background-image: -webkit-image-set(url(../images/logo.png) 1x, url(../images/logo_retina.png) 2x);*/

        }

        #slides .slides {
            /*background: url('/images/background01.jpg');*/
            background: url('{{$Home_first->backgroundImg}}');
        }
    </style>
</head>
<body>
<header class="siteTop">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                <div class="logo"><a href="http://www.chinasmartpay.com/?lang=zh_cn" class="block-show"></a></div>
                {{--<a href="/home"><img src="/images/logo01.jpg"></a>--}}

            </div>
            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9 clearfix">
                <div id="menuToggle" class="visible-xs visible-sm">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="hidden-md hidden-lg" id="siteMenu">
                    <ul class="list-inline list-unstyled">
                        <li class="home"><a href="/home"><span>首页</span></a></li>
                        <li class="about-us"><a href="/aboutus" target="_self"><span>关于{{$Home_first->web_name}}</span></a>
                        </li>
                        <li class="main-business"><a href="/main_business" target="_self"><span>主要业务</span></a></li>
                        <li class="news"><a href="/news" target="_self"><span>新闻中心</span></a></li>
                        <li class="contact-us"><a href="/contactus" target="_self"><span>联系我们</span></a></li>
                    </ul>
                </nav>
                <div id="menuShadow"></div>
                <nav class="hidden-xs hidden-sm">
                    <ul class="list-inline list-unstyled text-right">
                        <li class="home"><a href="/home"><span>首页</span></a></li>
                        <li class="about-us"><a href="/aboutus" target="_self"><span>关于{{$Home_first->web_name}}</span></a>
                        </li>
                        <li class="main-business"><a href="/main_business" target="_self"><span>主要业务</span></a></li>
                        <li class="news"><a href="/news" target="_self"><span>新闻中心</span></a></li>
                        <li class="contact-us"><a href="/contactus" target="_self"><span>联系我们</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!--主体内容-->


<section class="summary summary-businesses flex-container"><h1>主要业务</h1></section>
<div class="main businesses-content" id="mainContent">


    @foreach($Main_business as $item)
        {!! $item->business_page !!}
    @endforeach

</div>
<footer class="siteFooter">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <ul class="list-unstyled list-inline">
                    <li class="home"><a href="/home"><span>首页</span></a></li>
                    <li class="about-us"><a href="/aboutus" target="_self"><span>关于{{$Home_first->web_name}}</span></a>
                    </li>
                    <li class="main-business"><a href="/main_business" target="_self"><span>主要业务</span></a></li>
                    <li class="news"><a href="/news" target="_self"><span>新闻中心</span></a></li>
                    <li class="contact-us"><a href="/contactus" target="_self"><span>联系我们</span></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                {{$Home_first->web_name}}            </div>
        </div>
    </div>

</footer>
<script src="http://www.chinasmartpay.com/data/template/zh-cn/js/common.js"></script>
</body>
</html>
