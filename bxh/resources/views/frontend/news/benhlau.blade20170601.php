@extends('frontend.layouts.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<link href="<?=domain?>/public/frontend/css/tien-liet-tuyen.css" rel="stylesheet">
<div class="row">
    <?= bannersOpiton(rewrite_benhlau,'/public/frontend/images/benh-lau/banner.png','background:#f3f3f3;');?>
</div>
<div class="row tien_liet_tuyen">
    <div class="main_item">
        <div class="cha_jj box_bodder">
            <div class="txt" style="background:url(/public/frontend/img/tien-liet-tuyen/cico1_28.gif) no-repeat 20px 55px;">
                <h2>trung tâm điều trị bệnh lậu</h2>
                <p>
                    Bệnh lậu là bệnh lây truyền có biểu hiện chủ yếu là viêm nhiễm dạng mủ của hệ thống tiết niệu do vi khuẩn Neisseria gonorrhoeae gây ra. Tỉ lệ mắc bệnh đứng thứ 2 trong các bệnh truyền nhiễm. Vi khuẩn lậu cầu là vi khuẩn Diplococci, tách rời khỏi cơ thể là khó để sinh tồn, dung dịch diệt khuẩn thông thường cũng dễ dàng tiêu diệt được. Bệnh lậu chủ yếu thường ở nam giới độ tuổi thanh niên.
                </p>
            </div>
        </div>
    </div>
    <div class="main_item hamuc_yeusinhly">
        <div class="cha_list">
            <div class="left">
                <?= trieuchungOption(rewrite_benhlau);?>
            </div>
            <div class="right">
            <div class="tit"><span>Tin Nóng</span></div>
            <div class="clists hover">
                <dl>
                    <dt class="t">
                    <div class="t_tit">
                        <a href="<?= linkto(rewrite_benhlau,rewrite_nguyennhan);?>">
                            <img src="/public/frontend/img/home/ico_nn.png" alt="nguyen nhan benh">Nguyên nhân bệnh
                        </a>
                    </div>
                    <?php foreach($news_nguyennhan as $key=>$val){?>
                        <?php if($key=="0"){?>
                            <div class="pic">
                                <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],num_dm_name);?></a></p>
                                <ul class="pic_ul">
                                    <?php if(!empty($val['new_img'])){?>
                                        <li class="pic_ul_li_img">
                                            <a href="/<?= $val['new_rewrite'];?>">
                                                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                            </a>
                                        </li>
                                        <li class="pic_ul_li_txt">
                                            <?= substr_font($val['new_description'],num_dm_des_img);?>
                                        </li>
                                    <?php }else{?>
                                        <li>
                                            <?= substr_font($val['new_description'],num_dm_des);?>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php }else{?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],num_dm_name2);?></a></dd>
                        <?php }?>
                    <?php }?>
                    </dt>
                    <dt class="more"><a href="<?= linkto(rewrite_benhlau,rewrite_nguyennhan);?>" >Xem nhiều<span></span></a></dt>
                </dl>
            </div>
            <div class="clists">
                <dl>
                    <dt class="t">
                    <div class="t_tit">
                        <a href="<?= linkto(rewrite_benhlau,rewrite_trieuchung);?>">
                            <img src="/public/frontend/img/home/ico_tc.png" alt="nguyen nhan benh">Triệu chứng
                        </a>
                    </div>
                    <?php foreach($news_trieuchung as $key=>$val){?>
                        <?php if($key=="0"){?>
                            <div class="pic">
                                <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],num_dm_name);?></a></p>
                                <ul class="pic_ul">
                                    <?php if(!empty($val['new_img'])){?>
                                        <li class="pic_ul_li_img">
                                            <a href="/<?= $val['new_rewrite'];?>">
                                                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                            </a>
                                        </li>
                                        <li class="pic_ul_li_txt">
                                            <?= substr_font($val['new_description'],num_dm_des_img);?>
                                        </li>
                                    <?php }else{?>
                                        <li>
                                            <?= substr_font($val['new_description'],num_dm_des);?>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php }else{?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],num_dm_name2);?></a></dd>
                        <?php }?>
                    <?php }?>
                    </dt>
                    <dt class="more"><a href="<?= linkto(rewrite_benhlau,rewrite_trieuchung);?>">Xem nhiều <span></span></a></dt>
                </dl>
            </div>
            <div class="clists">
                <dl>
                    <dt class="t">
                    <div class="t_tit">
                        <a href="<?= linkto(rewrite_benhlau,rewrite_nguyhai);?>">
                            <img src="/public/frontend/img/home/ico_nh.png" alt="nguyen nhan benh">Nguy hại
                        </a>
                    </div>
                    <?php foreach($news_nguyhai as $key=>$val){?>
                        <?php if($key=="0"){?>
                            <div class="pic">
                                <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],num_dm_name);?></a></p>
                                <ul class="pic_ul">
                                    <?php if(!empty($val['new_img'])){?>
                                        <li class="pic_ul_li_img">
                                            <a href="/<?= $val['new_rewrite'];?>">
                                                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                            </a>
                                        </li>
                                        <li class="pic_ul_li_txt">
                                            <?= substr_font($val['new_description'],num_dm_des_img);?>
                                        </li>
                                    <?php }else{?>
                                        <li>
                                            <?= substr_font($val['new_description'],num_dm_des);?>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php }else{?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],num_dm_name2);?></a></dd>
                        <?php }?>
                    <?php }?>
                    </dt>
                    <dt class="more"><a href="<?= linkto(rewrite_benhlau,rewrite_nguyhai);?>">Xem nhiều <span></span></a></dt>
                </dl>
            </div>
            <div style="width: 100%;overflow: hidden;height: 30px;"></div>
            <div class="clists">
                <dl>
                    <dt class="t">
                    <div class="t_tit">
                        <a href="<?= linkto(rewrite_benhlau,rewrite_dieutri);?>">
                            <img src="/public/frontend/img/home/ico_dt.png" alt="nguyen nhan benh">Điều trị
                        </a>
                    </div>
                    <?php foreach($news_dieutri as $key=>$val){?>
                        <?php if($key=="0"){?>
                            <div class="pic">
                                <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],num_dm_name);?></a></p>
                                <ul class="pic_ul">
                                    <?php if(!empty($val['new_img'])){?>
                                        <li class="pic_ul_li_img">
                                            <a href="/<?= $val['new_rewrite'];?>">
                                                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                            </a>
                                        </li>
                                        <li class="pic_ul_li_txt">
                                            <?= substr_font($val['new_description'],num_dm_des_img);?>
                                        </li>
                                    <?php }else{?>
                                        <li>
                                            <?= substr_font($val['new_description'],num_dm_des);?>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php }else{?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],num_dm_name2);?></a></dd>
                        <?php }?>
                    <?php }?>
                    </dt>
                    <dt class="more"><a href="<?= linkto(rewrite_benhlau,rewrite_dieutri);?>">Xem nhiều <span></span></a></dt>
                </dl>
            </div>
            <div class="clists">
                <dl>
                    <dt class="t">
                    <div class="t_tit">
                        <a href="<?= linkto(rewrite_benhlau,rewrite_chiphi);?>">
                            <img src="/public/frontend/img/home/ico_cp.png" alt="nguyen nhan benh">Chi phí
                        </a>
                    </div>
                    <?php foreach($news_chiphi as $key=>$val){?>
                        <?php if($key=="0"){?>
                            <div class="pic">
                                <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],num_dm_name);?></a></p>
                                <ul class="pic_ul">
                                    <?php if(!empty($val['new_img'])){?>
                                        <li class="pic_ul_li_img">
                                            <a href="/<?= $val['new_rewrite'];?>">
                                                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                            </a>
                                        </li>
                                        <li class="pic_ul_li_txt">
                                            <?= substr_font($val['new_description'],num_dm_des_img);?>
                                        </li>
                                    <?php }else{?>
                                        <li>
                                            <?= substr_font($val['new_description'],num_dm_des);?>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php }else{?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],num_dm_name2);?></a></dd>
                        <?php }?>
                    <?php }?>
                    </dt>
                    <dt class="more"><a href="<?= linkto(rewrite_benhlau,rewrite_chiphi);?>">Xem nhiều <span></span></a></dt>
                </dl>
            </div>
            <div class="clists">
                <dl>
                    <dt class="t">
                    <div class="t_tit">
                        <a href="<?= linkto(rewrite_benhlau,rewrite_kiemtra);?>">
                            <img src="/public/frontend/img/home/ico_kt.png" alt="nguyen nhan benh">Kiểm tra
                        </a>
                    </div>
                    <?php foreach($news_kiemtra as $key=>$val){?>
                        <?php if($key=="0"){?>
                            <div class="pic">
                                <p><a href="/<?= $val['new_rewrite'];?>"><?= substr_font($val['new_name'],num_dm_name);?></a></p>
                                <ul class="pic_ul">
                                    <?php if(!empty($val['new_img'])){?>
                                        <li class="pic_ul_li_img">
                                            <a href="/<?= $val['new_rewrite'];?>">
                                                <img src="<?= $val['new_img'];?>" alt="<?= $val['new_name'];?>">
                                            </a>
                                        </li>
                                        <li class="pic_ul_li_txt">
                                            <?= substr_font($val['new_description'],num_dm_des_img);?>
                                        </li>
                                    <?php }else{?>
                                        <li>
                                            <?= substr_font($val['new_description'],num_dm_des);?>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php }else{?>
                            <dd><a href="/<?= $val['new_rewrite'];?>" title="<?= $val['new_name'];?>" ><?= substr_font($val['new_name'],num_dm_name2);?></a></dd>
                        <?php }?>
                    <?php }?>
                    </dt>
                    <dt class="more"><a href="<?= linkto(rewrite_benhlau,rewrite_kiemtra);?>">Xem nhiều <span></span></a></dt>
                </dl>
            </div>
            </div>
        </div>
    </div>
    <div class="main_item">
        <div class="cha_zxbtn">
            <?= sidebar_duongdaynong();?>
            <div class="right"><a href="" ><img src="/public/frontend/images/benh-lau/banner_bl.jpg"></a></div>
        </div>
        <div class="clear2"></div>
        <?= dm_ha();?>
    </div>
</div>
</div>
@stop()