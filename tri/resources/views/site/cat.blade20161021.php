@include('site.head')
@include('site.main-slides')
<link rel="stylesheet" href="{!!  asset('public/css/list.css'); !!}">
<!--<script type="text/javascript" src="http://cqalyy.com/templets/alnew/js/fun.js"></script>-->
<section class="section_icon_nav_box1">
   <section class="section_icon_nav_box2 dhone">
      <div style="width:112px; background:#9c2231; height:80px; text-align:center; float:left;">
         <img src="/public/imgs/list_navbg.png">
         <p></p>
         <div class="list_ico"></div>
      </div>
      <ul>
         <li class="icon_nav1">
            <i></i>
            <a href="/tri" target="_blank">
               <em></em>
               <p>Bệnh trĩ</p>
            </a>
         </li>
         <li class="icon_nav2">
            <i></i>
            <a href="/nut-ke-hau-mon" target="_blank">
               <em></em>
               <p>Nứt kẽ hậu môn</p>
            </a>
         </li>
         <li class="icon_nav3">
            <i></i>
            <a href="/dai-tien-ra-mau" target="_blank">
               <em></em>
               <p>Đại tiện<br>ra máu</p>
            </a>
         </li>
         <li class="icon_nav4">
            <i></i>
            <a href="/ro-hau-mon" target="_blank">
               <em></em>
               <p>Rò<br>hậu môn</p>
            </a>
         </li>
         <li class="icon_nav5">
            <i></i>
            <a href="/mun-mu-hau-mon" target="_blank">
               <em></em>
               <p>Mụn mủ <br> hậu môn</p>
            </a>
         </li>
         <li class="icon_nav6">
            <i></i>
            <a href="/tao-bon" target="_blank">
               <em></em>
               <p>Táo<br> bón</p>
            </a>
         </li>
         <li class="icon_nav7">
            <i></i>
            <a href="http://trihanoi.com/sung-hau-mon" target="_blank">
               <em></em>
               <p>Sưng <br>hậu môn</p>
            </a>
         </li>
         <li class="icon_nav8">
            <i></i>
            <a href="/di-vat-hau-mon" target="_blank">
               <em></em>
               <p>Dị vật<br>hậu môn</p>
            </a>
         </li>
         <li class="icon_nav9">
            <i></i>
            <a href="/ngua-hau-mon" target="_blank">
               <em></em>
               <p>Ngứa <br>hậu môn</p>
            </a>
         </li>

         <li class="icon_nav15" style="width:76px;">
            <i></i>
            <a href="<?= link_tuvan;?>" target="_blank">
               <em></em>
               <p>Các hạng<br> mục khác</p>
            </a>
         </li>
      </ul>
   </section>
</section>
<div class="w1000 main">
   <div class="left w277">
@include('site.sitebar')
   </div>
   <div class="left w822">
            <div class="row  btn-breadcrumb-s">
            <div id="bc1" class="btn-group btn-breadcrumb">
			<p>Ví trị hiện tại của bạn: </p>
               <a href="/" class="btn btn-default">
                  <div>Trang chủ</div> 
               </a> 
               <?php
                  if(count($cat_parent_breadcrumb)) {
                  	?>
               <a href="/{{ $cat_parent_breadcrumb->cat_alias}}" class="btn btn-default">
                  <div>{{ $cat_parent_breadcrumb->name}}</div>
               </a> >
               <?php
                  }
                  ?>
               <a href="/{{ $cat->cat_alias}}" class="btn btn-default active">
                  <div>{{ $cat->name}}</div>
               </a> 
            </div>
         </div>
      <div class="article_list2">
         <div style=" height:auto;">
            <ul>
			
			
            @if ($errors->has())
            <p style="color:red;">
               @foreach ($errors->all() as $error)
               {!! $error !!}<br />		
               @endforeach
            </p>
            @endif
            <?php
               if(count($products)==0) {
               	echo "<h2 class='text-center' style='    padding-top: 20px;
    padding-bottom: 20px;
    text-align: center;'> Không có bài viết nào </h2>";
               }
               
               ?>
            @foreach( $products as $product )
			    <li>
                  <div class="list_nr">
                     <div class="nr_bt"><span class="ztbt"><a href="{{ asset('') }}{{ $product->product_alias }}" target="_blank" title="">{{ $product->name }}</a></span><span class="zxzj"><a  href="<?= link_tuvan;?>" target="_blank">Bác sĩ tư vấn</a></span></div>
					 						<?php
							$content1 = $product->content;
							$str=trim($content1); 
							$text = strip_tags($str, ""); 
							
							 if(strlen($text)<150)
							 {
							 echo $str;
							 }
							 else {
							$str =substr($text,0,350);
							$count_vitri=strrpos($str,' ');
							$str =substr($str,0,$count_vitri); 
							
							echo "<p>".$str.'...'."</p>";
							}
						?>	
                  </div>
               </li>

            @endforeach
            <div class="row" style="    text-align: center;    clear: both;">
               <?php 
                  //$products->setPath('pha-thai');
                  echo $products->render(); 
                  ?>
            </div>
         



		   </ul>
         </div>
      </div>
@include('site.single-bottom')

   </div>
</div>

@include('site.footer')
