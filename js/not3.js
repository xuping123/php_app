
//window.onerror = function(){return true;}
//function $(id){return document.getElementById(id);}  
function getHeight(){document.getElementById("fahuo").style.height=document.getElementById("forml").offsetHeight-85+"px";}  
window.onload = function(){getHeight();}  
/*///////////////////////////////////////// ORDERJSFGX /////////////////////////////////////////*/
function checktel(){
		if (document.getElementById("notchecktel").value==""){
			alert('请输入要查询的手机号码！');
			document.getElementById("notchecktel").focus();
			return false;
		}
		var form = /^1[3,4,5,7,8]\d{9}$/;
		if (!form.test(document.getElementById("notchecktel").value)){
			alert('手机号码格式不正确，请重新填写！');
			document.getElementById("notchecktel").focus();
			return false;
		}
		//notcheckif.location.href='../../../app/checkorder/index.asp?tel='+document.getElementById("notchecktel").value;
		document.getElementById("notcheckif").src=checktelurl+'?rand='+parseInt(100000*Math.random()+1)+'&tel='+document.getElementById("notchecktel").value;
}

function postcheck(){
    try{
		if (document.form.name.value==""){
			alert('请填写姓名！');
			document.form.name.focus();
			return false;
		}
		var name = /^[\u4e00-\u9fa5]{2,6}$/;
		if (!name.test(document.form.name.value)){
			alert('姓名格式不正确，请重新填写！');
			document.form.name.focus();
			return false;
		}
    }
    catch(ex){
    } 	
    try{
		if (document.form.mob.value==""){
			alert('请填写手机号码！');
			document.form.mob.focus();
			return false;
		}
		var form = /^1[3,4,5,6,7,8]\d{9}$/;
		if (!form.test(document.form.mob.value)){
			alert('手机号码格式不正确，请重新填写！');
			document.form.mob.focus();
			return false;
		}
    }
    catch(ex){
    } 	
    try{
		if (document.form.province.value==""){
			alert('请选择所在地区！');
			document.form.province.focus();
			return false;
		}
    }
    catch(ex){
    } 	
    try{
		if (document.form.address.value==""){
			alert('请填写详细地址！');
			document.form.address.focus();
			return false;
		}
    }
    catch(ex){
    } 	
    try{
		if (document.form.yaoqing.value==""){
			alert('请填写领取码！');
			document.form.yaoqing.focus();
			return false;
		}
    }
    catch(ex){
    } 	
    try{
		if (document.form.yaoqings.value==""){
			alert('请填写领取密码！');
			document.form.yaoqings.focus();
			return false;
		}
    }
    catch(ex){
    } 	
   // document.form.submit.disabled = true;
   // document.form.submit.value="正在提交，请稍等 >>";
    return true;
}
try{	
new PCAS("province","city","area");
}
catch(ex){
} 	
try{	
	var thissrc = document.getElementById("yzm").src;
	function refreshCode(){
		document.getElementById("yzm").src=thissrc+"?"+Math.random(); 
	}
}
catch(ex){
} 	
/*///////////////////////////////////////// ORDERJSFGX /////////////////////////////////////////*/
function pricea(){
	var product = document.form.product.alt;
	for(var i=0;i<document.form.product.length;i++){
		if(document.form.product[i].checked==true){
			var product = document.form.product[i].alt;
			break;
		}
	}
    if(document.form.mun.value=="" || document.form.mun.value==0){	
		var mun=1;
	}
	else{
		var mun=document.form.mun.value;
	}	
	var price=product*mun;
        document.getElementById("b1").checked='checked';
	document.form.price.value=price;
	document.form.zfbprice.value=price;
	document.getElementById("showprice").innerHTML=price;
	document.getElementById("zfbyh").innerHTML='';
}
function priceb(){
    var cpxljg = document.getElementById("product");
    var product = cpxljg.options[document.getElementById("product").options.selectedIndex].title; 
    if(document.form.mun.value=="" || document.form.mun.value==0){	
		var mun=1;
	}
	else{
		var mun=document.form.mun.value;
	}	
	var price=product*mun;
	document.getElementById("b1").checked='checked';
	document.form.price.value=price;
	document.form.zfbprice.value=price;
	document.getElementById("showprice").innerHTML=price;
	document.getElementById("zfbyh").innerHTML='';
}

//***************************  支付宝价格  ***************************
function zfbprize(){
         sprice=document.form.zfbprice.value;
		// alert(sprice);
         document.form.price.value=(sprice*notzfbzk*0.1).toFixed(0)
}
/*///////////////////////////////////////// ORDERJSFGX /////////////////////////////////////////*/
function changeItem(i){

if (i==1) {
document.getElementById("paydiv1").style.display = "block";
document.getElementById("paydiv0").style.display = "none";
  if (notzfbzk != 0){
     zfbprize();
     document.getElementById("zfbyh").innerHTML='<font color=red><b><s>&nbsp;原价：'+document.form.zfbprice.value+'元&nbsp;</s>&nbsp;'+notzfbzk+'折优惠</b></font>';
  }
}else{
//oprize1();
document.getElementById("paydiv0").style.display = "block";
document.getElementById("paydiv1").style.display = "none";
document.getElementById("zfbyh").innerHTML='';
document.form.price.value=document.form.zfbprice.value;
}
}


/*///////////////////////////////////////// ORDERJSFGX /////////////////////////////////////////*/

/*///////////////////////////////////////// ORDERJSEND /////////////////////////////////////////*/