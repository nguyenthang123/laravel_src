@include('site.head')
<link rel="stylesheet" href="{!!  asset('public/css/khai/public.css'); !!}">
<link rel="stylesheet" href="{!!  asset('public/css/khai/expert.css'); !!}">
<link rel="stylesheet" href="{!!  asset('public/css/khai/chamsocdacbiet.css'); !!}">
<div id="main1">
    <!--@include('site.chuyen-de-all.left')-->
    <?= cd_left(6);?>
    <div class="main1-r">
        <div class="expert-list-banner" id="expert-list-banner">
            <a  href="">
                <img src="/public/images/khai/neiye_gg.jpg"/>
            </a>
        </div>
        <div class="expert-list-wz">
            <h3>dịch vụ chăm sóc đặc biệt</h3>
            <p><span>trang chủ</span><a href="">vị trí dẫn đầu</a></p>
        </div>
        <div class="service">
            <div class="service-l">
                <dl>
                    <dd><a href=""><img src="/public/images/khai/cham_soc_dac_biet/service-l-pic1.jpg" /></a></dd>
                    <dt>
                    <h3><span>Mỉm cười đến từ sự nhiệt tình<b>- Tâm huyết</b></span></h3>
                    <p>Nụ cười thay cho lời nói, chúng tôi hết lòng phục vụ bạn</p>
                    </dt>
                </dl>
                <dl>
                    <dd><a href=""><img src="/public/images/khai/cham_soc_dac_biet/service-l-pic2.jpg" /></a></dd>
                    <dt>
                    <h3><span>làm nổi bật giá trị<b>-Chu đáo</b></span></h3>
                    <p>Cảm giác thân mật. Làm nổi bật giá trị bản thân mọi lúc mọi nơi</p>
                    </dt>
                </dl>
                <dl>
                    <dd><a href=""><img src="/public/images/khai/cham_soc_dac_biet/service-l-pic3.jpg" /></a></dd>
                    <dt>
                    <h3><span>Thành ý đến từ sứ mệnh <b>-Thành tâm</b></span></h3>
                    <p>Thành ý là sứ mệnh “1 với 1” tôn trọng khi phục vụ</p>
                    </dt>
                </dl>
                <dl>
                    <dd><a href=""><img src="/public/images/khai/cham_soc_dac_biet/service-l-pic4.jpg" /></a></dd>
                    <dt>
                    <h3><span>Xây dựng những thành tựu chuyên nghiệp<b>- chuyên tâm</b></span></h3>
                    <p>Chuyên nghiệp là cơ bản. Chú trọng vào điều trị bệnh trực tràng hậu môn, chuyên tâm phục vụ</p>
                    </dt>
                </dl>
                <dl>
                    <dd><a href=""><img src="/public/images/khai/cham_soc_dac_biet/service-l-pic5.jpg" /></a></dd>
                    <dt>
                    <h3><span>Lấy an toàn làm niềm tin <b>- Yên tâm</b></span></h3>
                    <p>An toàn là bảo đảm. Giúp bạn đánh tan mọi nỗi lo</p>
                    </dt>
                </dl>
            </div>
            <div class="service-r">
                <dl>
                    <dd>
                        <div class="service-r1">làm<br>nổi<br>bật<br>giá<br>trị</div>
                        <div class="service-r2">cảm<br>nhận<br>sự<br>nhiệt<br>tình,<br>tốt<br>mà<br>không<br>đắt</div>
                        <div class="pv_tt">
                            <div class="pv_tt1">Phục<br>vụ</div>
                            <div class="pv_tt2">Tận<br>tình</div>
                        </div>
                    </dd>
                    <div style="width: 100%;height: 30px;overflow: hidden;"></div>
                    <dt>Phòng khám trực tràng hậu môn 168 trở thành thương hiệu phòng khám có sức ảnh hưởng lớn, dẫn đầu trong một thời gian dài về thái độ chăm sóc nhiệt tình chu đáo với bệnh nhân.</dt>
                </dl>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    </div>
    @include('site.chuyen-de-all.lien-he-5')
    @include('site.footer')