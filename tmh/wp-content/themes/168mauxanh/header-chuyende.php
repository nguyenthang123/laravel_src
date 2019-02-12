<!DOCTYPE html>

<html>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">

	

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php //wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/pannel-left.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemmui/chuyende.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemmui/fix-bottom.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemmui/footer.css">

	<?php if(get_the_ID() == 3966):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemmui/viem-mui.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3963):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemhong/viem-hong.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3978):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemxoangmui/viem-xoang-mui.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3961):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemamidan/viem-amidan.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3982):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/xuathuyetmui/xuat-huyet-mui.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3957):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/polypmui/polyp-mui.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3970):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemmuidiung/viem-mui-di-ung.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3959):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/utai/u-tai.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3973):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemtaigiua/viem-tai-giua.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3949):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/diectai/diec-tai.css">

	<?php endif;?>

	<?php if(get_the_ID() == 3976):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemtaingoai/viem-tai-ngoai.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6669):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/thungmangnhi/thung-mang-nhi.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6675):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemmui2/viemmui.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemmui2/imagehover.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6677):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemxoangmui2/viemxoangmui.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemxoangmui2/imagehover.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6680):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/xuathuyetmui2/xuathuyetmui.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6688):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemhong2/viem-hong.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6741):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemmuidiung2/viemmuidiung2.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6743):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemamidan2/viemamidan2.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6749):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/utai2/css.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6751):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/diectai2/css.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6752):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/polypdaythanh/css.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6754):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/polypmui2/css.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6755||get_the_ID() == 6756||get_the_ID() == 6758):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bangkiemtrasuckhoevehong/css.css">

	<?php endif;?>

	<?php if(get_the_ID() == 6759):?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/viemtaigiua2/css.css">

	<?php endif;?>

	<style type="text/css">

		.pfan p{

			text-align: center;

		}

	</style>

	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/adv-left.css">

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
	<link href="<?php bloginfo('template_directory'); ?>/css2/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css2/style.css" rel="stylesheet" type="text/css" />

	<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-83054939-1', 'auto');

  ga('send', 'pageview');



</script>

	<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-81418417-1', 'auto');

  ga('send', 'pageview');



</script>

</head>



<body>

