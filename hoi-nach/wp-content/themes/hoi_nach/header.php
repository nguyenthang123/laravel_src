<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/hoi_nach.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/hoi_nach.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reponsive.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/category.css">
    <title>Khám chữa bệnh hôi nách - Phòng khám đa khoa Giải Phóng</title>
    <link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/assets/css/street.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css">
</head>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '396918310746091');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=396918310746091&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">
   setTimeout(function(){ 
        $('img.newgif').slideUp(2000);
   }, 15000);
</script>
<body <?php body_class(); ?>>
<div class="page">
    <div class="banner_hoinach hidden-xs">
         <a href="http://phongkhamgiaiphong.com/hoi-nach/cdsuckhoe/chuyen-de-suc-khoe/index.phtml">
            <img class="newgif" src="<?php echo get_template_directory_uri(); ?>/assets/images/addtop_new.gif" alt="">
         </a>
    </div>
<!--     <div class="navbar_top">
    <div class="container">
         <div class="row">
              <div class="col-md-6">
                  <div class="tt_navbar_top">
                       Phòng khám đa khoa giải phóng luôn quan tâm chăm sóc sức khỏe của bạn 
                  </div>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-4">
                   <div class="call">
                        <span class="icon_one">
                             <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/hea_top_dt.png" alt="">
                        </span>
                        <span class="tuvan1">
                             Tư vấn:
                        </span>
                        <span class="tuvan2">
                             <?php //echo NUMBER_PHONE1; ?> - <?php //echo NUMBER_PHONE2; ?>
                        </span>
                   </div>
              </div>
         </div>
    </div>
</div> -->
    <header class="header  hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="<?php echo get_home_url() ?>">
                        <img class="logo_top" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="menu">
                        <ul>
                            <li>
                                <a  target="_blank" href="http://phongkhamgiaiphong.com/"> Trang chủ <br>
                                    <div class="khoim2">Phòng khám</div>
                                    <div class="ketrang"></div>
                                </a>
                                <div class="gachduoi"></div>
                            </li>
                            <li>
                                <a  target="_blank" href="http://phongkhamgiaiphong.com/hoi-nach/gioi-thieu"> Giới thiệu <br>
                                    <div class="khoim2">Phòng khám</div>
                                    <div class="ketrang"></div>
                                </a>
                                <div class="gachduoi"></div>
                            </li>
                            <li>
                                <a  target="_blank" href="<?= LINK_CONTACT;?>"> Kỹ thuật  <br>
                                    <div class="khoim2">chuyên nghiệp</div>
                                    <div class="ketrang"></div>
                                </a>
                                <div class="gachduoi"></div>
                            </li>
                            <li class="liso3">
                                <a href=""> Điều trị <br>
                                    <div class="khoim2">Hôi nách</div>
                                    <div class="ketrang"></div>
                                </a>
                                <div class="gachduoi"></div>
                                <div class="sub_menu">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="tt_sub_menu">
                                                <span class="img_sub"> <img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/chamden.png"
                                                            alt=""></span>
                                                <span class="img_tt"><a href="<?php echo get_category_link(2) ?>"> Nguyên nhân </a> </span>
                                                <div class="kecat"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tt_sub_menu">
                                                <span class="img_sub"> <img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/chamden.png"
                                                            alt=""></span>
                                                <span class="img_tt"><a href="<?php echo get_category_link(3) ?>"> Triệu chứng </a> </span>
                                                <div class="kecat"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 30px;">
                                        <div class="col-md-6">
                                            <div class="tt_sub_menu">
                                                <span class="img_sub"> <img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/chamden.png"
                                                            alt=""></span>
                                                <span class="img_tt"><a href="<?php echo get_category_link(4) ?>"> Điều trị </a> </span>
                                                <div class="kecat"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tt_sub_menu">
                                                <span class="img_sub"> <img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/chamden.png"
                                                            alt=""></span>
                                                <span class="img_tt"><a href="<?php echo get_category_link(5) ?>">Thủ thuật </a> </span>
                                                <div class="kecat"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a  target="_blank" href="http://phongkhamgiaiphong.com/hoi-nach/lien-he"> Địa chỉ <br>
                                    <div class="khoim2">Phòng khám</div>
                                    <div class="ketrang"></div>
                                </a>
                                <div class="gachduoi"></div>
                            </li>
                        </ul>
                        <div class="tran"></div>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- end header  -->
    <!--  begin slider  -->
    <div class="h-88 hidden-xs"></div>
    <div class="mobile-header visible-xs">
        <div class="block"><a target="_blank" href="http://phongkhamgiaiphong.com/hoi-nach"><i class="fa fa-home"></i> Trang chủ</a></div>
        <div class="block"><a target="_blank" href="http://phongkhamgiaiphong.com/hoi-nach/gioi-thieu"> Giới thiệu</a></div>
        <div class="block"><a target="_blank" href="<?php echo get_category_link(4) ?>"> Điều trị</a></div>
        <div class="block"><a target="_blank" href="http://phongkhamgiaiphong.com/hoi-nach/lien-he"> Địa chỉ</a></div>
    </div>

    <div class="slider hidden-xs">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active">
                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span
                        class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span
                        class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
    <div class="slider-mobile visible-xs" style="margin-top: 40px">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/m_bn_hn_2.jpg">
                </div>
                <div class="item active">
                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/m_bn_hn.jpg">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span
                        class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span
                        class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
    <!-- end slider  -->
   