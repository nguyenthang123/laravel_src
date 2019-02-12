@include('site.head')
<?php
	//var_dump($san_pham_nhap_khau);
?>
	<section>
		<div class="container content_son_index">
			<div class="row">
				<div class="col-sm-3 site-bar-s">
				
				</div> 
				
				<div class="col-sm-12 padding-right show_sanpham_son">
					<div class="row">
						<h1 > <center>{{ $new->name }} </center></h1>
						<div class="content_new">
						<?php echo $new->content; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@include('site.footer')