<?php include "m_header.php";?>
<main class="main_ct">
	 <div class="container">
	 	<div class="row">
	 		 <div class="tt_m_ct"> <?php the_title();?></div>
	 	</div>
	 	<div class="row">
            <div class="col-xs-12">
                <p class="text-center">
                    <a target="_blank" href="tel:19002622">
                                <span class="btn-3 btn-block hvr-float-shadow">
                                    <i class="fa fa-calendar-check-o"></i> Có thắc mắc hỏi bác sĩ</span>
                    </a>
                </p>
            </div>
            <div class="col-xs-12">
                <p class="text-center">
                    <a target="_blank" href="<?= LINK_CONTACT;?>">
                                <span class="btn-4  btn-block hvr-float-shadow">
                                    <i class="fa fa-user"></i> Đã đọc xong cần tư vấn</span>
                    </a>
                </p>
            </div>
        </div>
        <div class="row">
        	 <div class="content">
        	 	 <?php the_content();?>
        	 </div>
        </div>
	 </div>
</main>
<?php include "m_footer.php";?>