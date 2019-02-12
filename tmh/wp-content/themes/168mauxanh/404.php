<?php
/*header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));*/
exit('lỗi 404');
?>
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container clearfix">
				<?php get_sidebar('left'); ?>
				<div class="right main-content">
					<section class="error-404 not-found">
						<header class="page-header">
							<label>Không tìm thấy nội dung. Sử dụng thanh tìm kiếm nội dung bên dưới .</label>
						</header>
						<div class="page-content">
							<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
								<div class="clearfix">
									<div class="search">
											<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
											<button type="submit">Tìm kiếm</button>
									</div>
								</div>
								<p class="search-add"></p>
								<div class="form-group">
									<label for="exampleInputName2">Bệnh quan tâm</label>
									<select class="form-control"  name="category_name">
										<optgroup label="Bệnh về mũi">
											<?php
												// generate list of categories
												$categories = get_categories(['child_of' => 2,'hide_empty' => FALSE,'parent' => 2]);
												foreach ($categories as $category) {
													if($category->term_id == 10) continue;
													echo '<option value="'.$category->slug.'">'.$category->name."</option>";
												}
											?>
										</optgroup>
										<optgroup label="Bệnh về tai">
											<?php
												// generate list of categories
												$categories = get_categories(['child_of' => 3,'hide_empty' => FALSE,'parent' => 3]);
												foreach ($categories as $category) {
													if($category->term_id == 19) continue;
													echo '<option value="'.$category->slug.'">'.$category->name."</option>";
												}
											?>
										</optgroup>
										<optgroup label="Bệnh về họng">
											<?php
												// generate list of categories
												$categories = get_categories(['child_of' => 4,'hide_empty' => FALSE,'parent' => 4]);
												foreach ($categories as $category) {
													if($category->term_id == 27) continue;
													echo '<option value="'.$category->slug.'">'.$category->name."</option>";
												}
											?>
										</optgroup>
									</select>
								</div>
							</form>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
				
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	<?php get_template_part( 'adv', 'left' ); ?>
<?php get_footer(); ?>
