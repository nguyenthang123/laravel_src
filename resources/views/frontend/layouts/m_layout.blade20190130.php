<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <base target="_blank">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/public/mobile/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="/public/mobile/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/public/mobile/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="/public/mobile/css/style_m_t.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <script src="/public/mobile/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="/public/mobile/css/menumobi/jquery.mmenu.min.all.js" type="text/javascript"></script>
    <script type="text/javascript">        $(function () { $('nav#menu').mmenu(); });</script>
    <link href="/public/mobile/css/menumobi/jquery.mmenu.all.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?= m_popup();?>
<div class="page">
        <div class="header">
            <div class="container">
                 <div class="row">
                     <div class="col-xs-12">
                         <a href="<?= domain;?>"><img class="img-responsive" src="/public/mobile/images_t/logo_m.png" alt=""></a>
                     </div>
                 </div>
            </div>
        </div>   
        <div class="menu">
                    <div class="sub_menu">
                        <ul>
                             <li>
                                 <a href="<?= domain;?>">Trang chủ </a>
                             </li>
                             <li>
                                 <a href="http://phongkhamgiaiphong.com/mobile/cd6/gioi-thieu/">Giới thiệu  </a>
                             </li>
                             <li>
                                 <a href="<?= link_tuvan;?>">Thiết bị </a>
                             </li>
                             <li>
                                 <a href="<?= link_tuvan;?>"> Liên hệ  </a>
                             </li>
                             <li>
                                 <a href="<?= link_tuvan;?>"> Đăng ký </a>
                             </li>
                         </ul>
                     </div>
        </div>
        <div class="banner">
             <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href="http://phongkhamgiaiphong.com/mobile/cdsuckhoe/chuyen-muc-suc-khoe/"><img style="height: 175px;width: 100%;" data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="http://phongkhamgiaiphong.com/cd/img/m_bn_nk.jpg"></a>       
                                    </div>
                                    <div class="item">
                                        <a href="<?=link_tuvan;?>"><img style="height: 175px;width: 100%;" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="/public/mobile/images_t/banner.png"></a>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                             </div>                
        </div>
        <div class="dm_benh">
            <a href="<?=site_benhnamkhoa;?>">
            <div class="main_dm_mot">
                <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/nk.png" alt="" />
                <div class="tt_dm"> Nam khoa </div>
            </div>
            </a>
            <a href="<?=site_benhtri;?>">
            <div class="main_dm_mot">
                <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/tri.png" alt="" />
                <div class="tt_dm"> Bệnh trĩ  </div>
            </div>
            </a>
            <a href="<?=site_benhxahoi;?>">
            <div class="main_dm_mot">
                <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/bxh.png" alt="" />
                <div class="tt_dm"> Bệnh xã hội </div>
            </div>
            </a>
            <a href="<?=site_benhtaimuihong;?>">
            <div class="main_dm_mot">
                <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/tmh.png" alt="" />
                <div class="tt_dm"> Tai mũi họng  </div>
            </div>
            </a>
            <a href="<?=site_hoinach;?>">
            <div class="main_dm_mot">
                <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/hn.png" alt="" />
                <div class="tt_dm"> Bệnh hôi nách </div>
            </div>
            </a>
            <a href="<?= link_tuvan;?>">
            <div class="main_dm_mot">
                <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/cong.png" alt="" />
                <div class="tt_dm"> Bệnh lý khác </div>
            </div>
            </a>
        </div> <!-- end danh mục bệnh -->
        <div class="u_diem">
             <div class="tt_uudiem">
                 Ưu điểm của phòng khám 
             </div>
             <div class="baoquanhud">
                  <div class="khoi1_ud">
                      <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/anh_1.png" alt="" />
                  </div>
                  <div class="khoi1_ud">
                      <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/anh_2.png" alt="" />
                  </div>
                  <div class="khoi1_ud">
                      <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/anh_3.png" alt="" />
                  </div>
             </div>
             <div class="des_ud">
                  Phòng khám đa khoa Giải Phóng chuyên điều trị các bệnh nam khoa, bệnh trĩ, bệnh xã hội và tai mũi họng.
             </div>
        </div>
        <div class="menu_hai_footer">
                     <div class="sub_menu_footer">
                         <ul>
                             <li>
                                 <a href="<?= domain;?>"> Trang <br> chủ </a>
                             </li>
                             <li>
                                 <a href="<?= link_tuvan;?>"> Kỹ <br> thuật </a>
                             </li>
                             <li>
                                 <a href="<?= link_tuvan;?>"> Thiết <br> bị </a>
                             </li>
                             <li>
                                 <a href="<?= link_tuvan;?>"> Tư <br>    vấn </a>
                             </li>
                         </ul>
                     </div>
        </div>
        <footer>
            <div class="khoi1_ft">
                 <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/logo_f.png" alt="" />
            </div>
            <div class="khoi2_ft">
                <div class="nd_khoi1ft">
                    <a href="<?= link_tuvan;?>">
                     <div class="icon_ft">
                         <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/icon_one.png" alt="" />
                     </div>
                    </a>
                    <a href="tel:19002622"> 
                     <div class="icon_ft">
                         <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/icon_hai.png" alt="" />
                     </div>
                     </a>
                     <a href="<?= link_tuvan;?>">
                     <div class="icon_ft">
                         <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/icon_ba.png" alt="" />
                     </div>
                     </a>
                     <a href="skype:phongkhamdakhoagiaiphong@gmail.com?chat">
                     <div class="icon_ft">
                         <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/icon_bon.png" alt="" />
                     </div>
                     </a>
                     <a href="https://www.facebook.com/phongkhamdakhoagiaiphong/">
                     <div class="icon_ft">
                         <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/icon_nam.png" alt="" />
                     </div>
                     </a>
                     <a href="http://khamnamkhoahanoi.vn/mobile/cd6/lo-trinh-kham/">
                     <div class="icon_ft">
                         <img class="img-responsive" src="http://phongkhamgiaiphong.com/public/mobile/images_t/icon_sau.png" alt="" />
                     </div>
                     </a>
                </div>
            </div>
            <div class="khoi3_ft">
                 <div class="text_ft_1 text-center">
                      ĐỊA CHỈ: 709 Giải Phóng - Hoàng Mai - Hà Nội <br />
                      EMAIL: phongkhamdakhoagiaiphong@gmail.com
                 </div>
            </div>
        </footer>
    </div>
    <script>
        //fixheight
        jQuery.fn.vjustify = function () {
        var maxHeight = 0;
        this.each(function () {
            if (this.offsetHeight > maxHeight) {
                maxHeight = this.offsetHeight;
            }
        });
        this.each(function () {
            jQuery(this).height(maxHeight + "px");
            if (this.offsetHeight > maxHeight) {
                jQuery(this).height((maxHeight - (this.offsetHeight - maxHeight)) + "px");
            }
        });
    }
    ;
    function runOnLoad(f) {
        if (runOnLoad.loaded)
            f();
        // If already loaded, just invoke f() now.
        else
            runOnLoad.funcs.push(f);
        // Otherwise, store it for later
    }

    runOnLoad.funcs = [];
    // The array of functions to call when the document loads
    runOnLoad.loaded = false;
    // The functions have not been run yet.

    runOnLoad.run = function () {
        if (runOnLoad.loaded)
            return;
        // If we've already run, do nothing

        for (var i = 0; i < runOnLoad.funcs.length; i++) {
            try {
                runOnLoad.funcs[i]();
            } catch (e) {
                / An exception in one function shouldn't stop the rest /
            }
        }

        runOnLoad.loaded = true;
        // Remember that we've already run once.

        delete runOnLoad.funcs;
        // But don't remember the functions themselves.
        delete runOnLoad.run;
        // And forget about this function too!
    }
    ;

    // Register runOnLoad.run() as the onload event handler for the window
    if (window.addEventListener)
        window.addEventListener("load", runOnLoad.run, false);
    else if (window.attachEvent)
        window.attachEvent("onload", runOnLoad.run);
    else
        window.onload = runOnLoad.run;

    runOnLoad(function () {
        jQuery(".box1").vjustify();

    });
</script>
</body>
</html>