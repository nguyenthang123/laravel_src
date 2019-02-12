<?php
if(deviceType=="phone"){
    require_once('m_footer.php');
}else{
?>
</div><!-- .site-content -->
    <div class='out16'>
        <div class='container container1'>
            <div class='box29 item1'>
                <img src="<?php bloginfo('template_directory'); ?>/images/logo-footer.png" />
            </div>
            <div class='box29 item2'>
                <b>TRUNG TÂM CÓ UY TÍN</b> 
                <a title="<?php echo get_the_title(2);?>" href="<?php echo get_page_link(2);?>">GIỚI THIỆU</a> 
 <a title="<?php echo get_cat_name(29);?>" href="<?php echo get_category_link(29);?>">KỸ THUẬT</a> 
 <a title="<?php echo get_cat_name(30);?>" href="<?php echo get_category_link(30);?>">THIẾT BỊ</a> 
 <a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= link_tuvan;?>">TƯ VẤN CHI PHÍ</a> 
 <a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= link_tuvan;?>">TƯ VẤN BỆNH TÌNH</a> 
            </div>
            <div class='box29 item3'>
                <b>LIÊN HỆ CHÚNG TÔI</b>
                <a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= rewrite_number_phone(phone1);?>"><img class='tel' src="http://taimuihonghanoi.net/wp-content/themes/168mauxanh/images/tel1.png" /></a>
                
                <a style="float: right;" href="<?= link_skype;?>"> <img class='tel2' src="<?php bloginfo('template_directory'); ?>/images/skype.png" /></a>
                <div class='clear15'>
                </div>
                <div class='box30'>
                    <a href="<?= link_tuvan;?>"><img src="<?php bloginfo('template_directory'); ?>/images/i14.png" />Hỏi bệnh tình</a> 
                    <a href="<?= link_tuvan;?>"><img src="<?php bloginfo('template_directory'); ?>/images/i15.png" />Hỏi điều trị</a> 
                    <a href="<?= link_tuvan;?>"><img src="<?php bloginfo('template_directory'); ?>/images/i16.png" />Hỏi chi phí</a>
                </div>
                <div class='clear15'>
                </div>
                Copyright @ 2009-2016. Phong Kham Da Khoa Giai Phong. All rights reserved ĐỊA CHỈ:
                709 Giải Phóng - Hoàng Mai - HÀ NỘI Sở hữu bản quyền phòng khám Đa Khoa Giải Phóng,
                nội dung website này chỉ để tham khảo không làm căn cứ chẩn đoán y tế.Tôn trọng
                ý kiến bác sĩ
            </div>
        </div>
    </div>
    <div class='out17'>
        <div class='container'>
            <div class='box31'>
                    <a href="<?= link_tuvan;?>"><img src="http://taimuihonghanoi.net/wp-content/themes/168mauxanh/images/i17.png" /></a>
                    <a href="<?= link_tuvan;?>"><img src="<?php bloginfo('template_directory'); ?>/images/i18.png" /></a> 
                    <a href="<?= link_tuvan;?>"><img src="<?php bloginfo('template_directory'); ?>/images/i19.png" /></a> 
                    <a href="<?= link_tuvan;?>"><img src="<?php bloginfo('template_directory'); ?>/images/i20.png" /></a>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
<?php if(get_the_ID() == 6755||get_the_ID()==6756||get_the_ID()==6758):?>
	<script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/css/bangkiemtrasuckhoevehong/js.js"></script>
<?php endif;?>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/app.js"></script>
<?php if(get_the_ID() == 6755||get_the_ID()==6756||get_the_ID()==6758):?>
    <script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/css/bangkiemtrasuckhoevehong/js.js"></script>
<?php endif;?>
<script type='text/javascript' src='http://swt.pk709.com/JS/LsJS.aspx?siteid=KTF27288478&#038;lng=en&#038;ver=4.7.3'></script>
</body>
</html>
<?php }?>