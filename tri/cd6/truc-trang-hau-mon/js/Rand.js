;
(function(window){
    function getName(){
        var name=['Nguyễn văn Hòa', 'Vũ thị Hoa','Lê khắc Bình','Lê văn Mạnh','Trương thúy An','Từ thị Linh','Đỗ thị Thúy'];
        return name[Math.floor(Math.random()*name.length)];
    }
    /*function getSex(){
        var sex=['sex1','sex2','sex3'];
        return sex[Math.floor(Math.random()*sex.length)];
    }*/
    function getPhone(){
        var domain=['0167', '0166', '0168', '0169', '096', '097', '098', '0123'];
        var telno=Math.floor(Math.random()*9999);
        if(telno<1000 || telno>9999){
            return getPhone();
        }else{
            var rtn=[domain[Math.floor(Math.random()*domain.length)],'****',telno];
            return rtn.join('');
        }
    }
    function getAtime(){
        var time = new Array();
        for(var i=0;i<4;i++){
            var dd = new Date();
            dd.setDate(dd.getDate()-i);
            var y = dd.getFullYear();
            var m = dd.getMonth()+1;
            var d = dd.getDate();
            time[i]=y+"-"+m+"-"+d;
        }
        return time[Math.floor(Math.random()*time.length)];
    }
    function Template(str){
        this.str=str;
    }
    Template.prototype.format=function(){
        var arg=arguments[0] instanceof Array ? arguments[0] : arguments;
        return this.str.replace(/\{(\d+)\}/g,function(){
            return arg[arguments[1]] || '';
        });
    }
    window.Template=Template;
    var lis=[];
    /*var temp = new Template('<p><span>{0}</span><span>{1}</span><span>Nguyễn văn Hoa{2}</span><span>đã đăng ký thành công</span></p>');*/
    var temp = new Template('<p><span>{0}</span><span>{1}</span><span>{2}</span><span>đã đăng ký thành công</span></p><br>');
    var count=Math.ceil(Math.random()*50);
    for(var i=0;i<count;i++){
        /*lis.push(temp.format(getName()+getSex(),getPhone(),getAtime()));*/
        lis.push(temp.format(getName()+' '+getPhone()+'<br>','Ngày đăng ký',getAtime()));
    }
    window.MARQUEEHTML=lis.join('');

})(window);

