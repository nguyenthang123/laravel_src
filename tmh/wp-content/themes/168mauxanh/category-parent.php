<?php
if(deviceType=='phone'){
    require_once('m_archive.php');
}else{
?>
<?php
get_header(); ?>
	<div id="primary" class="content-area category-parent">
		<main id="main" class="site-main" role="main">
			<div class="container clearfix">
				<div class="left main-content">
					<h1><?php echo single_cat_title();?></h1>
					<div class="clearfix">
						<div class="left img-cat-parent">
							<?php if($cat == 2):?>
								<a><img src="<?php echo get_template_directory_uri();?>/images/cat-parent-img.png"></a>
							<?php elseif( $cat == 3):?>
								<a><img src="<?php echo get_template_directory_uri();?>/images/cat-parent-benh-tai.png"></a>
							<?php elseif ($cat == 4):?>
								<a><img src="<?php echo get_template_directory_uri();?>/images/cat-parent-benh-hong.png"></a>
							<?php endif;?>
						</div>
						<div class="left canh-bao">
							<?php if($cat == 2):?>
								<div class="clearfix">
									<div class="left left-1">
										<h3><a class="active" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Viêm mũi có thể điều trị triệt để không? Cách chữa ra sao?</a></h3>
									</div>
									<div class="left left-2">
										<div>
											<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Nguyên nhân gây xuất huyết mũi là gì?.</a></h3>
										</div>
										<div>
											<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Viêm mũi dị ứng có thể trị tận gốc không?</a></h3>
										</div>
									</div>
								</div>
								<div class="clearfix">
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Viêm xoang ở trẻ nhỏ gây những tác hại gì?</a></h3>
									</div>
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Chữa trị polyp mũi như thế nào?</a></h3>
									</div>
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Phì đại cuốn mũi có thể chữa khỏi không?</a></h3>
									</div>
								</div>
							<?php endif;?>
							<?php if($cat == 3):?>
								<div class="clearfix">
									<div class="left left-1">
										<h3><a class="active" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Điếc tai có thể chữa khỏi không? Cách chữa thế nào?</a></h3>
									</div>
									<div class="left left-2">
										<div>
											<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Tác hại của ù tai là gì?</a></h3>
										</div>
										<div>
											<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Làm sao để điều trị triệt để bệnh ù tai?</a></h3>
										</div>
									</div>
								</div>
								<div class="clearfix">
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Phải làm gì khi mắc viêm tai ngoài?</a></h3>
									</div>
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Phương pháp trị viêm tai giữa tốt nhất</a></h3>
									</div>
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Nguyên nhân gây ù tai là gì?</a></h3>
									</div>
								</div>
							<?php endif;?>
							<?php if($cat == 4):?>
								<div class="clearfix">
									<div class="left left-1">
										<h3><a class="active" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en" style="padding-top: 15px;">Viêm amidan có thể chữa khỏi triệt để không? Phải chữa thế nào?</a></h3>
									</div>
									<div class="left left-2">
										<div>
											<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Viêm họng có những triệu chứng gì?</a></h3>
										</div>
										<div>
											<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Chi phí điều trị viêm họng</a></h3>
										</div>
									</div>
								</div>
								<div class="clearfix">
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Làm thế nào điều trị tận gốc viêm họng</a></h3>
									</div>
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Họng vừa khô rát vừa đau là làm sao?</a></h3>
									</div>
									<div class="left left-3">
										<h3><a href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Phải làm gì khi bị viêm hầu họng?</a></h3>
									</div>
								</div>
							<?php endif;?>
						</div>
					</div>
					<div class="kien-thuc-ve-benh clearfix">
						<img src="<?php echo get_template_directory_uri();?>/images/cat-parent-icon.png"> 
						<span class="txt"><?php echo get_cat_name($cat);?> kiến thức về bệnh</span> 
						<span class="soc-ngang"></span>
					</div>
					<div class="list-benh-category">
						<div class="clearfix">
							<?php 
								$categories = get_categories( array(
								    'hide_empty' => 0,
								    'parent'  => $cat,
								));
								foreach ( $categories as $key => $category ):?>
									<?php if($key == 4) break;?>
									<a <?php echo $key == 0 ? 'class="active"' : '';?> href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?></a>
								<?php 
								endforeach;
							?>
						</div>
						<div class="clearfix">
							<?php 
								foreach ( $categories as $key => $category ):?>
									<?php if($key <= 3) continue;?>
									<a <?php echo $key == 0 ? 'class="active"' : '';?> href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?></a>
								<?php 
								endforeach;
							?>
						</div>
					</div>
					<div class="list-trieu-trung clearfix">
						<div class="left">
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-trieu-trung-icon.png"></a>
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Triệu trứng</a>
						</div>
						<div class="left">
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-nguy-hai-icon.png"></a>
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Nguy hại</a>
						</div>
						<div class="left">
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-kiem-tra-icon.png"></a>
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Kiểm tra</a>
						</div>
						<div class="left">
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-dieu-tri-icon.png"></a>
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Điều trị</a>
						</div>
						<div class="left">
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-benh-vien-icon.png"></a>
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Phòng khám</a>
						</div>
						<div class="left">
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en"><img src="<?php echo get_template_directory_uri();?>/images/cat-chi-phi-icon.png"></a>
							<a title="Gặp tư vấn trực tiếp 7h30-22h" href="http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en">Chi phí</a>
						</div>
					</div>
					<div class="tabs-content">
						<?php 
							foreach ( $categories as $key => $category ):?>
							<div class="tab-content article-first clearfix <?php echo $key == 0 ? 'active' : '';?>">
							<?php
								$args = array( 'posts_per_page' => 6, 'offset'=> 0, 'category' => $category->term_id,'orderby'=>'id','order' =>'asc');
								$myposts = get_posts( $args );
								$mark = 0;
								foreach ( $myposts as $post ) : setup_postdata( $post );$mark++; 
									if($mark == 1):?>
										<div class="left slide-cat">
											<a href="<?php the_permalink(); ?>">
												<?php
													$image_id = get_term_meta( $category->term_id, 'image', true );
													$image_data = wp_get_attachment_image_src( $image_id, 'full' );
													$image = $image_data[0];
													if ( ! empty( $image ) ) {
												    	echo '<img src="' . esc_url( $image ) . '" />';
													}else {
														the_post_thumbnail();
													} 
												?>
											</a>
											<a class="title-cat-image" href="<?php echo get_category_link($category->term_id);?>"><?php echo get_cat_name($category->term_id);?></a>
										</div>
										<?php 
									endif;
								endforeach; 
								
								$mark = 0;
								foreach ( $myposts as $post ) : setup_postdata( $post );$mark++;?>
										<div class="left article">
											<?php 
											if($mark == 1):?>
												<h3><a title="<?php the_title();?>" class="title" href="<?php the_permalink(); ?>"><?php echo get_limit_words(get_the_title(),70); ?></a></h3>
												<p class="description">
													<?php echo get_limit_words( get_the_excerpt(), 240 );?>
													<a title="<?php the_title();?>" class="view-more" href="<?php the_permalink(); ?>">[Chi tiết]</a>
												</p>	
												<?php 
											endif;
											if($mark > 1):?>
												<ul class="list">
													<li class="clearfix">
														<img src="<?php echo get_template_directory_uri();?>/images/dot.png">
														<h3><a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
													</li>
												</ul>	
												<?php 
											endif;
											?>
										</div>
										<?php 
								endforeach; 
								wp_reset_postdata();
								?>
							</div>
							<?php
							endforeach;
						?>
						<!-- <div class="tab-content article-first clearfix">
							<div class="left slide-cat">
								<a href=""><img src="<?php //echo get_template_directory_uri();?>/images/img-left-cat.jpg"></a>
							</div>
							<div class="left article">
								<a class="title" href="">Bắt bệnh chứng hay nghẹt mũi về đêm</a>
								<p class="description">
									Nghẹt mũi về đêm khiến chúng ta cảm thấy khó chịu, không thể ngủ
									yên gây nên các phiền toái trong cuộc sống.Bài viết dưới đây được 
									các bác sỹ Phòng khám 168 chia sẻ sẽ giúp các bạn…<a class="view-more" href="">[Chi tiết]</a>
								</p>	
								<ul class="list">
									<li class="clearfix"><img src="<?php //echo get_template_directory_uri();?>/images/dot.png"><a href="">Nguyên nhân dẫn đến viêm tai giữa tiết dịch</a></li>
									<li class="clearfix"><img src="<?php //echo get_template_directory_uri();?>/images/dot.png"><a href="">Nguyên nhân dẫn đến viêm tai giữa tiết dịch</a></li>
									<li class="clearfix"><img src="<?php //echo get_template_directory_uri();?>/images/dot.png"><a href="">Nguyên nhân dẫn đến viêm tai giữa tiết dịch</a></li>
									<li class="clearfix"><img src="<?php //echo get_template_directory_uri();?>/images/dot.png"><a href="">Nguyên nhân dẫn đến viêm tai giữa tiết dịch</a></li>
									<li class="clearfix"><img src="<?php //echo get_template_directory_uri();?>/images/dot.png"><a href="">Nguyên nhân dẫn đến viêm tai giữa tiết dịch</a></li>
								</ul>	
							</div>
						</div> -->
					</div>
					<div class="kien-thuc-ve-benh clearfix">
						<img src="<?php echo get_template_directory_uri();?>/images/cat-parent-icon-heart.png"> 
						<span class="txt">6 ưu điểm lớn của phòng khám</span> 
						<span class="soc-ngang"></span>
					</div>
					<div class="uu-diem">
						<div class="clearfix">
							<div class="left cat-nhan-hieu">
								
								<p>
									Phòng khám có thương hiệu,
									được tương truyền rộng rãi, 
									nhiều năm luôn duy trì sự 
									công bằng, uy tín, là phòng 
									khám chất lượng tốt được 
									mọi người công nhận
								</p>
							</div>
							<div class="left cat-an-toan">
								
								<p>
									Phòng khám không ngừng giới thiệu và nghiên cứu những kỹ thuật tiên tiến trong nước, nhiều năm chưa từng xảy ra sự cố ngoài ý muốn, duy trì an toàn và hiệu quả điều trị cho bệnh nhân
								</p>
							</div>
							<div class="left cat-yen-tam">
								
								<p>
									Trong nhiều năm phòng 
									khám luôn nhận được 
									những lời khen ngợi từ phía 
									bệnh nhân, được xem là nơi 
									điều trị yên tâm và hài lòng 
									của bệnh nhân
								</p>
							</div>
						</div>
						<div class="clearfix">
							<div class="left cat-chi-phi">
								
								<p>
									Phòng khám đã thành lập 
									các đoàn từ thiện ,hàng 
									tháng đều tổ chức những 
									hoạt động ưu đãi khám 
									bệnh ,đồng thời triển khai 
									đăng ký trực tuyến ,vừa tiết 
									kiệm chi phí vừa thuận tiện
								</p>
							</div>
							<div class="left cat-doi-ngu">
								
								<p>
									Hội tụ lớp bác sỹ tài năng 
									trong và ngoài nước để xây 
									dựng nên một đội ngũ y 
									khoa chuyên nghiệp toàn 
									quốc
								</p>
							</div>
							<div class="left cat-hoi-phuc">
								
								<p>
									Nhiều năm trở lại đây, bệnh 
									nhân tai mũi họng hồi phục 
									đã đạt đến con số 12698 
									người. Chúng  tôi càng tích
									lũy được thêm nhiều kinh 
									nghiệm trong việc điều trị 
									các bệnh về tai mũi họng
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- left sidebar -->
				<?php get_sidebar('right');?>
				<!-- end -->
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
<?php }?>