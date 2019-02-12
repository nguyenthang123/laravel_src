@include('site.head')
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
	<div class="container" style="width:1000px;margin: 0 auto;padding-top:20px;padding-bottom:50px;" >
		<div id="page-content-wrapper"  class="col-md-9 admin-content">
			<h2>Đăng ký khám</h2>
			<div id="result">
			</div> 
			<!--
				{!! Form::open(array('action' => 'Admin\DangkyController@dang_ky')) !!}
				
				-->
				<div class="row add-user">
					<div class="col-md-1">
						Ten
					</div>
					<div class="col-md-11">
						{!! Form::text('ten','',array('class' => 'ten form-control')) !!}
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						dt
					</div>
					<div class="col-md-11">
						{!! Form::text('dt', '', array('class' => 'dt form-control')) !!}
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						benh
					</div>

				<select name="benh" class="benh">
                                    <option value="Rò hậu môn">Rò hậu môn</option>
                                    <option value="nut_ke_hau_mon">Nứt kẽ hậu môn</option>
                                    <option value="dai_tien_ra_mau">Đại tiện ra máu</option>
                                    <option value="am_uot_hau_mon">Ẩm ướt hậu môn</option>
                                    <option value="ngua_hau_mon">Ngứa hậu môn</option>
                                    <option value="sung_hau_mon">Sưng hậu môn</option> 
									<option value="polyp-truc-trang">Polyp trực tràng</option> 
									<option value="mun_mu_hau_mon">Mụn mủ hậu môn</option> 
									<option value="tao_bon">Táo bón</option>
									
                                </select>	
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						Thời gian
					</div>
					<div class="col-md-11">
						{!! Form::text('thoi_gian', '', array('class' => 'thoi_gian form-control')) !!}
					</div>
				</div>
				<div class="row add-user">
					<div class="col-md-1">
						
					</div>
					<div class="col-md-10">
						{!! Form::submit('Create',array('class' => 'click_kaka btn btn-default')) !!}
					</div>
				</div>
				<!--
				{!! Form::close() !!}
			-->

		</div>
			<script>
	function updatePhone(){
	//	var url = "http://trihanoi.com/dang-ky-in-ra";
	//	jQuery("#result").load(url);
	}
	setInterval("updatePhone()", 5000); 
	

</script>
		<script>
		 $(function() {
			 $(".click_kaka").click(function() {
			$.ajax({
				type: 'POST',
				url: 'http://trihanoi.com/dang-ky',
				data: {
					ten : $('.ten').val(),
					dt : $('.dt').val(),
					benh : $('.benh').val(),
					thoi_gian : $('.thoi_gian').val()
				},
				dataType: 'html',
				success: function(kaka) {
				//	alert(kaka);
					//$("#result").append("bongdaso");
				//	var url = "http://trihanoi.com/dang-ky-in-ra";
				//	jQuery("#result").load(url);
      
				("#result").html("khám phụ khoa ở đâu tốt nhất Hà Nội");
				},
				error: function() {
					alert('Có lỗi trong quá trình xử lý 1');
				}
			});
		});	
   });	
</script>   
</div>	
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script>
  $(function() {
    $( ".thoi_gian" ).datepicker();
  });
  </script>

@include('site.footer')