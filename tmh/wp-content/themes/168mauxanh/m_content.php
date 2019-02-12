<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		//twentyfifteen_post_thumbnail();
	?>
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->
	<div class="entry-content">
	<?php if(is_archive()):?>
		<p class="description">
			<?php echo wp_trim_words(get_the_content(),30);?>
			<a href="<?php echo get_permalink();?>" class="xem-them">[ Chi tiết ]</a>
		</p>
		<div class="row">
			<a class="right" href="<?php echo get_permalink();?>">[ <span>Xem đầy đủ</span> ]</a>
		</div>
	<?php endif;?>
	<?php if(is_single()):?>
		<div class="content-single">
			<?php the_content();?>
		</div>
		<div class="img-adv">
			<div class="row">
				<div class="w30">
					<div class="bg1">
						<a href="<?= link_tuvan;?>">Tư vấn</a>
					</div>
				</div>
				<div class="w70">
					<div class="bg2">
						<a href="<?= rewrite_number_phone(phone1);?>">Số điện thoại ： <?= phone1;?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="post-link">
			<ul>
				
			</ul>
		</div>
		<div class="list-post-quan-tam">
			<div class="tieu-de style1">
				<h2><a>Bạn đọc lên quan tâm.</a></h2>
			</div>
			<div class="row">
				<div class="">
					<ul>
						<?php
							$categories = get_the_category();
							$args = array('posts_per_page' => 6, 'offset'=> 0, 'category' => $categories[0]->term_id,'post__not_in'=>[get_the_ID()]);
							$myposts = get_posts( $args );
							$mark = 0;
							foreach ( $myposts as $post ) : setup_postdata( $post ); $mark++; ?>
								<?php if($mark == 6) break;?>
								<li class="row">
									<span><img src="<?php echo get_template_directory_uri();?>/css/images/icon-next.png"></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endforeach; 
						?>
					</ul>
				</div>
			</div>
		</div>
	<?php endif;?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
