<?php
if($detect->isMobile()){
    require_once('mobie/m_single.php');
}else{?>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hoi_Nach
 */

get_header(); ?>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="nd_ct_1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tt_ct_1">
                                <center><a target="_blank" href="<?php the_permalink() ?>"> <h4><?php the_title() ?> </h4></a></center>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-center">
                                <a target="_blank" href="<?php echo NUMBER_PHONE1 ?>">
                                            <span class="btn-3 btn-block hvr-float-shadow">
                                                <i class="fa fa-calendar-check-o"></i> Có thắc mắc hỏi bác sĩ</span>
                                </a>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-center">
                                <a target="_blank" href="<?php echo LINK_CONTACT ?>">
                                            <span class="btn-4  btn-block hvr-float-shadow">
                                                <i class="fa fa-user"></i> Đã đọc xong cần tư vấn</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-post">
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                    <div class="after">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="af1">
                                    <p class="text-center">

												<span class="text-center color1">
													<i class="fa fa-map-marker hidden-xs"></i>
                                                    <span class="visible-xs">Địa chỉ : </span>
													<span class="d-none d-md-inline"><?php echo ADDRESS ?></span>
													<i class="fa fa-phone hidden-xs"></i>
                                                    <span class="visible-xs">Liên hệ : </span>
													<span><?php echo NUMBER_PHONE1 ?>
                                                        - <?php echo NUMBER_PHONE2 ?></span>
												</span> <br>
                                        Phòng khám làm việc tất cả các ngày trong tuần, bao gồm cả ngày lễ.
                                        <br>
                                        <small>(Chúc bệnh nhân mau chóng hồi phục)</small>
                                        <br>
                                        <a target="_blank" href="<?php echo LINK_CONTACT ?>">Click tư vấn trực tiếp</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row hidden-xs">
                            <div class="col-md-6">
                                <p class="text-center">
                                    <a target="_blank" href="<?php echo LINK_CONTACT ?>">
                                            <span class="btn-3 btn-block hvr-float-shadow">
                                                <i class="fa fa-calendar-check-o"></i> Có thắc mắc hỏi bác sĩ</span>
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-center">
                                    <a target="_blank" href="<?php echo LINK_CONTACT ?>">
                                            <span class="btn-4  btn-block hvr-float-shadow">
                                                <i class="fa fa-user"></i> Đã đọc xong cần tư vấn</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="visible-xs">
                                <p class="text-center"><span class="ptitle">Bài viết liên quan</span></p>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <?php
                                    $f = 0;
                                    $like_posts = new WP_Query(array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'orderby' => 'ID',
                                        'order' => 'DESC',
                                        'posts_per_page' => 10
                                    ));
                                    ?>
                                    <?php while ($like_posts->have_posts()) : $like_posts->the_post(); ?>
                                        <li><h3 class="h3af"><a target="_blank"
                                                        href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
                                        </li>
                                        <?php
                                        $f += 1;
                                        if ($f == 5) {
                                            echo '</ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <ul>';
                                        }

                                        ?>
                                    <?php endwhile;
                                    wp_reset_query(); ?>
                                </ul>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
<?php
get_sidebar();
get_footer();
?>
<?php } ?>