@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton(rewrite_suimaoga,'','background:#05458d;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(<?= fixk;?>/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <p>
                    Sùi mào gà là bệnh lây truyền biểu hiện chủ yếu là thương tổn tăng sinh cơ quan sinh dục và hậu môn do virus HPV gây ra. Thường gặp ở độ tuổi trung thành niên 18-50 tuổi. Thời gian ủ bệnh từ nửa tháng - 8 tháng, trung bình là khoảng sau 3 tháng ủ bệnh sẽ phát bệnh. Bệnh này khá thường gặp, chủ yếu thông qua lây nhiễm do quan hệ tình dục.
                </p>
            </div>
        </div>
    </div>
    <div class="main_item hamuc_yeusinhly">
        <div class="cha_list">
            <div class="left">
                <?= trieuchungOption(rewrite_suimaoga);?>
            </div>
            <div class="right">
                <div class="tit"><span>Tin Nóng</span></div>
                <div class="clists hover">
                    <dl>
                        <dt class="t">
                        <div class="t_tit">
                            <a href="<?= linkto(rewrite_suimaoga,rewrite_nguyennhan);?>">
                                <img src="<?= fixk;?>/public/frontend/img/home/ico_nn.png" alt="nguyen nhan benh">Nguyên nhân bệnh
                            </a>
                        </div>
                        <?php foreach($news_nguyennhan as $key=>$val){?>
                            <?php if($key=="0"){?>
                                <div class="pic">
                                    <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],35);?></a></p>
                                    <ul class="pic_ul">
                                        <?php if(!empty($val['new_img'])){?>
                                            <li class="pic_ul_li_img">
                                                <a href="/<?= $val['new_rewrite'];?>">
                                                    <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                                </a>
                                            </li>
                                            <li class="pic_ul_li_txt">
                                                <?= substr_font($val['new_description'],80);?>
                                            </li>
                                        <?php }else{?>
                                        <li>
                                            <?= substr_font($val['new_description'],120);?>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            <?php }else{?>
                                <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],38);?></a></dd>
                            <?php }?>
                        <?php }?>
                        </dt>
                        <dt class="more"><a href="<?= linkto(rewrite_suimaoga,rewrite_nguyennhan);?>" >Xem nhiều<span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <div class="t_tit">
                            <a href="<?= linkto(rewrite_suimaoga,rewrite_trieuchung);?>">
                                <img src="<?= fixk;?>/public/frontend/img/home/ico_tc.png" alt="nguyen nhan benh">Triệu chứng
                            </a>
                        </div>
                        <?php foreach($news_trieuchung as $key=>$val){?>
                            <?php if($key=="0"){?>
                                <div class="pic">
                                    <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],35);?></a></p>
                                    <ul class="pic_ul">
                                        <?php if(!empty($val['new_img'])){?>
                                            <li class="pic_ul_li_img">
                                                <a href="/<?= $val['new_rewrite'];?>">
                                                    <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                                </a>
                                            </li>
                                            <li class="pic_ul_li_txt">
                                                <?= substr_font($val['new_description'],80);?>
                                            </li>
                                        <?php }else{?>
                                            <li>
                                                <?= substr_font($val['new_description'],120);?>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            <?php }else{?>
                                <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],38);?></a></dd>
                            <?php }?>
                        <?php }?>
                        </dt>
                        <dt class="more"><a href="<?= linkto(rewrite_suimaoga,rewrite_trieuchung);?>">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <div class="t_tit">
                            <a href="<?= linkto(rewrite_suimaoga,rewrite_nguyhai);?>">
                                <img src="<?= fixk;?>/public/frontend/img/home/ico_nh.png" alt="nguyen nhan benh">Nguy hại
                            </a>
                        </div>
                        <?php foreach($news_nguyhai as $key=>$val){?>
                            <?php if($key=="0"){?>
                                <div class="pic">
                                    <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],35);?></a></p>
                                    <ul class="pic_ul">
                                        <?php if(!empty($val['new_img'])){?>
                                            <li class="pic_ul_li_img">
                                                <a href="/<?= $val['new_rewrite'];?>">
                                                    <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                                </a>
                                            </li>
                                            <li class="pic_ul_li_txt">
                                                <?= substr_font($val['new_description'],80);?>
                                            </li>
                                        <?php }else{?>
                                            <li>
                                                <?= substr_font($val['new_description'],120);?>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            <?php }else{?>
                                <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],38);?></a></dd>
                            <?php }?>
                        <?php }?>
                        </dt>
                        <dt class="more"><a href="<?= linkto(rewrite_suimaoga,rewrite_nguyhai);?>">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div style="width: 100%;overflow: hidden;height: 30px;"></div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <div class="t_tit">
                            <a href="<?= linkto(rewrite_suimaoga,rewrite_dieutri);?>">
                                <img src="<?= fixk;?>/public/frontend/img/home/ico_dt.png" alt="nguyen nhan benh">Điều trị
                            </a>
                        </div>
                        <?php foreach($news_dieutri as $key=>$val){?>
                            <?php if($key=="0"){?>
                                <div class="pic">
                                    <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],35);?></a></p>
                                    <ul class="pic_ul">
                                        <?php if(!empty($val['new_img'])){?>
                                            <li class="pic_ul_li_img">
                                                <a href="/<?= $val['new_rewrite'];?>">
                                                    <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                                </a>
                                            </li>
                                            <li class="pic_ul_li_txt">
                                                <?= substr_font($val['new_description'],80);?>
                                            </li>
                                        <?php }else{?>
                                            <li>
                                                <?= substr_font($val['new_description'],120);?>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            <?php }else{?>
                                <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],38);?></a></dd>
                            <?php }?>
                        <?php }?>
                        </dt>
                        <dt class="more"><a href="<?= linkto(rewrite_suimaoga,rewrite_dieutri);?>">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <div class="t_tit">
                            <a href="<?= linkto(rewrite_suimaoga,rewrite_chiphi);?>">
                                <img src="<?= fixk;?>/public/frontend/img/home/ico_cp.png" alt="nguyen nhan benh">Chi phí
                            </a>
                        </div>
                        <?php foreach($news_chiphi as $key=>$val){?>
                            <?php if($key=="0"){?>
                                <div class="pic">
                                    <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],35);?></a></p>
                                    <ul class="pic_ul">
                                        <?php if(!empty($val['new_img'])){?>
                                            <li class="pic_ul_li_img">
                                                <a href="/<?= $val['new_rewrite'];?>">
                                                    <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                                </a>
                                            </li>
                                            <li class="pic_ul_li_txt">
                                                <?= substr_font($val['new_description'],80);?>
                                            </li>
                                        <?php }else{?>
                                            <li>
                                                <?= substr_font($val['new_description'],120);?>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            <?php }else{?>
                                <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],38);?></a></dd>
                            <?php }?>
                        <?php }?>
                        </dt>
                        <dt class="more"><a href="<?= linkto(rewrite_suimaoga,rewrite_chiphi);?>">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
                <div class="clists">
                    <dl>
                        <dt class="t">
                        <div class="t_tit">
                            <a href="<?= linkto(rewrite_suimaoga,rewrite_kiemtra);?>">
                                <img src="<?= fixk;?>/public/frontend/img/home/ico_kt.png" alt="nguyen nhan benh">Kiểm tra
                            </a>
                        </div>
                        <?php foreach($news_kiemtra as $key=>$val){?>
                            <?php if($key=="0"){?>
                                <div class="pic">
                                    <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],35);?></a></p>
                                    <ul class="pic_ul">
                                        <?php if(!empty($val['new_img'])){?>
                                            <li class="pic_ul_li_img">
                                                <a href="/<?= $val['new_rewrite'];?>">
                                                    <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                                </a>
                                            </li>
                                            <li class="pic_ul_li_txt">
                                                <?= substr_font($val['new_description'],80);?>
                                            </li>
                                        <?php }else{?>
                                            <li>
                                                <?= substr_font($val['new_description'],120);?>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            <?php }else{?>
                                <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],38);?></a></dd>
                            <?php }?>
                        <?php }?>
                        </dt>
                        <dt class="more"><a href="<?= linkto(rewrite_suimaoga,rewrite_kiemtra);?>">Xem nhiều <span></span></a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="<?= fixk;?>/public/frontend/images/sui-mao-ga/banner_smg.jpg" style="width: 900px;"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
</div>
@stop()