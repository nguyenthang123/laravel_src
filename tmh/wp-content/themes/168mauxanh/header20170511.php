<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="dadayhn.com">
	<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true">
	<meta name="copyright" content="">
	<meta name="language" content="vi" />
	<meta name="robots" content="follow, index" />
	<meta name="ROBOTS" content="index, follow, noodp" />
	<meta name="Googlebot" content="index, follow" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/reset.css">
	<?php 
    	global $post;
    	$post_slug=$post->post_name;
    	if($post_slug == 'gioi-thieu-phong-kham'):?>
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/gioithieu/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/gioithieu/custom.css">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/gioithieu/style.css">
    	<?php endif;
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/jssor/jssor.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php //echo esc_url( get_template_directory_uri() ); ?>/js/bxslider/jquery.bxslider.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php //echo esc_url( get_template_directory_uri() ); ?>/css/bxslider.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/datetimepicker/build/jquery.datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/header22.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-tai-mui-hong.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-thanh-ngang.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-tintuc-phongkham.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-thu-thuat.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-tabs-benh.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-nhanvien.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-tu-kiem-tra-benh.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-phuc-hoi-suc-khoe.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-about-168.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fix-bottom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/hovertreess.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/category-parent.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/archive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/category-children.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/category-top.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/thiet-bi-chuyen-nghiep.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/single.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/page.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sidebar-right.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sidebar-left.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/page-viem-mui.css">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/pagination.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/404.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/adv-left.css">
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.11.3.min.js"></script>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-85212676-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<?php if(is_page()):?>
		<?php if(get_the_ID()==6777):?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/quytrinhkhambenh/css.css">
		<?php endif;?>
	<?php endif;?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header container" role="banner">
		<h1><a href="<?php echo home_url();?>"><img alt="tai mũi họng 168 hà nội" src="<?php echo get_template_directory_uri();?>/images/header.png"></a></h1>
	</header>
	<div class="menu">
		<ul class="container">
			<li><h2><a href="<?php echo home_url();?>/">Trang chủ <br> phòng khám</a></h2></li>
			<li class="submenu">
				<h2><a href="#">Danh mục <br>về bệnh</a></h2>
				<div class="menu-hover">
					<div>
						<a href="#" class="cleafix">
							<span class="tai1"></span>
							<span class="">Các bệnh về tai</span>
						</a>
						<div class="detail-menu">
							<div class="flex space-between">
								<div class="col1">
									<h3>Bệnh về tai</h3>
									<div class="flex space-between">
										<div class="col1">
											<a href="http://dadayhn.com/benh-ve-tai/diec-tai" target="_blank">
												<span class="o-tron"></span><span>Điếc tai</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-tai/u-tai" target="_blank">
												<span class="o-tron"></span><span>Ù tai</span>
											</a>
										</div>
										<div class="col2">
											<a href="http://dadayhn.com/benh-ve-tai/thung-mang-nhi" target="_blank">
												<span class="o-tron"></span><span>Thủng màng nhĩ</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-tai/viem-tai-giua" target="_blank">
												<span class="o-tron"></span><span>Viêm tai giữa</span>
											</a>
										</div>
										<div class="col3">
											<a href="http://dadayhn.com/benh-ve-tai/viem-tai-ngoai" target="_blank">
												<span class="o-tron"></span><span>Viêm tai ngoài</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-tai/viem-tai-xuong-chum" target="_blank">
												<span class="o-tron"></span><span>viêm tai xương chũm</span>
											</a>
										</div>
									</div>
									<h3><span>CHUYÊN ĐỀ BỆNH VỀ TAI</span></h3>
									<div style="position: absolute;right: 27px;top:195px;z-index: 10;">
											<a class="controler" href="#chuyendetai" role="button" data-slide="prev">
											    <i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
											<a class="controler" href="#chuyendetai" role="button" data-slide="next">
											    <i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
									  	</div>
									<div id="chuyendetai" class="carousel slide" data-ride="carousel">
									  <div class="carousel-inner" role="listbox">
									  	
									    <div class="item active">
									      	<div class="flex space-between">
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-u-tai-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende.png"></a>
												</div>
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-viem-tai-ngoai" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende1.png"></a>
												</div>
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-viem-tai-giua-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende2.png"></a>
												</div>
											</div>
									    </div>
									    <div class="item">
									      	<div class="flex">
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-diec-tai-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/diec-tai.png"></a>
												</div>
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-thung-mang-nhi" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/thung-mang-nhi.png"></a>
												</div>
												<div class="col1">
												</div>
											</div>
									    </div>
									  </div>
									</div>
								</div>
								<div class="col2">
									<div>
										<img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/hover3.png">
										<h2>phòng khám đa khoa Giải Phóng</h2>
										<h3>CHĂM SÓC SỨC KHỎE TAI</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<a href="#" class="cleafix">
							<span class="mui1"></span>
							<span class="">Các bệnh về mũi</span>
						</a>
						<div class="detail-menu">
							<div class="flex space-between">
								<div class="col1">
									<h3>Bệnh về mũi</h3>
									<div class="flex space-between">
										<div class="col1">
											<a href="http://dadayhn.com/benh-ve-mui/viem-xoang-mui" target="_blank">
												<span class="o-tron"></span><span>Viêm xoang mũi</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-mui/polyp-mui" style="margin-bottom: 20px;" target="_blank">
												<span class="o-tron"></span><span>Polyp mũi</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-mui/lech-vach-ngan-mui" target="_blank">
												<span class="o-tron"></span><span>Lệch vách ngăn mũi</span>
											</a>
										</div>
										<div class="col2">
											<a href="http://dadayhn.com/benh-ve-mui/viem-mui" target="_blank">
												<span class="o-tron"></span><span>Viêm mũi</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-mui/viem-mui-di-ung" target="_blank">
												<span class="o-tron"></span><span>Viêm mũi dị ứng</span>
											</a>
										</div>
										<div class="col3">
											<a href="http://dadayhn.com/benh-ve-mui/phi-dai-cuong-mui" target="_blank">
												<span class="o-tron"></span><span>Phì đại cuống mũi</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-mui/xuat-huyet-mui" target="_blank">
												<span class="o-tron"></span><span>Xuất huyết mũi</span>
											</a>
										</div>
									</div>
									<h3><span>CHUYÊN ĐỀ BỆNH VỀ MŨI</span></h3>
									<div style="position: absolute;right: 27px;top:230px;z-index: 10;">
										<a class="controler" href="#chuyendemui" role="button" data-slide="prev">
										    <i class="fa fa-angle-left" aria-hidden="true"></i>
										</a>
										<a class="controler" href="#chuyendemui" role="button" data-slide="next">
										    <i class="fa fa-angle-right" aria-hidden="true"></i>
										</a>
								  	</div>
									<div id="chuyendemui" class="carousel slide" data-ride="carousel">
									  <div class="carousel-inner" role="listbox">
									  	
									    <div class="item active">
									      	<div class="flex space-between">
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-viem-mui-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende3.png"></a>
												</div>
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-viem-xoang-mui-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende4.png"></a>
												</div>
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-xuat-huyet-mui-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende5.png"></a>
												</div>
											</div>
									    </div>
									    <div class="item">
									      	<div class="flex">
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-polyp-mui-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/mui-polypmui.png"></a>
												</div>
												<div class="col1">
													<a href="#"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/mui-lechvachnganmui.png"></a>
												</div>
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-viem-mui-di-ung-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/mui-viemmuidiung.png"></a>
												</div>
											</div>
									    </div>
									  </div>
									</div>
								</div>
								<div class="col2">
									<div>
										<img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/hover4.png">
										<h2>Y TẾ CHUYÊN NGHIỆP</h2>
										<h3>CHĂM SÓC SỨC KHỎE VÙNG MŨI</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<a href="#" class="cleafix">
							<span class="hong1"></span>
							<span class="">Các bệnh về họng</span>
						</a>
						<div class="detail-menu">
							<div class="flex space-between">
								<div class="col1">
									<h3>Bệnh về họng</h3>
									<div class="flex space-between">
										<div class="col1">
											<a href="http://dadayhn.com/benh-ve-hong/viem-hong" target="_blank">
												<span class="o-tron"></span><span>Viêm họng</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-hong/viem-hong-hat" target="_blank">
												<span class="o-tron"></span><span>Viêm họng hạt</span>
											</a>
										</div>
										<div class="col2">
											<a href="http://dadayhn.com/benh-ve-hong/viem-amidan" target="_blank">
												<span class="o-tron"></span><span>Viêm amidan</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-hong/viem-hong-man-tinh" target="_blank">
												<span class="o-tron"></span><span>Viêm họng mãn tính</span>
											</a>
										</div>
										<div class="col3">
											<a href="http://dadayhn.com/benh-ve-hong/viem-thanh-quan" target="_blank">
												<span class="o-tron"></span><span>Viêm thanh quản</span>
											</a>
											<a href="http://dadayhn.com/benh-ve-hong/polyp-thanh-quan" target="_blank">
												<span class="o-tron"></span><span>Polyp thanh quản</span>
											</a>
										</div>
									</div>
									<h3><span>CHUYÊN ĐỀ BỆNH VỀ HỌNG</span></h3>
									<div style="position: absolute;right: 27px;top:195px;z-index: 10;">
										<a class="controler" href="#chuyendehong" role="button" data-slide="prev">
										    <i class="fa fa-angle-left" aria-hidden="true"></i>
										</a>
										<a class="controler" href="#chuyendehong" role="button" data-slide="next">
										    <i class="fa fa-angle-right" aria-hidden="true"></i>
										</a>
								  	</div>
									<div id="chuyendehong" class="carousel slide" data-ride="carousel">
									  <div class="carousel-inner" role="listbox">
									  	
									    <div class="item active">
									      	<div class="flex space-between">
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-viem-hong-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende6.png"></a>
												</div>
												<div class="col1">
													<a href="#"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende7.png"></a>
												</div>
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-viem-amidan-2" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/chuyende8.png"></a>
												</div>
											</div>
									    </div>
									    <div class="item">
									      	<div class="flex space-between">
												<div class="col1">
													<a href="http://dadayhn.com/chuyen-de-polyp-day-thanh" target="_blank"><img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/hong-cd9.png"></a>
												</div>
											</div>
									    </div>
									  </div>
									</div>
								</div>
								<div class="col2">
									<div>
										<img src="http://suckhoetaimuihong.com/wp-content/themes/suckhoetaimuihong/img/hover5.png">
										<h2>ĐIỀU TRỊ CÁC BỆNH VỀ HỌNG</h2>
										<h3>TÔI LỰA CHỌN PHÒNG KHÁM 168</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li><h2><a href="<?php echo get_page_link(2);?>">Giới thiệu <br> phòng khám</a></h2></li>
			<li><h2><a href="<?php echo get_category_link(29);?>">Kỹ thuật <br> chuyên nghiệp</a></h2></li>
			<li><h2><a href="<?php echo get_category_link(30);?>">Thiết bị <br> hiện đại</a></h2></li>
			<li><h2><a href="<?php echo get_category_link(41);?>">Trường hợp <br> hồi phục</a></h2></li>
			<li><h2><a href="<?= link_tuvan;?>">Đăng ký <br> trực tuyến</a></h2></li>
			<li><h2><a href="<?php echo get_page_link(5);?>">Địa chỉ <br> phòng khám</a></h2></li>
		</ul>
	</div>
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1900px; height: 444px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri();?>/jssor/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1900px; height: 444px; overflow: hidden;">
            <div data-p="293.00" style="display: none;">
                <a href="<?= link_tuvan;?>" target="_blank">
                    <img data-u="image" src="<?php echo get_template_directory_uri();?>/images/mungtrungthuvn.png" />
                </a>
            </div>
            <div data-p="293.00" style="display: none;">
                <a href="<?php echo get_category_link(29);?>" target="_blank">
                    <img data-u="image" src="<?php echo get_template_directory_uri();?>/images/slide3.jpg" />
                </a>
            </div>    
            <div data-p="293.00" style="display: none;">
                <a href="<?php echo get_category_link(30);?>" target="_blank">
                    <img data-u="image" src="<?php echo get_template_directory_uri();?>/images/bannerkythuat.png" />
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
	<div class="tai-mui-hong">
		<div class="container">
			<div class="benh">
				<div class="benh-mui">
					<div class="title">
						<a href="<?php echo get_category_link(2);?>"><img src="<?php echo get_template_directory_uri();?>/images/benh-mui.png"></a>
						<a title="<?php echo get_cat_name(2);?>" href="<?php echo get_category_link(2);?>">Bệnh về mũi</a>
					</div>
					<div class="list-benh">
						<h2><a title="<?php echo get_cat_name(5);?>" href="<?php echo get_category_link(5);?>" class="mauvang"><i class="fa fa-angle-right" aria-hidden="true"></i> Viêm mũi &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(6);?>" href="<?php echo get_category_link(6);?>" class="mauvang">Viêm xoang mũi &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(7);?>" href="<?php echo get_category_link(7);?>" class="mauvang">Xuất huyết mũi</a></h2>
						<h2><a title="<?php echo get_cat_name(8);?>" href="<?php echo get_category_link(8);?>">Phì đại cuống mũi &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(9);?>" href="<?php echo get_category_link(9);?>">Polyp mũi &nbsp;</a></h2>
						<h2><a title="<?php echo get_cat_name(11);?>" href="<?php echo get_category_link(11);?>">Lệch vách ngăn mũi &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(12);?>" href="<?php echo get_category_link(12);?>" class="mauvang">Viêm mũi dị ứng</a></h2>
					</div>
				</div>
			</div>
			<div class="benh">
				<div class="benh-tai">
					<div class="title">
						<a href="<?php echo get_category_link(3);?>"><img src="<?php echo get_template_directory_uri();?>/images/benh-tai.png"></a>
						<a title="<?php echo get_cat_name(3);?>" href="<?php echo get_category_link(3);?>">Bệnh về tai</a>
					</div>
					<div class="list-benh">
						<h2><a title="<?php echo get_cat_name(13);?>" href="<?php echo get_category_link(13);?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Điếc tai &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(14);?>" href="<?php echo get_category_link(14);?>" class="mauvang">Ù tai &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(15);?>" href="<?php echo get_category_link(15);?>">Thủng màng nhĩ</a></h2><br>
						<h2><a title="<?php echo get_cat_name(16);?>" href="<?php echo get_category_link(16);?>" class="mauvang">Viêm tai giữa &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(17);?>" href="<?php echo get_category_link(17);?>">Viêm tai ngoài</a></h2><br>
						<h2><a title="<?php echo get_cat_name(18);?>" href="<?php echo get_category_link(18);?>">Giảm thính lực &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(19);?>" href="<?php echo get_category_link(62);?>">Viêm tai xương chũm</a></h2>
					</div>
				</div>
			</div>
			<div class="benh">
				<div class="benh-hong">
					<div class="title">
						<a href="<?php echo get_category_link(4);?>"><img src="<?php echo get_template_directory_uri();?>/images/benh-hong.png"></a>
						<a title="<?php echo get_cat_name(4);?>" href="<?php echo get_category_link(4);?>">Bệnh về họng</a>
					</div>
					<div class="list-benh">
						<h2><a title="<?php echo get_cat_name(20);?>" href="<?php echo get_category_link(20);?>" class="mauvang"><i class="fa fa-angle-right" aria-hidden="true"></i> Viêm họng &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(21);?>" href="<?php echo get_category_link(61);?>" class="mauvang">Viêm họng hạt &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(22);?>" href="<?php echo get_category_link(22);?>" class="mauvang">Viêm amidan &nbsp;</a></h2><br>
						<h2><a title="<?php echo get_cat_name(84);?>" href="<?php echo get_category_link(84);?>">Viêm thanh quản cấp&nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(24);?>" href="<?php echo get_category_link(24);?>">Viêm họng mãn tính</a></h2><br>
						<h2><a title="<?php echo get_cat_name(25);?>" href="<?php echo get_category_link(25);?>">Viêm VA &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(23);?>" href="<?php echo get_category_link(23);?>">Polyp thanh quản &nbsp;</a></h2>|
						<h2><a title="<?php echo get_cat_name(26);?>" href="<?php echo get_category_link(26);?>">Hạt xơ dây thanh</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="thanh-ngang">
		<div class="container">
			<div class="timkiem-phobien">
				<img src="<?php echo get_template_directory_uri();?>/images/icon-search.png">
				<span class="tk">Tìm kiếm <br> phổ biến</span>
				<?php 
					// $tmh = [2,3,4];
					// $tmh_child = [];
					// foreach ($tmh as $key => $value) {
					// 	$categories = get_categories( array(
					// 	    'hide_empty' => 0,
					// 	    'parent'  => $value,
					// 	));
					// 	foreach ( $categories as $category ) {
					// 	    $tmh_child[] = $category->term_id;
					// 	}
					// }
					// $rand_keys = array_rand($tmh_child,5);
				?>
				<a title="<?php echo get_cat_name(5);?>" href="<?php echo get_category_link(5);?>"><?php echo get_cat_name(5);?></a>
				<span class="soc">|</span>
				<a title="<?php echo get_cat_name(6);?>" href="<?php echo get_category_link(6);?>"><?php echo get_cat_name(6);?></a>
				<span class="soc">|</span>
				<a title="<?php echo get_cat_name(16);?>" href="<?php echo get_category_link(16);?>"><?php echo get_cat_name(16);?></a>
				<span class="soc">|</span>
				<a title="<?php echo get_cat_name(22);?>" href="<?php echo get_category_link(22);?>">Viêm amidan</a>
				<span class="soc">|</span>
				<a title="<?php echo get_cat_name(14);?>" href="<?php echo get_category_link(14);?>"><?php echo get_cat_name(14);?></a>
			</div>
			<div class="search">
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
					<button type="submit">Search</button>
				</form>
			</div>
		</div>
	</div>
	<div id="content" class="site-content">
		


