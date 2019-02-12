<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' );?>
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
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>	
		<?php if(get_the_ID() == 5):?>
			<div>
				<!-- <img src="<?php //echo get_template_directory_uri();?>/css/images/mapsmobile.png"> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.111079979727!2d105.83896731548593!3d20.988183986020303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac688733b5bd%3A0x8e25d03b43b2f04f!2zNzA5IEdp4bqjaSBQaMOzbmcsIFBoxrDGoW5nIExp4buHdCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1483496300089" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		<?php endif;?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<div class="img-adv">
	<div class="row">
		<div class="w30">
			<div class="bg1">
				<a href="<?= link_tuvan;?>">Tư vấn</a>
			</div>
		</div>
		<div class="w70">
			<div class="bg2">
				<a href="<?= rewrite_number_phone(phone1);?>">Số điện thoại ： <?= phone?></a>
			</div>
		</div>
	</div>
</div>
