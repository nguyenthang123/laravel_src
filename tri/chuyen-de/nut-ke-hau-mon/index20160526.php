<?php include_once('../../configuration.php');
$JConfig= new JConfig();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Nứt kẽ hậu môn</title>
    <link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <base target="_blank" />
</head>
<body>
<?php
$JConfig->Addtop();
?>
<?php
$domain=$JConfig->domain;
$linktuvan=$JConfig->link_tuvan;
$link_tuvan_right=$JConfig->link_tuvan_right;
$skype=$JConfig->link_skype;
?>
<div class="container-fluid">
    <div class="row">
        <div class="main_item">
            <img src="images/logo.jpg" class="img-responsive">
            <div class="btn tc_tv" style="float: right;margin-top: -22px;">
                <a href="<?php echo $domain;?>"><img src="img/btn_trangchu.png" style="position: relative;padding-right: 20px;"></a>
                <a href="<?php echo $linktuvan;?>"><img src="img/btn_tuvan.png" style="position: relative;"></a>
            </div>
        </div>
    </div>
    <div class="row banner" style="background: url('images/bg_banner.jpg') repeat-x">
        <div class="banner2">
            <a href="<?php echo $linktuvan;?>">Tư vấn</a>
        </div>
    </div>
    <div class="row no1" style="background: #ffeddb;">
        <div class="main_item">
            <div class="part1 bg_trang" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                <div class="clear"></div>
                <div class="row title_item">
                    <div class="img_no1 col-sm-2 col-md-2">
                        <img src="img/ico_no1.png">
                    </div>
                    <div class="col-sm-7 col-md-7" style="padding-left: 0px;">
                        <h3>Nứt kẽ hậu môn điều trị như thế nào?</h3>
                        <p>Trong quảng cáo đại chúng, tránh bị những phòng khám phi pháp lừa gạt</p>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <a href="<?php echo $linktuvan;?>" class="label bg_do"> >> Bác sỹ tư vấn</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-2">
                        <img src="img/ico_nguoi.png">
                    </div>
                    <div class="col-md-7 col-sm-7" style="padding-left: 0px;padding-right:0px;">
                        <div class="row no1_thongtin">
                            <div class="col-sm-3 col-md-3 no1_tt_item">
                                <div class="no1_img">
                                    <img src="images/no1_1.jpg">
                                </div>
                                <div class="no1_tomtat">
                                    Một phút điều trị bệnh nứt kẽ hậu môn, không khỏi không lấy tiền
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 no1_tt_item">
                                <div class="no1_img">
                                    <img src="images/no1_2.jpg">
                                </div>
                                <div class="no1_tomtat">
                                    Bí kíp cổ truyền điều trị bệnh rò hậu môn, đảm bảo điều trị khỏi!
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 no1_tt_item">
                                <div class="no1_img">
                                    <img src="images/no1_3.jpg">
                                </div>
                                <div class="no1_tomtat">
                                    Phương thuốc bí truyền, bôi là khỏi!
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 no1_tt_item">
                                <div class="no1_img">
                                    <img src="images/no1_4.jpg">
                                </div>
                                <div class="no1_tomtat">
                                    Chú hàng xóm hàng ngày uống thuốc XXX, một tháng là khỏi bệnh
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3" style="text-align: center">
                        <img src="img/no1_uongthuoctuytien.jpg" class="img-responsive">
                        <div class="clear"></div>
                        <a href="<?php echo $linktuvan;?>" class="label bg_xanhlo btn_nomal"> Tôi phải làm sao</a>
                    </div>
                </div>
                <div class="row no1_timkiem">
                    <h3>Có phải bạn đang tìm kiếm?</h3>
                    <!--<div class="col-sm-1 col-md-1"></div>-->
                    <div class="col-sm-9 col-md-9">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 no_mar_pad">
                                <img src="images/no1_tk1.jpg">
                                <p>Thao tác thủ thuật quy phạm hơn</p>
                            </div>
                            <div class="col-sm-3 col-md-3 no_mar_pad">
                                <img src="images/no1_tk2.jpg">
                                <p>Tiêu chuẩn phục hồi PAC, hồi phục nhanh hơn</p>
                            </div>
                            <div class="col-sm-3 col-md-3 no_mar_pad">
                                <img src="images/no1_tk3.jpg">
                                <p>Toàn bộ quá trình không đau, an toàn hơn</p>
                            </div>
                            <div class="col-sm-3 col-md-3 no_mar_pad">
                                <img src="images/no1_tk4.jpg">
                                <p>Nhanh chóng, không cần nằm viện, tiết kiệm chi phí</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <p style="font-size: 20px; margin-top: 30px;margin-bottom: 25px;">KỸ THUẬT <b style="color: red;">HCTP</b></p>
                        <p>
                            <a href="<?php echo $linktuvan;?>" class="label bg_xanhlo btn_nomal">Kỹ thuật HCTP là gì?</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="part2 bg_trang">
                <div class="row title_item">
                    <div class="img_no1 col-sm-2 col-md-2">
                        <img src="img/ico_no2.png">
                    </div>
                    <div class="col-sm-7 col-md-7" style="padding-left: 0px;">
                        <h3>5 ưu thế lớn của kỹ thuật xâm lẫn tối thiệu HCTP</h3>
                        <p>Sau khi đã trải qua nhiều phương pháp và so sánh thì kỹ thuật HCPT là lựa chọn tốt nhất</p>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <a href="<?php echo $linktuvan;?>" class="label bg_do"> >> Bác sỹ tư vấn</a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                    <div class="col-sm-9 col-md-9" style="width: 685px;">
                        <div class="row no2_utkt">
                            <label>Ưu thế kỹ thuật</label>
                            <span>Độ kiểm soát tốt, không than hóa, không đóng vảy, mạch máu khép kín. thời gian thực hiện ngắn, hiệu quả cao: vết thương hoại tử, khô lại, đóng vảy và bong ra.</span>
                        </div>
                        <div class="row no2_kttt">
                            <p class="kttt_text kttt_text1">
                                Áp dụng hệ thống trực quan kỹ thuật số định vị chính xác vị trí vùng bệnh, hỗ trợ thủ thuật tiến hành thuận lợi
                            </p>
                            <p class="kttt_text kttt_text2">
                                Độ kiểm soát tốt, không than hóa, không đóng vảy, mạch máu đóng kín
                            </p>
                            <p class="kttt_text kttt_text3">
                                Sau thủ thuật vết thương hồi phục nhanh, không ảnh hưởng tới chức năng bình thường của hậu môn.
                            </p>
                            <p class="kttt_text kttt_text4">
                                Trong thời gian ngắn nhất đạt được hiệu quả hài lòng: vùng bệnh bị hoại tử, đóng vảy, bong ra.
                            </p>
                            <p class="kttt_text kttt_text5">
                                Chỉ cần 15-20 phút, trong quá trình thủ thuật tiến hành gây mê hoặc gây tê cục bộ, người bệnh sẽ ít đau hơn.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 no2_right no_mar_pad">
                        <img src="images/no2_img_right.jpg">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row no2_bsnhacnho">
                    <div class="col-sm-2 col-md-2">
                        <img src="img/no1_imgbacsy.png" class="img-responsive">
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <p style="color: red;margin-top: 10px;"><b>Bác sỹ nhắc nhở:</b></p>
                        <p>Nếu xác định chính xác loại trĩ mình mắc phải và mức độ bệnh, bất luận là nặng hay không cũng phải đến sớm bệnh viện để kiểm tra điều trị.</p>
                        <p> <a href="<?php echo $linktuvan;?>" style="float: right;margin-right: 30px;color: red;font-weight:600;"> >> Tư vấn trực tuyến</a></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="part3 bg_trang">
                <div class="clear"></div>
                <div class="row title_item">
                    <div class="img_no1 col-sm-2 col-md-2">
                        <img src="img/ico_no3.png">
                    </div>
                    <div class="col-sm-7 col-md-7" style="padding-left: 0px;">
                        <h3>CÁC TRƯỜNG HỢP ĐÃ ĐIỀU TRỊ KHỎI Ở PHÒNG KHÁM</h3>
                        <p>Sau khi khỏi bệnh, bạn có thể cảm nhận được niềm vui sức khỏe</p>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <a href="<?php echo $linktuvan;?>" class="label bg_do"> >> Bác sỹ tư vấn</a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                    <div class="col-sm-7 col-md-7 no3_left">
                        <p class="no3_ph_le no3_ph1">Không còn lo lắng về bất kỳ điều gì, yên tâm chờ đợi con chào đời</p>
                        <p class="no3_ph_chan no3_ph2">Uống bia, rượu trắng, rượu đỏ... Đều không sợ bị ảnh hưởng</p>
                        <p class="no3_ph_le no3_ph3">Không còn đau nữa, trước mặt sếp không còn xấu hổ nữa</p>
                        <p class="no3_ph_chan no3_ph4">Khỏi bệnh rồi, công việc nhẹ nhàng hơn, không còn sợ phải ngồi nhiều nữa.</p>
                        <p class="no3_ph_le no3_ph5">Từ khi bị nứt kẽ hậu môn, lái xe không thể tập trung tinh thần, nên có một lần chút nữa là xảy ra tại nạn</p>
                    </div>
                    <div class="col-sm-4 col-md-4">
                            <img src="images/no3_right.jpg">
                        <a href="<?php echo $linktuvan;?>">
                            <img src="images/no3_right2.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <a href="<?php echo $linktuvan;?>">
                <img src="images/no3_tuvan.jpg" style="margin-top: 10px;margin-bottom: 10px;">
            </a>
            <!--coppy-->
            <div class="duytri_content" style="float: left;width: 100%;">
                <div class="title">
                    <img src="img/ico_traitim.png" style="float: left;"><p>Dịch vụ y tế chuyên nghiệp hơn</p>
                </div>
                <div class="clear bg_trang"></div>
                <div class="row" style="background-color: white;">
                    <div class="col-lg-3">
                        <div class="phucvu_content">
                            <img src="images/phucvu1.jpg" class="img-responsive">
                            <p>
                                Hẹn khám qua mạng miễn phí đăng kí khám, tiết kiệm thời gian, quá trình khám bệnh đơn giản, thuận tiện.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="phucvu_content">
                            <img src="images/phucvu2.jpg" class="img-responsive">
                            <p>
                                Kiểm tra trước thủ thật, sau thủ thuật đều có nhân viên y tế theo dõi, có trách nhiệm đối với sức khỏe của người bệnh.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="phucvu_content">
                            <img src="images/phucvu3.jpg" class="img-responsive">
                            <p>
                                Một bác sỹ một bệnh nhân một phòng, bảo mật thông tin cá nhân cho người bệnh, giúp bệnh nhân yên tâm khám bệnh.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="phucvu_content">
                            <img src="images/phucvu4.jpg" class="img-responsive">
                            <p>
                                Môi trường phòng khám sạch sẽ gọn gàng, đảm bảo vệ sinh đồng thời giúp tâm trạng của người bệnh cảm thấy tốt hơn.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="phucvu_content">
                            <img src="images/phucvu5.jpg" class="img-responsive">
                            <p>
                                Quy phạm hóa kiểm tra trước thủ thuật, đảm bảo mỗi hạng mục kiểm tra đều chính xác không sai sót, giúp người bệnh yên tâm hơn.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="phucvu_content">
                            <img src="images/phucvu6.jpg" class="img-responsive">
                            <p>
                                Bác sỹ chuyên ngành với hơn 20 năm kinh nghiệp lâm sàng trực tiếp thăm khám, chỉ định phương án chẩn đoán điều trị hợp lý nhất.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="phucvu_content">
                            <img src="images/phucvu7.jpg" class="img-responsive">
                            <p>
                                Phòng thủ thuật sạch sẽ được vô trùng, đảm bảo an toàn thủ thuật cho mỗi bệnh nhân.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="phucvu_content">
                            <img src="images/phucvu8.jpg" class="img-responsive">
                            <p>
                                Quá trình chẩn đoán điều trị tiêu chuẩn quy phạm, sau thủ thuật điều chỉnh phương án khoa học có hiệu quả, phục hồi nhanh hơn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end coppy-->
        <!--coppy-->
            <div class="clear bg_trang"></div>
            <div class="row duytri_content" style="float: left;width: 100%;">
                <div class="title">
                    <img src="img/ico_phongkham.png" style="float: left;"><p>Luôn giúp bệnh nhân yên tâm hài lòng</p>
                </div>
            </div>
            <div class="row dm_noidung">
                <div class="row anh-phong-kham-1" style="margin-top:20px;">
                    <div class="col-md-9 anh-phong-kham-2" style="padding-right: 0;padding-left: 0">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/ha1.jpg" alt="phong kham 168">
                            </div>
                            <div class="col-md-4">
                                <img src="http://daday168.com/public/frontend/images/11.jpg" alt="le tan">
                            </div>
                            <div class="col-md-4">
                                <img src="http://daday168.com/public/frontend/images/22.jpg" alt="phong kham 1">
                            </div>
                            <div class="col-md-8">
                                <img src="http://daday168.com/public/frontend/images/44.jpg" alt="phong kham 2">
                            </div>
                            <div class="col-md-4">
                                <img src="http://daday168.com/public/frontend/images/55.jpg" alt="phong kham 3">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="http://daday168.com/public/frontend/images/33.jpg" alt="thu ngan" style="width: 232px;height: 300px;">
                    </div>
                </div>
            </div>
        <!--end coppy-->
        <div class="clear bg_trang"></div>
        </div>
    </div>
    <div class="footer">
        <!--div footer-->
        <div class="footer_content">
            <div class="footer_left">
                <div class="f_left">
                    <img src="img/footer/logo_footer.png">
                </div>
            </div>
            <div class="footer_kedoi"><img src="img/footer/chia_footer.jpg"></div>
            <div class="footer_right">
                <div class="f_right">
                    <ul>
                        <li>
                            <a href="<?php echo $linktuvan;?>" data-for="ico_tuvan">
                                <img src="img/footer/ico_tuvan.png"><br><b>Tư vấn</b>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $linktuvan;?>" data-for="ico_henkham">
                                <img src="img/footer/ico_henkham.png"><br><b>Hẹn khám</b>
                            </a>
                        </li>
                        <li>
                            <a href="skype:bacsy_tuvan168?chat" data-for="ico_skype">
                                <img src="img/footer/ico_skype.png"><br><b>Skype</b>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $domain;?>" data-for="ico_trangchu">
                                <img src="img/footer/ico_trangchu.png"><br><b>Trang chủ</b>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clr"></div>
                <img src="img/footer/footer_right.png" style="float: left;margin-top: 10px;">
            </div>
        </div>
        <!--end div.footer-->
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        showtab("tab_text");
        $('.f_right ul li a').hover(function(){
            var it=$(this).attr('data-for') ;
            var it2='img/footer/'+it+'2.png';
            $(this).children('img').attr('src',it2)
        },function(){
            var it=$(this).attr('data-for') ;
            var it='img/footer/'+it+'.png';
            $(this).children('img').attr('src',it)
        });
    });
</script>
<script language="javascript" src="<?php echo $link_tuvan_right;?>"></script>

<script src="http://phongkham168.com/js/popup/tructranghaumon.js"></script>
<script src="http://phongkham168.com/js/popup/popup.js"></script>
</body>
</html>