function geth() {
    var sclh = document.documentElement && document.documentElement.clientHeight ? document.documentElement.clientHeight : window.innerHeight != null ? window.innerHeight : document.body != null ? document.body.clientHeight : 0;
    return sclh;
}
function getw() {
    var sclh = document.documentElement && document.documentElement.clientWidth ? document.documentElement.clientWidth : window.innerWidth != null ? window.innerWidth : document.body != null ? document.body.clientWidth : 0;
    return sclh;
}
console.log(geth());
$(document).ready(function(){
    $('#wapper').css('width',getw());
    if(geth()<850){
        var _h=850
    }else{
        var _h=geth();
    }
    $('#wapper').css('height',_h);
})