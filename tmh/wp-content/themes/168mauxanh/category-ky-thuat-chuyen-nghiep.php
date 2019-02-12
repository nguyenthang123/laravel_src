<?php
if(deviceType=='phone'){
    require_once('m_archive.php');
}else{?>
    <?php get_header(); ?>
	<div id="primary" class="content-area category-top">
		<main id="main" class="site-main" role="main">
			<div class="container clearfix">
				<!-- left sidebar -->
				<?php get_sidebar('left');?>
				<!-- end -->
				<div class="left main-content">
					<h1><?php echo single_cat_title();?></h1>
					<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();?>
							<div class="item clearfix">
								<h2>
									<span><img src="<?php echo get_template_directory_uri();?>/images/children-icon.png"></span>
									<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<div>
									<div class="left img-article">
										<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
									</div>
									<div class="left detai-article">
										<p>
											<?php if($cat == 41):?>
											<?php echo wp_trim_words( get_the_excerpt(), 40 );?>
											<?php else:?>
											<?php echo get_limit_words( get_the_excerpt(), 540 );?>
											<?php endif;?>
											<a title="Xem thêm" href="<?php the_permalink(); ?>" class="view-more-2">[Đọc toàn bộ]</a>
										</p>
										<div class="right read-tu-van">
											<a title="Xem thêm" class="read-all" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/read-all.png"></a>
											<a title="Gặp tư vấn trực tiếp 7h-22h" class="tu-van-online" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/tuvan-online.png"></a>
										</div>
									</div>
								</div>
							</div>
						<?php 
						endwhile;
					endif;
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