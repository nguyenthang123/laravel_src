	<div class="tuvanbasy" style="margin: 0;background: #12a1b0;color: #ffffff;text-transform: uppercase;text-align: center;font-size: 13px;height: 35px;line-height: 35px;margin-bottom: 15px;">
        không có nội dung bạn cần,hãy <a style="color: #ffffff;font-size: 13px;" href="<?= link_tuvan;?>">tư vấn trực tiếp</a> với bác sỹ &gt;&gt;&gt;&gt;&gt;
      </div>
      <div class="row timhieubenh" style="overflow: hidden;padding-left: 14px;padding-right: 5px;">
         <div class="col-lg-4">
            <a href="<?= link_tuvan;?>" class="btn" style="background: #12a1b0;"><img src="http://trihanoi.com/public/frontend/images/detail/ico_bs.png">tìm hiểu bệnh</a>
         </div>
         <div class="col-lg-4">
            <a href="<?= link_tuvan;?>" class="btn" style="background: #087985;"><img src="http://trihanoi.com/public/frontend/images/detail/dola.png">tư vấn chi phí</a>
         </div>
         <div class="col-lg-4">
            <a href="<?= link_tuvan;?>" class="btn" style="background: #044e56;;"><img src="http://trihanoi.com/public/frontend/images/detail/ico_tv.png">bác sỹ tư vấn</a>
         </div>
      </div>
      <div class="row tinnong" style="     padding-top: 15px;    padding-left: 20px;
    padding-right: 20px;   overflow: hidden;">
         <!--<label>Tin nóng</label>-->
         <label style="    color: #454444;
    font-size: 20px;
    padding-bottom: 4px;
    display: block;">Tin nóng</label>
         <div class="col-sm-12" style="margin-bottom: 25px;">
            <div style="width: 28%;border:2px solid #4f402b;float: left"></div>
            <div style="width: 69%;border:2px solid #f1f1f1;float: left"></div>
         </div>
		 <?php if(isset($tin_nong_cat)){?>
			<div class="col-md-12 bv_lienquan">
				<ul>
					@foreach( $tin_nong_cat as $product )
							 <li>-<a class="show-1" title="{{ $product->name }}" href="{{ asset('') }}{{ $product->product_alias }}">
							 <?php  //echo $product->name;


							 ?>
							                <?php
                  $content = $product->name; 
                  $str=trim($content); 
                  $text = strip_tags($str, ""); 
                  
                  if(strlen($text)<50)
                  {
                  echo $str;
                  }
                  else {
                  $str =substr($text,0,50);
                  $count_vitri=strrpos($str,' ');
                  $str =substr($str,0,$count_vitri); 
                  
                  echo $str.'...';
                  }
                  ?> 
							 </a>

							 </li>
								
								@endforeach	
				</ul>
			</div>
		 <?php } ?>
         <div class="col-md-12 bv_lienquan">
            <ul>

					@foreach( $san_pham_lien_quan as $product )
							 <li>-<a class="show-1" title="{{ $product->name }}" href="{{ asset('') }}{{ $product->product_alias }}">	
							 <?php  //echo $product->name; 
							 
							 
							 ?>
							                <?php
                  $content = $product->name; 
                  $str=trim($content); 
                  $text = strip_tags($str, ""); 
                  
                  if(strlen($text)<50)
                  {
                  echo $str;
                  }
                  else {
                  $str =substr($text,0,50);
                  $count_vitri=strrpos($str,' ');
                  $str =substr($str,0,$count_vitri); 
                  
                  echo $str.'...';
                  }
                  ?> 
							 </a>
							 </li>
								@endforeach	
            </ul>
         </div>
      </div>
      <div class="row quypham">
         <ul>
            <li class="qp qp1">quy phạm hóa chất<br> lượng</li>
            <div class="qp_content qp_kaka" style="">
               <img src="http://trihanoi.com/public/frontend/images/detail/qp_content1.jpg" class="img-responsive">
            </div>
            <li class="qp">quy phạm hóa thao<br> tác bác sỹ</li>
            <div class="qp_content" >
               <img src="http://trihanoi.com/public/frontend/images/detail/qp_content2.jpg" class="img-responsive">
            </div>
            <li class="qp">chẩn đoán điều trị<br> quy phạm hóa</li>
            <div class="qp_content" >
               <img src="http://trihanoi.com/public/frontend/images/detail/qp_content3.jpg" class="img-responsive">
            </div>
            <li class="qp">dịch vụ quy phạm<br> hóa</li>
            <div class="qp_content">
               <img src="http://trihanoi.com/public/frontend/images/detail/qp_content4.jpg" class="img-responsive">
            </div>
         </ul>

      </div>