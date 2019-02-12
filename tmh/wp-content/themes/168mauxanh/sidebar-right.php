<div class="left sidebar sidebar-right">
	<div class="tu-van-sidebar clearfix">
		<span class="txt mau-xanh">Kênh tư vấn</span>
		<div class="clearfix icon-tuvan">
			<div class="left">
				<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-chat.png"></a>
				<a href="<?= link_tuvan;?>">Bác sĩ <br> tư vấn</a>
			</div>
			<div class="left">
				<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-person.png"></a>
				<a href="<?= link_tuvan;?>">Đặt lịch <br> thăm khám</a>
			</div>
			<div class="left">
				<a href="<?= link_skype;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-skype.png"></a>
				<a href="<?= link_skype;?>">Skype <br> tư vấn</a>
			</div>
		</div>
		<div class="clearfix icon-tuvan">
			<div class="left">
				<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-uu-dai.png"></a>
				<a href="<?= link_tuvan;?>">Ưu đãi <br> tư vấn</a>
			</div>
			<div class="left">
				<a href="<?= link_facebook;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-face.png"></a>
				<a href="<?= link_facebook;?>">Liên hệ <br> facebook</a>
			</div>
			<div class="left">
				<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-dia-chi.png"></a>
				<a href="<?= link_tuvan;?>">Địa chỉ <br> phòng khám</a>
			</div>
		</div>
		<div class="icon-call">
			<a href="tel:(043) 376 88 99"><img src="<?php echo get_template_directory_uri();?>/images/icon-call.png"></a>
		</div>
	</div>
	<div class="ky-thuat-chuyen-nghiep" style="display: none;">
		<a href="<?php echo get_category_link(29);?>"><span class="txt mau-xanh">Kỹ thuật chuyên nghiệp</span></a>
		<?php
			$args = array('offset'=> 0, 'category' => 29 );
			$myposts = get_posts( $args );
			$mark = 0;
			foreach ( $myposts as $post ) : setup_postdata( $post ); $mark++; ?>
				<?php 
					if($mark > 1) break;
				?>
				<div class="nguyen-nhan">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?> </a>
					<p>
						<span class="bg"></span>
						<a class="txt"><?php echo wp_trim_words(get_the_title(),8);?></a>
					</p>
				</div>
			<?php endforeach; 
		?>
		<ul class="list">
			<?php 
				$mark = 0;
				foreach ( $myposts as $post ) : setup_postdata( $post ); $mark++; ?>
					<?php 
						if($mark == 1) continue;
					?>
					<li>
						<?php if($mark%2 == 0):?>
							<span class="vong-tron"><img src="<?php echo get_template_directory_uri();?>/images/color-xanh.png"></span>
						<?php else:?>
							<span class="vong-tron"><img src="<?php echo get_template_directory_uri();?>/images/color-cam.png"></span>
						<?php endif;?>
						<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(),8);?></a>
					</li>
				<?php endforeach; 
			?>
		</ul>
		<div>
			<div class="tu-van-xem-them">
				<a class="tuvan" href="<?= link_tuvan;?>">Tư vấn</a>
				<a class="xemthem" href="<?php echo get_category_link(29);?>">Xem thêm</a>
			</div>
		</div>
	</div>
	<div class="ky-thuat-chuyen-nghiep style2 clearfix">
		<a href="<?php echo get_category_link(29);?>"><span class="txt mau-xanh">Kỹ thuật chuyên nghiệp</span></a>
		<a href="<?php echo get_category_link(29);?>"><img src="<?php echo get_template_directory_uri();?>/images/img-ktch-2.png"></a>
		<div>
		<?php
			$args = array('offset'=> 1, 'category' => 29 ,'posts_per_page'=>6);
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post );?>
				<div class="ky-thuat-article">
					<h4><a title="<?php echo get_the_title();?>" class="txt" href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a><h4>
				</div>
			<?php endforeach; 
		?>
		</div>
	</div>
	<div class="thiet-bi-sidebar">
		<a href="<?php echo get_category_link(30);?>"><span class="txt mau-xanh">Thiết bị hiện đại</span></a>
		<div class="thiet-bi-img zj">
			<div class="left zj_list">
				<ul class="zj_1">
					<?php
						$args = array( 'offset'=> 0, 'category' => 30 ,'posts_per_page'=>100);
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<li><h4>
								<a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail();?> 
								<span><?php the_title(); ?></span>
								</a></h4>
							</li>
						<?php endforeach; 
						wp_reset_postdata();
					?>
                </ul>
				<a class="prev" href="javascript:void(0);"></a>
				<a class="next" href="javascript:void(0);"></a>
			</div>
		</div>
	</div>
	
	<div class="ban-do-lien-he">
		<span class="txt mau-xanh">Bản đồ liên hệ</span>
		<div class="ban-do">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.111079979727!2d105.83896731548593!3d20.988183986020303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac688733b5bd%3A0x8e25d03b43b2f04f!2zNzA5IEdp4bqjaSBQaMOzbmcsIFBoxrDGoW5nIExp4buHdCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1483496300089" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<a class="ban-do-link" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.111079979727!2d105.83896731548593!3d20.988183986020303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac688733b5bd%3A0x8e25d03b43b2f04f!2zNzA5IEdp4bqjaSBQaMOzbmcsIFBoxrDGoW5nIExp4buHdCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1483496300089">709 Giải Phóng - Hoàng Mai - Hà Nội</a>
	</div>
</div>
