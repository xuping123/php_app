
var speeds=80;
var fahuo=document.getElementById('fahuo');
var fahuo1=document.getElementById('fahuo1');
var fahuo2=document.getElementById('fahuo2');
fahuo2.innerHTML=fahuo1.innerHTML
function Marquee1(){
	if(fahuo2.offsetHeight-fahuo.scrollTop<=0)
	fahuo.scrollTop-=fahuo1.offsetHeight
	else{
		fahuo.scrollTop++
	}
}
var MyMar1=setInterval(Marquee1,speeds)
fahuo.onmouseover=function(){
	clearInterval(MyMar1)
}
fahuo.onmouseout=function(){
	MyMar1=setInterval(Marquee1,speeds)
}
/*///////////////////////////////////////// ORDERJSEND /////////////////////////////////////////*/