<?php
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row tai-mui-hong">
				<div class="w33">
					<div class="mui">
						<h2><a href="<?php echo get_category_link(2);?>">Bệnh về mũi</a></h2>
					</div>
				</div>
				<div class="w33">
					<div class="tai">
						<h2><a href="<?php echo get_category_link(3);?>">Bệnh về tai</a></h2>
					</div>
				</div>
				<div class="w33">
					<div class="hong">
						<h2><a href="<?php echo get_category_link(4);?>">Bệnh về họng</a></h2>
					</div>
				</div>
			</div>
			<div class="crud">
				<a href="<?php echo home_url();?>">Trang chủ ></a>
				<?php $categories = get_the_category();?>
				<?php echo get_category_parents($categories[0]->term_id,true,' > ' );?>
			</div>
		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'm_content', get_post_format() );
			endwhile;
		?>
		</main>
	</div>
<?php get_footer(); ?>
