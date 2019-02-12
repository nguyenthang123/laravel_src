<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="author" content="<?= domain;?>">

	<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true">

	<meta name="copyright" content="">

	<meta name="language" content="vi" />

	<meta name="robots" content="follow, index" />

	<meta name="ROBOTS" content="index, follow, noodp" />

	<meta name="Googlebot" content="index, follow" />

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?= ico_shortcut;?>

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/reset.css">

    <?php 

    global $post;

    $post_slug=$post->post_name;

    if($post_slug == 'gioi-thieu-phong-kham'):?>

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/gioithieu/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/gioithieu/custom.css">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/gioithieu/style.css">

<?php else : ?>        

    <link href="<?php bloginfo('template_directory'); ?>/css2/bootstrap.min.css" rel="stylesheet" type="text/css" />

<?php endif;

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/jssor/jssor.css">	

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/datetimepicker/build/jquery.datetimepicker.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/header22.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-tai-mui-hong.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-thanh-ngang.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-tintuc-phongkham.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-thu-thuat.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-tabs-benh.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-nhanvien.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-tu-kiem-tra-benh.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-phuc-hoi-suc-khoe.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-about-168.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/footer.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fix-bottom.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/hovertreess.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/category-parent.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sidebar.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/archive.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/category-children.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/category-top.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/thiet-bi-chuyen-nghiep.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/single.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/page.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sidebar-right.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sidebar-left.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/page-viem-mui.css">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/pagination.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/404.css">

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/adv-left.css">

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>



<!-- giao dien moi --> 





<link href="<?php bloginfo('template_directory'); ?>/css2/reset.css" rel="stylesheet" type="text/css" />

<link href="<?php bloginfo('template_directory'); ?>/css2/style.css" rel="stylesheet" type="text/css" />

<link href="<?php bloginfo('template_directory'); ?>/js2/owl/owl.carousel.min.css" rel="stylesheet" type="text/css" />

<link href="<?php bloginfo('template_directory'); ?>/js2/owl/owl.theme.default.min.css" rel="stylesheet" type="text/css" />

<script src="<?php bloginfo('template_directory'); ?>/js2/owl/owl.carousel.min.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_directory'); ?>/js2/jQuery.scrollText.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_directory'); ?>/js2/custom.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready( function(){
        $( "a" ).each(function() {
            $( this ).attr("target","_blank");
        });
    });

</script>

<script>

   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-85212676-1', 'auto');

   ga('send', 'pageview');

</script>

<?php if(is_page()):?>

  <?php if(get_the_ID()==6777):?>

      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/quytrinhkhambenh/css.css">

  <?php endif;?>

<?php endif;?>

</head>

<body <?php body_class(); ?> >

    <div class='out1'>

        <div class='container'>

            <div class='row'>

                <div class='col-md-5'>

                    <a href="/">

                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></a>

                    </div>

                    <div class='col-md-7'>

                        <div class='row out2'>

                            <div class='col-md-4'>

                                <img src="<?php bloginfo('template_directory'); ?>/images/i1.png" />

                            </div>

                            <div class='col-md-4'>

                                <img src="<?php bloginfo('template_directory'); ?>/images/i2.png" />

                            </div>

                            <div class='col-md-4'>

                                <a href="<?php echo get_page_link(5);?>"><img src="<?php bloginfo('template_directory'); ?>/images/i3.png" /></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class='out3'>

            <div class='container'>

                <ul class="nav navbar-nav">

                    <li><a href="/">

                        <img src="<?php bloginfo('template_directory'); ?>/images/ico_home.png" /> Trang chủ</a></li>

                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Liên

                            quan đến phòng khám</a>

                            <ul class="dropdown-menu" role="menu">

                             <li> <a href="<?php echo get_page_link(2);?>">  <img src="<?php bloginfo('template_directory'); ?>/images/z1.png" />  Giới thiệu phòng khám</a></li>



                             <li><a href="<?php echo get_category_link(29);?>">  <img src="<?php bloginfo('template_directory'); ?>/images/z2.png" />  Kỹ thuật chuyên nghiệp</a></li>



                             <li><a href="<?php echo get_category_link(30);?>">  <img src="<?php bloginfo('template_directory'); ?>/images/z3.png" />  Thiết bị hiện đại</a></li>



                             <li><a href="<?php echo get_category_link(41);?>">  <img src="<?php bloginfo('template_directory'); ?>/images/z4.png" />  Trường hợp hồi phục</a></li>



                             <li><a href="<?= link_tuvan;?>">  <img src="<?php bloginfo('template_directory'); ?>/images/z5.png" />  Đăng ký trực tuyến</a></li>



                             <li><a href="<?php echo get_page_link(5);?>">  <img src="<?php bloginfo('template_directory'); ?>/images/z6.png" />  Địa chỉ phòng khám</a></li>

                         </ul>

                     </li>

                     <li class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        Hạng mục điều trị </a>

                        <div class="dropdown-menu mega-dropdown-menu">

                            <div class="container-fluid">

                                <div class='row'>

                                    <div class='col-md-4'>

                                        <div class='box34'>

                                            <a href="<?php echo get_category_link(2);?>"><b>BỆNH về mũi</b> </a>



                                            <a  href="<?php echo get_category_link(5);?>">- Viêm mũi</a>

                                            <a  href="<?php echo get_category_link(6);?>">- Viêm xoang mũi</a>

                                            <a  href="<?php echo get_category_link(7);?>">- Xuất huyết mũi</a>

                                            <a  href="<?php echo get_category_link(8);?>">- Phì đại cuống mũi</a>

                                            <a  href="<?php echo get_category_link(9);?>">- Polyp mũi</a>

                                            <a  href="<?php echo get_category_link(11);?>">- Lệch vách ngăn mũi</a>

                                            <a  href="<?php echo get_category_link(12);?>">- Viêm mũi dị ứng</a>

                                        </div>

                                    </div>

                                    <div class='col-md-4'>

                                        <div class='box34'>

                                            <a href="<?php echo get_category_link(3);?>"><b>BỆNH về tai</b> </a>

                                            <a  href="<?php echo get_category_link(13);?>">- Điếc tai</a>

                                            <a  href="<?php echo get_category_link(14);?>">- Ù tai</a>

                                            <a  href="<?php echo get_category_link(15);?>">- Thủng màng nhĩ</a>

                                            <a  href="<?php echo get_category_link(16);?>">- Viêm tai giữa</a>

                                            <a  href="<?php echo get_category_link(17);?>">- Viêm tai ngoài</a>

                                            <a  href="<?php echo get_category_link(18);?>">- Giảm thính lực </a>

                                            <a  href="<?php echo get_category_link(62);?>">- Viêm tai xương chũm</a>

                                        </div>

                                    </div>

                                    <div class='col-md-4'>

                                        <div class='box34'>

                                            <a href="<?php echo get_category_link(4);?>"><b>BỆNH về họng</b> </a>

                                            <a  href="<?php echo get_category_link(20);?>">- Viêm họng</a>

                                            <a  href="<?php echo get_category_link(84);?>">- Viêm thanh quản cấp</a>

                                            <a  href="<?php echo get_category_link(22);?>">- Viêm amidan</a>

                                            <a  href="<?php echo get_category_link(23);?>">- Polyp thanh quản </a>

                                            <a  href="<?php echo get_category_link(24);?>">- Viêm họng mãn tính</a>

                                            <a  href="<?php echo get_category_link(25);?>">- Viêm VA</a>

                                            <a  href="<?php echo get_category_link(26);?>">- Hạt xơ dây thanh</a>

                                            <a  href="<?php echo get_category_link(61);?>">- Viêm họng hạt</a>



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </li>

                    <li class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        Đăng ký hẹn khám</a>

                        <div class="dropdown-menu mega-dropdown-menu">

                            <div class="container-fluid">

                                <div class='box35'>

                                    Chào mừng bạn đến với hệ thống đăng ký khám quan mạng của phòng khám đa khoa Giải Phóng

                                    Hà Nội!

                                </div>

                                <div class='row'>

                                    <div class='col-md-4'>

                                        <div class='box41'>

                                         <div class='box36'>

                                            <img src="<?php bloginfo('template_directory'); ?>/images/ico_dk.png" />

                                            Đăng ký trực tuyến

                                        </div>

                                        <div class='box37'>

                                            <a href="<?= link_tuvan;?>">Click đăng ký</a>

                                        </div>

                                        <div class='box39'>

                                            <p>

                                                Thời gian làm việc:</p>

                                                <b>8h - 20h</b>

                                            </div>       

                                        </div>





                                        Liên hệ trực truyến với các bác sỹ, lựa chọn hạng mục chẩn trị,

                                        thời gian và thông tin cá nhân để được đăng ký thành công

                                    </div>

                                    <div class='col-md-4'>

                                        <div class='box41'>

                                            <div class='box36'>

                                                <img src="<?php bloginfo('template_directory'); ?>/images/ico_dt.png" />

                                                Đăng ký bằng điện thoại

                                            </div>

                                            <div class='box38'>
                                                Số điện thoại:
                                                <a href='#'><?= phone1;?></a>
                                                <a href='#'><?= phone2;?></a>

                                            </div>

                                        </div>

                                        Chỉ cần gọi điện là có thể hẹn khám các khoa

                                    </div>

                                    <div class='col-md-4'>

                                        <div class='box41'>

                                            <div class='box36'>

                                                <img src="<?php bloginfo('template_directory'); ?>/images/ico_email.png" />

                                                Đăng ký qua email

                                            </div>

                                            <?php echo do_shortcode('[contact-form-7 id="7597" title="Contact form 1"]'); ?> 



                                        </div>

                                        Sau khi điền đầy đủ thông tin, nhân viên sẽ gọi điện lại xác nhận thông tin của

                                        bạn.

                                    </div>

                                </div>

                            </div>

                        </div>

                    </li>



                    <li>



                       <form action="<?php bloginfo('url'); ?>" role="search" method="GET" id="search-form">

                        

                          <input id="search" type="text" name="s" placeholder="Nhập nội dung tìm kiếm">

                          





                      </form>

                      



                  </li>



              </ul>

          </div>

      </div>





      <div id='slider' class='owl-carousel owl-theme clear'>

        <div class='item'>

            <a href="<?= link_tuvan;?>">

                <img src="<?php bloginfo('template_directory'); ?>/images/slide1.jpg" />

            </a>

        </div>

    </div>



    <div id="content" class="site-content">