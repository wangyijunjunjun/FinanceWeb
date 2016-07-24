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
