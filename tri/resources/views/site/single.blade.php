@include('site.head')
<link rel="stylesheet" href="{!!  asset('public/css/list.css'); !!}">
<div class="w1000 main container content_son_index site-site" style="width: 1100px;margin-top: 10px;padding: 0">
   <div class="left w277">
@include('site.sitebar')
   </div>
      <div class="left w822 row">
         <div class="row  btn-breadcrumb-s">
            <div id="bc1" class="btn-group btn-breadcrumb">
			<p>Ví trị hiện tại của bạn: </p>
               <a href="/">
                  <div>Trang chủ</div>
               </a>
               <?php
                  if(count($cat_parent_breadcrumb)) {
                  	?>
               <a href="/{{ $cat_parent_breadcrumb->cat_alias}}">
                  <div>{{ $cat_parent_breadcrumb->name}}</div>
               </a>
               <?php
                  }
                  ?>
               <a href="/{{ $cat->cat_alias}}" class="active">
                  <div>{{ $cat->name}}</div>
               </a>
            </div>
         </div>
          <style>
              .noi-dung-bai-viet p{
                  margin-bottom: 10px;
              }
          </style>
      <div class="noi-dung-bai-viet">
         <h1>{{ $product->name }}</h1>
         <?php echo $product->content ;?>			
      </div>
          <div class="new_detail_lv">
              <style>
                  .new_detail_lv{
                      width: 670px;
                      margin: auto;
                      margin-bottom: 35px;
                      background: #95713f;
                      border-radius: 10px;
                  }
                  .new_detail_lv p{
                      margin-bottom: 15px;
                      padding-left: 15px;
                  }
              </style>
              <div style="padding: 20px;">
                  <p style="text-align:justify">
                      <strong><img src="http://trihanoi.com/public/images/home/benh-18.png" alt="tu van"> <a href="<?= link_tuvan;?>"><span style="color:#ffffff"> CLICK TƯ VẤN TRỰC TUYẾN</span></a></strong>
                  </p>
                  <p style="text-align:justify">
                      <strong><img src="http://trihanoi.com/public/frontend/images/detail/ico_detailnew_dttv.png" alt="dttv"><span style="color:#ffffff"> <?= phone1;?> (miễn phí) – <?= phone2;?> </span></strong>
                  </p>
                  <p style="text-align:justify">
                      <strong><img src="http://trihanoi.com/public/frontend/images/detail/ico_detailnew_dc.png" alt="dc"><span style="color:#ffffff"> Số 709 - Giải Phóng - Hoàng Mai - Hà Nội</span></strong>
                  </p>
                  <p style="text-align:justify;color: #fff;">
                      <strong>Phòng khám làm việc tất cả các ngày trong tuần, bao gồm cả ngày lễ.</strong>
                  </p>
                  <p style="text-align:justify;color: #fff;">
                      <strong>(Chúc bệnh nhân sớm hồi phục sức khỏe.)</strong>
                  </p>
              </div>
          </div>
	  @include('site.single-bottom')
   </div>
</div>
@include('site.footer')