<?php get_header('chuyende'); ?>
	<header id="masthead" class="site-header container" role="banner">
		<a href=""><img src="<?php echo get_template_directory_uri();?>/css/bangkiemtrasuckhoevehong/img/header.png"></a>
	</header>
	<div class="menu">
		<div class="container">
			<div class="flex">
				<div><a href="<?php echo home_url();?>">Trang chủ <br> phòng khám</a></div>
				<div><a href="<?php echo get_page_link(2);?>">Giới thiệu <br> phòng khám</a></div>
				<div><a href="<?php echo get_category_link(29);?>">Kỹ thuật <br> chuyên nghiệp</a></div>
				<div><a href="<?php echo get_category_link(30);?>">Thiết bị <br> hiện đại</a></div>
				<div><a href="<?php echo get_category_link(41);?>">Trường hợp <br> hồi phục</a></div>
				<div><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Đăng ký <br> trực tuyến</a></div>
				<div><a href="<?php echo get_page_link(5);?>">Địa chỉ <br> phòng khám</a></div>
			</div>
		</div>
	</div>
	<div class="top-banner">
		<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/css/bangkiemtrasuckhoevehong/img/1.png"></a>
	</div>
	<div class="kiemtra">
		<div class="container">
			<div class="luuy">
				<h1>BẢNG KIỂM TRA SỨC KHỎE BỆNH VỀ HỌNG</h1>
				<p>Giới thiệu về bảng kiểm tra: họng là 1 cơ quan quan trọng của cơ thể, liệu họng của bạn có tiềm ẩn bệnh tật không?</p>
				<h3>Lưu ý khi tự kiểm tra</h3>
				<p class="mau1">1. Hãy căn cứ vào sự thay đổi của cơ thể trong 1 khoảng thời gian, chọn ra những thông tin liên quan.</p>
				<p class="mau1">2. Bảng tự kiểm tra này là tổng kết những thông tin có được của bệnh nhân lâm sàng, có giá trị tham<br> 
	    			&nbsp;&nbsp;&nbsp;&nbsp;khảo nhất định, nhưng khuyên bệnh nhân kịp thời đến viện thăm khám và điều trị đúng bệnh.
	    		</p>
			</div>
			<div class="question">
				<h2 class="tieude">CÂU HỎI TỰ KIỂM TRA</h2>
				<p>(Bảng kiểm tra này gồm 12 câu hỏi)</p>
				<form action="<?php echo get_template_directory_uri();?>/bangkiemtrasuckhoevehong.php" method="post" id="bangkiemtrasuckhoevehong">
					<div class="item flex">
						<div class="col1">
							<p>Có phải bạn hay bị ngứa họng không?</p>
							<p><input type="hidden" name="cauhoi[1]" value="Có phải bạn hay bị ngứa họng không?"></p>
							<p><input type="radio" name="traloi[1]" value="Có">Có</p>
							<p><input type="radio" name="traloi[1]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Buổi tối đi ngủ bạn có ngáy không?</p>
							<p><input type="hidden" name="cauhoi[2]" value="Buổi tối đi ngủ bạn có ngáy không?"></p>
							<p><input type="radio" name="traloi[2]" value="Có">Có</p>
							<p><input type="radio" name="traloi[2]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Bạn nói chuyện bị khàn tiếng có khó chịu không?</p>
							<p><input type="hidden" name="cauhoi[3]" value="Bạn nói chuyện bị khàn tiếng có khó chịu không?"></p>
							<p><input type="radio" name="traloi[3]" value="Có">Có</p>
							<p><input type="radio" name="traloi[3]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Bạn có cảm thấy họng đau rát không?</p>
							<p><input type="hidden" name="cauhoi[4]" value="Bạn có cảm thấy họng đau rát không?"></p>
							<p><input type="radio" name="traloi[4]" value="Có">Có</p>
							<p><input type="radio" name="traloi[4]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Bạn có nhiều đờm, ho, họng sưng đau không?</p>
							<p><input type="hidden" name="cauhoi[5]" value="Bạn có nhiều đờm, ho, họng sưng đau không?"></p>
							<p><input type="radio" name="traloi[5]" value="Có">Có</p>
							<p><input type="radio" name="traloi[5]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Bạn có hay hút thuốc và lạm dụng họng không?</p>
							<p><input type="hidden" name="cauhoi[6]" value="Bạn có hay hút thuốc và lạm dụng họng không?"></p>
							<p><input type="radio" name="traloi[6]" value="Có">Có</p>
							<p><input type="radio" name="traloi[6]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Khi bạn đánh răng vào buổi sáng có thấy buồn nôn, nôn khan không?</p>
							<p><input type="hidden" name="cauhoi[7]" value="Khi bạn đánh răng vào buổi sáng có thấy buồn nôn, nôn khan không?"></p>
							<p><input type="radio" name="traloi[7]" value="Có">Có</p>
							<p><input type="radio" name="traloi[7]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Khi ăn bạn có thấy khó nuốt không?</p>
							<p><input type="hidden" name="cauhoi[8]" value="Khi ăn bạn có thấy khó nuốt không?"></p>
							<p><input type="radio" name="traloi[8]" value="Có">Có</p>
							<p><input type="radio" name="traloi[8]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Khi nói chuyện với người khác, bạn có thường xuyên hắng giọng không?</p>
							<p><input type="hidden" name="cauhoi[9]" value="Khi nói chuyện với người khác, bạn có thường xuyên hắng giọng không?"></p>
							<p><input type="radio" name="traloi[9]" value="Có">Có</p>
							<p><input type="radio" name="traloi[9]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Có phải họng bạn cảm giác có dị vật, nhổ ra không được nuốt cũng không xuống không?</p>
							<p><input type="hidden" name="cauhoi[10]" value="Có phải họng bạn cảm giác có dị vật, nhổ ra không được nuốt cũng không xuống không?"></p>
							<p><input type="radio" name="traloi[10]" value="Có">Có</p>
							<p><input type="radio" name="traloi[10]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Miệng bạn có bị hôi không, có xảy ra tình trạng người khác phải giữ khoảng cách khi nói chuyện với bạn không? </p>
							<p><input type="hidden" name="cauhoi[11]" value="Miệng bạn có bị hôi không, có xảy ra tình trạng người khác phải giữ khoảng cách khi nói chuyện với bạn không? "></p>
							<p><input type="radio" name="traloi[11]" value="Có">Có</p>
							<p><input type="radio" name="traloi[11]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item flex">
						<div class="col1">
							<p>Buổi sáng ngủ dậy, bạn có cảm thấy mồm khô, đau đầu, chóng mặt, uể oải không?</p>
							<p><input type="hidden" name="cauhoi[12]" value="Buổi sáng ngủ dậy, bạn có cảm thấy mồm khô, đau đầu, chóng mặt, uể oải không?"></p>
							<p><input type="radio" name="traloi[12]" value="Có">Có</p>
							<p><input type="radio" name="traloi[12]" value="Không" checked>Không</p>
						</div>
						<div class="col2">
							<p><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="color: #f24823;">Tư vấn trực tuyến</a></p>
						</div>
					</div>
					<div class="item">
						<button type="submit">Nộp ngay</button>
						<button type="reset">Điền lại từ đầu</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="popup9_khoemanh popup9" id="popup9_khoemanh">
		<p class="kiemtra1">Hoàn thành kiểm tra</p>
		<p class="kiemtra2">Kết quả kiểm tra của bạn đã có rồi !</p>
		<p class="kiemtra3">
			<span>Chúc mừng bạn!</span> Kết quả của hệ thống tự kiểm tra triệu chứng bệnh ở họng cho 
			thấy, họng của bạn rất khỏe mạnh, điều này có liên quan chặt chẽ với những thói 
			quen sinh hoạt tốt mà bạn đã duy trì trong thời gian dài, vùng họng khỏe mạnh 
			nhất định sẽ góp phần làm cho cuộc sống và công việc của bạn tươi đẹp hơn.
		</p>
		<p class="kiemtra4"><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Làm thế nào tiếp tục giữ gìn được sức khỏe?</a></p>
		<p class="kiemtra5">
			<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tư vấn trực tuyến</a>
			<a href="<?php echo home_url();?>">Quay lại trang đầu</a>
		</p>
		<a href="#" class="dong_popup3 popup9_khoemanh_close"><img src="<?php echo get_template_directory_uri();?>/css/bangkiemtrasuckhoevehong/img/dong_popup3.png"></a>
	</div>
	<div class="popup9_binhthuong popup9" id="popup9_binhthuong">
		<p class="kiemtra1">Hoàn thành kiểm tra</p>
		<p class="kiemtra2">Kết quả kiểm tra của bạn đã có rồi !</p>
		<p class="kiemtra3">
			<span>Hãy chú ý !</span> Kết quả của hệ thống tự kiểm tra triệu chứng bệnh ở họng cho 
			thấy, họng của bạn đang có vấn đề, thường ngày nên tạo được thói quen 
			sinh hoạt tốt, chú ý giữ gìn vùng họng luôn khỏe mạnh, khi thấy khó chịu 
			cần kịp thời đến cơ sở y tế để kiểm tra, tích cực phòng tránh các bệnh 
			về họng. 
		</p>
		<p class="kiemtra4"><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tôi có nguy cơ mắc bệnh gì?</a></p>
		<p class="kiemtra5">
			<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tư vấn trực tuyến</a>
			<a href="<?php echo home_url();?>">Quay lại trang đầu</a>
		</p>
		<a href="#" class="dong_popup3 popup9_binhthuong_close"><img src="<?php echo get_template_directory_uri();?>/css/bangkiemtrasuckhoevehong/img/dong_popup3.png"></a>
	</div>
	<div class="popup9_nghiemtrong popup9" id="popup9_nghiemtrong">
		<p class="kiemtra1">Hoàn thành kiểm tra</p>
		<p class="kiemtra2">Kết quả kiểm tra của bạn đã có rồi !</p>
		<p class="kiemtra3">
			<span>Rất tiếc! </span>  Kết quả của hệ thống tự kiểm tra triệu chứng bệnh ở họng cho 
			thấy, họng của bạn đang có vấn đề, thường ngày nên tạo được thói quen 
			sinh hoạt tốt, chú ý giữ gìn vùng họng luôn khỏe mạnh, khi thấy khó chịu 
			cần kịp thời đến cơ sở y tế để kiểm tra, tích cực phòng tránh các bệnh 
			về họng. 
		</p>
		<p class="kiemtra4"><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tôi có nguy cơ mắc bệnh gì?</a></p>
		<p class="kiemtra5">
			<a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tư vấn trực tuyến</a>
			<a href="<?php echo home_url();?>">Quay lại trang đầu</a>
		</p>
		<a href="#" class="dong_popup3 popup9_nghiemtrong_close"><img src="<?php echo get_template_directory_uri();?>/css/bangkiemtrasuckhoevehong/img/dong_popup3.png"></a>
	</div>
<?php get_footer();?>