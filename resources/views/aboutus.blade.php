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
    <title>关于支付通 - 中国支付通集团控股有限公司 </title>
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


<section class="summary summary-about flex-container"><h1>关于{{$Home_first->web_name}}</h1></section>
<div class="main about-content" id="mainContent">
    <div class="items">
        <div class="container">
            <h2>
                公司简介
            </h2>
            {{--<p>--}}
            {{--中国支付通集团控股有限公司是一家拥有稀缺牌照的智能支付和小微金融类上市公司--}}
            {{--（8325.HK）。公司拥有<strong class="emphasis">全国性预付卡牌照</strong>和<strong class="emphasis">互联网支付牌照</strong>，掌握业内领先的智能云POS技术和系统，打造行业内最优秀的团队及技术，与知名战略伙伴合作，引领行业发展。中国支付通的支付业务将以预付卡业务为基础，大力发展互联网支付、移动支付、O2O等业务，竭诚为C端客户服务，以建立和管理庞大的实名账户体系，长远将以此基础打造综合性个人金融服务平台。--}}
            {{--</p>--}}
            <p>{{$Aboutus->company_desc}}</p>
        </div>
    </div>
    <div class="items industry-background">
        <div class="container">
            <h2>
                行业背景
            </h2>
            {{--<p>--}}
            {{--公司所处的第三方支付行业近年来蓬勃发展，从2009年3万亿增长到2014年约23万亿，CAGR--}}
            {{--高达50%。第三方支付行业一般分为银行卡收单、预付卡、以及互联网支付（含移动支付，中国支付通拥有<strong class="emphasis">全国性预付卡牌照</strong>和<strong--}}
            {{--class="emphasis">互联网支付牌照</strong>，并力争实现支付全牌照。预付费业务具有“便捷、安全、服务、互动”的特殊优势，使得其成为某些环境下不可替代的支付工具，例如市民卡、医疗健康卡、个人礼品卡、商圈会员卡等；在结合了互联网支付和移动支付等先进技术手段之后，将成为承接商业业态转型、线上线下联动（O2O）的有力工具。目前中国第三方支付行业竞争激烈、监管加强。自2011年起，央行开始陆续发放第三方支付牌照，其中<strong--}}
            {{--class="emphasis">全国性预付卡牌照仅6张</strong>。--}}
            {{--</p>--}}
            <p>{{$Aboutus->industry_background}}</p>
        </div>
    </div>
    <div class="items">
        <div class="container">
            <h2>
                核心竞争力
            </h2>
            <div>
                <p>
                    {{$Aboutus->core_competence}}}
                </p>
            </div>
        </div>
    </div>

    <div class="items nationwide-license">
        <div class="container">
            <h2>
                全国性牌照
            </h2>
            <p>
                <img src="{{$Aboutus->license_img}}"
                     alt=""/>
            </p>
        </div>
    </div>
    <div class="items our-history">
        <div class="container">
            <h2>
                集团里程碑
            </h2>
            <ul class="list-unstyled">
                @foreach($MileStone as $item)
                    <li>{{$item->development_history}}</li>
                @endforeach

            </ul>
        </div>
    </div>
    <div class="items board-of-directors" id="boardOfDirectors">
        <div class="container">
            <h2>企业核心人员</h2>
            <ul class="list-unstyled list-inline clearfix">
                @foreach($Staff as $item_staff)

                    <li>
                        <img src="{{$item_staff->portray}}" alt=""/>
                        <h4>
                            {{$item_staff->name}}
                        </h4>
                        <p>
                            {{$item_staff->position}}
                        </p>
                        <div class="description">
                            <ul>
                                <li>
                                    {{$item_staff->info_01}}
                                </li>
                                <li>
                                    {{$item_staff->info_02}}
                                </li>
                                <li>
                                    {{$item_staff->info_03}}
                                </li>
                            </ul>
                        </div>
                    </li>

                @endforeach

            </ul>
        </div>
    </div>
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
