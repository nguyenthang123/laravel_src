@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<h1 style="display: none">phòng khám đa khoa giải phóng hà nội chữa bệnh uy tín</h1>
<div class="row" style="margin-top: 60px;">
    <div id="et-slider-wrapper" class="">
        <div id="et-slides">
            <a  href="<?= link_tuvan;?>">
                <div class="et-slide" style="background-image: url(/images/banner.jpg);"></div>
            </a>
        </div>
    </div>
</div>
<!--body1-->
<div class="main1">
    <div class="box1">
        <div class="box1_left" data-300="margin-left:-500px; opacity:0;filter:alpha(opacity=0);" data-500="margin-left:0px; opacity:1;filter:alpha(opacity=100);">
            <p style="text-indent:2em;text-align: justify;">
                Phòng khám đa khoa Giải Phóng là một phòng khám chuyên nghiệp hiện đại hóa, là nơi tập trung tổng thể có lâm sàng, phòng chống, bảo vệ sức khỏe, phụ hồi... Nhiều năm nay, phòng khám đa khoa Giải Phóng luôn lấy phương hướng nghiên cứu "điều trị xâm lấn tối thiểu", không ngừng lấy việc điều trị tiên tiến quốc tế vận dụng vào trong thực tiễn "điều trị xâm lấn tối thiểu", do đó kỹ thuật xâm lấn tối thiểu của phòng khám đa khoa Giải Phóng ngày càng phát triển tiến bộ hơn. Phòng khám luôn kiên trì tôn chỉ phục vụ "bệnh nhân là số 1, bệnh nhân là hàng đầu", điều trị chuyên nghiệp các bệnh: nam khoa, phụ khoa, trực tràng hậu môn, bệnh xã hội, hôi nách, dạ dày... Hiện tại phòng khám triển khai dịch vụ làm việc ngoài giờ hành chính, toàn bộ quá trình dịch vụ có người hướng dẫn...khái niệm và phương pháp phục vụ tận tâm chuyên nghiệp, cung cấp cho người bệnh dịch vụ chẩn trị ấm cúng như gia đình
            </p>
            <p style="margin-top: 0px;">
                <a class="more"  href="<?= link_tuvan;?>" target="_blank">Tìm hiểu nhiều hơn</a>
            </p>
        </div>
        <div class="box1_right" data-300="margin-left:1120px; opacity:0;filter:alpha(opacity=0);" data-500="margin-left:647px; opacity:1;filter:alpha(opacity=100);">
            <img src="/images/hapk.jpg" alt="hình ảnh phòng khám" >
            <div class="web-y">
                <style>
                    .td_right{
                        color: #000000;
                    }
                </style>
                <form action="" enctype="multipart/form-data" method="post" name="frm_dangkyhome" id="frm_dangkyhome">
                    <input name="_token" hidden value="{!! csrf_token() !!}"/>
                    <table style="width:100%;" cellpadding="0" cellspacing="1">
                        <tbody>
                        <tr>
                            <td align="right" valign="top" class="td_left">Họ và tên <span>(*)</span>:</td>
                            <td class="td_right">
                                <input type="text" name="hoten" id="hoten" class="intxt" value="" placeholder="Trần văn A">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="top" class="td_left">Giới tính :</td>
                            <td class="td_right">
                                <input type="radio" name="gioitinh" class="np" style="width: 30px;" value="Nam" checked="">Nam
                                <input type="radio" name="gioitinh" class="np" style="width: 30px;" value="Nữ">Nữ
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="top" class="td_left">Khoa khám :</td>
                            <td class="td_right">
                                <select name="khoakham" style="color: #000000;">
                                    <?php foreach(danhmuc() as $val){?>
                                    <option value="<?= $val['name'];?>"><?= $val['name'];?></option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="top" class="td_left">Thời gian :</td>
                            <td class="td_right">
                                <input type="text" name="thoigian" id="thoigian2" class="intxt" value="" placeholder="<?= date('Y-m-d');?>">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="top" class="td_left">Số điện thoại <span>(*)</span>:</td>
                            <td class="td_right">
                                <input type="text" name="dienthoai" id="dienthoai" class="intxt" value="">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="top" class="td_left">Mô tả :</td>
                            <td class="td_right">
                                <textarea name="mota" id="gh_bz" style="height:34px; font-size:12px;resize:none;" placeholder="Nội dung mô tả" ></textarea>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div align="center" style="height:30px;">
                        <blink id="ajaxview_home" class="blink" style="color: rgb(255, 0, 0); font-size: 13px; font-weight: bold; visibility: visible;"></blink><br>
                        <input type="button" name="dangkyhome" id="dangkyhome" value="đặt hẹn" class="coolbg">
                    </div>
                </form>
            </div>
            <script>
                $(function () {
                    $("#thoigian2").datepicker({dateFormat: "yy-mm-dd"});
                });
                $(document).ready(function (e) {
                    $("#dangkyhome").on("click", function (e) {
                        e.preventDefault();
                        var hoten = document.forms['frm_dangkyhome']['hoten'].value;
                        var dienthoai = document.forms['frm_dangkyhome']['dienthoai'].value;
                        var khoakham = document.forms['frm_dangkyhome']['khoakham'].value;
                        var thoigian = document.forms['frm_dangkyhome']['thoigian'].value;
                        var mota = document.forms['frm_dangkyhome']['mota'].value;
                        var url=document.URL;
                        if(hoten=="" || dienthoai==""){
                            alert('Họ tên và số điện thoại không được để trống.');
                        }else{
                            var parameter='hoten='+hoten+'&dienthoai='+dienthoai+'&khoakham='+khoakham+'&thoigian='+thoigian+'&uri='+url+'&mota='+mota;
                            var link_dangky='http://phongkhamgiaiphong.com/dangky.php?'+parameter;
                            window.location.href= link_dangky;
                            return false;
                        }
                    });
                });
                blink('blink');
            </script>
        </div>
    </div>
</div>
<!--body2-->
<div class="main2">
    <div class="m2mast" data-850="width:0%" data-1450="width:100%" ></div>
    <h3 data-700="margin-top:200px;" data-1100="margin-top:0;"><img src="/images/t2.png"></h3>
    <div class="main2_wrap">
        <div class="main2_box">
            <div class="m2list1" data-1250="margin-top:200px; margin-left:400px;opacity:0;filter:alpha(opacity=0);" data-1450="margin-top:0px; margin-left:0px;opacity:1;filter:alpha(opacity=100);" >
                <h4>Hình thức chẩn trị <span>quy mô</span></h4>
                <p>Phòng khám có quy mô chẩn trị quy phạm "phân loại khoa học, kiểm tra quy phạm, biện chứng lâm sàng, điều trị thích hợp", hình thức chẩn trị quy phạm đặc biệt, nhận được sự ủng hộ của người bệnh và giới trong ngành. </p>
            </div>
            <div class="m2list2" data-1250="margin-top:200px; margin-left:400px;opacity:0;" data-1450="margin-top:0px; margin-left:666px;opacity:1;" >
                <h4>Chẩn trị <span>quốc tế hóa</span></h4>
                <p>Phòng khám 168 căn cứ vào thể chất của mỗi bệnh nhân để tiến hành điều chỉnh phục hồi, sau khi điều trị và thủ thuật ở phương diện phục hồi sức khỏe, bác sỹ phòng khám hình thành tổng thể phương án điều trị đặc biệt.</p>
            </div>
            <div class="m2list3" data-1250="margin-top:200px; margin-left:400px;opacity:0;" data-1450="margin-top:280px; margin-left:0px;opacity:1;" >
                <h4>Bác sĩ <span>có y đức</span></h4>
                <p>Hiện có 10 bác sỹ khám và bác sỹ điều trị với trên 20 năm kinh nghiệm lâm sàng. Phòng khám 168 căn cứ vào tình trạng của bệnh nhân, thực hiện điều trị thích hợp, tuyệt đối không đưa ra liệu trình không cần thiết hoặc thu chi phí ngoài điều trị, để bạn cảm thấy an tâm về số tiền mình bỏ ra.</p>
            </div>
            <div class="m2list4" data-1250="margin-top:200px; margin-left:400px;opacity:0;" data-1450="margin-top:280px; margin-left:666px;opacity:1;" >
                <h4>dịch vụ <span>khám ngoài giờ</span></h4>
                <p style="word-spacing: -1px;">Dịch vụ khám ngoài giờ là phòng khám 168 đặc biệt triển khai điều trị cho những bệnh nhân ban ngày không có thời gian tới khám. Toàn bộ quá trình: đăng ký, bác sỹ khám, xét nghiệm kiểm tra, truyền dịch, thủ thuật, pha thuốc, thu phí...đều hoạt động bình thường, chất lượng y tế và dịch vụ luôn được đảm bảo.</p>
            </div>
        </div>
    </div>
</div>
<!--body3-->
<div class="main3">
    <h3 data-2000="margin-top:200px;" data-2200="margin-top:0;"  ><img src="/public/frontend/images/home/t3.png" ></h3>
    <div class="main3_box" style="width: 710px;margin-top: 100px;">
        <div class="main3_box1">
            <div class="main3_box_item">
                <a href="<?= site_benhnamkhoa;;?>">
                    <div class="ico">
                        <img class="ico" src="/images/main3_ico_nk.png" alt="namkhoa">
                    </div>
                    <div class="ico2">
                        <img class="ico2" src="/images/main3_ico_nk2.png" alt="namkhoa">
                    </div>
                    <p>Nam khoa</p>
                </a>
            </div>
            <!--<div class="main3_box_item">
                <a href="<?/*= site_benhphukhoa;*/?>">
                    <img src="/public/frontend/images/main3/main3_ico_pk.png" alt="namkhoa" style="padding-top: 5px;">
                    <p>Phụ khoa</p>
                </a>
            </div>-->
            <div class="main3_box_item">
                <a href="<?= site_benhtri;?>">
                    <!--<img src="/public/frontend/images/main3/main3_ico_bt.png" alt="namkhoa" style="padding-top: 10px;">-->
                    <div class="ico">
                        <img class="ico" src="/images/main3_ico_bt.png" alt="namkhoa" style="padding-top: 10px;">
                    </div>
                    <div class="ico2">
                        <img class="ico2" src="/images/main3_ico_bt2.png" alt="namkhoa" style="padding-top: 10px;">
                    </div>
                    <p>Bệnh trĩ</p>
                </a>
            </div>
            <div class="main3_box_item">
                <a href="<?= site_benhxahoi;?>">
                    <!--<img src="/public/frontend/images/main3/main3_ico_bxh.png" alt="namkhoa" style="padding-top: 2px;">-->
                    <div class="ico">
                        <img class="ico" src="/images/main3_ico_bxh.png" alt="namkhoa" style="padding-top: 2px;">
                    </div>
                    <div class="ico2">
                        <img class="ico2" src="/images/main3_ico_bxh2.png" alt="namkhoa" style="padding-top: 2px;">
                    </div>
                    <p>Bệnh xã hội</p>
                </a>
            </div>
        </div>
        <div class="main3_box2">
            <div class="main3_box_item">
                <a href="<?= site_benhtaimuihong;?>">
                    <!--<img src="/public/frontend/images/main3/main3_ico_tmh.png" alt="namkhoa" style="padding-top: 13px;">-->
                    <div class="ico">
                        <img class="ico" src="/images/main3_ico_tmh.png" alt="namkhoa" style="padding-top: 13px;">
                    </div>
                    <div class="ico2">
                        <img class="ico2" src="/images/main3_ico_tmh2.png" alt="namkhoa" style="padding-top: 13px;">
                    </div>
                    <p>Bệnh tai mũi họng</p>
                </a>
            </div>
            <div class="main3_box_item">
                <a href="<?= site_benhhoinach;?>">
                    <!--<img src="/public/frontend/images/main3/main3_ico_bhn.png" alt="namkhoa" style="padding-top: 22px;">-->
                    <div class="ico">
                        <img class="ico" src="/images/main3_ico_bhn.png" alt="namkhoa" style="padding-top: 22px;">
                    </div>
                    <div class="ico2">
                        <img class="ico2" src="/images/main3_ico_bhn2.png" alt="namkhoa" style="padding-top: 22px;">
                    </div>
                    <p>Bệnh hôi nách</p>
                </a>
            </div>
            <!--<div class="main3_box_item">
                <a href="<?/*= site_benhdaday;*/?>">
                    <img src="/public/frontend/images/main3/main3_ico_dd.png" alt="namkhoa" style="padding-top: 6px;">
                    <p>Bệnh dạ dày</p>
                </a>
            </div>-->

        </div>
    </div>
</div>
<!--body4-->
<div class="main4">
    <h3 data-2800="margin-top:200px;" data-3100="margin-top:0;"  ><img src="/public/frontend/images/home/t4.png" alt="quy trinh kham benh" ></h3>
    <div class="main4_box">
        <ul>
            <li class="op1" data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:0;opacity:1;" >
                <h4>Đăng ký hẹn khám</h4>
                <p>Người bệnh thông qua hẹn khám trực tuyến trên mạng hoặc gọi vào đường dây nóng: <b><?= phone1;?> - <?= phone2;?></b> để tiến hành đăng ký khám, tư vấn hỏi đáp một bác sỹ một bệnh nhân.</p>
            </li>
            <!--<li class="op2" data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:230px;opacity:1;" style="margin-left: 0px;" >-->
            <li class="op2" data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:0px;opacity:1;" style="margin-left: 0px;">
                <h4>Bác sĩ hỏi bệnh</h4>
                <p>Bác sỹ thông qua hỏi bệnh tình người bệnh để chẩn đoán bệnh, giám định các thông tin có liên quan, đưa ra phương án điều trị cá nhân hóa và những mục cần thu phí...</p>
            </li>
            <!--<li class="op3" data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:440px;opacity:1;" >-->
            <li class="op3" data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:0px;opacity:1;" >
                <h4 style="letter-spacing: -1px;">Chọn phương án điều trị</h4>
                <p>Lựa chọn cho bệnh nhân phương án điều trị thích hợp, giúp bệnh nhân đạt được kết quả tốt, bao gồm sắp xếp bác sỹ chủ trị, y tá chăm sóc, phòng ở và ăn uống...</p>
            </li>
            <!--<li class="op4"  data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:670px;opacity:1;" >-->
            <li class="op4"  data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:0px;opacity:1;" >
                <h4>Tiếp nhận điều trị</h4>
                <p>Bệnh nhân tuân theo chỉ dẫn bác sỹ, tiếp nhận điều trị. Bác sỹ chủ trị và y tác phục vụ toàn bộ quá trình. Đê bạn có thể nhận được dịch vụ y tế chuyên nghiệp hơn.</p>
            </li>
            <!--<li class="op5" style="border:none; " data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:890px;opacity:1;" >-->
            <li class="op5" style="border:none; " data-2700="margin-left:500px;opacity:0;" data-3000="margin-left:0px;opacity:1;" >
                <h4>Theo sát bệnh nhân</h4>
                <p>Sau điều trị thông qua gọi điện thoại hoặc đến trực tiếp phòng khám để được tư vấn cách hồi phục nhanh, chăm sóc và tránh tái phát. Để bạn đạt được hiệu quả điều trị lý tưởng.</p>
            </li>
        </ul>
    </div>
</div>
<!--body5-->
<div class="main5">
    <h3 data-3000="margin-top:200px;" data-3300="margin-top:0;"  ><img src="/images/t6.png" ></h3>
    <div class="main5_box" data-3300="opacity:0;" data-3700="opacity:1;" >
        <div id="yc-mod-slider">
            <div class="wrapper">
                <div id="slideshow" class="box_skitter fn-clear">
                    <ul>
                        <!--<li>
                            <div style="background: #856ac4;">
                                <div style="float: left;width: 300px;height: 400px;display: block;background: red;">
                                    <p>Phòng khám đa khoa 168 Hà Nội là phòng khám chuyên nghiệp chính quy ở Hà Nội, do sở Y tế, sở Công thương, sở thuế nghiêm khắc thẩm định phê chuẩn. Nhận được sự tin tưởng của đông đảo bệnh nhân, vì sức khỏe của bạn và gia đình bạn chúng tôi đang không ngừng lỗ lực.</p>
                                </div>
                                <div style="float: left;width: 400px;height: 400px;">
                                </div>
                                <div style="float: left;width: 300px;height: 400px;">

                                </div>
                            </div>
                        </li>-->
                        <li><a  href="<?= link_tuvan;?>" target="_blank"><img src="/images/luachon1.png" ></a></li>
                        <li><a  href="<?= link_tuvan;?>" target="_blank"><img src="/images/luachon1.png" ></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--body6-->
<div class="main6">
    <h3 data-3500="margin-top:200px;" data-3700="margin-top:0;"  ><img src="/public/frontend/images/home/t7.png" ></h3>
    <div class="main6_box">
        <div class="main6_img">
            <div class="main6_img1">
                <img src="/images/mt1.jpg" alt="moi truong">
            </div>
            <div class="main6_img2">
                <img src="/images/mt2.jpg" alt="moi truong">
            </div>
        </div>
        <ul>
            <li data-4200="margin-top:100px;" data-4600="margin-top:10px;" >
                <img src="/public/frontend/images/home/mt9.jpg" alt="moi truong phong kham">
            </li>
            <li data-4200="margin-top:200px;" data-4600="margin-top:10px;" >
                <img src="/public/frontend/images/home/mt10.jpg" alt="moi truong phong kham">
            </li>
            <li data-4200="margin-top:300px;" data-4600="margin-top:10px;" >
                <img src="/public/frontend/images/home/mt11.jpg" alt="moi truong phong kham">
            </li>
            <li data-4200="margin-top:400px;" data-4600="margin-top:10px;" >
                <img src="/public/frontend/images/home/mt12.jpg" alt="moi truong phong kham">
            </li>
        </ul>
    </div>
</div>
<!--body7-->
<div class="main7">
    <div class="main7_box">
        <div class="txt1" data-4000="left:0%;" data-5000="left:-60%;" ></div>
        <div class="txt2" data-4000="left:50%;" data-5000="left:100%;"></div>
        <div class="quancenter" data-4000="opacity:0;  transform[bounce]:rotate(0deg);" data-5000="opacity:1;transform[bounce]:rotate(360deg);" ></div>
    </div>
</div>
@stop()