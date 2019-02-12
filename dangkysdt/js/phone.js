var _width = $(window).width();
//var _heigt = $(window).height();
var _heigt = screen.height;
var _wPopup = $('#coccoc-alo-popup').width();
var _hPopup = $('#coccoc-alo-popup').height();
$('#coccoc-alo-popup').css('position', 'fixed');
_wPopup = 525;
_wPopup2 = 263;
_width2 = _width / 2;
//var wa=_width2-_wPopup2;
$('#coccoc-alo-popup').css('left', (((_width - _wPopup) / 2)));
$('#coccoc-alo-popup').css('top', ((_heigt - _hPopup) / 2) - 150);
/*==============*/
$('.coccoc-alo-popup-close').click(function () {
    $('#coccoc-alo-wrapper').hide('slow');
    $('.coccoc-alo-phone').addClass('coccoc-alo-show');
})
$('.coccoc-alo-phone').click(function () {
    $(this).removeClass('coccoc-alo-show');
    $('#coccoc-alo-wrapper').show();
})
/*======================*/
//Make the DIV element draggagle:
dragElement(document.getElementById(("coccoc-alo-phoneIcon")));
function dragElement(elmnt) {
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    if (document.getElementById("coccoc-alo-phoneIcon")) {
        /* if present, the header is where you move the DIV from:*/
        document.getElementById("coccoc-alo-phoneIcon").onmousedown = dragMouseDown;
    } else {
        /* otherwise, move the DIV from anywhere inside the DIV:*/
        elmnt.onmousedown = dragMouseDown;
    }
    function dragMouseDown(e) {
        e = e || window.event;
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        /* stop moving when mouse button is released:*/
        document.onmouseup = null;
        document.onmousemove = null;
    }
}
/*=============*/
$('#click_dk').click(function () {
    var sdt = $('#coccoc_sdt').val();
    if (sdt.length < 10 || sdt.length > 13) {
        alert('Số điện thoại bạn nhập không đúng!');
    } else {
        var link_dk = 'http://phongkhamgiaiphong.com/dangky.php?';
        var hoten = 'dksdt';
        var dienthoai = sdt;
        var khoakham = '';
        var thoigian = '';
        var url = document.URL;
        var parameter = 'hoten=' + hoten + '&dienthoai=' + dienthoai + '&khoakham=' + khoakham + '&thoigian=' + thoigian + '&uri=' + url;
        var link_dangky = link_dk + parameter;
        window.location.href = link_dangky;
        return false;
    }
})