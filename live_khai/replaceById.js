function replaceObjId(id_new,id_old){
    if(!id_old){
        console.log('not id_old');
    }else{
        document.getElementById(id_old).setAttribute('id', id_new);
    }
};
function toggleIdOrClass(id_cla,id_cla1,id_cla2,id){
    if(id){
        if(!id_cla){
            console.log('not exist id : '+id_cla);
        }else{
            var _id_cla=document.getElementById(id_cla).getAttribute('id');
            if(_id_cla==id_cla1){
                document.getElementById(id_cla).setAttribute('id', id_cla2);
            }else{
                document.getElementById(id_cla).setAttribute('id', id_cla1);
            }
        }
    }else{
        if(!id_cla){
            console.log('not exist class : '+id_cla);
        }else{
            var _id_cla=document.getElementsByClassName(id_cla).getAttribute('class');
            if(_id_cla==id_cla1){
                document.getElementsByClassName(id_cla).setAttribute('class', id_cla2);
            }else{
                document.getElementsByClassName(id_cla).setAttribute('class', id_cla1);
            }
        }
    }
}
