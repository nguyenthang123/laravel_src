<?php
if(deviceType=='phone'){
    require_once('m_page.php');
}else{?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container clearfix">
			<?php get_sidebar('left'); ?>
			<div class="left main-content">
				<div class="crub">
					<span class="vi-tri">Vị trí hiện tại:</span>
					<?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }
					?>
				</div>
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );
				endwhile;
				?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
<?php }?>