function openimg(e){
    imgurl = e.children[0].src;
    imgname = e.children[0].name;
    document.getElementById('lightbox-img').innerHTML = `
            <img id="lightbox-image" src="${imgurl}" alt="${imgname}"/>
    `;
    document.getElementById('lightbox-cancel').style.animation = 'lightbox-cancelon .3s ease 1 normal forwards';
    document.getElementById('lightbox-tool').style.animation = 'lightbox-tollon .3s ease 1 normal forwards';
    document.getElementById('lightbox-img').style.animation = 'lightbox-imgon .3s ease 1 normal forwards';
    document.getElementById('lightbox-shell').style.animation = 'lighto .3s ease 1 normal forwards';
    document.getElementById('lightbox').style.display = 'block';
    document.getElementsByTagName('body')[0].style.overflow = 'hidden';
}

var ii = 0;
function hiddentool(){
if(ii == 0){
document.getElementById('lightbox-cancel').style.opacity = '0';
document.getElementById('lightbox-tool').style.opacity = '0';
ii++
return;
}
if(ii == 1){
document.getElementById('lightbox-cancel').style.opacity = '1';
document.getElementById('lightbox-tool').style.opacity = '1';
ii--
return;
}

}
var fangdas = 100;
function fangda(){
var obj = document.getElementById('lightbox-image').style;
fangdas = fangdas + 25;
obj.width = fangdas+'%';
}
function suoxiao(){
if(fangdas <= 25){return;}else{
var obj = document.getElementById('lightbox-image').style;
fangdas = fangdas - 25;
obj.width = fangdas+'%';
}
}
function quanping(){
var obj = document.getElementById('lightbox-image').style;
fangdas = 100;
obj.width = fangdas+'%';
}
var xuanzhuans = 90;
function xuanzhuan(){
var obj = document.getElementById('lightbox-image').style;
obj.transform = 'rotate('+xuanzhuans+'deg)';
xuanzhuans = xuanzhuans + 90;
}
var fanzhuans = 0;
function fanzhuan(){
if(fanzhuans == 0){
    var obj = document.getElementById('lightbox-image').style;
    obj.transform = 'rotateY(180deg)';
    fanzhuans++;
    return;
}
if(fanzhuans == 1){
    var obj = document.getElementById('lightbox-image').style;
    obj.transform = 'rotateY(0deg)'; 
    fanzhuans--;
    return;
}
}

function cancelimg(){
document.getElementById('lightbox-cancel').style.animation = 'lightbox-canceloff .3s ease 1 normal forwards';
document.getElementById('lightbox-tool').style.animation = 'lightbox-tolloff .3s ease 1 normal forwards';
document.getElementById('lightbox-img').style.animation = 'lightbox-imgoff .3s ease 1 normal forwards';
document.getElementById('lightbox-shell').style.animation = 'lightn .3s ease 1 normal forwards';
document.getElementsByTagName('body')[0].style.overflow = 'revert';
setTimeout("document.getElementById('lightbox').style.display = 'none';",300);
fangdas = 100;
xuanzhuans = 90;
fanzhuans = 0;
}

function getScrollTop() {
    var scrollTop = 0,
        bodyScrollTop = 0,
        documentScrollTop = 0;
    if (document.body) {
        bodyScrollTop = document.body.scrollTop;
    };
    if (document.documentElement) {
        documentScrollTop = document.documentElement.scrollTop;
    };
    scrollTop = (bodyScrollTop - documentScrollTop > 0) ? bodyScrollTop : documentScrollTop;
    return scrollTop;
};

function getScrollHeight() {
    var scrollHeight = 0,
        bodyScrollHeight = 0,
        documentScrollHeight = 0;
    if (document.body) {
        bodyScrollHeight = document.body.scrollHeight;
    };
    if (document.documentElement) {
        documentScrollHeight = document.documentElement.scrollHeight;
    };
    scrollHeight = (bodyScrollHeight - documentScrollHeight > 0) ? bodyScrollHeight : documentScrollHeight;
    return scrollHeight;
};

function getWindowHeight() {
    var windowHeight = 0;
    if (document.compatMode == "CSS1Compat") {
        windowHeight = document.documentElement.clientHeight;
    } else {
        windowHeight = document.body.clientHeight;
    };
    return windowHeight;
};
window.onscroll = function() {
    if (getScrollTop() + getWindowHeight() + 120 >= getScrollHeight() && getScrollHeight() > 2000) {
        document.getElementById('top-button').style.display = 'block';
    } else {
        document.getElementById('top-button').style.display = 'none';
    };
};

function backtop() {
    (function smoothscroll() {
        var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
        if (currentScroll > 0) {
            window.requestAnimationFrame(smoothscroll);
            window.scrollTo(0, currentScroll - (currentScroll / 5));
        };
    })();
};