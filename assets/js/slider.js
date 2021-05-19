var i = 0;
var slideimage =["assets/images/1.jpg","assets/images/30.jpg","assets/images/12.jpg"];


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
