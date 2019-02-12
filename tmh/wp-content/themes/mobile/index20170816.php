<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main home">
			
			<div class="benh benh-ve-mui">
				<div class="row row1">
					<div class="tieu-de" style="margin-top:10px;">
						<h2><a href="<?php echo get_category_link(2);?>">Bệnh về mũi</a></h2>
						<p class="right"><i class="fa fa-comments" aria-hidden="true"></i><a href="<?= link_tuvan;?>">Tìm hiểu chi tiết</a></p>
					</div>
				</div>
				<div class="row row2">
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(5);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(5);?>">Viêm mũi</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(6);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(6);?>">Viêm xoang <br> mũi</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(12);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(12);?>">Viêm mũi <br> dị ứng</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(9);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(9);?>">Polyp mũi </a>
						</div>
					</div>
				</div>
				<div class="row row3">
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(8);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(8);?>">Phì đại <br>cuốn mũi</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(7);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(7);?>">Xuất huyết <br> mũi</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(11);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(11);?>">Lệch vách <br> ngăn mũi</a>
						</div>
					</div>
				</div>
			</div>
			<div class="benh benh-ve-tai">
				<div class="row row1">
					<div class="tieu-de">
						<h2><a href="<?php echo get_category_link(3);?>">Bệnh về tai</a></h2>
						<p class="right"><i class="fa fa-comments" aria-hidden="true"></i><a href="<?= link_tuvan;?>">Tìm hiểu chi tiết</a></p>
					</div>
				</div>
				<div class="row row2">
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(13);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(13);?>">Điếc tai</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(14);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(14);?>">Ù tai</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(17);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(17);?>">Viêm tai <br>ngoài</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(16);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(16);?>">Viêm tai<br>giữa</a>
						</div>
					</div>
				</div>
				<div class="row row3">
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(15);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(15);?>">Thủng màng<br>nhĩ</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(18);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(18);?>">Giảm thính<br>lực</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(62);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(62);?>">Viêm tai<br>xương chũm</a>
						</div>
					</div>
				</div>
			</div>
			<div class="benh benh-ve-hong">
				<div class="row row1">
					<div class="tieu-de">
						<h2><a href="<?php echo get_category_link(4);?>">Bệnh về họng</a></h2>
						<p class="right"><i class="fa fa-comments" aria-hidden="true"></i><a href="<?= link_tuvan;?>">Tìm hiểu chi tiết</a></p>
					</div>
				</div>
				<div class="row row2">
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(20);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(20);?>">Viêm họng</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(61);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(61);?>">Viêm họng <br> hạt</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(22);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(22);?>">Viêm amidan</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(25);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(25);?>">Viêm VA</a>
						</div>
					</div>
				</div>
				<div class="row row3">
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(24);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(24);?>">Viêm họng<br>mãn tính</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(23);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(23);?>">Polyp thanh<br>quản</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(26);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-4.png"></a>
							<a href="<?php echo get_category_link(26);?>">Hạt xơ dây <br> thanh</a>
						</div>
					</div>
					<div class="w25 left">
						<div class="circle">
							<a href="<?php echo get_category_link(84);?>" class="txt-ngan"><img src="<?php echo get_template_directory_uri();?>/css/images/bg-3.png"></a>
							<a href="<?php echo get_category_link(84);?>">Viêm thanh quản cấp</a>
						</div>
					</div>
				</div>
			</div>
			<div class="trieu-chung">
				<div class="tieu-de style1">
					<h2>Tự kiểm tra bệnh</h2>
				</div>
				<div class="row row1">
					<div class="w25">
						<a href="<?php echo get_permalink(3097);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-2.png"></a>
						<a href="<?php echo get_permalink(3097);?>">Chảy nước mũi</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(3070);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-3.png"></a>
						<a href="<?php echo get_permalink(3070);?>">Tắc mũi</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(3053);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-4.png"></a>
						<a href="<?php echo get_permalink(3053);?>">Hắt xì hơi</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(3144);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-5.png"></a>
						<a href="<?php echo get_permalink(3144);?>">Xuất huyết trong mũi</a>
					</div>
				</div>
				<div class="row row2">
					<div class="w25">
						<a href="<?php echo get_permalink(3043);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-6.png"></a>
						<a href="<?php echo get_permalink(3043);?>">Đau tai</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(3094);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-7.png"></a>
						<a href="<?php echo get_permalink(3094);?>">Tai chảy mủ</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(1136);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-8.png"></a>
						<a href="<?php echo get_permalink(1136);?>">Trong tai có âm thanh</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(3054);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-9.png"></a>
						<a href="<?php echo get_permalink(3054);?>">Suy giảm thính lực</a>
					</div>
				</div>
				<div class="row row3">
					<div class="w25">
						<a href="<?php echo get_permalink(3014);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-10.png"></a>
						<a href="<?php echo get_permalink(3014);?>">Họng có dị vật</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(3051);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-11.png"></a>
						<a href="<?php echo get_permalink(3051);?>">Sưng đau họng</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(3125);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-12.png"></a>
						<a href="<?php echo get_permalink(3125);?>">Khô ngứa họng</a>
					</div>
					<div class="w25">
						<a href="<?php echo get_permalink(3099);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/icon-13.png"></a>
						<a href="<?php echo get_permalink(3099);?>">Khàn tiếng</a>
					</div>
				</div>
			</div>
			<div class="ky-thuat-tien-tien">
				<div class="tieu-de style1">
					<h2><a href="<?php echo get_category_link(29);?>">Kỹ thuật tiên tiến</a></h2>
				</div>
				<div class="thu-thuat">
					<div class="row">
						<div class="w50">
							<div class="bg bg1">
								<a href="<?php echo get_permalink(688);?>">
									Thủ thuật xóa bỏ xâm lấn tối thiểu JCIC của Mỹ
								</a>
							</div>
						</div>
						<div class="w50">
							<div class="bg bg2">
								<a href="<?php echo get_permalink(390);?>">
									Thủ thuật hình thành vách ngăn mũi STORZ của Đức
								</a>
							</div>
						</div>
						<div class="w50">
							<div class="bg bg2">
								<a href="<?php echo get_permalink(396);?>">
									Phương pháp xâm lấn tối thiểu CWC của Mỹ
								</a>
							</div>
						</div>
						<div class="w50">
							<div class="bg bg4">
								<a href="<?php echo get_permalink(368);?>">
									Hệ thống xâm lấn tối thiểu động lực xoay tròn IPC Mỹ
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="img-adv">
		        <div class="row">
		            <a href="<?php echo get_category_link(29);?>"><img src="<?php echo get_template_directory_uri();?>/css/images/img-1.png"></a>
		        </div>
		    </div>
			<div class="img-adv">
				<!-- <a href="<?= link_tuvan;?>"><img src="<?php //echo get_template_directory_uri();?>/css/images/img-1.png"></a> -->
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
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
