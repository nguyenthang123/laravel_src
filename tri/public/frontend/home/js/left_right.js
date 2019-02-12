function FloatTopDiv(){
    startLX=15;
    startLY = TopAdjust+80;//cach tren
    var d = document;
    function m2(id)
    {
        var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
        e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
        e2.x = startLX;
        e2.y = startLY;
        return e2;
    }
    window.stayTopLeft=function()
    {
        if (document.documentElement && document.documentElement.scrollTop){
            var pY =  document.documentElement.scrollTop;
        }else if (document.body){
            var pY =  document.body.scrollTop;
        }
        if (document.body.scrollTop > 30){startLY = TopAdjust+30;} else  {startLY = TopAdjust;};
        ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
        ftlObj2.sP(ftlObj2.x, ftlObj2.y);
        setTimeout("stayTopLeft()", 1);
    }
    ftlObj2 = m2("divAdLeft");
    stayTopLeft();
}
function ShowAdDiv()
{
    var objAdDivLeft = document.getElementById("divAdLeft");
    if ($(window).width() < 1000){
        objAdDivLeft.style.display = "none";
    }else{
        objAdDivLeft.style.display = "block";
        FloatTopDiv();
    }
}
document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 80;LeftAdjust = 5;TopAdjust = 150;ShowAdDiv();window.onresize=ShowAdDiv;<\/script>");