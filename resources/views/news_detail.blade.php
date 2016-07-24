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
    <title>新闻中心 - {{$Home_first->web_name}} </title>
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
<header class="siteTop">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                <div class="logo"><a href="http://www.chinasmartpay.com/?lang=zh_cn" class="block-show"></a></div>
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
                    <ul class="list-inline list-unstyled">
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


<section class="main news-content" id="mainContent">
    <section class="items">
        <div class="container">
            <h1 class="text-center">{{$News_detail->title}}</h1>
            <br>
            <div class="newsContent"><p>
 {{--<span style="font-size:16px;font-family:SimSun;"><span style="color:#666666;"><strong>陆金发认购支付通新股份</strong></span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">中国支付通董事会欣然宣布，二零一五年十月二十日（交易时段后），中国支付通、陆金发、陆家嘴基金及保证人订立认购协议。陆金发及陆家嘴基金各自有条件同意（或同意促使指定附属公司）认购而本公司有条件同意总共配发及发行422,809,720股认购股份，认购价为每股股份1.90港元。422,809,720股认购股份占 (i) 本公司于本公告日期之现有已发行股本约33.33%；及 (ii) 本公司经配发及发行认购股份扩大之已发行股本约25.00%。通过此次新股认购，中国支付通成功融资约8.02亿港元。</span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">认购股份将于股东特别大会上向股东寻求特别授权配发及发行。本公司将根据创业板上市规则于实际可行情况下尽快向股东寄发通函，当中载有有关认购协议及其有关进行交易的详情，连同召开股东特别大会的通告。</span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;"><strong>陆金发简介</strong></span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">陆金发为于中国注册成立的国有有限责任企业，注册资本为人民币8,000,000,000元。陆金发的成立目的是按中国国务院关于发展上海国际金融中心的战略要求，于上海发展创新及综合金融业务。陆金发主要于中国从事投资及融资、并购、资产管理、经纪业务、保险及财富管理等多种金融服务。陆金发已收购爱建证券有限责任公司（为一家以上海为基地并于北京、深圳及厦门等中国主要城市设有业务之证券公司）及陆家嘴国际信托有限公司之股本权益。陆金发也在陆家嘴国泰人寿保险有限责任公司拥有50%股本权益，该公司为一间与台湾保险公司国泰人寿成立之合营保险企业。陆金发亦拥有消费融资、小额信贷及私募股权投资方面的投资项目。</span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">陆家嘴基金为于中国成立之基金有限合伙企业，总注册资本为人民币416,000,000元，于本公告日期陆家嘴基金现时受陆金发控制及管理。于签署认购协议前，陆家嘴基金已作出超过人民币400,000,000元之投资，主要为金融行业及优质金融资产，并寻求透过提供多元化增值服务为合伙公司创造价值。</span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;"><strong>积极发挥战略合作的协同效应</strong></span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">中国支付通主要从事泛亚洲支付、互联网金融及跨境电子商贸业务，并拥有仅六张之一的全国性支付牌照许可，以于中国经营全国预付及互联网支付网络。</span><br/>--}}
{{--<span style="color:#666666;">&nbsp;</span><br/>--}}
{{--<span style="color:#666666;">董事认为，认购事项是本集团引入一个在金融服务业拥有丰富经验、深厚专业知识及广阔业务网络的稳健策略企业投资者的宝贵机遇。具体来说，认购事项(i) 透过与陆金发提供各式各样之金融服务相结合，有机会增加本公司支付业务的吸引力；(ii) 由于陆金发为当前推动人民币国际化之主要参与者之一，且在位于上海浦东新区的上海自由贸易区享有多项策略性优势，可令本公司以一个更优越的战略位置发展跨境业务；及 (iii) 让本公司得享陆金发及其集团公司所提供雄厚而又低成本的财务支持，这对本公司已计划发展的互联网金融业务十分重要。</span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">认购事项之所得款项总额将约为803,000,000港元，而认购事项之所得款项净额经扣除开支后，估计将约为802,000,000港元，相当于净发行价约每股认购股份1.898港元。</span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">本公司拟动用认购事项筹得之资金 (i) 在中国支付、互联网金融及电子商贸行业寻求收购机会；及 (ii) 作为本集团之一般营运资金。于本公告日期，概无就该等活动确定任何明确计划或时间表，而本公司一直为此探索及物色合适的项目，惟并未就任何收购事项展开任何磋商或讨论，亦并未就任何有关收购事项订立任何明确协议。如有任何发展，将于适当时候另行公告。</span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">董事认为，认购事项带来良机，(i) 为本公司筹集大笔额外资金以及扩大本公司之股东基础；(ii) 改善本集团之财务及流动资金状况；及(iii)为本公司提供本集团未来业务发展所必要之财务灵活性及于任何潜在投资机会出现时把握契机的能力。</span><br/>--}}
{{--<br/>--}}
{{--<span style="color:#666666;">董事认为，认购协议之条款（包括认购价）诚属公平合理，而认购事项如获完成，将符合本公司及股东之整体利益。</span></span>--}}

                    {!! $News_detail->content !!}
                </p>
                <p>
                    <br/>
                </p></div>
        </div>
    </section>

</section>


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