<?php
get_header(); ?>
	<section id="primary" class="content-area">
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
			<div class="benh">
				<div class="row row1">
					<div class="tieu-de">
						<i class="fa fa-play-circle left" aria-hidden="true"></i><h2><a href="<?php echo get_category_link($cat);?>"><?php echo get_cat_name($cat);?></a></h2>
						<p class="right"><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tìm hiểu chi tiết</a></p>
					</div>
				</div>
			</div>
			<?php
				$array_cat_benh = [2,3,4];$array_cat_child = [];
				foreach ($array_cat_benh as $key => $value):
					$args = ['child_of' => $value,'hide_empty' => FALSE,'parent' => $value];
						$child_cats = get_categories($args); 
						foreach ($child_cats as $category):
							$array_cat_child[] = $category->term_id;
						endforeach;
				endforeach;
			?>
			<div class="trieu-chung2">
			<?php if(in_array($cat,$array_cat_child)):?>
				<div class="row">
					<div class="w33">
						<div class="trieu-trung">
							<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Triệu chứng</a>
						</div>
					</div>
					<div class="w33">
						<div class="nguyen-nhan">
							<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Nguyên nhân</a>
						</div>
					</div>
					<div class="w33">
						<div class="nguy-hai">
							<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Nguy hại</a>
						</div>
					</div>
					<div class="w33">
						<div class="dieu-tri">
							<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Điều trị</a>
						</div>
					</div>
					<div class="w33">
						<div class="chi-phi">
							<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Chi phí</a>
						</div>
					</div>
					<div class="w33">
						<div class="kiem-tra">
							<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Kiểm tra</a>
						</div>
					</div>
				</div>
			<?php endif;?>
			</div>
			<?php 
				if (have_posts()) :
					while (have_posts()) : the_post();?>
						<div class="border">
						<?php get_template_part('content',get_post_format());?>
						</div>
					<?php
					endwhile;
				endif;
			?>
		<div class="row my_pagination">
			<?php wp_pagenavi(); ?>
		</div>
		<div class="img-adv">
				<div class="row">
					<div class="w30">
						<div class="bg1">
							<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tư vấn</a>
						</div>
					</div>
					<div class="w70">
						<div class="bg2">
							<a href="tel:(043) 393 88 99">Số điện thoại ： 043 393 8899</a>
						</div>
					</div>
				</div>
			</div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
