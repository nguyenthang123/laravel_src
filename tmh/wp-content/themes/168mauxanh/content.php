
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="ho-tro">
		<a class="nut-tu-van" title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>">Nhấn nút tư vấn</a>
		<a class="nut-lay-so" title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>">Đăng ký lấy số</a>
		<span>
			Điện thoại :
			<a class="phone-1" title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>"><?= phone1;?></a> -
			<a class="phone-1" title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>"><?= phone2;?></a>
		</span>
	</div>
	<div class="entry-content">
		<?php
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
		?>
	</div>
	<footer class="entry-footer">
		<p><strong>Qua mạng:</strong><a href="<?= link_tuvan;?>" style="color:red;font-weight:bold;"> CLICK TƯ VẤN TRỰC TIẾP </a></p>
		<p>
			<strong>Qua số điện thoại:</strong>
			<a href="<?= link_tuvan;?>" style="color:red;font-weight:bold;"><?= phone1;?></a> -
			<a href="<?= link_tuvan;?>" style="color:red;font-weight:bold;"><?= phone2;?></a>
		</p>
		<p><strong>Hoặc đến trực tiếp địa chỉ:</strong><a href="https://www.google.com/maps/place/Ph%C3%B2ng+Kh%C3%A1m+%C4%90a+Khoa+168+H%C3%A0+N%E1%BB%99i/@20.9395622,105.842115,16.75z/data=!4m5!3m4!1s0x3135ad96163b2d43:0xf38bf1e69bcc4a2c!8m2!3d20.937455!4d105.845222" style="color:red;font-weight:bold;"> 709 Giải Phóng - Hoàng Mai - Hà Nội.</a></p>
		<p><strong>Phòng khám làm việc tất cả các ngày trong tuần, <strong style="color:red;">bao gồm cả ngày lễ.</strong></strong></p>
	</footer>
</article>
<div class="post-link">
	<ul>
		
	</ul>
</div>
<div class="no-content">
	<a href="<?= link_tuvan;?>">Không có nội dung bạn cần , hãy tư vấn trực tiếp với bác sĩ >>>>></a>
</div>
<div class="icon-single clearfix">
	<div class="left">
		<a title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/single-icon-1.png"></a>
	</div>
	<div class="left">
		<a title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/single-icon-2.png"></a>
	</div>
	<div class="left">
		<a title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/single-icon-3.png"></a>
	</div>
</div>

<div class="list-post-quan-tam">
	<h3>Bài viết được nhiều người quan tâm</h3>
	<div class="clearfix">
		<div class="left left50">
			<ul>
				<?php
					$categories = get_the_category();
					$args = array('posts_per_page' => 10, 'offset'=> 0, 'category' => $categories[0]->term_id,'post__not_in'=>[get_the_ID()]);
					$myposts = get_posts( $args );
					$mark = 0;
					foreach ( $myposts as $post ) : setup_postdata( $post ); $mark++; ?>
						<?php if($mark == 6) break;?>
						<li class="clearfix"><span>-</span><h4><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></li>
					<?php endforeach; 
				?>
			</ul>
		</div>
		<div class="left left50">
			<ul>
				<?php
					$mark = 0;
					foreach ( $myposts as $post ) : setup_postdata( $post ); $mark++; ?>
						<?php if($mark < 6) continue;?>
						<li class="clearfix"><span>-</span><h4><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></li>
					<?php endforeach; 
					wp_reset_postdata();
				?>
			</ul>
		</div>
	</div>
</div>
