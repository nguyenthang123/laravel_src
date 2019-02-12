function menu(id){
    var $li_chil=$(id).find("li.menu_ul1_li");
    var li_men=null,li_men_over=null;
    $li_chil.each(function(){
        $(this).hover(function(i,e){
            li_men=$(this).find('.men');
            li_men_over=$(this).find('.men_over');
            li_men.stop().animate({'top':'-65px'},300);
            li_men_over.stop().animate({'top':'0px'},300);
        },function(){
            li_men.stop().animate({'top':'0px'},300);
            li_men_over.stop().animate({'top':'65px'},300);
        })
    })
}
function hangmuc(){
    var li_clas=$('.menu_ul2_hangmuc').find('.menu_ul2_li');
    var flg=null;
    li_clas.each(function(){
        var index_li=$(this).index();
        var div_content=$(this).find('.menu_ul2_li_div');
        $(div_content).css('margin-top',('-'+(index_li+1)*80)+'px');
        $(this).hover(function(){
            $(this).addClass('hover');
        },function(){
            li_clas.removeClass('hover');
        })
    });
}
$(document).ready(function(){
    menu('#menu');
    hangmuc();
})
