<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hoi_Nach
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center><img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt=""></center>
        </div>
    </div>
</div>
    <script language="javascript">
        setTimeout(function(){location.href="<?php echo home_url() ?>"} , 3000);
    </script>
<?php
get_footer();
