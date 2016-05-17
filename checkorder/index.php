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
    
	$_rand=$_GET['rand'];
	$_tel=$_GET['tel'];
	$sql ="select * from wx_public_data where mob='$_tel'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    if($row['mob'] && $row['status']==1){
    	$express_no=$row['express_no'];
    	$express_name=$row['express_name'];
    	echo "<script>   
		var notcheckjieguo='<p class=m10><font color=red>商品已发货，快递单号为:$express_no</font></p>';
		parent.document.getElementById('notcheckresult').innerHTML=notcheckjieguo; 
		</script>";
		exit;
    }elseif ($row['mob'] && $row['status']==0) {
    	echo '<script>   
		var notcheckjieguo="<p class=m10><font color=red>商品未发货，请耐心等待，详情请联系在线客服</font></p>";
		parent.document.getElementById("notcheckresult").innerHTML=notcheckjieguo; 
		</script>';
		exit;
    }else{
        echo '<script>
		var notcheckjieguo="<p class=m10><font color=red>未查到此号码的订单，请联系在线客服</font></p>";
		parent.document.getElementById("notcheckresult").innerHTML=notcheckjieguo; 
		</script>';
		exit;
    }
	}
