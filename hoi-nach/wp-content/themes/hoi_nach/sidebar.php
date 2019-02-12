<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hoi_Nach
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
        <div class="col-md-3">
    <div class="nd_col_3">
        <img  alt="First slide" src="http://phongkhamgiaiphong.com/namkhoa/public/frontend/images/tienliettuyen/slide1.jpg" style="width: 100%">
    </div>
    <div class="nd_col_3_hai">
        <div class="tt_col_3_hai"> <center>Triệu chứng thường gặp của bệnh hôi nách  </center></div>
        <div class="list_noidung">
            <ul>
                <?php
                        $posts = new WP_Query(array(
                            'post_type'=>'post',
                            'post_status'=>'publish',
                            'orderby' => 'ID',
                            'order' => 'DESC',
                            'posts_per_page' => 5
                        ));
                        $f = 1;
                ?>
                <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                <li>
                    <span class="so"><?php echo $f; ?></span><span class="text"><a target="_blank" href="<?php the_permalink() ?>"><?php the_title() ?></a></span>
                </li>
                <?php
                            $f += 1;
                    endwhile;
                    wp_reset_query();
                ?>
            </ul>
        </div>
    </div>
    <div class="nd_home3_hai hidden-xs">
        <div class="tt_trai_3"> Tư vấn  <span class="orages">  Trực tuyến  </span> </div>
        <div class="nd_hai_col3">
            <a target="_blank" href="https://www.facebook.com/phongkhamdakhoagiaiphong/">
                <div class="nd1 hvr-grow">
                    <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.png" alt="">
                    <span class="text_col_3">Tư vấn qua Facebook </span>
                </div>
            </a>
            <a target="_blank" href="skype:phongkhamdakhoagiaiphong@gmail.com?chat">
                <div class="nd1 hvr-grow">
                                    <span> <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/skyper.png"
                                                alt=""></span>
                    <span class="text_col_3">Tư vấn qua Skyper </span>
                </div>
            </a>
            <a target="_blank" href="<?php echo LINK_CONTACT; ?>">
                <div class="nd1 hvr-grow">
                    <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/mess.png"
                            alt="">
                    <span class="text_col_3">Tư vấn Trực Tuyến </span>
                </div>
            </a>
            <a target="_blank" href="<?php echo LINK_CONTACT; ?>">
                <div class="nd4 hvr-grow">
                    <img class="clock"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.png"
                         alt="">
                    <div class="khoi2_div">
                        <div class="text1">Thời gian làm việc</div>
                        <div class="text2">8h00 - 20h00</div>
                        <i class="text3"> ( Các ngày trong tuần ) </i>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>
    </div>
</div>
<br>