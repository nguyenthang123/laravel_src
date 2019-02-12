var domain = window.location.hostname;
var phone1='1900.2622';
var phone2='0166.35.8899 ';
/*if(domain=="trihanoi.com"){
    phone2='0166.352.8899';
}
if(domain=="phongkhambenhxahoi.vn"){
    phone2='0166.352.8899';
}
if(domain=="taimuihonghanoi.net"){
    phone2='0243.272.7979';
}*/
var arr_namkhoa=[
    'khamnamkhoahanoi.vn',
    'khamnamkhoahanoi.com'
];
var arr_bxh=[
    'phongkhambenhxahoi.vn',
    'khambenhxahoihanoi.com'
];
var arr_tri=[
    'trihanoi.com',
    'khamchuabenhtri.net'
];
var arr_tmh=[
    'taimuihonghanoi.net'
];
if(arr_namkhoa.indexOf(domain) >=0){
    var phone2='0166.35.8899 ';
}
if(arr_bxh.indexOf(domain)>=0){
    phone2='0166.352.8899';
}
if(arr_tri.indexOf(domain)>=0){
    phone2='0166.352.8899';
}
if(arr_tmh.indexOf(domain)>=0){
    phone2='0243.272.7979';
}
var str='Để chào mừng năm mới 2019, phòng khám đa khoa Giải Phóng Hà Nội tổ chức triển khai chương trình ưu đãi giảm giá khám chữa bệnh cực sốc. Theo đó người bệnh sẽ được các chuyên gia tư vấn hoàn toàn miễn phí, được giảm 50% chi phí xét nghiệm, giảm 50% chi phí thủ thuật và giảm 50% chi phí điều trị. Thông qua hoạt động thiết thực này, phòng khám Giải Phóng mong muốn mang tới cho người dân ở địa bàn thủ đô Hà Nội và các tỉnh thành lân cận một dịch vụ y tế chất lượng cùng mức giá tốt nhất.';
document.write(str);
