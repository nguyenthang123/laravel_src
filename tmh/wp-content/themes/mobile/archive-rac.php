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
						<?php 
							$childCat = get_category($cat);
							$parentCat = get_category($childCat->parent);
							if($parentCat->term_id != 0){
								$parentid = $parentCat->term_id;
							}else
							{
								$parentid = $cat;
							}
						?>
						<i class="fa fa-play-circle left" aria-hidden="true"></i><h2><a href="<?php echo get_category_link($parentid);?>"><?php echo get_cat_name($parentid);?></a></h2>
						<p class="right"><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tìm hiểu chi tiết</a></p>
					</div>
				</div>
			</div>
			<div class="table">
				<table>
					<?php 
						$args = ['child_of' => $parentid,'hide_empty' => FALSE,'parent' => $parentid];
						$child_cats = get_categories($args); 
						if($child_cats):
						$i = 0;
						foreach ($child_cats as $category):
							$i++;
							if($category->term_id == $cat):
								$active = 'class="active"';
							else:
								$active = '';
							endif;
							if($i==1):
								echo '<tr>';
							endif;	
							echo '<td '.$active.'><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></td>';
							if($i==4):
								echo '</tr>';
								$i = 0;
							endif;	
						endforeach;
						endif;
					?>
				</table>
			</div>
			<div class="trieu-chung">
				<div class="row">
					<div class="w20">
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/css/images/archive-1.png"></a>
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Triệu chứng</a>
					</div>
					<div class="w20">
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/css/images/archive-2.png"></a>
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Nguy hại</a>
					</div>
					<div class="w20">
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/css/images/archive-3.png"></a>
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Nguyên nhân</a>
					</div>
					<div class="w20">
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/css/images/archive-4.png"></a>
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Điều trị</a>
					</div>
					<div class="w20">
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/css/images/archive-5.png"></a>
						<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Chi phí</a>
					</div>
				</div>
			</div>
			<?php 
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
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
