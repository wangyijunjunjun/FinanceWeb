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
    <title>{{$Home_first->web_name}}</title>
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
<section id="banner">
    <div id="parallaxContainer" style="transform: translate3d(0px, 0px, 0px);">
        <div id="slides">
            <div class="slides flex-container">
                <div class="text-center">
                    {{--<h1>中国最优秀的智能支付 <br>与小微金融公司</h1>--}}
                    <h1>{{$Home_first->slogan}}</h1>
                    <h2><span>{{$Home_first->slogan_english}}</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main" id="mainContent">
    <div class="our-advantages items">
        <div class="container">
            <h2 class="page-title">我们的优势</h2>
            <p class="text-center sub-title"><a href="/aboutus"
                                                class="more">了解更多<i class="icon icon-more"></i></a></p>
            <div class="list">

                @foreach($Home_second as $item)

                    <div class="items clearfix">
                        <div class="animationShow flex-container">
                            <h3><i class="icon icon-growth"></i></h3>
                            <p>{{$item->text}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="our-giants items">
        <div class="container">
            <h2 class="page-title">中国O2O巨头</h2>
            <p class="text-center sub-title">
                我们决心在5年内，发展成为O2O巨头</p>
            <div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12 items">
                    <div class="lineHover animationShow">
                        <section class="mouse-out">
                            <h3>1亿</h3>
                            <p>活跃用户</p>
                        </section>
                        <section class="mouse-in">
                            <h3>活跃用户 <br>/</h3>
                            <p>在全亚洲发展<br>
                                1亿活跃用户</p>
                        </section>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 items">
                    <div class="lineHover animationShow">
                        <section class="mouse-out">
                            <h3>1000亿</h3>
                            <p>支付金额</p>
                        </section>
                        <section class="mouse-in">
                            <h3>支付额 <br> /</h3>
                            <p>每年超过1000亿<br>
                                人民币支付金额</p>
                        </section>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 items">
                    <div class="lineHover animationShow">
                        <section class="mouse-out">
                            <h3>100万</h3>
                            <p>合作商户</p>
                        </section>
                        <section class="mouse-in">
                            <h3>合作商户<br> /</h3>
                            <p>在全亚洲发展100万<br>
                                合作商户</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-business items">
        <div class="container">
            <div class="container">
                <h2 class="page-title">我们的业务</h2>
                <p class="text-center more sub-title">
                    {{$Home_first->business_slogan}}
                </p>
                <div class="row listAnimation">

                    @foreach($Main_business as $item)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="list-items animationShow">
                                <a class="block-show"
                                   href="/main_business">
                                    <img src="{{$item->business_img}}" alt=""
                                         class="img-responsive"></a>
                                <h4>{{$item->business_name}}</h4>
                                <ul>
                                    <li>{!! $item->business_desc!!}</li>
                                </ul>
                                <p><a href="/main_business"
                                      class="more">了解更多<i
                                                class="icon icon-more"></i></a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function () {

        var Win = $(window);

        function winScrollTop() {
            return Win.scrollTop();
        }

        Win.scroll(function () {
            $scroll_top = $(this).scrollTop();
            var $new_position = 'translate3d(0px, ' + parseInt(($scroll_top / 2.5)) + 'px, 0px)';
            if (parallaxContainer.length) {
                parallaxContainer.css({
                    '-webkit-transform': $new_position,
                    '-o-transform': $new_position,
                    '-moz-transform': $new_position,
                    '-ms-transform': $new_position,
                    'transform': $new_position
                });
            }
            $('#mainContent > div').each(function () {
                if (($scroll_top > ($(this).offset().top + $(this).outerHeight() + 100)) || (($scroll_top + $(window).height()) < $(this).offset().top + 100)) {
                    $(this).removeClass('active');
                } else {
                    $(this).addClass('active');
                }
            });
        })
    });
</script>

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
