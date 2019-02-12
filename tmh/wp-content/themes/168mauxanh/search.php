<?php
get_header(); ?>
	<div id="primary" class="content-area archive">
		<main id="main" class="site-main" role="main">
			<div class="container clearfix">
				<!-- left sidebar -->
				<?php get_sidebar('left');?>
				<!-- end -->
				<div class="left main-content">
					<h2><?php printf( __( 'Kết quả tìm kiếm về : %s', 'twentyfourteen' ), get_search_query() ); ?></h2>
					<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();?>
							<div class="item clearfix">
								<h2>
									<span><img src="<?php echo get_template_directory_uri();?>/images/children-icon.png"></span>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<div>
									<div class="left img-article">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
									</div>
									<div class="left detai-article">
										<p>
											<?php echo wp_trim_words( get_the_excerpt(), 100 );?>
											<a href="<?php the_permalink(); ?>" class="view-more-2">[Đọc toàn bộ]</a>
										</p>
										<div class="right read-tu-van">
											<a class="read-all" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/read-all.png"></a>
											<a class="tu-van-online" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/tuvan-online.png"></a>
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
