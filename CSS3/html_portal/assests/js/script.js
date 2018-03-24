var slideItem = 0;

window.onload = function(){
	setInterval(passarSlide, 2000);

	var slidewidth = document.getElementById("slideshow").offsetWidth;
	var objs = document.getElementsByClassName("slides");
	for(var i=0;i<objs.length;i++){
		objs[i].style.width = slidewidth+"px";
	}
}
function passarSlide(){
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	if(slideItem >= 3){
		slide = 0;
	} else{
		slideItem++;
	}

	document.getElementsByClassName("slideshowarea")[0].style.marginLeft="-"+(slidewidth*slideItem)+"px";
}
function mudarSlide(pos){
	slideItem = pos;
	var slidewidth = document.getElementById("slideshow").offseWidth;
	document.getElementsByClassName("slideshowarea")[0].style.marginLeft="-"+(slidewidth*slideItem)+"px";

}