function div_height_equal(ele){
    var heights = $(ele).map(function() {
            return $(this).height();
        }).get(),
        maxHeight = Math.max.apply(null, heights);
    $(ele).height(maxHeight);
}
function abc(ele){
    var highestBox = 0;
    $(ele).each(function(){
        if($(this).height() > highestBox){
            highestBox = $(this).height();
        }
    });
    $(ele).height(highestBox);
}
$(document).ready(function(){
    abc('.height_row1');
    abc('.height_row2');
})
