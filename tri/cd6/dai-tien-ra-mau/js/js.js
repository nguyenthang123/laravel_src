// JavaScript Document
function Tab(id,maxid,name,cssed,cssno) {
    for(var i = 1; i <= maxid; i++) {
        if(id == i) {
            document.getElementById(name + id).className =  "li_bta"
        } else {
            document.getElementById(name + i).className = "li_btb";
        }
    }
}

// JavaScript Document
function Tall(id,maxid,name,cssed,cssno) {
    for(var i = 1; i <= maxid; i++) {
        if(id == i) {
            document.getElementById(name + id).className = cssed;
            document.getElementById(name + id + "c").style.display = "block";
        } else {
            document.getElementById(name + i).className = cssno;
            document.getElementById(name + i + "c").style.display = "none";
        }
    }
}