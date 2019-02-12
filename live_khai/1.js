/*var up = '<table cellspacing=1 cellpadding=0 width=100% border=0 ID="Table1"><form action="' +K_sysurl + "/clientupload?uploadId=" + K_cid + "&siteid=" + K_sid + "&lng=" + K_lng+ '" method="post" enctype="multipart/form-data" name="Form1" ID="Form1" target="_self"><tr><td style="WIDTH: 60px;" noWrap>' + c27 + ":</td><td>" + c37 + '</td><td style="width:10px;"><input> type="button" value="' + c40 + '" id="Button2" name="Button2" onclick="parent.hiddenContent();"></td></tr><tr><td noWrap>' + c41 + ':</td><td colspan=2><input type="hidden" name="cid" id="cid" value=""><input type="hidden" name="sid" id="sid" value=""><input type="hidden" name="domain" id="domain" value=""><input type="hidden" name="socketid" id="socketid" value=""><INPUT type="file" ID="File1" NAME="File1" style="width:100%;"></td></tr><tr><td noWrap>' + c42 + ':</td><td><INPUT type="text" ID="filenote" NAME="filenote" style="WIDTH: 100%;"></td><td><INPUT type="submit" value="' + c43 + '" ID="Button1" NAME="Button1" onclick="return parent.f29();"></td></tr></form></table>';*/

/*============================*/
var list_cid=['abc','def','ghi'];
var roo=[];
list_cid.forEach(function(item){
    roo[item]=[];
})
if(Array.isArray(roo['abc'])){
    console.log('true');
}else{
    console.log('false');
}
if(roo['abc'].length==0){
    roo['abc']=[{id:1,name:'mot'},{id:2,name:'hai'}];
}else{
    console.log(roo['abc']);
}
function RemoveObjectInArray(arr,val,key){
    if (arr instanceof Array){
        if(arr[0] instanceof  Object){
            var newarr=arr.filter(function(el){
                return el[key] !=val;
            })
            return newarr;
        }else{
            var _index = arr.indexOf(val);
            if(_index > -1){
                var a=arr.splice(_index, 1);
                return arr;
            }
            return arr;
        }
    }else{
        console.log('khong la mang');
        return '';
    }
}
//var abc=[{id:1,name:'mot'},{id:2,name:'hai'},{id:3,name:'ba'}];
var abc=[456,'abc'];
gro['abc']=RemoveObjectInArray(abc,2,'id');
console.log(gro['abc']);