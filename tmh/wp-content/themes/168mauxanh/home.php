<?php if(deviceType=='phone'){
    require_once('m_index.php');
}else{?>
<?php get_header(); ?>
    <div class='out4'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-4'>
                    <a href="<?php echo get_category_link(2);?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/i4.png" />
                        Bệnh về mũi </a>
                </div>
                <div class='col-md-4'>
                    <a href="<?php echo get_category_link(3);?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/i5.png" />
                        Bệnh về tai </a>
                </div>
                <div class='col-md-4'>
                    <a href="<?php echo get_category_link(4);?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/i6.png" />
                        Bệnh về họng </a>
                </div>
            </div>
        </div>
    </div>
    <div class='out5'>
        <div class='container'>
            <span class='box1'>những gì bạn muốn đều ở đây</span> <span class='box2'>Những bệnh
                Tai - mũi - họng được tìm kiếm nhiều nhất ở phòng khám</span>
            <div class='box3'>
                <a href='#' data-tab="t1" class='active'>bệnh về mũi</a> <a href='#' data-tab="t2">bệnh
                    về tai</a> <a href='#' data-tab="t3">bệnh về họng</a>
            </div>
            <div id="t1" class='box4 active'>
                <div class='row'>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">làm sao để chữa khỏi bệnh về mũi</a>
                            <p>
                               Dùng thuốc? Thủ thuật ? Xâm lấn tối thiểu?</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">Bệnh về mũi điều trị mấy ngày là khỏi</a>
                            <p>
                                Thủ thuật xâm lấn tối thiểu hiệu quả tốt</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">Nguyên nhân nào gây ra bệnh về mũi ?</a>
                            <p>
                                Đứng, ngồi lâu? Ăn uống không hợp lý?</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">Chữa bệnh về mũi chi phí bao nhiêu</a>
                            <p>
                                Xâm lấn tối thiểu không đau, không dao kéo</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="t2" class='box4'>
                <div class='row'>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">làm sao để chữa khỏi bệnh về tai</a>
                            <p>
                                Dùng thuốc? Thủ thuật ? Xâm lấn tối thiểu?</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">Bệnh về tai điều trị mấy ngày là khỏi</a>
                            <p>
                                Thủ thuật xâm lấn tối thiểu hồi phục nhanh</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">Nguyên nhân gây bệnh về tai</a>
                            <p>
                                Đứng, ngồi lâu? Ăn uống không hợp lý?</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">chi phí chữa bệnh về tai bao nhiêu</a>
                            <p>
                                Xâm lấn tối thiểu không đau, không dao kéo</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="t3" class='box4'>
                <div class='row'>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">làm sao để chữa khỏi bệnh về họng</a>
                            <p>
                                Dùng thuốc? Thủ thuật ? Xâm lấn tối thiểu?</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">Bệnh về họng điều trị mấy ngày là khỏi</a>
                            <p>
                               Thủ thuật xâm lấn tối thiểu hồi phục nhanh</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">Nguyên nhân gây bệnh về họng</a>
                            <p>
                              Đứng, ngồi lâu? Ăn uống không hợp lý?</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='box5'>
                            <a class='box7' href="#">Chữa bệnh về họng chi phí bao nhiêu</a>
                            <p>
                               Xâm lấn tối thiểu không đau, không dao kéo</p>
                            <a class='box6' href="#">Tìm hiểu kỹ hơn</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='clear15'>
            </div>
            <div class='box8'>
                <a href="<?= link_tuvan;?>">Tư vấn bác sỹ</a>
            </div>
        </div>
    </div>
    <div class='out6'>
        <div class='container'>
            <p class='item1'>
                điều trị bệnh tai - mũi - họng, quan trọng là chọn phòng khám!</p>
            <p class='item2'>Phòng khám tai mũi họng chuyên nghiệp</p>
            <p class='item2'>
                Giúp bạn giải quyết bệnh Tai - mũi - họng tốt nhất</p>
            <p class='item3'>
                Quảng cáo tốt, không bằng hiệu quả tốt, đáng để bạn tin cậy
            </p>
        </div>
    </div>
    <div class='out7'>
<span>Phòng khám chuyên khoa bệnh tai - mũi - họng</span>
        <div class='container'>
            <div class='box9 item1' style="width: 454px;">
              <a href="<?= link_tuvan;?>">  <img src="<?php bloginfo('template_directory'); ?>/images/im1.jpg" /></a>
                <div class='item'>
                    Môi trường khám chữa bệnh ấm cúng, khám bệnh tâm trạng tốt</div>
            </div>
            <div class='box9 item2'>
                <a href="<?= link_tuvan;?>"> <img src="<?php bloginfo('template_directory'); ?>/images/im2.jpg" /></a>
                <div class='item'>
                    Bác sĩ chuyên nghiệp
                    <br />
                    khám bệnh yên tâm hơn</div>
            </div>
            <div class='box9 item3'>
                <a href="<?= link_tuvan;?>"> <img src="<?php bloginfo('template_directory'); ?>/images/im3.jpg" /></a>
                <div class='item'>
                    Kỹ thuật tiên tiến
                    <br />
                    an toàn không đau</div>
            </div>
            <div class='clear'>
            </div>
            <div class='box9 item4' style="width: 367px;">
                <a href="<?= link_tuvan;?>"> <img src="<?php bloginfo('template_directory'); ?>/images/im6.jpg" /></a>
                <div class='item'>
                    Đặt hẹn khám miễn phí qua mạng
                    <br />
                    Tiện lợi - nhanh chóng - tiết kiệm</div>
            </div>
            <div class='box9 item5'>
                <a href="<?= link_tuvan;?>"> <img src="<?php bloginfo('template_directory'); ?>/images/im5.jpg" /></a>
                <div class='item'>
                    Kết quả quả xét nghiệm chính xác yên tâm hơn<br />
                    đảm bảo hiệu quả điều trị.</div>
            </div>
            <div class='box9 item6'>
                <a href="<?= link_tuvan;?>"> <img src="<?php bloginfo('template_directory'); ?>/images/im4.jpg" /></a>
                <div class='item'>
                    Dịch vụ chuyên nghiệp hơn<br />
                    khám bệnh không áp lực</div>
            </div>
        </div>
    </div>
    <div class='out8'>
        <span>Đội ngũ bác sỹ chuyên nghiệp</span>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <div class='box10'>
                        <h4>
                            Đội ngũ bác sỹ khám chữa bệnh<br />
                            chuyên nghiệp tại Hà Nội</h4>
                        Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh
                        nghiệm thăm khám lâm sàng, trong đó có những bác sỹ nước ngoài, vô cùng chuyên nghiệp
                        trong lĩnh vực điều trị bệnh Tai - Mũi - Họng
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='box10'>
                        <h4>
                            Có kinh nghiệm phong phú trong điều trị<br />
                            các bệnh Tai - Mũi - Họng</h4>
                        Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công
                        cho rất nhiều ca bệnh phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa
                        khỏi cho rất nhiều bệnh nhân mắc bệnh nguy hiểm.
                    </div>
                </div>
            </div>
            <div class='clear15'>
            </div>
            <img src="<?php bloginfo('template_directory'); ?>/images/im7.jpg" />
        </div>
    </div>
    <div class='out9'>
        <div class='container'>
            <img class='item3' src="<?php bloginfo('template_directory'); ?>/images/i8.png" />
            <div class='row'>
                <div class='col-md-6'>
                    <div class='box11'>
                        <h4>
                            Hỏi Bác Sĩ</h4>
                        Những thắc mắc về y khoa, các căn bệnh, cách phòng ngừa, điều trị... sẽ được đội
                        ngũ Bác Sĩ chúng tôi trả lời trong thời gian sớm nhất.
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='box12'>
                        Thưa Bác sĩ, như vậy khi bị đau bụng ra máu vùng kín không đều ta phải xử trí như
                        thế nào? <b>NHƯ NGUYỄN</b> <a href="<?= link_tuvan;?>" class='item1'>Gửi câu hỏi của bạn</a> <a href="<?= link_tuvan;?>" class='item2'>
                            <img src="<?php bloginfo('template_directory'); ?>/images/i7.png" />
                            Bác sĩ trả lời</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='out10'>
        <span>Ưu thế của chúng tôi</span>
        <div class='container'>
            <div class='row'>
                <div class='col-md-8'>
                    <div class='box13 active' id='t4'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='box15'>
                                    <b>Phòng khám đa khoa Giải Phóng</b> Phòng khám đa khoa Giải Phóng là phòng khám

                                    quy mô lớn chuyên nghiệp ở Hà Nội, có ưu thế mà không phòng khám nào so sánh được.

                                    Có bác sỹ chuyên nghiệp với hơn 20 năm kinh nghiệm lâm sàng, là cơ sở điều trị có

                                    hiệu quả. Phòng khám có kỹ thuật tiên tiến, thiết bị điều trị hiện đại mới nhất

                                    thế giới. Phòng khám Giải phóng được người dân Hà Nội lựa chọn và tin tưởng, đây là động

                                    lực làm việc của toàn bộ các y bác sỹ nhân viên phòng khám.

                                </div>

                            </div>

                            <div class='col-md-6'>

                                <img src="<?php bloginfo('template_directory'); ?>/images/im16.jpg" />

                            </div>

                        </div>

                    </div>

                    <div class='box13' id='t5'>

                        <div class='row'>

                            <div class='col-md-6'>

                                <div class='box15'>

                                    <b>Thành tích vượt trội, tương lai huy hoàng</b> Nhiều năm nay phòng khám đa khoa

                                    Giải Phóng Hà Nội luôn nỗ lực nghiên cứu và mở rộng phương pháp điều trị tốt nhất đối với

                                    bệnh trĩ, khiến cho trình độ điều trị bệnh về trực tràng hậu môn không ngừng nâng

                                    cao, luôn theo kịp quỹ đạo thế giới, không ngừng nâng cao trình độ kỹ thuật y tế.

                                    Toàn tâm thực hiện phòng khám chuyên khoa trực tràng hậu môn quốc tế, hiện đại hóa,

                                    khoa học kỹ thuật và văn minh...

                                </div>

                            </div>

                            <div class='col-md-6'>

                                <img src="<?php bloginfo('template_directory'); ?>/images/im15.jpg" />

                            </div>

                        </div>

                    </div>

                    <div class='box13' id='t6'>

                        <div class='row'>

                            <div class='col-md-6'>

                                <div class='box15'>

                                    <b>Tiêu chuẩn cao, chất lượng cao, đảm bảo hiệu quả điều trị.</b> Phòng khám đa

                                    khoa Giải Phóng Hà Nội là phòng khám đa khoa chuyên nghiệp ở Hà Nội, có môi trường nghiên

                                    cứu khoa học tốt, môi trường học thuật sâu rộng và kết hợp mật thiết chẩn trị lâm

                                    sàng và nghiên cứu cơ sở, phòng khám đa khoa Giải Phóng do tiêu chuẩn cao về dịch vụ, kỹ

                                    thuật điều trị tiên tiến chuyên nghiệp, tỷ lệ chữa khỏi cao, nhận được lời nhận

                                    xét tốt từ các bộ ngành liên quan...

                                </div>

                            </div>

                            <div class='col-md-6'>

                                <img src="<?php bloginfo('template_directory'); ?>/images/im14.jpg" />

                            </div>

                        </div>

                    </div>

                    <div class='box13' id='t7'>

                        <div class='row'>

                            <div class='col-md-6'>

                                <div class='box15'>

                                    <b>Thương hiệu dịch vụ điều trị trực tràng hậu môn</b> Phòng khám đa khoa Giải Phóng

                                    Hà Nội áp dụng phương pháp quản lý tiêu chuẩn quốc tế, giành được thương hiệu phục

                                    vụ về trực tràng hậu môn, đảm bảo chất lượng chẩn trị về trực tràng hậu môn, khái

                                    niệm về tinh thần nhân viên, khái niệm về dịch vụ phòng khám... Phòng khám theo

                                    đuổi môi trường văn hóa.

                                </div>

                            </div>

                            <div class='col-md-6'>

                                <img src="<?php bloginfo('template_directory'); ?>/images/im13.jpg" />

                            </div>

                        </div>

                    </div>

                    <div class='box13' id='t8'>

                        <div class='row'>

                            <div class='col-md-6'>

                                <div class='box15'>

                                    <b>Quan niệm dịch vụ: “thành tâm hành nghề, lấy người làm gốc” </b>Phòng khám làm

                                    theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không

                                    đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực

                                    hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả,

                                    dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt

                                    Nam.

                                </div>

                            </div>

                            <div class='col-md-6'>

                                <img src="<?php bloginfo('template_directory'); ?>/images/im17.jpg" />

                            </div>

                        </div>

                    </div>

                    <div class='box13' id='t9'>

                        <div class='row'>

                            <div class='col-md-6'>

                                <div class='box15'>

                                    <b>Hơn 20 nghìn bệnh nhân tin tưởng phòng khám</b> Phòng khám làm theo quan niệm

                                    dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn

                                    tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng

                                    tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ

                                    nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.

                                </div>

                            </div>

                            <div class='col-md-6'>

                                <img src="<?php bloginfo('template_directory'); ?>/images/im8.jpg" />

                            </div>

                        </div>

                    </div>

                </div>

                <div class='col-md-4'>

                    <div class='box14'>

                        <a data-tab="t4" class='active'>Lịch sử thương hiệu</a> <a data-tab="t5">Thương hiệu

                            vinh dự </a><a data-tab="t6">Thương hiệu thực lực</a> <a data-tab="t7">Thương hiệu văn

                                hóa </a><a data-tab="t8">Thương hiệu dịch vụ </a><a data-tab="t9">Thương hiệu truyền

                                    miệng </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    

    <div class='out11'>

        <span>Bệnh nhân nói gì về chúng tôi</span>

        <div class='container'>

            <img class='item1' src="<?php bloginfo('template_directory'); ?>/images/i9.png" />

            <img class='item2' src="<?php bloginfo('template_directory'); ?>/images/i10.png" />

            <div id='benhnhan' class='owl-carousel owl-theme clear'>

                <div class='item'>

                  Tôi thấy môi trường khám chữa bệnh tại phòng khám đa khoa Giải Phóng rất là thân thiện và thoải mái, không thấy lo lắng như lúc mới đầu đi khám, moi thông tin cá nhân của người bệnh đều được giữ kín, trao đổi riêng tư với bác sỹ nên thấy rất an tâm.         

                </div>

                <div class='item'>

                Tôi rất thích mô hình chữa bệnh tại đây, theo kịp được xu hướng của nước ngoài, nắm bắt được tâm lý e ngại của người đàn ông khi đi chữa bệnh nam khoa, ở đây tôi được trao đổi riêng với bác sỹ nên mọi vấn đề khó nói em đều có thể bộc bạch, mọi thông tin cá nhân của em cũng đều được đảm bảo giữ kín, vì vậy em cũng đã giới thiệu cho vài người bạn tới đây chữa bệnh.

                </div>

<div class='item'>

                Nếu anh em nào mà lo sợ chi phí chữa bệnh tại phòng khám đa khoa Giải Phóng thì có thể yên tâm rằng tôi đã từng tới chữa bệnh tại đây, chi phí rất phù hợp, đồng thời trước khi đi vào điều trị thì bạn sẽ được bác sỹ thông báo chi phí cụ thể trước khi có quyết định tiến hành chữa hay không, điều trị hoàn toàn dựa trên tinh thần từ phía người bệnh.   

</div>

<div class='item'>



                Khi khám chữa bệnh tại phòng khám đa khoa Giải Phóng tôi cảm thấy rất thoải mái và thân thiện, các bác sỹ và y tá rất quan tâm tới người bệnh, hỏi han bệnh nhân liên tục, hướng dẫn tỷ mỉ về cách sinh hoạt sao cho phù hợp để nhanh khỏi bệnh, kể cả là hướng dẫn ăn uống, tạo cho tôi cảm giác như đang ở nhà vậy.    

</div>

<div class='item'>



                Tôi yên tâm lựa chọn phòng khám đa khoa Giải Phóng để khám và chữa bệnh là bởi địa chỉ phòng khám này gần nhà, thấy có rất đông người bệnh tới khám nên mình cũng yên tâm hơn. Với lại pk này hoạt động đã từ rất lâu, nên kinh nghiệm khám chữa bệnh cũng tốt, vì vậy tôi yên tâm chữa bệnh tại đây.      

</div>

<div class='item'>

                Cảm nhận của tôi khi chữa bệnh tại phòng khám đa khoa Giải Phóng đó là cơ sở vật chất cũng như hạ tầng rất khang trang, tôi được khám chữa bằng các máy móc rất hiện đại, môi trường rất sạch sẽ, thoải mái, vì vậy mà giúp tôi yên tâm hơn.        

                </div>



            </div>

        </div>

    </div>

    <div class='out12'>

        <span>chủ đề bạn quan tâm nhất</span>

        <div class='container container1'>

            <div class='row'>

                <div class='col-md-8'>

                    



                    <div class='box16'>

                        <a href="<?php echo get_category_link(2);?>" data-tab="t10">BỆNH VỀ MŨI</a> 

                        <a href="<?php echo get_category_link(3);?>" data-tab="t11">BỆNH VỀ TAI</a> 

                        <a href="<?php echo get_category_link(4);?>" data-tab="t12">BỆNH VỀ HỌNG</a>

                    </div>

                    <div id='t10' class='box17 active'>

                        <a data-tab="b5" href="<?php echo get_category_link(5);?>">Viêm mũi</a>

						<a data-tab="b6" href="<?php echo get_category_link(6);?>">Viêm xoang mũi</a>

						<a data-tab="b7" href="<?php echo get_category_link(7);?>">Xuất huyết mũi</a>

						<a data-tab="b8" href="<?php echo get_category_link(8);?>">Phì đại cuống mũi</a>

						<a data-tab="b9" href="<?php echo get_category_link(9);?>">Polyp mũi</a>

						<a data-tab="b11" href="<?php echo get_category_link(11);?>">Lệch vách ngăn mũi</a>

						<a data-tab="b12" href="<?php echo get_category_link(12);?>">Viêm mũi dị ứng</a>

                    </div>

                    <div id='t11' class='box17'>

                        <a data-tab="b13" href="<?php echo get_category_link(13);?>">Điếc tai</a>

<a data-tab="b14" href="<?php echo get_category_link(14);?>">Ù tai</a>

<a data-tab="b15" href="<?php echo get_category_link(15);?>">Thủng màng nhĩ</a>

<a data-tab="b16" href="<?php echo get_category_link(16);?>">Viêm tai giữa</a>

<a data-tab="b17" href="<?php echo get_category_link(17);?>">Viêm tai ngoài</a>

<a data-tab="b18" href="<?php echo get_category_link(18);?>">Giảm thính lực </a>

<a data-tab="b62" href="<?php echo get_category_link(62);?>">Viêm tai xương chũm</a>

                    </div>

                    <div id='t12' class='box17'>

                        <a data-tab="b20" href="<?php echo get_category_link(20);?>">Viêm họng</a>

<a data-tab="b84" href="<?php echo get_category_link(84);?>">Viêm thanh quản cấp</a>

<a data-tab="b22" href="<?php echo get_category_link(22);?>">Viêm amidan</a>

<a data-tab="b23" href="<?php echo get_category_link(23);?>">Polyp thanh quản </a>

<a data-tab="b24" href="<?php echo get_category_link(24);?>">Viêm họng mãn tính</a>

<a data-tab="b25" href="<?php echo get_category_link(25);?>">Viêm VA</a>

<a data-tab="b26" href="<?php echo get_category_link(26);?>">Hạt xơ dây thanh</a>

<a data-tab="b61" href="<?php echo get_category_link(61);?>">Viêm họng hạt</a>

                    </div>







<?php 

						 	$list_benh = [5,6,7,8,9,11,12];

						 	foreach ($list_benh as $key => $value):?>

							<div id="b<?php echo $value?>" class="box18 <?php echo $key == 0 ? 'active' : '';?>">

							<div class='row'>



							<div class='col-md-5'>

								<?php

									$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $value,'orderby'=>'id','order' =>'asc');

									$myposts = get_posts( $args );

									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

										

										  <div class='box19'>

                                    <a class="title" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>

                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

                                        

                                        <?php echo wp_trim_words( get_the_excerpt(), 50 );?>

                                </div>

																																																																																																

									<?php endforeach; 

									wp_reset_postdata();

								?>

								</div>



								<div class='col-md-7'>

                                <div class='box20'>

								<?php 

									$args = array( 'posts_per_page' => 8, 'offset'=> 1, 'category' => $value,'orderby'=>'id','order' =>'asc');

									$myposts = get_posts( $args );

									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

									<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>			

									<?php endforeach; 

									wp_reset_postdata();

								?>

								   </div>

                            </div>





							</div>	

							</div>

						 	<?php 

						 	endforeach;

						?>



<?php 

						 	$list_benh = [13,14,15,16,17,18,62];

						 	foreach ($list_benh as $key => $value):?>

							<div id="b<?php echo $value?>" class="box18">

							<div class='row'>



							<div class='col-md-5'>

								<?php

									$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $value,'orderby'=>'id','order' =>'asc');

									$myposts = get_posts( $args );

									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

										

										  <div class='box19'>

                                    <a class="title" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>

                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

                                        

                                        <?php echo wp_trim_words( get_the_excerpt(), 50 );?>

                                </div>

																																																																																																

									<?php endforeach; 

									wp_reset_postdata();

								?>

								</div>



								<div class='col-md-7'>

                                <div class='box20'>

								<?php 

									$args = array( 'posts_per_page' => 8, 'offset'=> 1, 'category' => $value,'orderby'=>'id','order' =>'asc');

									$myposts = get_posts( $args );

									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

									<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>			

									<?php endforeach; 

									wp_reset_postdata();

								?>

								   </div>

                            </div>





							</div>	

							</div>

						 	<?php 

						 	endforeach;

						?>



						<?php 

						 	$list_benh = [20,84,22,23,24,25,26,61];

						 	foreach ($list_benh as $key => $value):?>

							<div id="b<?php echo $value?>" class="box18">

							<div class='row'>



							<div class='col-md-5'>

								<?php

									$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $value,'orderby'=>'id','order' =>'asc');

									$myposts = get_posts( $args );

									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

										

										  <div class='box19'>

                                    <a class="title" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>

                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

                                        

                                        <?php echo wp_trim_words( get_the_excerpt(), 50 );?>

                                </div>

																																																																																																

									<?php endforeach; 

									wp_reset_postdata();

								?>

								</div>



								<div class='col-md-7'>

                                <div class='box20'>

								<?php 

									$args = array( 'posts_per_page' => 8, 'offset'=> 1, 'category' => $value,'orderby'=>'id','order' =>'asc');

									$myposts = get_posts( $args );

									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

									<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>			

									<?php endforeach; 

									wp_reset_postdata();

								?>

								   </div>

                            </div>





							</div>	

							</div>

						 	<?php 

						 	endforeach;

						?>

             



                </div>

                <div class='col-md-4'>

                    <div class='box21'>

                        <div class='box22'>

                            <p>

                                PHÒNG KHÁM MỖI NGÀY

                                <br />

                                HẠN CHẾ SỐ LƯỢNG 20 NGƯỜI

                            </p>

                            <a href="<?= link_tuvan;?>" >Tôi muốn đặt hẹn</a>

                        </div>

                        <div class='clear'>

                        </div>

                        <div class='box23'>

                            <ul>

                               

                           <li><b class='item1'>Đỗ Hoàng</b> <b class='item2'>096xxxx798</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Trần Thắng</b> <b class='item2'>096xxxx685</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Lưu</b> <b class='item2'>098xxxx675</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Sáng</b> <b class='item2'>098xxxx356</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Đặng Hanh</b> <b class='item2'>098xxxx543</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Tiến Đạt</b> <b class='item2'>094xxxx238</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Tiến Lợi</b> <b class='item2'>098xxxx679</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Trần Văn Quyết</b> <b class='item2'>096xxxx768</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Tuấn Lê</b> <b class='item2'>0167xxxx443</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Trần Ninh</b> <b class='item2'>098xxxx540</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Văn Toản</b> <b class='item2'>098xxxx674</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Xuân Trường</b> <b class='item2'>091xxxx872</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Văn Trọng</b> <b class='item2'>097xxxx761</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Tiến</b> <b class='item2'>097xxxx167</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Trần Định</b> <b class='item2'>098xxxx761</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Đình Chinh</b> <b class='item2'>098xxxx267</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Văn Hải</b> <b class='item2'>098xxxx243</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Tuấn Anh</b> <b class='item2'>0165xxxx892</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Trần Vũ</b> <b class='item2'>091xxxx886</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Văn Sơn</b> <b class='item2'>098xxxx238</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Đỗ Hoàng</b> <b class='item2'>096xxxx798</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Trần Thắng</b> <b class='item2'>096xxxx685</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Lưu</b> <b class='item2'>098xxxx675</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Sáng</b> <b class='item2'>xxxxxxxxxx</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Đặng Hanh</b> <b class='item2'>098xxxx543</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Tiến Đạt</b> <b class='item2'>094xxxx238</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Tiến Lợi</b> <b class='item2'>098xxxx679</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Trần Văn Quyết</b> <b class='item2'>096xxxx768</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Tuấn Lê</b> <b class='item2'>0167xxxx443</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Nguyễn Tuân</b> <b class='item2'>096xxxx890</b> <b class='item4'>Thành công</b></li> <li><b class='item1'>Trần Ninh</b> <b class='item2'>098xxxx540</b> <b class='item4'>Thành công</b></li>



                            </ul>

                        </div>

                        <div class='box24'>

                            <p>

                                Miễn phí đặt hẹn trên mạng</p>

                            <p>

                                Điện thoại đặt hẹn: <b><?= phone1;?></b></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class='out18'>

        <div class='container'>

            <div class='row'>

                <div class='col-md-4'>

                    <div id='online' class='owl-carousel owl-theme clear'>

                        <div class='item'>

                            <div class='box32'>

                                <b>1</b> <b>8</b> <b>6</b>

                            </div>

                        </div>

                        <div class='item'>

                            <div class='box32'>

                                <b>2</b> <b>8</b> <b>7</b>

                            </div>

                        </div>

                        <div class='item'>

                            <div class='box32'>

                                <b>0</b> <b>9</b> <b>6</b>

                            </div>

                        </div>

                        <div class='item'>

                            <div class='box32'>

                                <b>1</b> <b>2</b> <b>5</b>

                            </div>

                        </div>

                        <div class='item'>

                            <div class='box32'>

                                <b>1</b> <b>3</b> <b>9</b>

                            </div>

                        </div>

                    </div>

                    <p>

                        Số người trực tuyến</p>

                </div>

                <div class='col-md-4'>

                    <div class='box32'>

                        <b>1</b> <b>8</b> <b>6</b> <b>9</b>

                    </div>

                    <p>

                        Số người tư vấn trong tháng</p>

                </div>

                <div class='col-md-4'>

                    <div class='box32'>

                        <b>1</b> <b>6</b> <b>5</b> <b>5</b>

                    </div>

                    <p>

                        Số người hẹn khám trong tháng</p>

                </div>

            </div>

            <div class='box33'>

                <a href="<?= link_tuvan;?>" >CLICK ĐĂNG KÝ HẸN KHÁM</a>

            </div>

        </div>

    </div>

    <div class='out13'>

        <span>Về chúng tôi</span>

        <p>

            Phòng khám chuyên khoa Tai - Mũi - Họng, chúng tôi chứng minh bằng hiệu quả điều

            trị</p>

        <div class='container'>

            <div class='row'>

                <div class='col-md-3'>

                    <div class='box25 fixheight2'>

                        <img src="<?php bloginfo('template_directory'); ?>/images/im12.jpg" />

                        <h4>

                            Dịch vụ VIP</h4>

                        <p>

                            Phòng khám có môi trường y tế lý tưởng, bác sỹ thân thiện với bệnh nhân, hướng dẫn

                            tận tình, phòng bệnh ấm cúng như ở nhà.

                        </p>

                    </div>

                </div>

                <div class='col-md-3'>

                    <div class='box25 fixheight2'>

                        <img src="<?php bloginfo('template_directory'); ?>/images/im11.jpg" />

                        <h4>

                            Thu phí rõ ràng</h4>

                        <p>

                            Phòng khám nghiêm ngặt tuân thủ quy định về thu phí của các ban ngành liên quan,

                            thu phí có hóa đơn rõ ràng, theo dõi chặt chẽ.

                        </p>

                    </div>

                </div>

                <div class='col-md-3'>

                    <div class='box25 fixheight2'>

                        <img src="<?php bloginfo('template_directory'); ?>/images/im10.jpg" />

                        <h4>

                            Thu phí công khai</h4>

                        <p>

                            Phòng thu ngân nằm ở khu đại sảnh tầng 1, giúp bệnh nhân nộp phí công khai

                        </p>

                    </div>

                </div>

                <div class='col-md-3'>

                    <div class='box25 fixheight2'>

                        <img src="<?php bloginfo('template_directory'); ?>/images/im9.jpg" />

                        <h4>

                            Quy trình thăm khám</h4>

                        <p>

                            Phòng khám cung cấp quy trình thăm khám rõ ràng, có thể tìm hiểu trên mạng hoặc

                            gọi điện đặt mã số khám và được tư vấn cụ thể

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class='out14'>

        <div class='container'>

            <b class='box27'>Bạn cần hỗ trợ</b> Bạn có thắc mắc về việc khám và chữa bệnh, hồ

            sơ bệnh án, đặt lịch hẹn Bác sĩ, những triệu chứng đang mắc phải, .... Hãy liên

            hệ ngay cho chúng tôi để được hỗ trợ tốt nhất.

            <div class='row'>

                <div class='col-md-4'>

                    <div class='box26 item1'>

                        <img src="<?php bloginfo('template_directory'); ?>/images/i13.png" />
                        <span>
                            <p>
                                Điện thoại tư vấn</p>
                            <b><?= phone1;?></b> </span>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class='box26 item2'>
                    <a href="<?= link_tuvan;?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/i12.png" />
                        <span>
                            <p>
                                Hỗ trợ trực tuyến</p>
                            <b>Trò chuyện</b> </span>
                            </a>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class='box26 item3'>
                    <a href="<?= link_tuvan;?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/i11.png" />
                        <span>
                            <p>
                                Gửi thư cho chúng tôi</p>
                            <b>Qua email</b> </span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='out15'>
        <div class='item item1'>
            <div class='box28'>
                <h4>
                    QUY TRÌNH
                    <br />
                    KHÁM BỆNH CỦA PHÒNG KHÁM
                </h4>
                <a href="<?= link_tuvan;?>">Tìm hiểu thêm</a>
            </div>
        </div>
        <div class='item item2'>
            <div class='box28'>
                <h4>
                    CHUYÊN GIA
                    <br />
                    BÁC SỸ HỖ TRỢ TƯ VẤN
                </h4>
                <a href="<?= link_tuvan;?>">Click để được tư vấn</a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
<?php }?>
