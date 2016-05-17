<?php 
	error_reporting(0);
	$mysql_server_name='127.0.0.1';
	$mysql_username	  ='root';
	$mysql_password	  ='';
	$mysql_database	  ='wx_public';
 	$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
	
    mysql_query("set names 'utf8'"); 
	mysql_select_db($mysql_database); //打开数据库
    $sql ="select * from wx_public_data"; 
    $result=mysql_query($sql);
 //   var_dump($result);
    $row=array();
    while($row = mysql_fetch_assoc($result)){
    		$res[]=$row;
		}
	
	foreach ($res as $key => $value) {
		$res[$key]['addtime']=date('Y-m-d',$value['addtime']);
	}
	echo json_encode($res);