$(document).ready(function(){
    $('.click_menu').click(function(){
        $('.menu_main').toggle();
        $('.addtop_k').toggle();
    });
    $('ul.lv1 li').click(function(){
        var _id=$(this).attr('id');
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $('.'+_id).removeClass('active');
        }else{
            $('ul.lv1 li').removeClass('active');
            $(this).addClass('active');
            $('.'+_id).addClass('active');
        }
        if($('#'+_id).hasClass('active')){
            $('.menu_sub').removeClass('active');
            $('.content_'+_id).addClass('active');
            $('.show_menu_lv3').unbind().click(function(){
                var _id_lv2=$(this).attr('id');
                if($('.'+_id_lv2).hasClass('active')){
                    $('.'+_id_lv2).removeClass('active');
                    $('.content_'+_id_lv2).removeClass('active');
                }else{
                    $('.show_menu_lv3').removeClass('active');
                    $('.'+_id_lv2).addClass('active');
                    $('.menu_lv3').removeClass('active');
                    $('.content_'+_id_lv2).addClass('active');
                }
            })
        }else{
            $('.menu_sub').removeClass('active');
        }
    })
})
function echo(str){
    console.log(str);
}