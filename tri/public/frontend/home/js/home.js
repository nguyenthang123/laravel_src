function home_menu(){
    $(document).ready(function(){
        var _id='';
        $('ul.menu li.menu_lv1').hover(function(){
            _id=$(this).attr('id');
            $('.dangky_lv1').removeClass('hover');
            $(this).addClass('hover');
        },function(){
            $(this).removeClass('hover');
        });
    })
}
function memberonline(){
    var num = Math.floor(Math.random() * (200 - 100) + 100);
    var n = num.toString();
    var num1=n.substr(0,1);
    var num2=n.substr(1,1);
    var num3=n.substr(2,1);
    $('.zxno_l1 .num1').html(num1).show({duration:500,easing:"easeOutQuad"});
    $('.zxno_l1 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
    $('.zxno_l1 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
}
function tuvantrongthang(){
    var d=new Date();
    var today= d.getDate();
    var member=100;
    var arr=[240,220,230,260,250,260,270,180,290,200,210,220,230,240,250,260,270,280,290,200,210,220,230,240,55,66,37,38,39,30,31];
    for(var i=0;i< today;i++){
        member=member+arr[i];
    }
    if(member > 10000){
        var n = member.toString();
        var num1=n.substr(0,1);
        var num2=n.substr(1,1);
        var num3=n.substr(2,1);
        var num4=n.substr(3,1);
        var num5=n.substr(4,1);
        $('.zxno_l2 .num1').html(num1).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l2 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l2 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l2 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l2 .num5').html(num5).show({duration:500,easing:"easeOutQuad"});
    }else{
        if(member>=1000){
            var n = member.toString();
            var num2=n.substr(0,1);
            var num3=n.substr(1,1);
            var num4=n.substr(2,1);
            var num5=n.substr(3,1);
            $('.zxno_l2 .num1').html(0).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num5').html(num5).show({duration:500,easing:"easeOutQuad"});
        }else{
            var n = member.toString();
            var num3=n.substr(0,1);
            var num4=n.substr(1,1);
            var num5=n.substr(2,1);
            $('.zxno_l2 .num1').html(0).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num2').html(0).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
            $('.zxno_l2 .num5').html(num5).show({duration:500,easing:"easeOutQuad"});
        }
    }
}
function henkhamtrongthang(){
    var d=new Date();
    var today= d.getDate();
    var member=100;
    var arr=[40,120,230,240,150,160,170,180,190,200,210,220,230,240,250,160,170,180,190,100,110,220,230,240,250,160,170,180,190,200,110];
    for(var i=0;i< today;i++){
        member=member+arr[i];
    }
    if(member > 1000){
        var n = member.toString();
        var num1=n.substr(0,1);
        var num2=n.substr(1,1);
        var num3=n.substr(2,1);
        var num4=n.substr(3,1);
        $('.zxno_l3 .num1').html(num1).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
    }else{
        var n = member.toString();
        var num2=n.substr(0,1);
        var num3=n.substr(1,1);
        var num4=n.substr(2,1);
        $('.zxno_l3 .num1').html(0).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num2').html(num2).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num3').html(num3).show({duration:500,easing:"easeOutQuad"});
        $('.zxno_l3 .num4').html(num4).show({duration:500,easing:"easeOutQuad"});
    }
}
function zxNo(){
    var rno1=888;
    var rnot1=0;
    autoNo();
    setInterval(autoNo,5000);
    function autoNo(){
        rnot1=String(ltRand(100,100));
        if(rnot1!=rno1){
            rno1=rnot1;
            changeNo(rno1,$('#zxno_box .zxno_in .zxno_l1 ul li'),3);
        }
    }
    function changeNo(no,id,len){
        var n=0;
        var nl=no.length;
        if(nl<len){
            for(var i=0;i<len-nl;i++){
                no="0"+no;
            }
        }
        for(var i=1;i<=len;i++){
            n=no.substr(i-1,1);
            //them 1 div vao cuoi
            id.eq(i-1).append('<div class="nopic" style="background:url(/tri/public/frontend/img/home/num_'+n+'.png); top:49px;"></div>');
            //an cai div dau
            id.eq(i-1).find(".nopic").eq(0).animate({"top":"-49px","height":"49px;"},500,function(){
                //xoa div dau
                $(this).remove();
            });
            id.eq(i-1).find(".nopic").eq(1).animate({"top":"0","height":"49px"},500);
        }
    }
}
function ltRand(maxNo,minNo){
    return parseInt(Math.floor(Math.random()*maxNo)+minNo);
}
home_menu();
$(document).ready(function(){
    setInterval(memberonline,5000);
    tuvantrongthang();
    henkhamtrongthang();
    zxNo();
})