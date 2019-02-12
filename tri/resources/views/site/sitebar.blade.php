      <div class="list_gg">
	  <a href="<?= link_tuvan;?>"><img src="<?= fixk;?>/public/imgs/list_gg1.jpg"></a>
	  </div>
      <div class="leftnav">
         <div class="pro_title">Tìm kiếm tin nóng</div>
         <div class="tag">
            <ul>
               <li>
                  <a target="_blank" href="/thu-thuat-benh-tri-bao-nhieu-tien" class="taga1 l">
                      Thủ thuật bệnh trĩ
                     <div></div>
                  </a>
                  <a target="_blank" href="/dia-chi-chua-benh-tri-uy-tin,-hieu-qua" class="taga2 r">
                      Địa chỉ chữa trĩ
                     <div></div>
                  </a>
               </li>
               <li>
                  <a target="_blank" href="/bac-sy-dieu-tri-benh-tri-gioi-o-ha-noi" class="taga3 l">
                      Bác sỹ chữa trĩ giỏi
                      <div></div>
                  </a>
                   <a target="_blank" href="/cac-nguyen-nhan-gay-nen-benh-tri" class="taga4 r">
                       Nguyên nhân bệnh trĩ
                       <div></div>
                   </a>
               </li>
                <li>
                    <a target="_blank" href="/bieu-hien-nhu-the-nao-la-bi-benh-tri" class="taga5 l">
                        Biểu hiện của trĩ
                        <div></div>
                    </a>
                    <a target="_blank" href="/di-dai-tien-bi-chay-mau-hau-mon" class="taga6 r">
                        Đại tiện ra máu
                        <div></div>
                    </a>
                </li>
               <li>
                  <a target="_blank" href="/bien-chung-nguy-hiem-cua-benh-tri" class="taga7 l">
                      Biến chứng bệnh trĩ
                      <div></div>
                  </a>
                   <a target="_blank"  href="/benh-nut-ke-hau-mon-la-gi" class="taga8 r">
                       Nứt kẽ hậu môn
                       <div></div>
                   </a>
               </li>
               <li>
                  <a target="_blank"  href="/hau-mon-co-di-vat-tho-ra-la-do-nguyen-nhan-nao" class="taga9 l">
                      Dị vật hậu môn
                      <div></div>
                  </a>
                   <a target="_blank"  href="/ap-xe-hau-mon-la-benh-nhu-the-nao" class="taga10 r">
                       Apxe hậu môn
                       <div></div>
                   </a>
               </li>
            </ul>
         </div>
      </div>
      <div class="listbox listnews">
         <div class="title">
            <h2>Giới thiệu kỹ thuật</h2>
            <span class="more">
            <a href="#">MORE</a>
            </span>
         </div>
         <ul>
		 @foreach( $ky_thuats as $ky_thuat )
		  <li><a href="{{ asset('') }}{{ $ky_thuat->product_alias }}" target="_blank"> {{ $ky_thuat->name }}</a></li>
		 @endforeach
         </ul>
      </div>
      <div class="listbox">
         <div class="title">
            <h2 style="">Trường khợp khỏi bệnh</h2>
            <span id="btn_1" class="right arr">
            <a class="leftarr"></a> 
            <a class="rightarr"></a>
            </span>
         </div>
         <div id="act_1" class="list_activ">
            <ul>
               <li><a href="<?= link_tuvan;?>" target="_blank"><img src="<?= fixk;?>/public/imgs/list_zj1.jpg" alt=""></a></li>
               <li><a href="<?= link_tuvan;?>" target="_blank"><img src="<?= fixk;?>/public/imgs/list_zj2.jpg" alt=""></a></li>
               <li><a href="<?= link_tuvan;?>" target="_blank"><img src="<?= fixk;?>/public/imgs/list_zj3.jpg" alt=""></a></li>
            </ul>
         </div>
      </div>
      <div class="listbox">
         <div class="title">
            <h2>Bản đồ</h2>
         </div>
         <div id="act_2" class="list_case" style="border: 1px solid #ccc;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.111079979727!2d105.83896731548593!3d20.988183986020303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac688733b5bd%3A0x8e25d03b43b2f04f!2zNzA5IEdp4bqjaSBQaMOzbmcsIFBoxrDGoW5nIExp4buHdCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1483496300089" width="255" height="230" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
      </div>
      <div class="listbox">
          <div class="title">
              <h2>Đăng ký trực tuyến</h2>
          </div>
          <style>
              .list_case input{
                  width: 100%;
                  height: 34px;
              }
              .list_case p{
                  margin-bottom: 10px;
              }
          </style>
          <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
          <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
          <div class="list_case" style="height: 320px;">
              <form method="post" id="frmdangkydk" name="frmdangkydk" target="_self">
                  <label>Họ tên</label>
                  <p><input type="text" name="hoten" id="tendk"></p>
                  <label>Điện thoại</label>
                  <p><input type="text" name="dienthoai" id="dtdk"></p>
                  <label>Khoa khám</label>
                  <p><input type="text" name="khoakham" id="benhdk"></p>
                  <label>Thời gian</label>
                  <p><input type="text" name="thoigian" id="thoi_giandk"></p>
                  <blink id="ajaxview_dkk" class="blink_dkk" style="color: #ff0000;font-size: 13px;font-weight: bold;"></blink>
                  <p>
                      <input type="reset" value="Nhập lại" style="width: 47%;margin-right: 3%;float: left">
                      <input type="button" name="dangkykham" style="width: 50%;" value="Đăng Ký" id="dangkykham">
                  </p>
              </form>
          </div>
          <script>
              $(function (){
                  $("#thoi_giandk").datepicker({dateFormat: "yy-mm-dd"});
              });
              /*blink('blink');*/
              $(document).ready(function (e) {
                  $("#dangkykham").on("click", function (e) {
                      e.preventDefault();
                      var hoten = document.forms['frmdangkydk']['hoten'].value;
                      var dienthoai = document.forms['frmdangkydk']['dienthoai'].value;
                      var khoakham = document.forms['frmdangkydk']['khoakham'].value;
                      var thoigian = document.forms['frmdangkydk']['thoigian'].value;
                      var url=document.URL;
                      var link_dk="<?= link_dangkykham();?>";
                      if(hoten=="" || dienthoai==""){
                          alert('Họ tên và số điện thoại không được để trống.');
                      }else{
                          var parameter='hoten='+hoten+'&dienthoai='+dienthoai+'&khoakham='+khoakham+'&thoigian='+thoigian+'&uri='+url;
                          var link_dangky=link_dk+parameter;
                          window.location.href= link_dangky;
                          return false;
                      }
                  });
              });
          </script>
      </div>
   