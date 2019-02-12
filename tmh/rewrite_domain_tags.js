function LRedithref1() {
    var aList = document.getElementsByTagName('a');
    for (var i = 0; i < aList.length; i++) {
        var href0 = aList[i].href.toLowerCase();
        if(href0.indexOf('http://phongkhamgiaiphong.com') > -1){
            if(href0.indexOf('http://phongkhamgiaiphong.com/tmh') >-1){
            }else{
                href0=href0.replace('http://phongkhamgiaiphong.com','http://phongkhamgiaiphong.com/tmh')
            }
        aList[i].href = href0;
        }else{
            if(href0.indexOf('/') ==0){
            aList[i].href = 'http://phongkhamgiaiphong.com/tmh'+href0;
            }
        }
    }
}
LRedithref1();
function rewritesrcimg() {
    var aList = document.getElementsByTagName('img');
    for (var i = 0; i < aList.length; i++) {
    var src = aList[i].src;
    if(src.indexOf('http://phongkhamgiaiphong.com/public')>-1){
    /*src='http://phongkhamgiaiphong.com/namkhoa/'+src;*/
    src=src.replace('http://phongkhamgiaiphong.com/public','http://phongkhamgiaiphong.com/tmh/public')
    aList[i].src = src;
    }
}
}
rewritesrcimg()
function rewritesrccss(){
    var aList = document.getElementsByTagName('link');
    for (var i = 0; i < aList.length; i++) {
        if(aList[i].rel.toLowerCase() == 'stylesheet'){
            var href0 = aList[i].href.toLowerCase();
            if(href0.indexOf('http://phongkhamgiaiphong.com') > -1){
                if(href0.indexOf('http://phongkhamgiaiphong.com/tmh') == -1){
                href0=href0.replace('http://phongkhamgiaiphong.com','http://phongkhamgiaiphong.com/tmh');
                aList[i].href = href0;
                }
            }else{
                if(href0.indexOf('/') > -1){
                aList[i].href0 = 'http://phongkhamgiaiphong.com/tmh'+href0;
                }
            }
        }
    }
}
rewritesrccss();