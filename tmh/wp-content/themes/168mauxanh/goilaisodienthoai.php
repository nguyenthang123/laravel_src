<?php header('Access-Control-Allow-Origin: *'); ?>
<?php 
	require_once( '../../../wp-load.php' );
	$to = 'tuyendunghucthang@gmail.com';
	$subject = 'Đăng ký số điện thoại : từ dadayhn.com !';
	$body = $_POST['s'];
	$headers = array('Content-Type: text/html; charset=UTF-8');
	if(wp_mail( $to, $subject, $body, $headers )):
		echo '1';
	else:
		echo  '0';
	endif;
?>