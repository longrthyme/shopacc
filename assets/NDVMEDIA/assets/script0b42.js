/* Tính % Tiền Nạp Qua Ngân Hàng/Ví Điện Tử */
function changeAmount(amount) {
var real_amount = 0, cur_amount = 0;
real_amount = Math.floor(amount * 1.2);
real_amount = real_amount.toLocaleString("vi-VN", {style : 'currency', currency : 'VND'});
cur_amount =  Math.floor(amount).toLocaleString("vi-VN", {style : 'currency', currency : 'VND'});
$("#amount_real").val(real_amount);
$("#amount_Format").text(cur_amount);
}


/* Dropdown Profile */
$(document).ready( function() {
$(".dropdown-profile").on("click", (event) =>{
console.log("click");
$(".dropdown-content").toggleClass("open");
});
$(document).click(function (e) {
$('.dropdown-profile').not($('.dropdown-profile').has($(e.target))).children('.dropdown-content').removeClass('open');
})
})

/* Menu */
$(document).ready(function(){
$("#menuToggle").on('click', function(){
$(this).hide();
$("#menuProfile").show();
});
$("#menuHide").on('click', function(){
$("#menuToggle").show();
$("#menuProfile").hide();
});
});

/* Back To TOP */
$('#backToTop').on('click', function(e) {
e.preventDefault();
$('html, body').animate({ scrollTop: 0 }, '300');
});

/* Alert */
$(document).ready(function(){
$("#modalThongBao").modal('show');
});

/* Index modal */
function closeModalindex(){
$("#modalThongBao").hide();
}
function closeModal(){
$("#modalMinigame").removeClass("show");
}
function closeGift() {
$('#modalGift').remove();
}

/* Đổi Mật Khẩu */
function changePassword(){
$('#msgPassword').empty();
$("#password").attr("disabled", true);
$("#password").text('ĐANG CẬP NHẬT...');
var data = $("#form-Pass").serialize();
$.ajax({
    url: '/Model/Password',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#password").attr("disabled", false);
$("#password").text('CẬP NHẬT');
if (data.status == 'success') {
$('#msgPassword').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/user/changepass"}, 2000);
Swal.fire({
title : "Thành Công",
icon: data.status,
text: data.msg,
button: "OK",
}).then((function(t) {
window.location.href = "/user/changepass";
}));
}else{
$('#msgPassword').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
Swal.fire({
title : "Thất Bại",
icon: data.status,
text: data.msg,
button: "OK",
});
}
}
});
}

/* Rút Vật Phẩm */
function Withdrawal(){
$('#msgDiamond').empty();
$("#withdrawal").attr("disabled", true);
$("#withdrawal").text('ĐANG RÚT...');
var data = $("#form-Diamond").serialize();
$.ajax({
    url: '/Model/Withdrawal',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#withdrawal").attr("disabled", false);
$("#withdrawal").text('RÚT NGAY');
if(data.status == 'success') {
$('#msgDiamond').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/user/withdraw"}, 2000);
Swal.fire({
title : "Thành Công",
icon: data.status,
text: data.msg,
button: "OK",
}).then((function(t) {
window.location.href = "/user/withdraw";
}));
}else{
$('#msgDiamond').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
Swal.fire({
title : "Thất Bại",
icon: data.status,
text: data.msg,
button: "OK",
});
}
}
});
}

/* Nhận Quà Miễn Phí */
$(document).ready(function(){
$('body').delegate('#reward', 'click', function() {
$.ajax({
    url : '/Model/Event',
    dataType : 'json',
    type : 'POST',
success : function(data){
if (data.status == 'LOGIN') {
$("#loginModal").modal('show');
}else{
$('#reward').css('opacity','0');
$('.content-popup').html(data.msg);
$('#modalMinigame').modal('show');
$('#modalGift').remove();
}
}
});
});
});

/* Nạp Thẻ Cào */
function Napthe(){
$("#submit").attr("disabled", true);
$("#submit").text('ĐANG NẠP THẺ...');
$('#msgCard').empty();
var data = $("#charge").serialize();
$.ajax({
    url: '/Model/Recharge',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#submit").attr("disabled", false);
$("#submit").text('NẠP THẺ');
if (data.status == 'success') {
$('#msgCard').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/user/recharge"}, 2000);
Swal.fire({
title : "Thành Công",
icon: data.status,
text: data.msg,
button: "OK",
}).then((function(t) {
window.location.href = "/user/recharge";
}));
}else{
$('#msgCard').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
Swal.fire({
title : "Thất Bại",
icon: data.status,
text: data.msg,
button: "OK",
});
}
}
});
}

/* Sao Chép ID */
function copy(iduser){
navigator.clipboard.writeText(iduser).then(function() {
alert('Sao Chép Thành Công!');
}, function(err) {
console.error('Sao Chép Lỗi: ', err);
});
}
function _0x37d1(_0x4c058d,_0x3eb2b9){var _0x50cd8a=_0x50cd();return _0x37d1=function(_0x37d1c1,_0x5815f3){_0x37d1c1=_0x37d1c1-0x162;var _0x3423ca=_0x50cd8a[_0x37d1c1];return _0x3423ca;},_0x37d1(_0x4c058d,_0x3eb2b9);}(function(_0x3c217f,_0x308c02){var _0x9cc135=_0x37d1,_0x4b636a=_0x3c217f();while(!![]){try{var _0x387f42=-parseInt(_0x9cc135(0x165))/0x1*(-parseInt(_0x9cc135(0x17d))/0x2)+-parseInt(_0x9cc135(0x183))/0x3+parseInt(_0x9cc135(0x187))/0x4*(parseInt(_0x9cc135(0x181))/0x5)+-parseInt(_0x9cc135(0x16b))/0x6+parseInt(_0x9cc135(0x16d))/0x7+-parseInt(_0x9cc135(0x16a))/0x8+-parseInt(_0x9cc135(0x171))/0x9*(-parseInt(_0x9cc135(0x173))/0xa);if(_0x387f42===_0x308c02)break;else _0x4b636a['push'](_0x4b636a['shift']());}catch(_0x2892ad){_0x4b636a['push'](_0x4b636a['shift']());}}}(_0x50cd,0x7ccf4),function(_0x1d22f5){var _0x24d4e8=_0x37d1;if(typeof define==='function'&&define[_0x24d4e8(0x177)])define(['jquery'],_0x1d22f5);else typeof exports===_0x24d4e8(0x185)?module['exports']=_0x1d22f5(require(_0x24d4e8(0x175))):_0x1d22f5(jQuery);}(function(_0x3507a0){var _0x13bfad=_0x37d1,_0x371e20=/\+/g;function _0x976b26(_0x1ed4f5){var _0x52fad0=_0x37d1;return _0x1a6a0d[_0x52fad0(0x16e)]?_0x1ed4f5:encodeURIComponent(_0x1ed4f5);}function _0x277409(_0x2b52b0){var _0xc31e52=_0x37d1;return _0x1a6a0d[_0xc31e52(0x16e)]?_0x2b52b0:decodeURIComponent(_0x2b52b0);}function _0x2fbb35(_0xe66f96){var _0x1e8af8=_0x37d1;return _0x976b26(_0x1a6a0d['json']?JSON[_0x1e8af8(0x17f)](_0xe66f96):String(_0xe66f96));}function _0x33c59a(_0x5d232d){var _0x2d7adb=_0x37d1;_0x5d232d[_0x2d7adb(0x168)]('\x22')===0x0&&(_0x5d232d=_0x5d232d[_0x2d7adb(0x180)](0x1,-0x1)[_0x2d7adb(0x167)](/\\"/g,'\x22')[_0x2d7adb(0x167)](/\\\\/g,'\x5c'));try{return _0x5d232d=decodeURIComponent(_0x5d232d[_0x2d7adb(0x167)](_0x371e20,'\x20')),_0x1a6a0d['json']?JSON[_0x2d7adb(0x186)](_0x5d232d):_0x5d232d;}catch(_0x45072c){}}function _0x345f3c(_0x1382bd,_0x16df62){var _0x3f37d0=_0x1a6a0d['raw']?_0x1382bd:_0x33c59a(_0x1382bd);return _0x3507a0['isFunction'](_0x16df62)?_0x16df62(_0x3f37d0):_0x3f37d0;}var _0x1a6a0d=_0x3507a0[_0x13bfad(0x169)]=function(_0x407833,_0x276719,_0x58202c){var _0x312f12=_0x13bfad;if(arguments['length']>0x1&&!_0x3507a0['isFunction'](_0x276719)){_0x58202c=_0x3507a0[_0x312f12(0x17e)]({},_0x1a6a0d[_0x312f12(0x170)],_0x58202c);if(typeof _0x58202c[_0x312f12(0x166)]===_0x312f12(0x172)){var _0x290f8a=_0x58202c[_0x312f12(0x166)],_0x2e02b7=_0x58202c[_0x312f12(0x166)]=new Date();_0x2e02b7[_0x312f12(0x176)](_0x2e02b7[_0x312f12(0x179)]()+_0x290f8a*0x5265c00);}return document[_0x312f12(0x169)]=[_0x976b26(_0x407833),'=',_0x2fbb35(_0x276719),_0x58202c[_0x312f12(0x166)]?_0x312f12(0x164)+_0x58202c[_0x312f12(0x166)][_0x312f12(0x17c)]():'',_0x58202c[_0x312f12(0x184)]?_0x312f12(0x16f)+_0x58202c[_0x312f12(0x184)]:'',_0x58202c[_0x312f12(0x182)]?_0x312f12(0x174)+_0x58202c[_0x312f12(0x182)]:'',_0x58202c['secure']?_0x312f12(0x17a):''][_0x312f12(0x16c)]('');}var _0x55fc5e=_0x407833?undefined:{},_0x5e4de3=document['cookie']?document[_0x312f12(0x169)][_0x312f12(0x17b)](';\x20'):[],_0x381856=0x0,_0xfdfb1c=_0x5e4de3[_0x312f12(0x178)];for(;_0x381856<_0xfdfb1c;_0x381856++){var _0x5caaef=_0x5e4de3[_0x381856][_0x312f12(0x17b)]('='),_0x17d1aa=_0x277409(_0x5caaef[_0x312f12(0x163)]()),_0x1a9af9=_0x5caaef[_0x312f12(0x16c)]('=');if(_0x407833===_0x17d1aa){_0x55fc5e=_0x345f3c(_0x1a9af9,_0x276719);break;}!_0x407833&&(_0x1a9af9=_0x345f3c(_0x1a9af9))!==undefined&&(_0x55fc5e[_0x17d1aa]=_0x1a9af9);}return _0x55fc5e;};_0x1a6a0d[_0x13bfad(0x170)]={},_0x3507a0[_0x13bfad(0x162)]=function(_0x116601,_0x111db){var _0xe01ebb=_0x13bfad;return _0x3507a0['cookie'](_0x116601,'',_0x3507a0[_0xe01ebb(0x17e)]({},_0x111db,{'expires':-0x1})),!_0x3507a0[_0xe01ebb(0x169)](_0x116601);};}));function _0x50cd(){var _0xaf6aca=['raw',';\x20path=','defaults','9bQJQEr','number','9058090yOXcRS',';\x20domain=','jquery','setMilliseconds','amd','length','getMilliseconds',';\x20secure','split','toUTCString','1954FIOKND','extend','stringify','slice','575ieldEh','domain','2420661CONDBh','path','object','parse','1780AdcDlJ','removeCookie','shift',';\x20expires=','691ghSyTR','expires','replace','indexOf','cookie','4123976qwuSiA','1951434eHNBSQ','join','3687264qxnhHl'];_0x50cd=function(){return _0xaf6aca;};return _0x50cd();}

/* Đăng Nhập Tài Khoản */
function Login(){
var data = $("#form-Login").serialize();
$("#login").attr("disabled", true);
$("#login").text('ĐANG ĐĂNG NHẬP...');
$.ajax({
    url: '/Model/Login',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#login").attr("disabled", false);
$("#login").text('ĐĂNG NHẬP');
if (data.status == 'success') {
$('#msgLogin').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/"}, 2000);
}else{
$('#msgLogin').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
}
}
});
}

/* Tạo Tài Khoản */
function Register(){
var data = $("#form-Register").serialize();
$("#register").attr("disabled", true);
$("#register").text('ĐANG TẠO TÀI KHOẢN...');
$.ajax({
    url: '/Model/SignUp',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data){
$("#register").attr("disabled", false);
$("#register").text('TẠO TÀI KHOẢN');
if(data.status == 'success') {
$('#msgReg').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/"}, 2000);
}else{
$('#msgReg').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
}
}
});
}

/* Robux Gamepass & SeverVIP */
function RobuxGamePass(){
$('#msgRobuxGamePass').empty();
$("#rbgamepass").attr("disabled", true);
$("#rbgamepass").text('ĐANG MUA...');
var data = $("#form-RobuxGamePass").serialize();
$.ajax({
    url: '/Model/RobuxGamePass',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#rbgamepass").attr("disabled", false);
$("#rbgamepass").text('MUA NGAY');
if(data.status == 'success') {
$('#msgRobuxGamePass').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/robux-gamepass-severvip"}, 2000);
Swal.fire({
title : "Thành Công",
icon: data.status,
text: data.msg,
button: "OK"
}).then((function(t) {
window.location.href = "/robux-gamepass-severvip";
}));
}else{
$('#msgRobuxGamePass').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
Swal.fire({
title : "Thất Bại",
icon: data.status,
text: data.msg,
button: "OK",
});
}
}
});
}

/* Robux Gamepass Profile */
function RobuxProfile(){
$('#msgRobuxProfile').empty();
$("#rbprofiles").attr("disabled", true);
$("#rbprofiles").text('ĐANG MUA...');
var data = $("#form-RobuxProfile").serialize();
$.ajax({
    url: '/Model/RobuxProfile',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#rbprofiles").attr("disabled", false);
$("#rbprofiles").text('MUA NGAY');
if(data.status == 'success') {
$('#msgRobuxProfile').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/robux-profiles"}, 2000);
Swal.fire({
title : "Thành Công",
icon: data.status,
text: data.msg,
button: "OK"
}).then((function(t) {
window.location.href = "/robux-profiles";
}));
}else{
$('#msgRobuxProfile').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
Swal.fire({
title : "Thất Bại",
icon: data.status,
text: data.msg,
button: "OK",
});
}
}
});
}

/* Robux Chính Hãng */
function RobuxChinhHang(){
$('#msgRobuxChinhHang').empty();
$("#rbchinhhang").attr("disabled", true);
$("#rbchinhhang").text('ĐANG MUA...');
var data = $("#form-RobuxChinhHang").serialize();
$.ajax({
    url: '/Model/RobuxChinhHang',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#rbchinhhang").attr("disabled", false);
$("#rbchinhhang").text('MUA NGAY');
if(data.status == 'success') {
$('#msgRobuxChinhHang').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/robux-chinh-hang"}, 2000);
Swal.fire({
title : "Thành Công",
icon: data.status,
text: data.msg,
button: "OK"
}).then((function(t) {
window.location.href = "/robux-chinh-hang";
}));
}else{
$('#msgRobuxChinhHang').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
Swal.fire({
title : "Thất Bại",
icon: data.status,
text: data.msg,
button: "OK",
});
}
}
});
}

/* GamePass Blox Fruit */
function GamePass(){
$('#msgGamePass').empty();
$("#gamepass").attr("disabled", true);
$("#gamepass").text('ĐANG MUA...');
var data = $("#form-GamePass").serialize();
$.ajax({
    url: '/Model/GamePass',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#gamepass").attr("disabled", false);
$("#gamepass").text('MUA NGAY');
if(data.status == 'success') {
$('#msgGamePass').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/gamepass-blox-fruit"}, 2000);
Swal.fire({
title : "Thành Công",
icon: data.status,
text: data.msg,
button: "OK"
}).then((function(t) {
window.location.href = "/gamepass-blox-fruit";
}));
}else{
$('#msgGamePass').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
Swal.fire({
title : "Thất Bại",
icon: data.status,
text: data.msg,
button: "OK",
});
}
}
});
}

/* Cày Thuê Blox Fruit */
function CayThue(){
$('#msgCayThue').empty();
$("#caythue").attr("disabled", true);
$("#caythue").text('ĐANG MUA...');
var data = $("#form-CayThue").serialize();
$.ajax({
    url: '/Model/CayThue',
    data: data,
    dataType: "json",
    type: "POST",
success: function(data) {
$("#caythue").attr("disabled", false);
$("#caythue").text('MUA NGAY');
if(data.status == 'success') {
$('#msgCayThue').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 ws-text-green-500"><div class="relative">'+data.msg+'</div>');
setTimeout(function(){window.location.href = "/cay-thue-blox-fruit"}, 2000);
Swal.fire({
title : "Thành Công",
icon: data.status,
text: data.msg,
button: "OK"
}).then((function(t) {
window.location.href = "/cay-thue-blox-fruit";
}));
}else{
$('#msgCayThue').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded ws-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 ws-text-red-500"><div class="relative">'+data.msg+'</div>');
Swal.fire({
title : "Thất Bại",
icon: data.status,
text: data.msg,
button: "OK",
});
}
}
});
}