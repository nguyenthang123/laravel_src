<?php
get_header(); ?>
	<div id="primary" class="content-area thiet-bi-hien-dai moi-truong-benh-vien">
		<main id="main" class="site-main" role="main">
			<div class="container clearfix">
				<!-- left sidebar -->
				<?php get_sidebar('left');?>
				<!-- end -->
				<div class="left main-content">
					<h1><?php echo single_cat_title();?></h1>
					<div class="item clearfix">
						<div class="left">
							<img src="<?php echo get_template_directory_uri();?>/images/ha20.png">
							<p>Quầy lễ tân</p>
						</div>
						<div class="left">
							<img src="<?php echo get_template_directory_uri();?>/images/ha21.png">
							<p>Phòng chờ</p>
						</div>
					</div>
					<div class="item clearfix">
						<div class="left">
							<img src="<?php echo get_template_directory_uri();?>/images/ha22.png">
							<p>Phòng truyền dịch</p>
						</div>
						<div class="left">
							<img src="<?php echo get_template_directory_uri();?>/images/ha23.png">
							<p>Tầng 2 Phòng khám</p>
						</div>
					</div>
					<div class="item clearfix">
						<div class="left">
							<img src="<?php echo get_template_directory_uri();?>/images/ha24.png">
							<p>Đại sảnh</p>
						</div>
						<div class="left">
							<img src="<?php echo get_template_directory_uri();?>/images/ha25.png">
							<p>Quầy thu ngân</p>
						</div>
					</div>
					<div class="item clearfix">
						<div class="left">
							<img src="<?php echo get_template_directory_uri();?>/images/ha26.png">
							<p>Phòng thuốc</p>
						</div>
						<div class="left">
							<img src="<?php echo get_template_directory_uri();?>/images/ha27.png">
							<p>Tầng 3 Phòng khám</p>
						</div>
					</div>
				</div>
				
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>