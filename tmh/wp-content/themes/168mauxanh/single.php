<?php
if(deviceType=='phone'){
require_once('m_single.php');
}else{
?>
<?php
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container clearfix">
				<div class="left main-content">
					<div class="crub">
						<span class="vi-tri">Vị trí hiện tại:</span>
						<?php if(function_exists('bcn_display'))
						    {
						        //bcn_display();
						    }

						?>
						<a href="<?php echo home_url();?>">Trang chủ ></a>
						<?php $categories = get_the_category();?>
						<?php echo get_category_parents($categories[0]->term_id,true,' > ' );?>
					</div>
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					// End the loop.
					endwhile;
					?>
				</div>
				<?php get_sidebar('right'); ?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
<?php }?>