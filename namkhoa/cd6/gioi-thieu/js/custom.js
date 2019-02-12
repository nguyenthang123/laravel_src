function divbangnhau(div1,div2,div3){
    var max_height = 0;
    var str="#"+div1+","+"#"+div2+","+"#"+div3;
    $(str).each(function(){
        if($(this).height() > max_height)
            max_height = $(this).height();
    });
    $(str).height(max_height);
}
function showtab(key){
    $('.'+key).hover(function(){
        var i=$(this).attr('data-i');
        $("."+key).removeClass("active");
        $(this).addClass('active');
        $(".tabsgiaidap_content").css("display","none");
        $("."+key+"_content_"+i).css("display","block");
    })
};