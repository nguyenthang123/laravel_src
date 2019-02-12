<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/public/mobile/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="/public/mobile/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/public/mobile/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="/public/mobile/css/style.css" rel="stylesheet" type="text/css" />
    <script src="/public/mobile/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="/public/mobile/css/menumobi/jquery.mmenu.min.all.js" type="text/javascript"></script>
    <script type="text/javascript">        $(function () { $('nav#menu').mmenu(); });</script>
    <link href="/public/mobile/css/menumobi/jquery.mmenu.all.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?= m_popup();?>
<div id="page">
    <nav id="menu" style="    background: #007884;">
        <ul>
            <li><a href='<?= domain;?>'>Trang chủ</a></li>
            <li><a href='<?= site_benhnamkhoa;;?>'>Nam khoa</a></li>
            <li><a href='<?= site_benhtri;?>'>Bệnh trĩ</a></li>
            <li><a href='<?= site_benhxahoi;?>'>Bệnh xã hội</a></li>
            <li><a href='<?= site_benhtaimuihong;?>'>Bệnh tai mũi họng</a></li>
        </ul>
    </nav>
    <div class='container'>
        <div class='out1'>
        </div>
        <div class='out2'>
            <a href="#menu">
                <img class="item1" src="/public/mobile/images/menu.png" />
            </a><a href="tel:19002662">
                <img class="item2" src="/public/mobile/images/tel2.png" /></a>
        </div>
        <a href="<?= domain;?>">
            <img class="logo" src="/public/mobile/images/LOGO.png" /></a>
        <div class='out3'>
            <div class='row'>
                <div class='col-xs-6'>
                    <div class="box1 item1">
                        <a href="<?= site_benhnamkhoa;?>">
                            <img src="/public/mobile/images/i4.png" />
                        </a>
                        <div class='line'>
                        </div>
                        <h3>
                            Nam Khoa</h3>
                        <div class='box3'>
                            Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh
                            nghiệm thăm khám lâm sàng, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh nam
                            khoa
                        </div>
                        <div class='line2'>
                        </div>
                        <a href="<?= site_benhnamkhoa;?>" class="box2">Xem chi tiết</a>
                    </div>
                </div>
                <div class='col-xs-6'>
                    <div class="box1 item2">
                        <a href="<?= site_benhtri;?>">
                            <img src="/public/mobile/images/i3.png" />
                        </a>
                        <div class='line'>
                        </div>
                        <h3>
                            Bệnh Trĩ</h3>
                        <div class='box3'>
                            Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh
                            nghiệm thăm khám lâm sàng, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh Trĩ
                        </div>
                        <div class='line2'>
                        </div>
                        <a href="<?= site_benhtri;?>" class="box2">Xem chi tiết</a>
                    </div>
                </div>
                <div class='col-xs-6'>
                    <div class="box1 item3">
                        <a href="<?= site_benhxahoi;?>">
                            <img src="/public/mobile/images/i2.png" />
                        </a>
                        <div class='line'>
                        </div>
                        <h3>
                            Bệnh Xã Hội</h3>
                        <div class='box3'>
                            Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh
                            nghiệm thăm khám lâm sàng, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh xã hội
                        </div>
                        <div class='line2'>
                        </div>
                        <a href="<?= site_benhxahoi;?>" class="box2">Xem chi tiết</a>
                    </div>
                </div>
                <div class='col-xs-6'>
                    <div class="box1 item4">
                        <a href="<?= site_benhtaimuihong;?>">
                            <img src="/public/mobile/images/i1.png" />
                        </a>
                        <div class='line'>
                        </div>
                        <h3>
                            Tai Mũi Họng</h3>
                        <div class='box3'>
                            Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh
                            nghiệm thăm khám lâm sàng, vô cùng chuyên nghiệp trong lĩnh vực điều trị bệnh tai mũi họng
                        </div>
                        <div class='line2'>
                        </div>
                        <a href="<?= site_benhtaimuihong;?>" class="box2">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class='out4 row'>
                <a href="<?= domain;?>">Trang chủ</a> <a href="<?= site_benhnamkhoa;?>">Nam khoa</a> <a href="<?= site_benhtri;?>">Bệnh trĩ</a> <a href="<?= site_benhxahoi;?>">Bệnh xã hội</a><a href="<?= site_benhtaimuihong;?>">Tai mũi họng</a>
            </div>
            <a href="<?= rewrite_number_phone(phone1);?>">
                <img class="tel1" src="/public/mobile/images/tel.png" /></a>
            <div class="out5">
                <a href="<?= domain;?>"><img src="/public/mobile/images/i5.png" /></a>
                <a href="<?= rewrite_number_phone(phone1);?>"><img src="/public/mobile/images/i6.png" /></a>
                <a href="<?= link_tuvan;?>">
                    <img src="/public/mobile/images/i7.png" /></a> <a href="<?= link_skype;?>">
                    <img src="/public/mobile/images/i8.png" /></a> <a href="<?= link_facebook;?>">
                    <img src="/public/mobile/images/i9.png" /></a>
            </div>
            <div class='out6'>
                ĐỊA CHỈ: 709 Giải Phóng - Hoàng Mai - Hà Nội - ĐIỆN THOẠI: 1900 2622 / 0166 352 8899<br />
                EMAIL: phongkhamdakhoagiaiphong@gmail.com
            </div>
        </div>
    </div>
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