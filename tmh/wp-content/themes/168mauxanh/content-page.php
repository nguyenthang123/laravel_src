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
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php if(get_the_ID() == 5):?>
			<div>
				<a class="ban-do-link" href="https://www.google.com/maps/place/709+Gi%E1%BA%A3i+Ph%C3%B3ng,+Ph%C6%B0%C6%A1ng+Li%E1%BB%87t,+Ho%C3%A0ng+Mai,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@20.9882499,105.8392649,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac68872a10b3:0x11262d14a485b4df!8m2!3d20.9882499!4d105.8414536">
				<img src="<?php echo get_template_directory_uri();?>/images/mapsdesktop.png"></a>
			</div>
		<?php endif;?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
