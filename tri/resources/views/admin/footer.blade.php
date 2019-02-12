
<div class="row" style="">
	
</div>
</body>

</html>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

	    <script type="text/javascript">
        function BrowseServer() {
            var finder = new CKFinder();
            //finder.basePath = '../';
            finder.selectActionFunction = SetFileField;
            finder.popup();
        }
        function SetFileField(fileUrl) {
            document.getElementById('Image').value = fileUrl;
		//	var demo = document.getElementById("demo");    
        //    demo.innerHtml='<h1>Hello member</h1>';	
		document.getElementById('img_edit').innerHTML='<img class="img_avatar" src='+fileUrl+'>';	
		// $( "#img_edit" ).append('<img class="img_avatar" src="'+fileUrl+'">');
		//$("<span>Hello World!</span>").appendTo("p");
        }
    </script>
   <script>	
$(function() {
     var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
     $("nav ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' ){
          $(this).addClass("active");
	  
		  }
		// $(this).parent().first().css( "background-color", "red" ); 
     })
});
   </script>
   
   