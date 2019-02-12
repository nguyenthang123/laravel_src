<?php 
	require_once( '../../../wp-load.php' );

	$to = 'vantruong3289@gmail.com';
	$subject = 'Bảng kiểm tra sức khỏe về Bệnh về Họng !';
	$body = '
	<table style="border: 1px solid #ddd;width: 100%;max-width: 100%; background-color: transparent;border-spacing: 0;border-collapse: collapse;font-size: 14px;line-height: 1.42857143;">
		    <thead>
		        <tr>
		            <th style="padding: 8px;line-height: 1.42857143;vertical-align: top;border: 1px solid #ddd;">#</th>
		            <th style="padding: 8px;line-height: 1.42857143;vertical-align: top;border: 1px solid #ddd;">Câu hỏi triệu chứng</th>
		            <th style="padding: 8px;line-height: 1.42857143;vertical-align: top;border: 1px solid #ddd;">Trả lời</th>
		        </tr>
		    </thead>
		    <tbody>'; 
		    	foreach ($_POST['cauhoi'] as $key => $value):
		    	$body .='
		        <tr>
		            <th scope="row">'.$key.'</th>
		            <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border: 1px solid #ddd;">'.$value.'</td>
		            <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border: 1px solid #ddd;">'.$_POST['traloi'][$key].'</td>
		        </tr>';
		        endforeach;
		    $body .='
		    </tbody>
		</table>';
	$headers = array('Content-Type: text/html; charset=UTF-8');
	 
	if(wp_mail( $to, $subject, $body, $headers )):
			get_header('chuyende'); ?>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bangkiemtrasuckhoevehong/css.css">
			<header id="masthead" class="site-header container" role="banner">
				<a href=""><img src="<?php echo get_template_directory_uri();?>/css/bangkiemtrasuckhoevehong/img/header.png"></a>
			</header>
			<div class="menu">
				<div class="container">
					<div class="flex">
						<div><a href="<?php echo home_url();?>">Trang chủ <br> phòng khám</a></div>
						<div><a href="<?php echo get_page_link(2);?>">Giới thiệu <br> phòng khám</a></div>
						<div><a href="<?php echo get_category_link(29);?>">Kỹ thuật <br> chuyên nghiệp</a></div>
						<div><a href="<?php echo get_category_link(30);?>">Thiết bị <br> hiện đại</a></div>
						<div><a href="<?php echo get_category_link(41);?>">Trường hợp <br> hồi phục</a></div>
						<div><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Đăng ký <br> trực tuyến</a></div>
						<div><a href="<?php echo get_page_link(5);?>">Địa chỉ <br> phòng khám</a></div>
					</div>
				</div>
			</div>
			<div class="top-banner">
				<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/css/bangkiemtrasuckhoevehong/img/1.png"></a>
			</div>
			<div class="container">
				<h1 style="text-align: center;font-weight: normal;color: #25a161;font-size: 25px;">Chúng tôi đã nhận được bài kiểm tra của bạn !</h1>
				<?php echo $body;?>
				<p style="margin-bottom: 40px;"></p>
			</div>
			<?php get_footer();
	else:
		?>
			<h1 style="text-align: center;font-weight: normal;color: #25a161;">Hệ thống có lỗi !</p>
			<?php echo $body;?>
		<?php
	endif;
?>