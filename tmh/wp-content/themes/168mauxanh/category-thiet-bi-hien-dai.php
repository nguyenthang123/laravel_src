<?php
if(deviceType=='phone'){
    require_once('m_archive.php');
}else{?>
<?php
get_header(); ?>
	<div id="primary" class="content-area thiet-bi-hien-dai">
		<main id="main" class="site-main" role="main">
			<div class="container clearfix">
				<!-- left sidebar -->
				<?php get_sidebar('left');?>
				<!-- end -->
				<div class="left main-content">
					<h1><?php echo single_cat_title();?></h1>
					<?php 
					if ( have_posts() ) :$mark = 0;$chan_le = 0;
						while ( have_posts() ) : the_post();$mark ++;$chan_le++;?>
							<?php if($mark == 1):?>
							<div class="item clearfix">
							<?php endif;?>
								<div class="left">
									<a title="<?php the_title();?>" class="img-thiet-bi" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?> </a>
									<a title="<?php the_title();?>" class="title" href="<?php the_permalink(); ?>"><?php the_title();?></a>
								</div>
							<?php if($mark == 2):$mark = 0;?>
							</div>
							<?php endif;?>
						<?php 
						endwhile;
					endif;
					if($chan_le%2 == 1)
						echo '</div>';
					?>
					<div class="pagination clearfix">
						<?php wp_pagenavi(); ?>
					</div>
				</div>
				
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
<?php }?>