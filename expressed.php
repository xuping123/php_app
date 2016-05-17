<?php

header("Content-Type: text/html; charset=utf-8");
  if($_POST){

  	$mysql_server_name='127.0.0.1';
	$mysql_username	  ='root';
	$mysql_password	  ='huweishen.com';
	$mysql_database	  ='simple_project';
 	$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库	
    mysql_query("set names 'utf8'"); 
	mysql_select_db($mysql_database); //打开数据库

  	$orderid=$_POST['orderid'];
  	$express_name=$_POST['express_name'];
  	$express_no=$_POST['express_no'];
  	// mysql_query("UPDATE Persons SET Age = '36' WHERE FirstName = 'Peter' AND LastName = 'Griffin'");
  	$sql="update wx_public_data set `express_no`='$express_no',`status`=1,`express_name`='$express_name' WHERE orderid='$orderid'";
  	$res=mysql_query($sql);
  	if($res){
		echo '<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />';
		echo "<script charset='UTF-8' type='text/javascript'>
			alert('发货成功');
		 </script>";
	$url='./admin.php?code=49ba59abbe56e057';
	header("refresh:1;url=$url");
	exit;
  	}else{
  		echo '<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />';
		echo "<script charset='UTF-8' type='text/javascript'>
			alert('发货失败');
		 </script>";
  	}
  }else{
  	echo '不准访问';
  	exit;
  }