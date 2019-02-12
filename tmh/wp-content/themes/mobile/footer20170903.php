        <div class="vi-du-hoi-phuc global-3">
                <div class="tieu-de style1">
                    <h2><a href="<?php echo get_category_link(41);?>">VÍ DỤ HỒI PHỤC</a></h2>
                </div>
                <div class="row flex flex-wrap">
                    <?php
                        $args = array('posts_per_page' => 6, 'offset'=> 0, 'category' => 41);
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <div class="w50">
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </div>
                            <?php 
                            endforeach; 
                        wp_reset_postdata();
                    ?>
                </div>
        </div>
        <div class="img-adv">
            <div class="row" style="display: none;">
                <a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/css/images/img-1.png"></a>
            </div>
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
        <div class="thiet-bi-benh-vien">
            <div class="tieu-de style1">
                <h2><a href="<?php echo get_category_link(30);?>">Thiết bị bệnh viện</a></h2>
            </div>
            <div class="row">
                <?php
                    //$args = array('offset'=> 0,'category' => 30);
                    //$myposts = get_posts( $args );
                    //foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <!-- <div class="w50"> -->
                            <!-- <a href="<?php //the_permalink(); ?>"><?php //the_post_thumbnail();?></a> -->
                            <!-- <a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a> -->
                        <!-- </div> -->
                    <?php //endforeach; 
                    //wp_reset_postdata();
                ?>
                <div class="row">
                    <div class="w50">
                        <a href="<?php echo get_permalink(186);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/maymoc-1.png"></a>
                    </div>
                    <div class="w50">
                        <a href="<?php echo get_permalink(192);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/maymoc-2.png"></a>
                    </div>
                    <div class="w50">
                        <a href="<?php echo get_permalink(213);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/maymoc-3.png"></a>
                    </div>
                    <div class="w50">
                        <a href="<?php echo get_permalink(203);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/maymoc-4.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-adv">
            <div class="row">
                <a href="<?php echo get_category_link(30);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/img-2.png"></a>
            </div>
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
	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer footer" role="contentinfo">
		<div class="site-info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 footer">
                        <h2>phòng khám đa khoa Giải Phóng hà nội</h2>
                        <h3 class="khoataimuihong">Chuyên Khoa Tai Mũi Họng</h3>
                        <h4 class="address">
                            <a title="Google maps địa chỉ Phòng khám giải phóng Hà Nội" href="https://www.google.com/maps/place/Ph%C3%B2ng+Kh%C3%A1m+%C4%90a+Khoa+168+H%C3%A0+N%E1%BB%99i/@20.9395622,105.842115,16.75z/data=!4m5!3m4!1s0x3135ad96163b2d43:0xf38bf1e69bcc4a2c!8m2!3d20.937455!4d105.845222">709 - Giải Phóng - Hoàng Mai - Hà Nội</a>
                        </h4>
                        <p>
                            Số điện thoại tư vấn :
                            <a title="Gặp tư vấn trực tiếp 7h-22h" href="<?= rewrite_number_phone(phone1);?>"><?= phone1;?></a>
                        </p>
                    </div>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
	<div class="footer-bottom" id="footer-bottom">
        <div class="row">
            <div class="w33 comment">
                <a title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>"><i class="fa fa-comments" aria-hidden="true"></i>tư vấn</a>
            </div>
            <div class="w33 phone">
                <a title="" href="<?= rewrite_number_phone(phone1);?>"><i class="fa fa-phone" aria-hidden="true"></i>Gọi điện</a>
            </div>
            <div class="w33 calendar2">
                <a title="Gặp tư vấn trực tiếp 7h-22h" href="<?= link_tuvan;?>"><i class="fa fa-calendar" aria-hidden="true"></i>Đặt lịch hẹn</a>
            </div>
        </div>
    </div>
</div><!-- .site -->
<div id="my_popup">
    <p>Bác sỹ đang yêu cầu được chát với bạn</p>
    <a href="<?= link_tuvan;?>">Đồng ý</a>
    <a class="my_popup_close">Từ chối</a>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.popupoverlay.js"></script>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" defer src="<?php echo get_template_directory_uri();?>/css/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/jssor/jssor.slider-21.1.5.mini.js"></script>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/jssor/jssor.js"></script>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/app.js"></script>
<?= line_chat();?>
</body>
</html>
