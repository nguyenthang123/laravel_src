<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="http://dadayhn.com/wp-content/themes/mobile/css/font-awesome/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri();?>/css/font-awesome/css/font-awesome.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/m_js/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/bxslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_jssor/jssor.css">
	<?php // wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/page.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/single.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/archive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/pagination.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/m_css/archive-tab.css">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-85212676-2', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding phone-tuvan">
			<p>
				<span>Điện thoại :</span> 
				<a href="<?= rewrite_number_phone(phone1);?>"><?= phone1;?></a> - <a href="<?= rewrite_number_phone(phone2);?>"><?= phone2;?></a>
			</p>
		</div><!-- .site-branding -->
		<div class="logo">
			<h1><a href="<?= rewrite_number_phone(phone1);?>"><img src="<?php echo get_template_directory_uri();?>/m_css/images/logo.png"></a></h1>
		</div>
	</header><!-- .site-header -->
	<nav class="menu" id="header-menu">
		<a href="<?php echo home_url();?>/" class="icon-home w1"><i class="fa fa-home" aria-hidden="true"></i></a>
		<a href="<?php echo get_page_link(2);?>" class="w2">Giới thiệu</a>
		<a href="<?php echo get_category_link(29);?>" class="w2">Kỹ thuật</a>
		<a href="<?php echo get_category_link(30);?>" class="w2">Thiết bị</a>
		<a href="<?php echo get_page_link(5);?>" class="w2">Địa chỉ</a>
	</nav>
	<!-- <div class="slider-header">
		<ul class="home-bxslider">
			<li>
				<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php //echo get_template_directory_uri();?>/css/images/banner-mobile4.png"></a>
			</li>
			<li style="display: none;">
				<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php //echo get_template_directory_uri();?>/css/images/banner-mobile3.gif"></a>
			</li>
		</ul>
	</div> -->
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 640px; height: 245px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('jssor/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 640px; height: 245px; overflow: hidden;">
            <div data-p="110.625" style="display: none;">
                <a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" target="_blank">
                    <img data-u="image" src="<?php echo get_template_directory_uri();?>/m_css/images/banner-mobile3.png" />
                </a>
            </div>
            <div data-p="110.625" style="display: none;">
                <a href="<?php echo get_page_link(5);?>" target="_blank">
                    <img data-u="image" src="<?php echo get_template_directory_uri();?>/m_css/images/banner-mobile3.png" />
                </a>
            </div>        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb11" style="bottom:16px;right:16px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:11px;height:11px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora19l" style="top:0px;left:8px;width:50px;height:50px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora19r" style="top:0px;right:8px;width:50px;height:50px;" data-autocenter="2"></span>
    </div>
	<div id="content" class="site-content">
