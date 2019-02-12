@extends('mobile.layout')
@section('title')<?php echo $seo['title'];?>@stop()
@section('keywords')<?php echo $seo['keywords'];?>@stop()
@section('description')<?php echo $seo['description'];?>@stop()
@section('content')
<div class="container">
    <div id="main-content">
        <div class="component">
            <?php if(empty($new)){echo '<h1>không tồn tại bài viết này.</h1>';}else{?>
            <div class="item-page">
                <h1><?= $new->name;?></h1>
                <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_facebook_like at300b" fb:like:layout="button_count"><div class="fb-like fb_iframe_widget fb_iframe_widget_fluid" data-ref=".VpidsxCbk8w.like" data-layout="button_count" data-show_faces="false" data-share="false" data-action="like" data-width="90" data-font="arial" data-href="http://khamphukhoa168.com/tin-tuc/phong-kham-chua-benh-uy-tin-tai-ha-noi" data-send="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=172525162793917&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Fkhamphukhoa168.com%2Ftin-tuc%2Fphong-kham-chua-benh-uy-tin-tai-ha-noi&amp;layout=button_count&amp;locale=en_US&amp;ref=.VpidsxCbk8w.like&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 78px; height: 20px;"><iframe name="f33f4dd9f4" width="90px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=172525162793917&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df1cfe12a8c%26domain%3Dkhamphukhoa168.com%26origin%3Dhttp%253A%252F%252Fkhamphukhoa168.com%252Ff117d8f64%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Fkhamphukhoa168.com%2Ftin-tuc%2Fphong-kham-chua-benh-uy-tin-tai-ha-noi&amp;layout=button_count&amp;locale=en_US&amp;ref=.VpidsxCbk8w.like&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90" style="border: none; visibility: visible; width: 78px; height: 20px;" class=""></iframe></span></div></a>
                    <a class="addthis_button_tweet at300b"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="http://platform.twitter.com/widgets/tweet_button.24a8e21c9032b45e8d193d263743d845.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fkhamphukhoa168.com%2Ftin-tuc%2Fphong-kham-chua-benh-uy-tin-tai-ha-noi&amp;size=m&amp;text=Ph%C3%B2ng%20kh%C3%A1m%20ch%E1%BB%AFa%20b%E1%BB%87nh%20uy%20t%C3%ADn%20t%E1%BA%A1i%20H%C3%A0%20N%E1%BB%99i%3A&amp;time=1452842420164&amp;type=share&amp;url=http%3A%2F%2Fkhamphukhoa168.com%2Ftin-tuc%2Fphong-kham-chua-benh-uy-tin-tai-ha-noi%23.Vpids77a1qM.twitter" style="position: static; visibility: visible; width: 61px; height: 20px;" data-url="http://khamphukhoa168.com/tin-tuc/phong-kham-chua-benh-uy-tin-tai-ha-noi#.Vpids77a1qM.twitter"></iframe></a>
                    <a class="addthis_button_pinterest_pinit at300b" pi:pinit:layout="horizontal"><span class="at_PinItButton"></span></a>
                    <a class="addthis_counter addthis_pill_style" href="#" style="display: inline-block;"></a><a class="atc_s addthis_button_compact"><span></span></a><a class="addthis_button_expanded" target="_blank" title="View more services" href="#"></a>
                    <div class="atclear"></div>
                </div>
                <?= $new->content;?>
                <div class="supportonline" style="text-align:center;margin-top:20px;margin-bottom:15px;">
                    <a href="<?= link_tuvan;?>">
                        <img style="" src="http://khamphukhoa168.com/images/click-bai-viet.gif" alt="trihanoi.com">
                    </a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
@stop()