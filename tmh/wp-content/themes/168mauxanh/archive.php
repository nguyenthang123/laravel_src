<?php
$cat = get_query_var('cat');
$cat_parent = [2,3,4];

$cat_children = [];
foreach ($cat_parent as $key => $value) {
	$categories = get_categories( array(
	    'hide_empty' => 0,
	    'parent'  => $value,
	));
	foreach ( $categories as $category ) {
	    $cat_children[] = $category->term_id;
	}
}

if(in_array($cat,$cat_parent)){
	get_template_part('category','parent');
	die;
}elseif(in_array($cat,$cat_children) || $cat == 28){
	get_template_part('category','children');
	die;
}elseif($cat == 29 || $cat == 41 || $cat == 43){
	get_template_part('category','ky-thuat-chuyen-nghiep');
	die;
}elseif($cat == 30 || $cat == 42){
	get_template_part('category','thiet-bi-hien-dai');
	die;
}
get_header(); ?>
	<div id="primary" class="content-area archive">
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
											<?php echo wp_trim_words( get_the_excerpt(), 100 );?>
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
	</div>
<?php 
get_footer();
?>
