<?php
get_header(); ?>
	<div id="primary" class="content-area category-children">
		<main id="main" class="site-main" role="main">
			<div class="container clearfix">
				<div class="left main-content">
					<div class="crub">
						<span class="vi-tri">Vị trí hiện tại:</span>
						<?php if(function_exists('bcn_display'))
						    {
						        bcn_display();
						    }
						?>
					</div>
					<div class="trieu-chung-children2">
						<div class="list-trieu-trung clearfix">
							<div class="left">
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-trieu-trung-icon.png"></a>
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Triệu trứng</a>
							</div>
							<div class="left">
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-nguy-hai-icon.png"></a>
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Nguy hại</a>
							</div>
							<div class="left">
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-kiem-tra-icon.png"></a>
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Kiểm tra</a>
							</div>
							<div class="left">
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-dieu-tri-icon.png"></a>
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Điều trị</a>
							</div>
							<div class="left">
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-benh-vien-icon.png"></a>
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Phòng khám</a>
							</div>
							<div class="left">
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-chi-phi-icon.png"></a>
								<a title="Gặp tư vấn trực tiếp 7h-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Chi phí</a>
							</div>
						</div>
					</div>
					<?php if ( have_posts() ) : ?>
						<?php 
							while ( have_posts() ) : the_post();?>
								<div class="item clearfix">
									<h2>
										<span><img src="<?php echo get_template_directory_uri();?>/images/children-icon.png"></span>
										<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<p>
										<?php echo wp_trim_words( get_the_excerpt(), 100 );?>
										<a title="Xem thêm" href="<?php the_permalink(); ?>" class="view-more-2">[Đọc toàn bộ]</a>
									</p>
									<div class="right read-tu-van">
										<a title="Xem thêm" class="read-all" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/read-all.png"></a>
										<a title="Gặp tư vấn trực tiếp 7h-22h" class="tu-van-online" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/tuvan-online.png"></a>
									</div>
								</div>
							<?php 
							endwhile;
						?>
					<?php endif;?>
					<div class="pagination clearfix">
						<?php wp_pagenavi(); ?>
					</div>	
				</div>
				<!-- left sidebar -->
				<?php get_sidebar('right');?>
				<!-- end -->
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>