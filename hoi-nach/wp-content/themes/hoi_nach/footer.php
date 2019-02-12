<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hoi_Nach
 */

?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" style="border-right: 1px dashed white;margin-top: 47px;">
                        <center><img src="http://phongkhamgiaiphong.com/hoi-nach/wp-content/themes/hoi_nach/assets/images/logo.png" alt=""></center>
                    </div>
                    <div class="col-md-4">
                        <div class="nd_col4_hai">
                            <div class="tt_col4"> Đường dây nóng tư vấn sức khỏe </div>
                            <div class="nd2_col4">
                                <div class="icon_col4">
                                    <i class="fa fa-volume-control-phone phoneft fa-4x" aria-hidden="true"></i>
                                    <div class="khoi2_col4" style="text-align: left">
                                        <div class="dong1_khoi2"> <?php echo NUMBER_PHONE1 ?> </div>
                                        <div class="dong1_khoi2"> <?php echo NUMBER_PHONE2 ?> </div>
                                    </div>
                                </div>
                                <div class="khoi3_col4">
                                    <div class="diachifooter"> <span class="indam">Địa chỉ</span> :709 Giải Phóng - Hoàng Mai - Hà Nội </div>
                                    <div class="banquyen"> <span class="indam"> Sở hữu bản quyền</span> <i> :Phòng khám đa khoa Giải Phóng </i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2214.981364742816!2d105.8418706908747!3d20.98703331505576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6886cdd7e7%3A0xdb507e6e9301be0a!2zUGjDsm5nIGtow6FtIHRhaSBtxalpIGjhu41uZyA3MDkgR2nhuqNpIFBow7NuZw!5e0!3m2!1svi!2s!4v1521512966542" width="358" height="173" frameborder="0" style="border:0; margin-left: 17px;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row hidden-xs">
                    <br>
                    <p class="text-center white"><i>Sở hữu bản quyền phòng khám đa khoa Giải Phóng All rights reserved, Nội dung website này chỉ để tham khảo, không làm căn cứ để chẩn đoán điều trị. Tôn trọng ý kiến bác sĩ.</i></p>
                   
                </div>
            </div>
        </footer>
</div><!-- #page -->

<div class="menu-mobile visible-xs">
    <a href="<?php echo get_home_url() ?>"><div class="block">
            <span class="fa fa-home"></span> <br>
            Trang chủ
        </div></a>
    <a href="tel:19002622"><div class="block">
            <span class="fa fa-phone"></span> <br>
            Điện thoại
        </div>
    </a>
    <a href="skype:phongkhamdakhoagiaiphong@gmail.com?chat"><div class="block">
            <span class="fa fa-skype"></span> <br>
            Skype
        </div>
    </a>
    <a href="<?php echo get_home_url() ?>/lien-he"><div class="block">
            <span class="fa fa-map-marker"></span> <br>
            Địa chỉ
        </div>
    </a>
</div>

<?php wp_footer(); ?>
<?= line_chat();?>
</body>
</html>
