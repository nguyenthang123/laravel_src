<div class="vainetcoban">
     <div class="container2">
          <div class="row">
               <div class="col-xs-3 xs3">
                 <a href="<?=link_nn;?>">
                   <div class="khoinenxanh">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_m_1.png" alt="">
                   </div>
                  <p class="text-m"> Nguyên nhân </p></a>
               </div>
               <div class="col-xs-3 xs3">
                <a href="<?=link_tc;?>">
                    <div class="khoinenxanh">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_m_2.png" alt="">
                   </div>
                   <p class="text-m">  Triệu chứng  </p></a>
               </div>
               <div class="col-xs-3 xs3">
                 <a href="http://phongkhamgiaiphong.com/hoi-nach/dieu-tri/">
                   <div class="khoinenxanh">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_m_3.png" alt="">
                   </div>
                  <p class="text-m"> Điều trị </p></a>
               </div>
               <div class="col-xs-3 xs3">
                <a href="http://phongkhamgiaiphong.com/hoi-nach/thu-thuat/">
                    <div class="khoinenxanh">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_m_4.png" alt="">
                   </div>
                   <p class="text-m"> Thủ thuật  </p></a>
               </div>
          </div>
     </div>
</div>
<div class="barner_m">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/banner_m_2.png" alt="">
</div>
<div class="chuyennghiep2">
     <div class="container1">
         <div class="row text-center">
              <div class="tt_m_cn">
                   Đội ngũ bác sỹ chuyên nghiệp 
              </div>
              <div class="des_tt_m_cn"> Đội ngũ khám chữa bệnh hôi nách tại Hà Nội </div>
              <div class="des_hai_ck" style="padding: 10px;">Phòng khám Đa khoa Giải Phóng Hà Nội là một trong những cơ sở điều trị đa khoa hàng đầu hiện nay trên địa bàn Hà Nội. Với ưu thế về quy mô điều trị, kĩ thuật chuyên nghiệp và chất lượng trong khám chữa bệnh, Phòng khám đã giúp hàng ngàn bệnh nhân điều trị hôi nách dứt điểm , an toàn và nhanh chóng, là địa chỉ uy tín do người bệnh bình chọn</div>
         </div>
     </div>
</div>
<div class="baivietqt">
     <div class="container2">
          <div class="row text-center">
               <div class="tt_bv"> Những bài viết bạn quan tâm </div>
          </div>
     </div>
</div>
<div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Nguyên nhân gây bệnh 
        </a>
      </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <?php
                    $args_my_query = array(
                        'post_type'    =>    'post',
                        'orderby'    => 'rand',
                         'cat' => 2,
                         'posts_per_page' => 5
                    );
                    $my_query = new WP_Query( $args_my_query );
                   if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
                    ?>
        <div class="panel-body">
           <a href="<?php the_permalink();?>"><div class="tt_panel"> <?php the_title();?></div></a>
        </div>
         <?php endwhile; endif; wp_reset_query();?>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Triệu chứng của bệnh
        </a>
      </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
         <?php
                    $args_my_query = array(
                        'post_type'    =>    'post',
                        'orderby'    => 'rand',
                         'cat' => 3,
                         'posts_per_page' => 5
                    );
                    $my_query = new WP_Query( $args_my_query );
                   if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
                    ?>
        <div class="panel-body">
          <a href="<?php the_permalink();?>"><div class="tt_panel"> <?php the_title();?></div></a>
        </div>
         <?php endwhile; endif; wp_reset_query();?>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Phương pháp điều trị
        </a>
      </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
         <?php
                    $args_my_query = array(
                        'post_type'    =>    'post',
                        'orderby'    => 'rand',
                         'cat' => 4,
                         'posts_per_page' => 5
                    );
                    $my_query = new WP_Query( $args_my_query );
                   if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
                    ?>
        <div class="panel-body">
           <a href="<?php the_permalink();?>"><div class="tt_panel"> <?php the_title();?></div></a>
        </div>
         <?php endwhile; endif; wp_reset_query();?>
      </div>
    </div>
    
    
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Thủ thuật điều trị
        </a>
      </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
         <?php
                    $args_my_query = array(
                        'post_type'    =>    'post',
                        'orderby'    => 'rand',
                         'cat' => 5,
                         'posts_per_page' => 5
                    );
                    $my_query = new WP_Query( $args_my_query );
                   if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
                    ?>
        <div class="panel-body">
          <a href="<?php the_permalink();?>"><div class="tt_panel"> <?php the_title();?></div></a>

      </div>
      <?php endwhile; endif; wp_reset_query();?>
    </div>
    
  </div>
</div>
<a href="<?=LINK_CONTACT;?>">
<div class="tuvantructuyen">
     <div class="container">
          <div class="row">
               <div class="col-xs-4 text-center">
                    <img style="margin-top: 10px;" src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/ico_dt.png" alt="">
               </div>
               <div class="col-xs-8">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_dt_hai.png" alt="">
               </div>
          </div>
     </div>
</div>
</a>
<a href="<?=LINK_CONTACT;?>">
<div class="tuvantructuyen tvhaitr">
     <div class="container">
          <div class="row">
               <div class="col-xs-4 text-center">
                    <img style="margin-top: 10px;" src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_hai_dt.png" alt="">
               </div>
               <div class="col-xs-8">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_hai_sdt.png" alt="">
               </div>
          </div>
     </div>
</div>
</a>
<a href="<?=LINK_CONTACT;?>">
<div class="tuvantructuyen tvbatr">
     <div class="container">
          <div class="row">
               <div class="col-xs-4 text-center">
                    <img style="margin-top: 10px;" src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_ba_dt.png" alt="">
               </div>
               <div class="col-xs-8">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/m_mobie/icon_hai_sdt.png" alt="">
               </div>
          </div>
     </div>
</div>
</a>
