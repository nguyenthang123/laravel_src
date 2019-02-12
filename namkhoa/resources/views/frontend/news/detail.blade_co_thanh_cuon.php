@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/tien-liet-tuyen.css">
<link rel="stylesheet" href="<?php echo domain; ?>/public/frontend/css/list_bv.css">
<div class="row">
    <?= bannersOpiton('','/public/frontend/images/tienliettuyen/banner.jpg','background:#e9f7fa;');?>
</div>
<div class="row tien_liet_tuyen list_baiviet">
    <div class="clear2"></div>
    <!--<div class="main_item main_ico" style="overflow: hidden">
        <div class="col-lg-3">
            <img src="/public/frontend/img/home/dotphanghiencuu.png" alt="đột phá nghiên cứu">
            <p>đột phá nghiên cứu</p>
        </div>
        <div class="col-lg-3">
            <img src="/public/frontend/img/home/chungnhanquocte.png" alt="chứng nhận quốc tế">
            <p>chứng nhận quốc tế</p>
        </div>
        <div class="col-lg-3">
            <img src="/public/frontend/img/home/hoinghichuyenmon.png" alt="hội nghị chuyên môn">
            <p>Hội nghị chuyên môn</p>
        </div>
        <div class="col-lg-3">
            <img src="/public/frontend/img/home/giaithuong.png" alt="giải thưởng">
            <p>giải thưởng</p>
        </div>
        <div class="clear2" style="overflow: hidden"></div>
    </div>-->
    <?= main_ico();?>
    <div class="clear2"></div>
    <div class="main_item">
        <div class="cha_list">
            <div class="left" style="float: right">
                <?= trieuchungOption($cate['rewrite_parent']);?>
                <div class="clear2"></div>
                <div class="cha_zxbtn">
                    <?= sidebar_duongdaynong();?>
                </div>
            </div>
            <div class="right" style="border: 1px solid #ccc;width: 700px;">
                <div class="tit_detail">
                    <a href="<?= domain;?>">Trang chủ</a>
                    > <a href="/<?= $cate['cat_rewrite'];?>"><?= $cate['cat_name'];?></a>
                    > <span><?= $new['new_name'];?></span>
                    <i style="float: right;padding-right: 5px;">Ngày đăng : <?= date_from_data($new['updated_at']);?></i>
                </div>
                <div class="clear"></div>
                <div class="ico_detail">
                    <div class="col-lg-12">
                        <img src="/public/frontend/images/home/ico_detail.jpg">
                        <div class="clear" style="border-bottom: 1px solid #ccc;"></div>
                    </div>
                </div>
                <div class="baiviet_detail" style="max-height: 545px;overflow: auto;">
                    <h1 class="tit"><?= $new['new_name'];?></h1>
                    <div class="content" style="padding: 0 15px;text-align: justify;">
                        <?= $new['new_content'];?>
                    </div>
                    <div class="new_hot">
                        <div class="tit_tv">không có nội dung bạn cần, hãy tư vấn trực tiếp với bác sỹ > > > > </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <a href="<?= link_tuvan;?>" class="btn" style="background: #39bbd1">
                                    <img src="/public/frontend/img/detail/ico_bs.png" alt="tu van 168"> tìm hiểu bệnh
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?= link_tuvan;?>" class="btn" style="background: #177fc8;">
                                    <img src="/public/frontend/img/detail/dola.png" alt="tu van 168"> tư vấn chi phí
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?= link_tuvan;?>" class="btn" style="background: #519080;">
                                    <img src="/public/frontend/img/detail/ico_bs.png" alt="tu van 168"> bác sỹ tư vấn
                                </a>
                            </div>
                        </div>
                        <div class="row tinnong">
                            <label>Tin nóng</label>
                            <div class="col-sm-12" style="margin-bottom: 25px;">
                                <div style="width: 31%;border:2px solid #39bbd1;float: left"></div>
                                <div style="width: 69%;border:2px solid #eee;float: left"></div>
                            </div>
                            <div class="col-md-12 bv_lienquan">
                                <ul>
                                    <?php foreach($baivietlienquan as $key=>$val){?>
                                    <li>-<a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],50);?></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row quypham">
                    <ul>
                        <li class="qp qp1" data-i="1">quy phạm hóa chất lượng</li>
                        <li class="qp" data-i="2">quy phạm hóa thao tác bác sỹ</li>
                        <li class="qp" data-i="3">chẩn đoán điều trị quy phạm hóa</li>
                        <li class="qp" data-i="4">dịch vụ quy phạm hóa</li>
                    </ul>
                    <style>
                        .qp_content img{height: 246px;}
                    </style>
                    <div class="qp_content qp_content1" style="display: block;">
                        <img src="http://phukhoa168.com/public/frontend/img/detail/qp_content1.jpg" class="img-responsive">
                    </div>
                    <div class="qp_content qp_content2" style="display: none;">
                        <img src="http://phukhoa168.com/public/frontend/img/detail/qp_content2.jpg" class="img-responsive">
                    </div>
                    <div class="qp_content qp_content3" style="display: none;">
                        <img src="http://phukhoa168.com/public/frontend/img/detail/qp_content3.jpg" class="img-responsive">
                    </div>
                    <div class="qp_content qp_content4" style="display: none;">
                        <img src="http://phukhoa168.com/public/frontend/img/detail/qp_content4.jpg" class="img-responsive">
                    </div>
                </div>
                <script>
                    $(document).ready(function(){
                        showtab_detail('qp');
                    })
                </script>
                <script>
                    $(document).ready(function(){
                        $('div.content img').each(function(){
                            var ab=$(this).attr("src");
                            fileExt = ab.split('/').shift();
                            if(fileExt==""){
                                ab="http://namkhoa168.com"+ab;
                            }
                            $(this).attr('src',"http://namkhoa168.com/watermark.php?watermark=http://namkhoa168.com/public/frontend/images/watermark.png&image="+ab);
                        })
                    })
                </script>

            </div>
        </div>
    </div>
</div>
@stop()
