<?php

header("Content-Type: text/html; charset=utf-8");
  if($_GET['id']){
	$mysql_server_name='127.0.0.1';
	$mysql_username	  ='root';
	$mysql_password	  ='huweishen.com';
	$mysql_database	  ='simple_project';
 	$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
	
    mysql_query("set names 'utf8'"); 
	mysql_select_db($mysql_database); //打开数据库
	$orderid=$_GET['id'];
    $sql ="select * from wx_public_data where status=0 and orderid='$orderid'"; 
    $rs=mysql_query($sql);
    $row = @mysql_fetch_array($rs);
    $id=$row['orderid'];
	   if($row){ 
        echo  "<form action='expressed.php' method='post'>
        <input  name='orderid' type='hidden' value=$id /><br>
	   	<input  name='express_name' type='text' placeholder='快递公司' /><br>
	    <input  name='express_no' type='text'  placeholder='快递单号'/><br>
	   	<input   type='submit' />
	   	</form>";
	   	exit;
	    }else{
       echo '不准访问';
       exit;
	    }
    }else{
       echo '不准访问';
       exit;
    }
