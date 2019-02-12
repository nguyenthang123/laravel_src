@include('site.head')
<link rel="stylesheet" href="{!!  asset('public/css/khai/expert-1.css'); !!}">
<link rel="stylesheet" href="{!!  asset('public/css/khai/custorm.css'); !!}">
<div id="main1" class="home">
<?= cd_left(4);?>
<?php
if(isset($_GET["thietbi"])==true) {
	$thiet_bi= $_GET["thietbi"];
}
if(isset($thiet_bi)==true) {
	?>
		<script>
$(document).ready(function(){
		$(".equip-xx-c").css({"display": "none"});
		
        $("#<?php echo $thiet_bi ?>").css({"display": "block"});

		$( "#li_<?php echo $thiet_bi ?>" ).addClass( "equip-xx-tli-focus" );

});
</script>
	<?php
	
}else {
	
	?>
	<script>
		$(document).ready(function(){
			$( ".equip-xx-t li" ).first().css({"display": "block"});
			
			$( ".equip-xx-t li" ).first().addClass( "equip-xx-tli-focus" );
	});	
	</script>
	<?php
}
?>
<div class="main1-r"> 
<div class="expert-list-banner" id="expert-list-banner"><a href="<?= link_tuvan;?>"><img src="/public/images/khai/neiye_gg.jpg"/></a></div>
<div class="expert-list-wz">
    <h3>THIẾT BỊ</h3>
    <p><span><a style="margin: 0;
    color: #fff;" href="<?= domain;?>"> TRANG CHỦ </a></span><a href=''>THIẾT BỊ</a><a href=''></a> </p>
</div>
<div id="equip-xx-c">
<div id="thietbi1" class="equip-xx-c">
    <s><img src="/public/images/khai/equipment-pic1.jpg"/></s>
    <div class="equip-xx-cc"></div>
    <div class="equip-xx-cr">
        <h3>Máy thắt động mạch trĩ Doppler DG-HAL</h3>
        <span><em>giới thiệu thiết bị</em></span>
        <p>
            Thủ thuật thắt động mạch trĩ Doppler DG-HAL là kỹ thuật mới trong điều tri bệnh trĩ hiện nay trên thế giới. Dưới sự dẫn dắt của máy chẩn đoán Doppler siêu âm, tìm và định vị mạch máu tĩnh mạch của búi trĩ, chỉ tự tiêu có hiệu quả thắt và chặn mạch máu chảy vào búi trĩ, từ đó làm cho búi trĩ dần dần co lại và mất đi. Định vị chính xác, không cắt thành hậu môn, không ảnh hưởng đến chức năng của hậu môn... Mở ra cuộc cách mạng mới trong điều trị trĩ xâm lấn tối thiểu thế hệ mới không cần dao mổ.
        </p>
        <span><em>vi phạm điều trị</em></span>
        <p>Trĩ nội độ 1, độ 2, độ 3, độ 4, trĩ hỗn hợp có triệu chứng chủ yếu là chảy máu</p>
        <div id="equip-xx-cr-js">
            <div class="ind_con_button">
                <div class="leftarrow" onclick="scrollPicLeft('List1');"><img
                        src="/public/images/khai/equipment-al-jt1.jpg"/></div>
                <div class="rightarrow" onclick="scrollPicRight('List1');"><img
                        src="/public/images/khai/equipment-al-jt2.jpg"/></div>
            </div>
            <div class="logochange">
                <div class="logoarea" id="ISL_Cont">
                    <div class="biglogoarea">
                        <div id="List1">
                            <dl>
                                <dd>
                                    <a href="" ><img src="/public/images/khai/equipment-pic1-db1.jpg"/></a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="thietbi2" class="equip-xx-c" style="display:none;">
    <s><img src="/public/images/khai/equipment-pic2.jpg"/></s>
    <div class="equip-xx-cc"></div>
    <div class="equip-xx-cr">
        <h3>Máy cắt điện xâm lấn tối thiểu HCPT thế hệ thứ 5</h3>
        <span><em>Giới thiệu thiết bị</em></span>
        <p>
            Kỹ thuật mới máy cắt điện HCPT của Mỹ, là sự kết hợp máy trị liệu trực tràng hậu môn thế hệ mới, khi kẹp trị liệu cao tần kẹp búi trĩ, kẹp điện nhanh chóng làm cho tổ chức búi trĩ bốc hơi thành phần nước, điện trở kháng từ nhỏ thành lớn, khi điện trở kháng kết hợp với trở kháng truyền ra ngoài của máy (tổ chức búi trĩ khô lại), máy sẽ tự động phát ra âm thanh cảnh báo, đạt được hiệu quả lớn nhất của hệ thống trị liệu, thủ thuật ít chảy máu, ít đau đớn.
        </p>
        <span><em>Phạm vi điều trị</em></span>
        <p>Trĩ nội, trĩ ngoại, trĩ hỗn hợp, rò hậu môn, nứt kẽ hậu môn, áp xe hậu môn, polyp trực tràng...</p>
        <div id="equip-xx-cr-js">
            <div class="ind_con_button">
                <div class="leftarrow" onclick="scrollPicLeft('List2');"><img
                        src="/public/images/khai/equipment-al-jt1.jpg"/></div>
                <div class="rightarrow" onclick="scrollPicRight('List2');"><img
                        src="/public/images/khai/equipment-al-jt2.jpg"/></div>
            </div>
            <div class="logochange">
                <div class="logoarea" id="ISL_Cont">
                    <div class="biglogoarea">
                        <div id="List2">
                            <dl>
                                <dd>
                                    <a  href=""><img src="/public/images/khai/equipment-pic2-db1.jpg"/></a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="thietbi3" class="equip-xx-c" style="display:none;">
    <s><img src="/public/images/khai/equipment-pic3.jpg"/></s>

    <div class="equip-xx-cc"></div>
    <div class="equip-xx-cr">
        <h3>Máy soi trực tràng hậu môn điện tử DR.C của Hàn Quốc</h3>
        <span><em>Giới thiệu thiết bị</em></span>
        <p>
            Thiết bị này áp dụng kỹ thuật đầu quay và đầu rò sắc nét cao tần dùng trong y tế với độ nét 12 triệu pixel tiên tiến quốc tế, có tính ưu việt là chính xác trong kiểm tra, không sai sót, rõ nét... Có thể tập hợp các hình ảnh đối với vùng bị bệnh sâu nhất trong trực tràng hậu môn, chẩn đoán xác thực, bác sỹ và bệnh nhân có thể cùng quan sát, vị trí bệnh được phóng to gấp 10 lần, từ đó là căn cứ đáng tin cậy để tiến hành điều trị bệnh. Qua kiểm chứng lâm sàng Âu Mỹ, có thể kiểm tra chính xác ra 67 loại bệnh về trực tràng hậu môn. Mở ra giai đoạn mới trong việc “soi” các bệnh về trực tràng hậu môn.
        </p>
        <span><em>Phạm vi kiểm tra</em></span>
        <p>Đại tiện ra máu, đau hậu môn, sa búi trĩ, ngứa hậu môn, đại tiện khó khăn, polyp hậu môn...</p>

        <div id="equip-xx-cr-js">
            <div class="ind_con_button">
                <div class="leftarrow" onclick="scrollPicLeft('List3');"><img
                        src="/public/images/khai/equipment-al-jt1.jpg"/></div>
                <div class="rightarrow" onclick="scrollPicRight('List3');"><img
                        src="/public/images/khai/equipment-al-jt2.jpg"/></div>
            </div>
            <div class="logochange">
                <div class="logoarea" id="ISL_Cont">
                    <div class="biglogoarea">
                        <div id="List3">
                            <dl>
                                <dd>
                                    <a href=""><img src="/public/images/khai/equipment-pic3-db1.jpg"/></a>
                                </dd>
                            </dl>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="thietbi4" class="equip-xx-c" style="display:none;">
    <s><img src="/public/images/khai/equipment-pic4.jpg"/></s>

    <div class="equip-xx-cc"></div>
    <div class="equip-xx-cr">
        <h3>Thiết bị xâm lấn tối thiểu có tính lựa chọn TST</h3>
        <span><em>Giới thiệu thiết bị</em></span>
        <p style="font-size: 14px;
    margin-top: 5px;
    margin-bottom: -12px;">
            Kỹ thuật xâm lấn tối thiểu TST là một bước phát triển của kỹ thuật PPH, là sự thay thế kỹ thuật truyền thống trong điều trị loại bỏ bệnh về trực tràng hậu môn. Thủ thuật TST LÀ cơ chế hình thành của trĩ trong cơ thể, hình theo theo kết cấu bệnh lý sinh lý của búi trĩ, chính là sự thay đổi mang tính sinh lý bệnh lý, loại bỏ toàn bộ không tác động thành hậu môn, giữ lại niêm mạc và thành hậu môn bình thường, bảo vệ chức năng co bóp và cảm giác của vùng hậu môn. Đặc điểm này là thao tác thủ thuật đơn giản, sau thủ thuật ít đau, ít biến chứng, thời gian phục hồi nhanh, hiệu quả cao, người bệnh hài lòng...
        </p>
        <span><em>Phạm vi điều trị</em></span>

        <p>Trĩ nội đọ 2 đến độ 3, trĩ hỗn hợp, trĩ vòng, sa búi trĩ nghiêm trọng, sa trĩ...</p>

        <div id="equip-xx-cr-js">
            <div class="ind_con_button">
                <div class="leftarrow" onclick="scrollPicLeft('List4');"><img
                        src="/public/images/khai/equipment-al-jt1.jpg"/></div>
                <div class="rightarrow" onclick="scrollPicRight('List4');"><img
                        src="/public/images/khai/equipment-al-jt2.jpg"/></div>
            </div>
            <div class="logochange">
                <div class="logoarea" id="ISL_Cont">
                    <div class="biglogoarea">
                        <div id="List4">

                            <dl>
                                <dd><a  href=""
                                       ><img src="/public/images/khai/equipment-pic4-db2.jpg"/></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="thietbi5" class="equip-xx-c" style="display:none;">
    <s><img src="/public/images/khai/equipment-pic7.jpg"/></s>

    <div class="equip-xx-cc"></div>
    <div class="equip-xx-cr">
        <h3>Kỹ thuật cắt trĩ vòng xâm lấn tối thiểu PPH của Mỹ</h3>
        <span><em>Giới thiệu thiết bị</em></span>
        <p>Được xây dựng trên cơ sở học thuyết về đệm hậu môn, Năm 1993 phát triển thành công một loại phương pháp điều trị đặc biệt cho bệnh trĩ nặng độ 2-3, không làm tổn hại đến chức năng sinh lý bình thường của hậu môn và làm giảm đáng kể những đau đớn sau khi thực hiện thủ thuật bệnh trĩ hỗn hợp. Nó thông qua việc tiến hành loại bỏ lớp niêm mạc trực tràng và tổ chức tầng dưới của niêm mạc. Cả quá trình chỉ cần khoảng 30 phút. Sau thủ thuật có thể thấy ngay hiệu quả, hồi phục nhanh, không đau đớn.</p>
        <span><em>Phạm vi điều trị</em></span>
        <p>Trĩ nội, trĩ ngoại, trĩ hỗn hợp, trĩ vòng, sa búi trĩ nghiêm trọng, sa trĩ...</p>
        <div id="equip-xx-cr-js">
            <div class="ind_con_button">
                <div class="leftarrow" onclick="scrollPicLeft('List7');"><img
                        src="/public/images/khai/equipment-al-jt1.jpg"/></div>
                <div class="rightarrow" onclick="scrollPicRight('List7');"><img
                        src="/public/images/khai/equipment-al-jt2.jpg"/></div>
            </div>
            <div class="logochange">
                <div class="logoarea" id="ISL_Cont">
                    <div class="biglogoarea">
                        <div id="List7">
                            <dl>
                                <dd><a  href=""
                                       ><img src="/public/images/khai/equipment-pic7-db1.jpg"/></a></dd>
                            </dl>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="thietbi6" class="equip-xx-c" style="display:none;">
    <s><img src="/public/images/khai/equipment-pic8.jpg"/></s>

    <div class="equip-xx-cc"></div>
    <div class="equip-xx-cr">
        <h3>Kỹ thuật điều trị trĩ COOK của Mỹ</h3>
        <span><em>Giới thiệu thiết bị </em></span>
        <p>
           Kỹ thuật điều trị trĩ COOK là kỹ thuật thắt trĩ hiệu quả cao trên thế giới hiện nay, áp dụng thắt nút bằng cao su thiên nhiên, dùng áp suất 0.1MPa hút liên tục không gián đoạn tổ chức trĩ, trong thời gian ngắn làm cho tổ chức trĩ tách rời, hoại tử, khô lại, rụng ra, khi búi trĩ rụng ra lực hút áp suất tự động dừng lại, kỹ thuật này không dùng dao mổ, thời gian điều trị ngắn, an toàn đáng tin cậy, chảy máu ít, ít biến chứng và di chứng...
        </p>
        <span><em>Phạm vi điều trị</em></span>
        <p>Trĩ, rò hậu môn, bứt kẽ hậu môn, ngứa hậu môn, ẩm ướt hậu môn, áp xe hậu môn, mụn ở hậu môn, phì đại nhú hậu môn...</p>
        <div id="equip-xx-cr-js">
            <div class="ind_con_button">
                <div class="leftarrow" onclick="scrollPicLeft('List8');"><img
                        src="/public/images/khai/equipment-al-jt1.jpg"/></div>
                <div class="rightarrow" onclick="scrollPicRight('List8');"><img
                        src="/public/images/khai/equipment-al-jt2.jpg"/></div>
            </div>
            <div class="logochange">
                <div class="logoarea" id="ISL_Cont">
                    <div class="biglogoarea">
                        <div id="List8">
                            <dl>
                                <dd><a  href=""
                                       ><img src="/public/images/khai/equipment-pic8-db1.jpg"/></a></dd>
                            </dl>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="thietbi7" class="equip-xx-c" style="display:none;">
    <s><img src="/public/images/khai/equipment-pic9.jpg"/></s>

    <div class="equip-xx-cc"></div>
    <div class="equip-xx-cr">
        <h3>Kỹ thuật dung hòa đẳng li tử DNR</h3>
        <span><em>giới thiệu thiết bị</em></span>
        <p style="font-size:14px;">Thông qua chất truyền dẫn điện, trong vùng đẳng li tử xung quanh điện cực hình thành li tử hóa cao độ, phá vỡ móc xích phân tử trong tổ chức, làm cho phân tử tách rời, loại bỏ vùng bệnh. Dùng nhiệt độ 40--70°tiến hành cố định tổ chức, cắt bỏ, không phá vỡ tổ chức bình thường khác. Nhanh chóng chặn cung cấp máu cho búi trĩ hoặc giảm thiểu hồi lưu tĩnh mạch máu, nhanh chóng làm búi trĩ thu nhỏ lại. Quá trình thủ thuật không có phúc xạ, ít chảy máu, nhanh lành, thích ứng lâm sàng rộng rãi, điều trị một lần, được giới trong ngành trực tràng hậu môn đề cao.</p>
        <span><em>Phạm vi điều trị</em></span>
        <p>Loai bỏ tổ chức bệnh như polyp, trĩ... Thủ thuật tách các tổ chức bị dính sau thủ thuật ngoại khoa.</p>

        <div id="equip-xx-cr-js">
            <div class="ind_con_button">
                <div class="leftarrow" onclick="scrollPicLeft('List9');"><img
                        src="/public/images/khai/equipment-al-jt1.jpg"/></div>
                <div class="rightarrow" onclick="scrollPicRight('List9');"><img
                        src="/public/images/khai/equipment-al-jt2.jpg"/></div>
            </div>
            <div class="logochange">
                <div class="logoarea" id="ISL_Cont">
                    <div class="biglogoarea">
                        <div id="List9">
                            <dl>
                                <dd><a  href=""
                                       ><img src="/public/images/khai/equipment-pic9-db1.jpg"/></a></dd>
                            </dl>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="thietbi8" class="equip-xx-c" style="display:none;">
    <s><img src="/public/images/khai/equipment-pic10.jpg"/></s>

    <div class="equip-xx-cc"></div>
    <div class="equip-xx-cr">
        <h3>Hệ thống thủy liệu đại tràng HER của Mỹ</h3>
        <span><em>Giới thiệu thiết bị</em></span>
        <p>　　
            Thủy liệu đại tràng Hercules của Mỹ là liệu pháp đảm bảo sức khỏe điều tiết bên trong mang tính vật lý thiên nhiên đang được thịnh hành trên thế giới, có hiệu quả trực tiếp loại bỏ độc tố, làm cho môi trường bên trong trực tràng sạch hơn, sau đó tiến hành thụt rửa trực tràng bằng thuốc khiến thuốc đạt được hiệu quả tốt nhất, có tác dụng cải thiện táo bón, kiết lị, loại bỏ chất cặn bã, điều tiết cân bằng môi trường vi khuẩn trực tràng, phòng chống ung thư trực tràng, đào thải độc tố...</p>
        <span><em>Phạm vi điều trị</em></span>
        <p>Táo bón do thói quen, viêm kết tràng mãn tính, trĩ độ nhẹ...</p>
        <div id="equip-xx-cr-js">
            <div class="ind_con_button">
                <div class="leftarrow" onclick="scrollPicLeft('List10');"><img
                        src="/public/images/khai/equipment-al-jt1.jpg"/></div>
                <div class="rightarrow" onclick="scrollPicRight('List10');"><img
                        src="/public/images/khai/equipment-al-jt2.jpg"/></div>
            </div>
            <div class="logochange">
                <div class="logoarea" id="ISL_Cont">
                    <div class="biglogoarea">
                        <div id="List10">
                            <dl>
                                <dd><a href="" ><img src="/public/images/khai/equipment-pic10-db1.jpg"/></a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="equip-xx-t" id="equip-xx-t">
    <ul>
        <li id="li_thietbi1" class="equip-xx-tli "><a href="javascript:void(0);"><img
                src="/public/images/khai/equipment-ico1.jpg"/></a><span></span></li>
        <li id="li_thietbi2" class="equip-xx-tli"><a href="javascript:void(0);"><img
                src="/public/images/khai/equipment-ico2.jpg"/></a><span></span></li>
        <li id="li_thietbi3" class="equip-xx-tli"><a href="javascript:void(0);"><img
                src="/public/images/khai/equipment-ico3.jpg"/></a><span></span></li>
        <li id="li_thietbi4" class="equip-xx-tli"><a href="javascript:void(0);"><img
                src="/public/images/khai/equipment-ico4.jpg"/></a><span></span></li>
				<!--
        <li class="equip-xx-tli"><a href="javascript:void(0);"><img
                src="/public/images/khai/equipment-ico5.jpg"/></a><span></span></li>
				-->

        <li id="li_thietbi5" class="equip-xx-tli"><a href="javascript:void(0);"><img
                src="/public/images/khai/equipment-ico7.jpg"/></a><span></span></li>
        <li id="li_thietbi6" class="equip-xx-tli"><a href="javascript:void(0);"><img
                src="/public/images/khai/equipment-ico8.jpg"/></a><span></span></li>
        <li id="li_thietbi7" class="equip-xx-tli"><a href="javascript:void(0);"><img
                src="/public/images/khai/equipment-ico9.jpg"/></a><span></span></li>
        <li id="li_thietbi8" style="margin-right:0" class="equip-xx-tli"><a href="javascript:void(0);"><img src="/public/images/khai/equipment-ico10.jpg"/></a><span></span>
        </li>
    </ul>
</div>
</div>
<div class="clear"></div>
</div>
<div style="width:1000px; margin:0 auto;" id="mainls">&nbsp;</div>
<script>
    if (document.getElementById('equip-xx-t')) {

        var _url = window.location.search, _id = '';
        if (_url.indexOf('yqsb') != -1) {
            var _arr = _url.split('&');
            for (var _i = 0; _i < _arr.length; _i++) {
                if (_arr[_i].indexOf('yqsb') != -1) {
                    _id = _arr[_i].substring(6);
                    break;
                }
            }
        }

        if (_id) {
            $("#equip-xx-c").children("div").hide().eq(_id - 1).show();
            $("#equip-xx-t ul li").removeClass('equip-xx-tli-focus').eq(_id - 1).addClass('equip-xx-tli-focus');
        }
        $("#equip-xx-t ul li").click(function () {
            $("#equip-xx-c").children("div").hide().eq($(this).index()).show();
            $("#equip-xx-t ul li").removeClass('equip-xx-tli-focus').eq($(this).index()).addClass('equip-xx-tli-focus');
        });
    }
    function scrollPicLeft(id) {
        var o = "string" == typeof(id) ? document.getElementById(id) : id;
        var l = o.getElementsByTagName('dl').length;
        var m = getStyle(o.getElementsByTagName('dl')[0], 'width');
        if ($("#" + id).is(":animated") == false) {
            if (getStyle(o, 'marginLeft') == -(m * (l - 1))) {

            } else {
                $("#" + id).animate({marginLeft: -(m - getStyle(o, 'marginLeft')) + 'px'}, 300);
            }
        }
    }
    function scrollPicRight(id) {
        var o = "string" == typeof(id) ? document.getElementById(id) : id;
        var l = o.getElementsByTagName('dl').length;
        var m = getStyle(o.getElementsByTagName('dl')[0], 'width');

        if ($("#" + id).is(":animated") == false) {
            if (getStyle(o, 'marginLeft') == 0) {

            } else {
                $("#" + id).animate({marginLeft: (m + getStyle(o, 'marginLeft')) + 'px'}, 300);
            }
        }
    }
    function getStyle(obj, attr) {
        return parseFloat(obj.currentStyle ? obj.currentStyle[attr] : getComputedStyle(obj, null)[attr]);
    }
</script>


    <div class="clear"></div>
</div>
@include('site.chuyen-de-all.lien-he-5')
<style>
.equip-xx-tli{
	margin-right:23px;
}
</style>
@include('site.footer')