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
    <title>中国支付通集团控股有限公司 - 中国支付通集团控股有限公司 </title>
    <link rel="icon" href="http://www.chinasmartpay.com/images/favicon.ico">
    <link rel="stylesheet" href="http://www.chinasmartpay.com/data/template/zh-cn/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.chinasmartpay.com/data/template/zh-cn/css/less.css">
    <script src="http://www.chinasmartpay.com/data/template/zh-cn/js/jquery.min.js"></script>
    <script src="http://www.chinasmartpay.com/data/template/zh-cn/js/modernizr.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<section class="main" id="mainContent">
    <div class="our-advantages items">
        <div class="container">
            <h2 class="page-title">我们的优势</h2>
            <p class="text-center sub-title"><a href="http://www.chinasmartpay.com/category/about-us?lang=zh_cn"
                                                class="more">了解更多<i class="icon icon-more"></i></a></p>
            <div class="list">
                <div class="items clearfix">
                    <div class="animationShow flex-container">
                        <h3><i class="icon icon-growth"></i></h3>
                        <p>全球移动支付和互联网金融行业正处于高速成长期</p>
                    </div>
                </div>
                <div class="items clearfix">
                    <div class="animationShow flex-container">
                        <h3><i class="icon icon-payment"></i></h3>
                        <p>稀缺的全国预付卡牌照和互联网支付牌照</p>
                    </div>
                </div>
                <div class="items clearfix">
                    <div class="animationShow flex-container">
                        <h3><i class="icon icon-platform"></i></h3>
                        <p>极富创新的产品和可持续发展的业务模式以及成熟的技术支持创新业务</p>
                    </div>
                </div>


                <div class="items clearfix">
                    <div class="animationShow flex-container">
                        <h3><i class="icon icon-group"></i></h3>
                        <p>经验丰富的董事会和业内最优秀管理团队</p>
                    </div>
                </div>
                <div class="items clearfix">
                    <div class="animationShow flex-container">
                        <h3><i class="icon icon-company"></i></h3>
                        <p>上市公司平台助力于融资拓展和资源整合</p>
                    </div>
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
<script src="http://www.chinasmartpay.com/data/template/zh-cn/js/common.js"></script>
</body>
</html>
