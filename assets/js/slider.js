var i = 0;
var slideimage =["images/1.jpg","images/3.jpg"];


var slideShow = function(){
document.slideshow.src =slideimage[i];
if(i < slideimage.length - 1){
    i++;
}else{
    i = 0;
}
setTimeout("slideShow()", 2000);
}
slideShow()
