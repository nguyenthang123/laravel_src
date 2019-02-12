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
						<i class="fa fa-play-circle left" aria-hidden="true"></i><h2><a href="<?php echo get_category_link(4);?>"><?php echo get_cat_name(4);?></a></h2>
						<p class="right"><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tìm hiểu chi tiết</a></p>
					</div>
				</div>
			</div>
			<div class="table">
				<div class="tab-link">
					<table>
						<tr>
							<td class="active" data-tab-id="20"><?php echo get_cat_name(20);?></td>
							<td data-tab-id="21"><?php echo get_cat_name(21);?></td>
							<td data-tab-id="22"><?php echo get_cat_name(22);?></td>
							<td data-tab-id="25"><?php echo get_cat_name(25);?></td>
						</tr>
						<tr>
							<td data-tab-id="24"><?php echo get_cat_name(24);?></td>
							<td data-tab-id="23"><?php echo get_cat_name(23);?></td>
							<td data-tab-id="26"><?php echo get_cat_name(26);?></td>
							<td data-tab-id="84"><?php echo get_cat_name(84);?></td>
						</tr>
					</table>
				</div>
			</div>
			<?php $benh = [20,21,22,25,24,23,26,84];?>
			<?php foreach ($benh as $key => $value): ?>
			<div data-tab-content="<?php echo $value;?>" class="tab-content <?php echo $key == 0 ? 'active' : '';?>">
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
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$args = array( 'posts_per_page' => 6, 'cat' => $value ,'paged'=>$paged,'orderby'=>'id','order' =>'asc');
					$my_query = new WP_Query( $args );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );?>
						<div class="border">
							<?php get_template_part( 'content', get_post_format() );?>
						</div>
						<?php
					endforeach; 
				?>
				<div class="row my_pagination">
					<?php wp_pagenavi( array('query' => $my_query) ); ?>
				</div>
			</div>
			<?php endforeach ?>
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
