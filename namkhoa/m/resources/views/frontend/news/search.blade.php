@extends('frontend.layouts.layout')
@section('content')
<div class="main_content">
    <div class="main_item categories">
        <?= CateOption();?>
        <?//= CateSubOption($cate);?>
    </div>
    <div class="clear2"></div>
    <div class="main_item main_tit2"><?= $keyword;?></div>
    <div class="main_item articel">
        <ul class="articel">
            <?php foreach($news as $val){?>
                <li><a href="<?= $val['new_rewrite'];?>"><?= $val['new_name'];?></a> </li>
            <?php }?>
        </ul>
        <?php echo $news->render(); ?>
    </div>
</div>
@stop()