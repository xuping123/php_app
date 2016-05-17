<?php

header("Content-Type: text/html; charset=utf-8");	
if($_GET){
	$mysql_server_name='127.0.0.1';
	$mysql_username	  ='root';
	$mysql_password	  ='huweishen.com';
	$mysql_database	  ='simple_project';
 	$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库

     mysql_query("set names 'utf8'"); 
	mysql_select_db($mysql_database); //打开数据库
    
	$orderid=$_GET['id'];
	$sql ="select * from wx_public_data where orderid='$orderid'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
      if($row){
       $sql ="delete from wx_public_data where orderid='$orderid'";
       $result = mysql_query($sql);
      echo '<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />';
		echo "<script charset='UTF-8' type='text/javascript'>
			alert('删除订单成功');
		 </script>"; 
		$url='./admin.php?code=49ba59abbe56e057';
		header("refresh:0;url=$url");
		exit;  
		}
}
