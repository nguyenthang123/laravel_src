<?php
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="tintuc-phongkham">
				<div class="container clearfix">
					<div class="left focusBox about-168">
						<ul class="pic">
							<li>
								<a href="<?= link_tuvan;?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/slide-left-1.png"></a>
							</li>
						</ul>
						<div class="txt-bg"></div>
						<div class="txt">
							<ul>
							<li><a href="<?= link_tuvan;?>">Chuyên môn</a></li>
							</ul>
						</div>
						<ul class="num">
							<li><a>1</a><span></span></li>
						</ul>
					</div>
					<div class="left tin-tuc">
						<a href="<?php echo get_category_link(28);?>"><img src="<?php echo get_template_directory_uri();?>/images/tintuc-phongkham.png"></a>
						<?php
							$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 28,'orderby' =>'date');
							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<a class="img" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/img-tintuc-phongkham.png"></a>
								<h3><a title="<?php the_title();?>" class="title" href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 9 ); ?></a></h3>
								<p class="description">
									<?php echo wp_trim_words( get_the_excerpt(),30);?>
									<a title="<?php the_title();?>" href="<?php the_permalink(); ?>" class="view-more">[Chi tiết]</a>
								</p>
							<?php endforeach; 
							wp_reset_postdata();
						?>
						<ul class="list">
						<?php
							$args = array( 'posts_per_page' => 3, 'offset'=> 1, 'category' => 28,'orderby' =>'date');
							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<li><h3><a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><span>>></span><?php echo wp_trim_words( get_the_title(),10);?></a></h3></li>
							<?php endforeach; 
							wp_reset_postdata();
						?>
						</ul>
					</div>
					<div class="left thoi-gian">
						<a class="title" href="<?php echo get_page_link(2);?>">phòng khám đa khoa Giải Phóng hà nội</a>
						<a href="<?php echo get_page_link(2);?>"><img src="http://taimuihonghanoi.net/222.png"></a>
						<p class="thoigian-doing">
							<span class="txt">Thời gian làm việc : 7h30 - 20h</span>
							<span class="bg"></span>
						</p>
						<div class="clearfix tuvan">
							<div class="left chat">
								<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-chat.png"></a>
								<a href="<?= link_tuvan;?>">Bác sĩ tư vấn</a>
							</div>
							<div class="left person">
								<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-person.png"></a>
								<a href="<?= link_tuvan;?>">Đặt lịch thăm khám</a>
							</div>
							<div class="left skype">
								<a href="<?= link_skype;?>"><img src="<?php echo get_template_directory_uri();?>/images/icon-skype.png"></a>
								<a href="<?= link_skype;?>">Skype tư vấn</a>
							</div>
						</div>
						<a class="call" href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/call.png"></a>
					</div>
				</div>
			</div>
				

			<div class="thanh-ngang style-2">
				<div class="container">
					<span class="title">Kỹ thuật tiên tiến</span>
					<div class="right">
						<a href="<?= link_tuvan;?>">
							<img src="<?php echo get_template_directory_uri();?>/images/icon-chat-2.png">
							Đường dây nóng tư vấn
						</a>
					</div>
				</div>
			</div>

			<div class="thu-thuat">
				<div class="container clearfix">
					<div class="left col-1">
						<a title="<?php echo get_the_title(688);?>" href="<?php echo get_permalink(688);?>"><img src="<?php echo get_template_directory_uri();?>/images/thu-thuat.png" alt=""></a>
					</div>
					<div class="left col-2">
						<a title="<?php echo get_the_title(688);?>" class="title-1" href="<?php echo get_permalink(688);?>">THỦ THUẬT XÂM LẤN TỐI THIỂU ĐẲNG LY TỬ NHIỆT ĐỘ THẤP JCIC CỦA MỸ</a>
						<div class="clearfix">
							<a class="title-2">Giới thiệu</a>
							<span>Phương pháp điều trị an toàn hiệu quả, ngăn ngừa tái phát<a href="view-more"></a></span>
						</div>
						<div class="clearfix">
							<a class="title-2">Ưu điểm</a>
							<span>An toàn, Chính xác, Thuận tiện, Nhanh chóng </span>
						</div>
						<div class="clearfix">
							<a class="title-2">Chỉ định</a>
							<span>Viêm mũi , Viêm xoang mũi , Viêm mũi dị ứng...</span>
						</div>
						<div class="clearfix list">
							<a class="active" href="<?php echo get_permalink(289);?>">Viêm xoang mũi <br> Phương pháp chữa trị</a>
							<a href="<?php echo get_permalink(603);?>">Dây thanh sơ kết <br> Phương pháp chữa trị</a>
							<a href="<?php echo get_permalink(420);?>">Thủng màng nhĩ <br> Phương pháp chữa trị</a>
							<a href="<?php echo get_permalink(418);?>">Phì đại VA <br> Phương pháp chữa trị</a>
							<a href="<?php echo get_permalink(390);?>">Lệch vách ngăn mũi <br> Phương pháp chữa trị</a>
							<a href="<?php echo get_permalink(396);?>">Điếc tai, Ù tai <br> Phương pháp chữa trị</a>
						</div>
					</div>
					<a href="<?php echo get_category_link(29);?>" style="display: block;margin-top: 10px;"><img src="<?php echo get_template_directory_uri();?>/images/thu-thuat-bottom.gif"></a>
				</div>
			</div>
			<div class="img-nhanvien">
				<div class="container nhanvien">
					<a class="" href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/nhanvien.jpg"></a>
				</div>
			</div>

			<div class="tabs-benh">
				<div class="container">
					<div class="tabs clearfix">
						<div class="left mui">
							<a class="top-hover active" href="<?php echo get_category_link(2);?>"></a>
						</div>
						<div class="left tai">
							<a class="top-hover" href="<?php echo get_category_link(3);?>"></a>
						</div>
						<div class="left hong">
							<a class="top-hover" href="<?php echo get_category_link(4);?>"></a>
						</div>
					</div>
					<div class="tabs-content top-content active clearfix">
						<div class="left tabs-2">
							<h3><a class="active left-hover-mui" href="<?php echo get_category_link(5);?>">Viêm mũi</a></h3>
							<h3><a class="left-hover-mui" href="<?php echo get_category_link(6);?>">Viêm xoang mũi</a></h3>
							<h3><a class="left-hover-mui" href="<?php echo get_category_link(7);?>">Xuất huyết mũi</a></h3>
							<h3><a class="left-hover-mui" href="<?php echo get_category_link(8);?>">Phì đại cuống mũi</a></h3>
							<h3><a class="left-hover-mui" href="<?php echo get_category_link(9);?>">Polyp mũi</a></h3>
							<h3><a class="left-hover-mui" href="<?php echo get_category_link(11);?>">Lệch vách ngăn mũi</a></h3>
							<h3><a class="left-hover-mui" href="<?php echo get_category_link(12);?>">Viêm mũi dị ứng</a></h3>
						</div>
						<?php 
						 	$list_benh = [5,6,7,8,9,11,12];
						 	foreach ($list_benh as $key => $value):?>
							<div class="left tabs-2-content left-content-mui <?php echo $key == 0 ? 'active' : '';?>">
								<?php
									$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $value,'orderby'=>'id','order' =>'asc');
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
										<div class="clearfix">
											<div class="left col-1">
												<a class="title" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
											</div>
											<div class="left col-2">
												<a title="<?php the_title(); ?>" class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												<p class="description">
													<?php echo wp_trim_words( get_the_excerpt(), 50 );?>
													<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="view-more">[Chi tiết]</a>
												</p>
											</div>
										</div>
									<?php endforeach; 
									wp_reset_postdata();
								?>
								<ul class="list">
								<?php 
									$args = array( 'posts_per_page' => 8, 'offset'=> 1, 'category' => $value,'orderby'=>'id','order' =>'asc');
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
										<li class="left">
											<span><img src="<?php echo get_template_directory_uri();?>/images/dot.png"></span>
											<h3><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</li>
									<?php endforeach; 
									wp_reset_postdata();
								?>
								</ul>
							</div>	
						 	<?php 
						 	endforeach;
						?>
					</div>
					<div class="tabs-content top-content clearfix">
						<div class="left tabs-2">
							<h3><a class="left-hover-tai active" href="<?php echo get_category_link(13);?>">Điếc tai</a></h3>
							<h3><a class="left-hover-tai" href="<?php echo get_category_link(14);?>">Ù tai</a></h3>
							<h3><a class="left-hover-tai" href="<?php echo get_category_link(15);?>">Thủng màng nhĩ</a></h3>
							<h3><a class="left-hover-tai" href="<?php echo get_category_link(16);?>">Viêm tai giữa</a></h3>
							<h3><a class="left-hover-tai" href="<?php echo get_category_link(17);?>">Viêm tai ngoài</a></h3>
							<h3><a class="left-hover-tai" href="<?php echo get_category_link(18);?>">Giảm thính lực </a></h3>
							<h3><a class="left-hover-tai" href="<?php echo get_category_link(62);?>">Viêm tai xương chũm</a></h3>
						</div>
						<?php 
						 	$list_benh = [13,14,15,16,17,18,62];
						 	foreach ($list_benh as $key => $value):?>
							<div class="left tabs-2-content left-content-tai <?php echo $key == 0 ? 'active' : '';?>">
								<?php
									$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $value,'orderby'=>'id','order' =>'asc');
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
										<div class="clearfix">
											<div class="left col-1">
												<a class="title" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
											</div>
											<div class="left col-2">
												<a title="<?php the_title(); ?>" class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												<p class="description">
													<?php echo wp_trim_words( get_the_excerpt(), 50 );?>
													<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="view-more">[Chi tiết]</a>
												</p>
											</div>
										</div>
									<?php endforeach; 
									wp_reset_postdata();
								?>
								<ul class="list">
								<?php 
									$args = array( 'posts_per_page' => 8, 'offset'=> 1, 'category' => $value,'orderby'=>'id','order' =>'asc');
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
										<li class="left">
											<span><img src="<?php echo get_template_directory_uri();?>/images/dot.png"></span>
											<h3><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</li>
									<?php endforeach; 
									wp_reset_postdata();
								?>
								</ul>
							</div>	
						 	<?php 
						 	endforeach;
						?>
					</div>
					<div class="tabs-content top-content clearfix">
						<div class="left tabs-2">
							<h3><a class="left-hover-hong active" href="<?php echo get_category_link(20);?>">Viêm họng</a></h3>
							<h3><a class="left-hover-hong" href="<?php echo get_category_link(84);?>">Viêm thanh quản cấp</a></h3>
							<h3><a class="left-hover-hong" href="<?php echo get_category_link(22);?>">Viêm amidan</a></h3>
							<h3><a class="left-hover-hong" href="<?php echo get_category_link(23);?>">Polyp thanh quản </a></h3>
							<h3><a class="left-hover-hong" href="<?php echo get_category_link(24);?>">Viêm họng mãn tính</a></h3>
							<h3><a class="left-hover-hong" href="<?php echo get_category_link(25);?>">Viêm VA</a></h3>
							<h3><a class="left-hover-hong" href="<?php echo get_category_link(26);?>">Hạt xơ dây thanh</a></h3>
							<h3><a class="left-hover-hong" href="<?php echo get_category_link(61);?>">Viêm họng hạt</a></h3>
						</div>
						<?php 
						 	$list_benh = [20,84,22,23,24,25,26,61];
						 	foreach ($list_benh as $key => $value):?>
							<div class="left tabs-2-content left-content-hong <?php echo $key == 0 ? 'active' : '';?>">
								<?php
									$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $value,'orderby'=>'id','order' =>'asc');
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
										<div class="clearfix">
											<div class="left col-1">
												<a class="title" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
											</div>
											<div class="left col-2">
												<a title="<?php the_title(); ?>" class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												<p class="description">
													<?php echo wp_trim_words( get_the_excerpt(), 50 );?>
													<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="view-more">[Chi tiết]</a>
												</p>
											</div>
										</div>
									<?php endforeach; 
									wp_reset_postdata();
								?>
								<ul class="list">
								<?php 
									$args = array( 'posts_per_page' => 8, 'offset'=> 1, 'category' => $value,'orderby'=>'id','order' =>'asc');
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
										<li class="left">
											<span><img src="<?php echo get_template_directory_uri();?>/images/dot.png"></span>
											<h3><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</li>
									<?php endforeach; 
									wp_reset_postdata();
								?>
								</ul>
							</div>	
						 	<?php 
						 	endforeach;
						?>
					</div>
				</div>
			</div>
			
			<div class="tu-kiem-tra-benh">
				<div class="container">
					<div style="margin-top: 15px;">
						<a href="http://taimuihonghanoi.net/bang-kiem-tra-suc-khoe-ve-tai"><img src="<?php echo get_template_directory_uri();?>/img/kiemtratai.png"></a>
						<a href="http://taimuihonghanoi.net/bang-kiem-tra-suc-khoe-ve-mui"><img src="<?php echo get_template_directory_uri();?>/img/kiemtramui.png"></a>
						<a href="http://taimuihonghanoi.net/bang-kiem-tra-suc-khoe-ve-hong"><img src="<?php echo get_template_directory_uri();?>/img/kiemtrahong.png"></a>
					</div>
				
				</div>
			</div>

			<div class="thanh-ngang style-2">
				<div class="container">
					<span class="title">TRƯỜNG HỢP PHỤC HỒI SỨC KHỎE</span>
					<div class="right">
						<a href="<?= link_tuvan;?>">
							<img src="<?php echo get_template_directory_uri();?>/images/icon-chat-2.png">
							Đường dây nóng tư vấn
						</a>
					</div>
				</div>
			</div>


			<div class="phuc-hoi-suc-khoe">
				<div class="container clearfix">
					<div class="left khoa khoa-mui">
						<a class="title" href="<?php echo get_category_link(44);?>"><?php echo get_cat_name(44);?></a>
						<?php
							$args = array('posts_per_page' => 1, 'offset'=> 0, 'category' => 44);
							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<a class="img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?> </a>
								<span class="chuandoan">Chẩn đoán : viêm xoang<?php //echo get_post_meta( get_the_ID(), 'chuan-doan', true );?></span>
								<p class="description">
									<?php echo wp_trim_words( get_the_excerpt(), 30 );?>
									<a title="<?php the_title(); ?>" class="view-more" href="<?php the_permalink();?>">[Chi tiết]</a>
								</p>	
								<?php 
								endforeach; 
							wp_reset_postdata();
						?>
						<div class="tuvan-xemthem">
							<a class="tuvan" href="<?= link_tuvan;?>">Tư vấn</a>
							<a class="xemthem" href="<?php echo get_category_link(44);?>">Xem thêm</a>
						</div>
						<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/tuvan-tructuyen.png"></a>
					</div>
					<div class="left khoa khoa-tai">
						<a class="title" href="<?php echo get_category_link(46);?>"><?php echo get_cat_name(46);?></a>
						<?php
							$args = array('posts_per_page' => 1, 'offset'=> 0, 'category' => 46);
							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<a class="img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?> </a>
								<span class="chuandoan">Chẩn đoán : viêm hầu họng<?php //echo get_post_meta( get_the_ID(), 'chuan-doan', true );?></span>
								<p class="description">
									<?php echo wp_trim_words( get_the_excerpt(), 30 );?>
									<a title="<?php the_title(); ?>" class="view-more" href="<?php the_permalink();?>">[Chi tiết]</a>
								</p>	
								<?php 
								endforeach; 
							wp_reset_postdata();
						?>	
						<div class="tuvan-xemthem">
							<a class="tuvan" href="<?= link_tuvan;?>">Tư vấn</a>
							<a class="xemthem" href="<?php echo get_category_link(46);?>">Xem thêm</a>
						</div>
						<a href="<?= link_tuvan;?>"><img src="<?php echo get_template_directory_uri();?>/images/tuvan-skype.png"></a>
					</div>
					<div class="left khoa khoa-hong">
						<a class="title" href="<?php echo get_category_link(45);?>"><?php echo get_cat_name(45);?></a>
						<?php
							$args = array('posts_per_page' => 1, 'offset'=> 0, 'category' => 45);
							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<a class="img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?> </a>
								<span class="chuandoan">Chẩn đoán : viêm tai ngoài<?php //echo get_post_meta( get_the_ID(), 'chuan-doan', true );?></span>
								<p class="description">
									<?php echo wp_trim_words( get_the_excerpt(), 30 );?>
									<a title="<?php the_title(); ?>" class="view-more" href="<?php the_permalink();?>">[Chi tiết]</a>
								</p>	
								<?php 
								endforeach; 
							wp_reset_postdata();
						?>	
						<div class="tuvan-xemthem">
							<a class="tuvan" href="<?= link_tuvan;?>">Tư vấn</a>
							<a class="xemthem" href="<?php echo get_category_link(45);?>">Xem thêm</a>
						</div>
						<a href="tel:(043) 393 88 99"><img src="<?php echo get_template_directory_uri();?>/images/tuvan-dienthoai.png"></a>
					</div>
					<div class="left khoa facebook-page" style="width: 325px;margin-right: 0px;background-color: #efefef;">
						<a class="title" href="http://taimuihonghanoi.net/">PHÒNG KHÁM TAI MŨI HỌNG</a>
														<a class="img" href="http://taimuihonghanoi.net/"><img width="186" height="150" src="http://taimuihonghanoi.net/wp-content/themes/168mauxanh/img/ngoinha.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="avuong" /> </a>
								
								<p class="description" style="padding: 15px;height: 162px;">
									Trải qua  nhiều  năm  kinh  nghiệm,  phòng 
									khám đa khoa Giải Phóng Hà Nội tự hào là phòng
									khám uy tín, chất lượng cao  trên  địa  bàn 
									thành phố Hà Nội. Với đội ngũ bác sĩ giỏi 
									luôn nỗ lực cống hiến hết mình vì người 
									bệnh, phòng khám đã điều trị...									
									<a title="Trải qua  nhiều  năm  kinh  nghiệm,  phòng 
									khám đa khoa Giải Phóng Hà Nội tự hào là phòng
									khám uy tín, chất lượng cao" class="view-more" href="<?= link_tuvan;?>">[Chi tiết]</a>
								</p>	
									
						<div class="tuvan-xemthem" style="width: 195px;margin-left: auto;margin-right: auto;">
							<a class="tuvan" href="<?= link_tuvan;?>">Tư vấn</a>
							<a class="xemthem" href="http://taimuihonghanoi.net/tin-tuc-phong-kham">Xem thêm</a>
						</div>
						<a href="<?= link_facebook;?>" style="display: block;text-align: center;height: 70px;"><img src="http://taimuihonghanoi.net/wp-content/themes/168mauxanh/img/facebook-page.png"></a>
					</div>
				</div>
				<div class="container" style="margin-top: 20px;">
					<a class="thongke" href="<?php echo get_category_link(41);?>"><img src="<?php echo get_template_directory_uri();?>/images/thongke.gif"></a>
				</div>
			</div>

			<div class="about-168">
				<div class="bg-thanh-ngang">
					<div class="container clearfix">
						<a class="tab-hovers-168 moi-truong active" href="<?php echo get_category_link(42);?>"></a>
						<a class="tab-hovers-168 thiet-bi" href="<?php echo get_category_link(30);?>"></a>
						<a class="tab-hovers-168 doi-ngu" href="<?php echo get_page_link(2);?>"></a>
						<a class="tab-hovers-168 hoat-dong" href="http://taimuihonghanoi.net/hoat-dong-cong-ich/mang-suc-khoe-toi-nhung-mien-que.htm"></a>
					</div>
				</div>
				<div class="container">
					<div class="tab-content-about-168 active">
						<img src="<?php echo get_template_directory_uri();?>/images/tabs-content-moi-truong.png">
					</div>
					<div class="tab-content-about-168 list-thiet-bi clearfix">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      	<?php
									$args = array( 'offset'=> 0, 'category' => 30,'posts_per_page'=>4);
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); $i++; ?>
										<div class="left">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
											<p>
												<span class="bg"></span>
												<a class="txt" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</p>
										</div>
									<?php endforeach; ?>
									<?php
									wp_reset_postdata();
								?>
						    </div>
						    <div class="item">
						      	<?php
									$args = array( 'offset'=> 4, 'category' => 30,'posts_per_page'=>4);
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); $i++; ?>
										<div class="left">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
											<p>
												<span class="bg"></span>
												<a class="txt" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</p>
										</div>
									<?php endforeach; ?>
									<?php
									wp_reset_postdata();
								?>
						    </div>
						    <div class="item">
						      	<?php
									$args = array( 'offset'=> 8, 'category' => 30,'posts_per_page'=>4);
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); $i++; ?>
										<div class="left">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
											<p>
												<span class="bg"></span>
												<a class="txt" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</p>
										</div>
									<?php endforeach; ?>
									<?php
									wp_reset_postdata();
								?>
						    </div>
						    <div class="item">
						      	<?php
									$args = array( 'offset'=> 12, 'category' => 30,'posts_per_page'=>4);
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); $i++; ?>
										<div class="left">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
											<p>
												<span class="bg"></span>
												<a class="txt" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</p>
										</div>
									<?php endforeach; ?>
									<?php
									wp_reset_postdata();
								?>
						    </div>
						  </div>

						  	<!-- Controls -->
						  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    	<i class="fa fa-chevron-left" aria-hidden="true"></i>
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    	<i class="fa fa-chevron-right" aria-hidden="true"></i>
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
					</div>
					<div class="tab-content-about-168">
						<img src="<?php echo get_template_directory_uri();?>/images/tabs-content-doi-ngu.png">
					</div>
					<div class="tab-content-about-168">
						<a href="http://taimuihonghanoi.net/hoat-dong-cong-ich/mang-suc-khoe-toi-nhung-mien-que.htm"><img src="<?php echo get_template_directory_uri();?>/images/tabs-content-hoat-dong.png"></a>
					</div>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
