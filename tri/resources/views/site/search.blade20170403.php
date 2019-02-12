<!--@include('site.head')
	<div class="container content_son_index site-site">
	<div class="row">
		<div class="col-sm-3 site-bar-s"></div>
		<div class="col-md-12 padding-right show_sanpham_son">
			<div class="features_items">
						@if ($errors->has())
							<p style="color:red;">
							  @foreach ($errors->all() as $error)
								{!! $error !!}<br />		
							  @endforeach
							</p>
						@endif
						<h2 class="title text-center"><b>{{$title}}</b></h2>
						@foreach( $products as $product )
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
							<?php
/*							$img_xs=json_decode($product->image_list,1);
							if(count($img_xs)){
								if(isset($img_xs)) {
									foreach ($img_xs as $img_x) {
									*/?>
									<table>	
										<td>
											<img src="{{$img_x['url']}}" />
										</td>
									</table>
										<?php
/*										break;
									}
								}
								}else {
									*/?>
									<img src="/public/images/home/product3.jpg" alt="" />
									<?php
/*								}
						*/?>
										<p>
										{{ $product->name }}
										</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Liên hệ</a>
									</div>
									<a class="show-1" href="{{ asset('') }}{{ $product->product_alias }}">	
									<div class="product-overlay">
										<div class="overlay-content">
										<p>Vui lòng liên hệ để được<br> giá tốt nhất</p>
											<div class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Liên hệ</div>
										</div>
									</div> 
									</a>
								</div>
							</div>	
						</div>
						@endforeach
						<div class="row" style="    clear: both;">
				<?php
/*				echo $products->render();
				*/?>
				</div>
			</div>
		</div>
	</div>
	</div>
@include('site.footer')-->

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
                <a href="/">
                    <div>Trang chủ</div>
                </a>
                <a href="" class=" active">
                    <div>{{$title}}</div>
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
