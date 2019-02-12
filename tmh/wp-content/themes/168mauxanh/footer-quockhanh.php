
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container clearfix">
			<div class="left">
				<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/css/quockhanh/img/footer-icon.png"></a>
			</div>
			<div class="left footer-icon-face">
				<a href="<?= link_facebook;?>"><img src="<?php echo get_template_directory_uri();?>/css/quockhanh/img/footer-icon-face.png"></a>
			</div>
			<div class="left footer-icon-skype">
				<a href="<?= link_skype;?>"><img src="<?php echo get_template_directory_uri();?>/css/quockhanh/img/footer-icon-skype.png"></a>
			</div>
		</div>
		<div class="site-info">
			<div class="container clearfix">
				<div class="left logo">
					<a title="<?php echo bloginfo('name');?>" href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo_footer.png"></a>
					<h3><a title="<?php echo bloginfo('name');?>" href="<?php echo home_url();?>">phòng khám đa khoa Giải Phóng hà nội</a></h3>
					<h4><a title="Địa chỉ google maps phòng khám" href="<?php echo get_page_link(5);?>">- phòng khám uy tín ở hà nội - </a></h4>
				</div>
				<div class="left menu-footer">
					<h2>trung tâm thương hiệu</h2>
					<ul>
						<li><h4><a title="<?php echo get_the_title(2);?>" href="<?php echo get_page_link(2);?>">Giới thiệu</a></h4></li>
						<li><h4><a title="<?php echo get_cat_name(29);?>" href="<?php echo get_category_link(29);?>">KỸ THUẬT</a></h4></li>
						<li><h4><a title="<?php echo get_cat_name(30);?>" href="<?php echo get_category_link(30);?>">THIẾT BỊ</a></h4></li>
						<li><h4><a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= link_tuvan;?>">TƯ VẤN CHI PHÍ</a></h4></li>
						<li><h4><a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= link_tuvan;?>">TƯ VẤN BỆNH TÌNH</a></h4></li>
					</ul>
				</div>
				<div class="left menu-footer">
					<h2>hạng mục chuẩn trị</h2>
					<ul>
						<li><h4><a title="<?php echo get_cat_name(3);?>" href="<?php echo get_category_link(3);?>">BỆNH VỀ TAI</a></h4></li>
						<li><h4><a title="<?php echo get_cat_name(2);?>" href="<?php echo get_category_link(2);?>">BỆNH VỀ MŨI</a></h4></li>
						<li><h4><a title="<?php echo get_cat_name(4);?>" href="<?php echo get_category_link(4);?>">BỆNH VỀ HỌNG</a></h4></li>
						<li><h4><a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= link_tuvan;?>">BỆNH KHÁC</a></h4></li>
					</ul>
				</div>
				<div class="left menu-footer">
					<h2>dịch vụ và <br> giúp đỡ</h2>
					<ul>
						<li><h4><a title="Quy trình khám bệnh" href="<?php echo get_page_link(6777);?>">QUÁ TRÌNH KHÁM BỆNH</a></h4></li>
						<li><h4><a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= link_tuvan;?>">TƯ VẤN TRỰC TUYẾN</a></h4></li>
						<li><h4><a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= link_skype;?>">TƯ VẤN SKYPE</a></h4></li>
						<li><h4><a title="Trang facebook phòng khám 168" href="<?= link_facebook;?>">FACEBOOK</a></li>
						<li><h4><a title="Địa chỉ google maps phòng khám" href="<?php echo get_page_link(5);?>">TUYẾN ĐƯỜNG</a></h4></li>
					</ul>
				</div>
				<div class="left address">
					<h2>số điện thoại 
						<a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= rewrite_number_phone(phone1);?>"><?= phone1;?></a><br>
						<a title="Gặp tư vấn trực tiếp 7h30-22h" href="<?= rewrite_number_phone(phone2);?>"><?= phone2;?></a>
					</h2>
					<h3>
						<a title="Địa chỉ google maps phòng khám" href="<?php echo get_page_link(5);?>">ĐỊA CHỈ : 709 Giải Phóng - Hoàng Mai - Hà Nội</a>
					</h3>
					<h4>
						<!-- Sở hữu bản quyền phòng khám đa khoa Giải Phóng Hà Nội,nội dung website này chỉ để tham khảo không làm căn cứ chẩn đoán y tế.Tôn trọng ý kiến bác sĩ. -->
						Thời gian làm việc <br> <b>7h30 -20h </b><br>Các ngày trong tuần.
					</h4>
				</div>
			</div>
		</div>
	</footer>
	<style type="text/css">
		.fix-bottom4{
			color: #fff;
			position: fixed;
			bottom:0;width: 100%;
			z-index: 9999999999;
		}
		.fix-bottom4 a:hover{
			text-decoration: underline;
		}
		.fix-bottom4 .bg-opacity{
			/*background-image: url('footAdd_bg.png');*/
			/*opacity: 0.2;*/
			/*height: 116px;*/
			/*position: relative;*/
			/*width: 100%;*/
		}
		@media (min-width: 1000px){
			.fix-bottom4 .khungchua{
				width: 860px;
				margin:0px auto;
				padding:10px 0px 5px 0px;
			}
		}
		.fix-bottom4 .notifi,.fix-bottom4 .mesenger{
			float: left;
			padding:10px 15px;
		}
		.fix-bottom4 .mesenger h3{
			font-size: 22px;
			margin-bottom: 10px;
			color: #fffdfd;margin-top: 0;font-weight: normal;
		}
		.fix-bottom4 .mesenger h3 a{color: #ff0;}
		.fix-bottom4 .mesenger h4{
			color: #dedede;
			font-size: 15px;margin:0px auto;font-weight: normal;
		}
		.fix-bottom4 .notifi{
			border-radius: 10px;
			background-color: #2955a0;
			padding-right: 30px;
		}
		.fix-bottom4 .notifi h5{
			margin-bottom: 10px;
			font-size: 17px;margin-top: 0;font-weight: normal;
		}
		.fix-bottom4 .notifi p{
			background-color: #fff;
			padding:3px 10px;
			color: #000;margin: 0 auto;
		}
		.fix-bottom4 .notifi p span{
			display: inline-block;
			padding:2px 7px;
			background-color: #ff8a00;
			margin-left: 10px;
			color: #fff;
		}
		.arrow_box_footer {
			position: relative;
			background: #fff;
		}
		.arrow_box_footer:after {
			bottom: 100%;
			left: 20%;
			border: solid transparent;
			content: " ";
			height: 0;
			width: 0;
			position: absolute;
			pointer-events: none;
			border-color: rgba(255, 255, 255, 0);
			border-bottom-color: #fff;
			border-width: 6px;
			margin-left: -6px;
		}
	</style>
	<div class="fix-bottom4">
		<div style="position: relative;">
			<div class="bg-opacity" style="position: absolute;opacity: 0.8;height: 116px;width: 100%;background-color: #033522;">
				
			</div>
			<div style="width: 100%;position: relative;display: block;">
				<div class="khungchua clearfix">
					<div class="mesenger">
						<h3>Có 89.5% mọi người lựa chọn tư vấn với <a href="<?= link_tuvan;?>">Bác sĩ trực tuyến.</a></h3>
						<h4>10.5% mọi người lựa chọn tự tìm hiểu trên mạng</h4>
					</div>
					<div class="notifi">
						<h5><a href="<?= link_tuvan;?>">Hỏi bác sĩ, không mất phí.</a></h5>
						<p class="arrow_box_footer"><a href="<?= link_tuvan;?>">Bạn có 1 tin nhắn mới. <span>1</span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a class="show_fix_bottom" href="javascript:;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>
<?php get_template_part( 'adv', 'left' ); ?>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
<script type="text/javascript" defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.popupoverlay.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.SuperSlide.js"></script>
<!--<script type="text/javascript" src="<?php /*echo esc_url( get_template_directory_uri() ); */?>/js/swt.js"></script>-->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/app.js"></script>
<?= line_chat();?>
</body>
</html>
