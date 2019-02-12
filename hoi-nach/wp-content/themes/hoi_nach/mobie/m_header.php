
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <base target="_blank">
    <?php wp_head(); ?>
    <title> Khám chữa bệnh hôi nách - Phòng khám đa khoa Giải Phóng </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/m_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function(){
      $('.menu').hide();
   $('.menu_droper').click(function(event) {
    $('.menu').toggle(400);
       return false;
   });
    $('body').click(function() {
        var a = $('.menu').css('display');
        if(a=='block'){
            $('.menu').hide(400);
        }
    });
});
</script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
<body <?php body_class(); ?>>
<header id="header" style="position: relative">
    <div class="col-sm-2 col-xs-2 text-center menu_droper" style="padding: 0px;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/bar.png" alt="">
    </div>
    <div class="col-sm-10 col-xs-10" style="padding-right: 0px;">
        <div class="row">
            <div class="cover_white">
                <div class="col-sm-10 col-xs-10" >
                    <a href="/nam-khoa">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/logo_mobie.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2 col-xs-2" style="padding: 1px 0px;">
                    <a href="tel:19002622">
                        <img class=" mn_right" src="http://phongkhamgiaiphong.com/hoi-nach/wp-content/themes/hoi_nach/assets/m_mobie/logo_2_m.png" alt="phong kham">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu" style="display: none;">
        <ul>
            <li>
                <span><i class="fa fa-chevron-circle-right icon" aria-hidden="true"></i></span>
                <span><a href="<?= link_gt;?>">Giới thiệu phòng khám </a></span>
            </li>
            <li>
                <span><i class="fa fa-chevron-circle-right icon" aria-hidden="true"></i></span>
                <span><a href="<?=  LINK_CONTACT;?>">Kỹ thuật phòng khám</a></span>
            </li>
            <li>
                <span><i class="fa fa-chevron-circle-right icon" aria-hidden="true"></i></span>
                <span><a href="<?=  LINK_CONTACT;?>">Thiết bị hiện đại </a></span>
            </li>
            <li>
                <span><i class="fa fa-chevron-circle-right icon" aria-hidden="true"></i></span>
                <span><a href="<?=  LINK_CONTACT;?>">Đặt hẹn lấy số </a></span>
            </li>
            <li>
                <span><i class="fa fa-chevron-circle-right icon" aria-hidden="true"></i></span>
                <span><a href="<?=  LINK_CONTACT;?>">Tư vấn trực tuyến </a></span>
            </li>
            <li>
                <span><i class="fa fa-chevron-circle-right icon" aria-hidden="true"></i></span>
                <span><a href="http://phongkhamgiaiphong.com/hoi-nach/lien-he/">Địa chỉ phòng khám </a></span>
            </li>
        </ul>
    </div>
</header>
<div class="menu_con_hai">
      <ul>
           <li>
                <a href="http://phongkhamgiaiphong.com/hoi-nach"> Trang chủ  </a>
           </li>
           <li>
                <a href="<?= link_gt;?>"> Giới thiệu </a>
           </li>
           <li>
                <a href="<?=  LINK_CONTACT;?>"> Kỹ thuật  </a>
           </li>
           <li>
                <a href="<?= link_dt;?>"> Điều trị </a>
           </li>
      </ul>
</div>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item">
      <a href="<?= LINK_CONTACT;?>"><img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/banner_m.png"></a>
    </div>
    <div class="item active">
      <a href="http://phongkhamgiaiphong.com/hoi-nach/mobie/cdsuckhoe/chuyen-de-suc-khoe/"><img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="http://phongkhamgiaiphong.com/cd/img/m_bn_nk.jpg"></a>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
   