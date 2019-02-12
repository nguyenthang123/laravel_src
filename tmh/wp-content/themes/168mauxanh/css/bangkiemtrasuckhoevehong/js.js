$(document).ready(function(){
	$('#popup9_khoemanh,#popup9_binhthuong,#popup9_nghiemtrong').popup({
		blur:false,
      	transition: 'all 0.3s',
      	scrolllock: false,
      	background: true,
      	setzindex:2000,
  	});
	$('form').submit(function(e){
		var dapan = 0;
		for (var i = 1; i <= 12; i++) {
			if($('input[name="traloi['+i+']"]:checked').val() === 'Có'){
				dapan++;
			}
		}
		if(dapan==0){
			$('#popup9_khoemanh').popup('show');
		}
		if(dapan<4&&dapan>=1){
			$('#popup9_binhthuong').popup('show');
		}
		if(dapan>=4){
			$('#popup9_nghiemtrong').popup('show');
		}
		e.preventDefault();
	})
})