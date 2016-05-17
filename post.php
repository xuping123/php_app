<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
$url='http://www.wwwpower.cn/wx_public/wx_pblic.html';

if(!$_SESSION['oauth']){
	echo "<script charset='UTF-8' type='text/javascript'>
			alert('对不起，你没有关注此公众号，无法提交订单');
		 </script>";
	$url='http://www.wwwpower.cn/wx_public/wx_pblic.html?oauth=oauth&oauth=oauth';
	header("refresh:0;url=$url");
	exit;
}
 if($_POST){
 	$orderid=uniqid('no.').rand(0,9999);;
 	$product=$_POST['product'];
 	$mun	=$_POST['mun'];
 	$name	=$_POST['name'];
 	$mob	=$_POST['mob'];
 	$province=$_POST['province'];
 	$city=$_POST['city'];
 	$area=$_POST['area'];
 	$address=$_POST['address'];
 	$zfbprice=$_POST['zfbprice'];
 	$price=$_POST['price'];
 	$cod=$_POST['pay'];  //付款方式
 	$guest=$_POST['guest'];
	$open_id=$_SESSION['open_id'];
 	$time=time();

	$mysql_server_name='127.0.0.1';
	$mysql_username	  ='root';
	$mysql_password	  ='huweishen.com';
	$mysql_database	  ='simple_project';
 	$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
	mysql_query("set names 'utf8'"); 
	mysql_select_db($mysql_database); //打开数据库

	$sql="select * from wx_public_data where open_id='$open_id' or mob='$mob'";
	$result_info=mysql_query($sql);
	$res=mysql_fetch_assoc($result_info);
	if($res){
		echo "<script charset='UTF-8' type='text/javascript'>
			alert('您已领取过了，不能重复领取！');
		 </script>";

	$url='http://www.wwwpower.cn/wx_public/wx_pblic.html?oauth=oauth&oauth=oauth';
	header("refresh:0;url=$url");
	mysql_close();
	exit;
	}


	$sql = "insert into wx_public_data (orderid,product,mun,name,mob,province,city,area,address,zfbprice,price,cod,guest,addtime,open_id) 
	values ('$orderid','$product','$mun','$name','$mob','$province','$city','$area','$address','$zfbprice','$price','$cod','$guest',$time,'$open_id')";
	$result = mysql_query($sql,$conn); //查询
	if($result){
		echo "<script charset='UTF-8' type='text/javascript'>
			alert('订单提交成功');
		 </script>";
	}
	$url='http://www.wwwpower.cn/wx_public/wx_pblic.html?oauth=oauth&oauth=oauth';
	header("refresh:0;url=$url");
	exit;
	mysql_close();
 }else{
 	$url='http://www.wwwpower.cn/wx_public/wx_pblic.html?oauth=oauth&oauth=oauth';
	header("refresh:0;url=$url");
 	exit;
 }