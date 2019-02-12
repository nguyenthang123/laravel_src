@include('site.head')
<link rel="stylesheet" href="{!!  asset('public/css/list.css'); !!}">
<div class="w1000 main">
   <div class="left w277">
@include('site.sitebar')
   </div>
   <div class="left w822 home">
            <div class="row  btn-breadcrumb-s">
            <div id="bc1" class="btn-group btn-breadcrumb">
			<p>Ví trị hiện tại của bạn: </p>
               <a href="/" class="">
                  <div>Trang chủ</div> 
               </a> 
               <?php
                  if(count($cat_parent_breadcrumb)) {
                  	?>
               <a href="/{{ $cat_parent_breadcrumb->cat_alias}}" class="">
                  <div>{{ $cat_parent_breadcrumb->name}}</div>
               </a> >
               <?php
                  }
                  ?>
               <a href="/{{ $cat->cat_alias}}" class=" active">
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
							 if(strlen($text)<150){
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
