<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/frontend/layout_new/css/style.css">
    <link rel="stylesheet" href="/public/frontend/css/detail.css">
    <link rel="stylesheet" href="http://khamnamkhoahanoi.vn/public/frontend/css/tien-liet-tuyen.css">
    <link rel="stylesheet" href="/public/frontend/layout_new/css/hover-min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <script src="/public/frontend/layout_new/js/jquery.min.js"></script> -->
    <?= ico_shortcut;?>
    <base target="_blank">
</head>
<body>
    <style>
    .tit_detail{
    background: #39bbd1;
    overflow: hidden;
    color: #ffffff;
    height: 35px;
    line-height: 35px;
    padding-left: 10px;
}
    </style>
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '396918310746091');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=396918310746091&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?= link_facebook();?>    
<?= cdtop();?>
<?= Addtop();?>
<?= Addleft()?>
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-contact">
                    <img src="/public/frontend/layout_new/images/top-contact/mail.png" alt="phong kham"> phongkhamdakhoagiaiphong@gmail.com
                    <img src="/public/frontend/layout_new/images/top-contact/phone.png" alt="phong kham"> <?= phone1;?> - <?= phone2;?>
                    <a href="<?= link_skype;?>">
                        <img src="/public/frontend/layout_new/images/top-contact/skype.png" alt="phong kham">
                    </a>
                    <a href="<?= link_facebook;?>">
                        <img src="/public/frontend/layout_new/images/top-contact/facebook.png" alt="phong kham">
                    </a>
                    <a href="<?= link_diachi;?>">
                        <img src="/public/frontend/layout_new/images/top-contact/market.png" alt="phong kham">
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="padding: 0">
                <img src="/public/frontend/layout_new/images/logo.png" alt="phong kham" class="img-fluid img-logo">
            </div>
            <div class="col-md-8">
                <!--<p class="pmenu">
                    <a href="<?/*= domain;*/?>"><span class="menu">Trang chủ</span></a>
                    <a href="<?/*= link_gioithieu;*/?>"><span class="menu">Giới thiệu</span></a>
                    <a href="<?/*= link_tuvan;*/?>"><span class="menu">Hạng mục điều trị</span></a>
                    <a href="<?/*= link_diachi;*/?>"><span class="menu">Địa chỉ</span></a>
                    <a href="<?/*= link_tuvan;*/?>"><img src="/public/frontend/layout_new/images/top-menu/btn-reg.png" alt="phong kham" class="btn-reg hvr-push"></a>
                </p>-->
                <ul class="menutop">
                    <li class="menu_lv1"><a href="<?= domain;?>">Trang chủ</a></li>
                    <li class="menu_lv1"><a href="<?= link_gioithieu;?>">Giới thiệu</a></li>
                    <li class="menu_lv1"><a href="<?= link_tuvan;?>">Hạng mục điều trị</a>
                        <div class="content_hm">
                            <div class="content_hm_m">
                                <div class="content_hm_tiem">
                                    <ul class="menu_lv2">
                                        <li><a href="/namkhoa">Nam khoa</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_viemtienliettuyen;?>"><i class="fa fa-circle" aria-hidden="true"></i>Viêm tuyến tiền liệt</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_vosinhnam;?>"><i class="fa fa-circle" aria-hidden="true"></i>Vô sinh nam</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_viemnhiemcoquansinhduc;?>"><i class="fa fa-circle" aria-hidden="true"></i>Viêm nhiễm cơ quan sinh dục</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_lietduong;?>"><i class="fa fa-circle" aria-hidden="true"></i>Liệt dương</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_xuattinhsom;?>"><i class="fa fa-circle" aria-hidden="true"></i>Xuất tinh sớm</a> </li>
                                        <li><a href="/namkhoa/<?= cat_rw_hepbaoquydau;?>"><i class="fa fa-circle" aria-hidden="true"></i>Hẹp bao quy đầu</a> </li>
                                    </ul>
                                </div>
                                <div class="content_hm_tiem">
                                    <ul class="menu_lv2">
                                        <li><a href="/tri">Bệnh trĩ</a></li>
                                        <li><a href="/tri/<?= cat_rw_nutkehaumon;?>"><i class="fa fa-circle" aria-hidden="true"></i>Nứt kẽ hậu môn</a> </li>
                                        <li><a href="/tri/<?= cat_rw_polyphaumon;?>"><i class="fa fa-circle" aria-hidden="true"></i>Polyp hậu môn</a> </li>
                                        <li><a href="/tri/<?= cat_rw_taobon;?>"><i class="fa fa-circle" aria-hidden="true"></i>Táo bón</a> </li>
                                        <li><a href="/tri/<?= cat_rw_daitienramau;?>"><i class="fa fa-circle" aria-hidden="true"></i>Đại tiện ra máu</a> </li>
                                        <li><a href="/tri/<?= cat_rw_gioithieu_tri;?>"><i class="fa fa-circle" aria-hidden="true"></i>Giới thiệu bệnh trĩ</a> </li>
                                        <li><a href="/tri/<?= cat_rw_kythuat_tri;?>"><i class="fa fa-circle" aria-hidden="true"></i>Kỹ thuật bệnh trĩ</a> </li>
                                    </ul>
                                </div>
                                <div class="content_hm_tiem">
                                    <ul class="menu_lv2">
                                        <li><a href="/bxh">Bệnh xã hội</a></li>
                                        <li><a href="/bxh/<?= cat_rw_benhlau;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh lậu</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_suimaoga;?>"><i class="fa fa-circle" aria-hidden="true"></i>Sùi mào gà</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_benhgiangmai;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh giang mai</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_munropsinhduc;?>"><i class="fa fa-circle" aria-hidden="true"></i>Mụn rộp sinh dục</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_gioithieu_bxh;?>"><i class="fa fa-circle" aria-hidden="true"></i>Giới thiệu bệnh xã hội</a> </li>
                                        <li><a href="/bxh/<?= cat_rw_kythuat_bxh;?>"><i class="fa fa-circle" aria-hidden="true"></i>Kỹ thuật bệnh xã hội</a> </li>
                                    </ul>
                                </div>
                                <div class="content_hm_tiem">
                                    <ul class="menu_lv2">
                                        <li><a href="/tmh">Tai mũi họng</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_mui;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh về mũi</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_tai;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh về tai</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_hong;?>"><i class="fa fa-circle" aria-hidden="true"></i>Bệnh về họng</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_gioithieu_tmh;?>"><i class="fa fa-circle" aria-hidden="true"></i>Giới thiệu tai mũi họng</a> </li>
                                        <li><a href="/tmh/<?= cat_rw_kythuat_tmh;?>"><i class="fa fa-circle" aria-hidden="true"></i>Kỹ thuật tai mũi họng</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_lv1"><a href="<?= link_diachi;?>">Địa chỉ</a></li>
                    <li class="menu_lv1"><a href="<?= link_tuvan;?>"><img src="/public/frontend/layout_new/images/top-menu/btn-reg.png" alt="phong kham"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<style>
    .banner{text-align: center}
    .banner img{margin: auto}
</style>
<div class="banner">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--<ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
        </ul>-->
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active" style="background: #42c9dc;">
                <img src="/public/frontend/layout_new/images/banner2.jpg" alt="phong kham">
            </div>
            <!--<div class="carousel-item ">
                <img src="/public/frontend/layout_new/images/banner.png" alt="phong kham">
            </div>-->
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<div class="content_gp">
     <div class="container">
          <div class="row">
               <div class="col-md-9" style="padding-right: 0px;">
                    <div class="nd_ct_gp">
                          <div class="tit_detail">
                                <a href="<?= domain;?>">Trang chủ</a>
                                > <a href="/<?= $cate['cat_rewrite'];?>"><?= $cate['cat_name'];?></a>
                                > <span><?= $new['new_name'];?></span>
                          </div>
                          <img class="img-ct" src="http://khamnamkhoahanoi.vn/public/frontend/images/home/ico_detail.png" alt="">
                          <div class="ct_con">
                                <h1 class="tit"><?= $new['new_name'];?></h1>
                                <?= $new['new_content'];?>
                                <div class="new_detail_lv">
                                    <style>
                                        .new_detail_lv{
                                            width: 670px;
                                            margin: auto;
                                            margin-bottom: 35px;
                                            background: #39bbd1;
                                            border-radius: 10px;
                                        }
                                        .new_detail_lv p{
                                            margin-bottom: 15px;
                                            padding-left: 15px;
                                        }
                                    </style>
                                    <div style="padding: 20px;">
                                        <p style="text-align:justify">
                                            <strong><img src="http://trihanoi.com/public/images/home/benh-18.png" alt="tu van"> <a href="http://swt.pk709.com/lr/chatpre.aspx?id=ktf27288478&amp;lng=en&amp;r=&amp;rf1=http%3A//khamnamkhoahanoi&amp;rf2=.vn/&amp;p=http%3A//khamnamkhoahanoi.vn/phuong-phap-seman-ho-tro-dieu-tri-xuat-tinh-som-o-nam-gioi&amp;cid=1521534572255599131490&amp;sid=1522718493576696829938"><span style="color:#ffffff"> CLICK TƯ VẤN TRỰC TUYẾN</span></a></strong>
                                        </p>
                                        <p style="text-align:justify">
                                            <strong><img src="http://trihanoi.com/public/frontend/images/detail/ico_detailnew_dttv.png" alt="dttv"><span style="color:#ffffff"> 1900.2622 - 0166.352.8899  - 1900.2622</span></strong>
                                        </p>
                                        <p style="text-align:justify">
                                            <strong><img src="http://trihanoi.com/public/frontend/images/detail/ico_detailnew_dc.png" alt="dc"><span style="color:#ffffff"> Số 709 - Giải Phóng - Hoàng Mai - Hà Nội</span></strong>
                                        </p>
                                        <p style="text-align:justify">
                                            <strong>Phòng khám làm việc tất cả các ngày trong tuần, bao gồm cả ngày lễ.</strong>
                                        </p>
                                        <p style="text-align:justify">
                                            <strong>(Chúc bệnh nhân sớm hồi phục sức khỏe.)</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="new_hot">
                                     <div class="tit_tv">không có nội dung bạn cần, hãy tư vấn trực tiếp bác sỹ > > > > </div>
                                     <div class="_3nuttuvan">
                                        
                                               <div class="row text-center">
                                                <div class="nd-3nut">
                                                    <div class="col-md-4">
                                                        <a href="<?= link_tuvan;?>">
                                                         <div class="boxanh">
                                                              <img class="icon_bo" src="http://khamnamkhoahanoi.vn/public/frontend/img/detail/ico_bs.png" alt="">
                                                              <div class="text">
                                                                   Tìm hiểu bệnh 
                                                              </div>
                                                         </div>
                                                         </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="<?= link_tuvan;?>">
                                                         <div class="boxanh hai">
                                                              <img class="icon_bo" src="http://khamnamkhoahanoi.vn/public/frontend/img/detail/dola.png" alt="">
                                                              <div class="text">
                                                                   Tư vấn chí phí 
                                                              </div>
                                                         </div>
                                                         </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="<?= link_tuvan;?>">
                                                         <div class="boxanh ba">
                                                              <img class="icon_bo" src="http://khamnamkhoahanoi.vn/public/frontend/img/detail/ico_bs.png" alt="">
                                                              <div class="text">
                                                                  Bác sỹ tư vấn 
                                                              </div>
                                                         </div>
                                                        </a> 
                                                    </div>
                                                </div>   
                                               </div>
                                    
                                     </div>
                                </div>
                          </div>

                    </div>
               </div>
               <div class="col-md-3">
                    <div class="slider">
                         <div id="carousel-id" class="carousel slide" data-ride="carousel">
                             <div class="carousel-inner">
                                 <div class="item">
                                     <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="http://khamnamkhoahanoi.vn/public/frontend/images/tienliettuyen/slide2.jpg">
                                    
                                 </div>
                                 <div class="item active">
                                     <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="http://khamnamkhoahanoi.vn/public/frontend/images/tienliettuyen/slide1.jpg">
                                 </div>
                             </div>
                             <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                             <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                         </div>
                    </div>
                    <div class="nd_sidebar_hai">
                         <div class="tit_hai">Triệu chứng thường gặp của yếu sinh lý</div>
                         <ul>
                        <li class=""><div class="stt">01</div>không cương cứng lên được</li>
                        <li class="l2 dong2"><div class="stt">02</div>Thời gian cương cứng ngắn, xuất tinh sớm </li>
                        <li class="l3 dong2"><div class="stt">03</div>Lãnh cảm, giảm ham muốn, đau khi xuất tinh</li>
                        <li class="l4 dong2"><div class="stt">04</div>Đau khi dương vật cương cứng, đau khi quan hệ</li>
                        <li class="l5 dong2"><div class="stt">05</div>Không xuất tinh được hoặc đau khi xuất tinh</li>
                        <li class="l6"><div class="stt">06</div>Xuất tinh ngược dòng, di tinh</li>
                    </ul>
                    <div class="ts">
                        <b>bác sỹ nhắc nhở</b><br>nếu xuất hiện triệu chứng trên cần phải cẩn thận！</div>
                    </div>
                    <div class="nd_sidebar_3">
                         <div class="col-md-4" style="padding:2px;">
                              <div class="pic">
                                  <img src="http://khamnamkhoahanoi.vn/public/frontend/img/tien-liet-tuyen/ico_tvtt.png" alt="">
                              </div>
                              <a href="<?= link_tuvan;?>"><div class="pic_text">
                                   Tư vấn <br> trực tuyến 
                              </div></a>
                         </div>
                         <div class="col-md-4" style="padding:2px;">
                              <div class="pic">
                                  <img src="http://khamnamkhoahanoi.vn/public/frontend/img/tien-liet-tuyen/ico_skype.png" alt="">
                              </div>
                              <a href="skype:phongkhamdakhoagiaiphong@gmail.com?chat"><div class="pic_text">
                                   skyper
                              </div></a>
                         </div>
                         <div class="col-md-4" style="padding:2px;">
                              <div class="pic">
                                  <img src="http://khamnamkhoahanoi.vn/public/frontend/img/tien-liet-tuyen/ico_dktt.png" alt="">
                              </div>
                              <a href="<?= link_tuvan;?>"><div class="pic_text">
                                   Đăng ký  <br> trực tuyến 
                              </div></a>
                         </div>
                    </div>
                         <div class="dt">
                            <p style="font-size: 12px;">đường dây tư vấn sức khỏe</p>
                            <b>1900.2622 - 0166.352.8899</b>
                         </div>
               </div>
          </div>
     </div>
</div>

<div class="footer">
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span><a href="<?= domain;?>">TRANG CHỦ</a></span>
                    <span><a href="<?= link_kythuat;?>">KỸ THUẬT</a></span>
                    <span><a href="<?= link_thietbi;?>">THIẾT BỊ</a></span>
                    <span><a href="<?= link_tuvan;?>">TRƯỜNG HỢP KHỎI</a></span>
                    <span><a href="<?= link_tuvan;?>">TƯ VẤN CHI PHÍ</a></span>
                    <span><a href="<?= link_tuvan;?>">TƯ VẤN BỆNH TÌNH</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/public/frontend/layout_new/images/footer/logo.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-4 color3">
                    <h5 class="color3 text-center">ĐIỆN THOẠI TƯ VẤN</h5>
                    <div class="row footer_phone">
                        <div class="col-md-5 text-right">
                            <img src="/public/frontend/layout_new/images/footer/phone.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <h4 class="color3"><?= phone1 ?><br>
                                <?= phone2;?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 color3 footer_tv">
                    <div class="row">
                        <div class="col-md-4 text-center footer_tv_item">
                            <a href="<?= link_tuvan;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon1.png" alt="" class="img-fluid">
                                <p>Tư vấn</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center footer_tv_item">
                            <a href="<?= link_tuvan;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon2.png" alt="" class="img-fluid">
                                <p>Điện thoại</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center footer_tv_item">
                            <a href="<?= link_tuvan;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon3.png" alt="" class="img-fluid">
                                <p>Đăng ký</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="<?= link_skype;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon4.png" alt="" class="img-fluid">
                                <p>Skype</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="<?= link_facebook;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon5.png" alt="" class="img-fluid">
                                <p>Facebook</p>
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="<?= link_diachi;?>" class="color3">
                                <img src="/public/frontend/layout_new/images/footer/icon6.png" alt="" class="img-fluid">
                                <p>Địa chỉ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center color3">
                    <br>
                    ĐỊA CHỈ: 709 Giải Phóng - Hoàng Mai - Hà Nội     -     EMAIL: phongkhamdakhoagiaiphong@gmail.com
                </div>
            </div>
        </div>
    </div>
    <div class="container"></div>
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="color3 txt-copy">Sở hữu bản quyền phòng khám đa khoa Giải Phóng All rights reserved, Nội dung website này chỉ để tham khảo, không làm căn cứ để chẩn đoán điều trị. Tôn trọng ý kiến bác sĩ.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="/public/frontend/layout_new/js/jquery.min.js"></script> -->
<script src="/public/frontend/layout_new/js/tether.min.js"></script>
<script src="/public/frontend/layout_new/js/bootstrap.min.js"></script>
<?= line_chat();?>
</body>
</html>
