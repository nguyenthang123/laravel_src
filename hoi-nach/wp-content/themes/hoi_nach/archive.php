<?php
if($detect->isMobile()){
    require_once('mobie/m_archive.php');
}else{?>
<?php
get_header();
$curr = get_queried_object();
?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="nd_ct_1">
                <div class="tt_ct_1">
                    <a href="<?php echo get_category_link($curr->id) ?>"> <h4>Trang chủ / <?php echo single_cat_title(); ?></h4></a>
                </div>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                if(is_category()){
                    $posts = new WP_Query(array(
                        'post_type'=>'post',
                        'post_status'=>'publish',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                        'paged' => $paged,
                        'posts_per_page' => 8,
                        'cat' => $curr->term_id
                    ));
                }
                if(is_tag()){
                    $posts = new WP_Query(array(
                        'post_type'=>'post',
                        'post_status'=>'publish',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                        'paged' => $paged,
                        'posts_per_page' => 8,
                        'tag' => $curr->term_id
                    ));
                }
                $f = 1;
                ?>
                <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                    <div class="row ct_hai">
                        <div class="col-md-3">
                            <a target="_blank" href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url()?>" class="img-responsive res2" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <div class="tt_col_9">
                                <a target="_blank" href="<?php the_permalink() ?>" class="post-title"> <?php the_title()?> </a>
                            </div>
                            <div class="ct_col_9">
                                <?php the_excerpt() ?>
                            </div>
                            <a target="_blank" href="<?php the_permalink() ?>" class="more float-left"> Xem thêm </a>

                        </div>
                    </div>
                    <?php
                    $f += 1;
                endwhile;
                wp_reset_query();
                ?>
                <br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>
            </div>
        </div>
<?php
get_sidebar();
get_footer();
 ?>
<?php  }?>