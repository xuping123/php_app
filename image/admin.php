<?php 
 if($_GET['code']=='49ba59abbe56e057'){

	$mysql_server_name='127.0.0.1';
	$mysql_username	  ='root';
	$mysql_password	  ='123456';
	$mysql_database	  ='wx_public';
 	$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库

       mysql_query("set names 'utf8'"); 
	mysql_select_db($mysql_database); //打开数据库
    $sql ="select * from wx_public_data"; 
    $result = mysql_query($sql,$conn); 
    echo ' <table>
       <th>
         订单号
       </th>
         <th>
         商品名称
       </th>
         <th>
         数量
       </th>
         <th>
         收货人姓名
       </th>
       </th>
         <th>
         收货人电话
       </th>
        <th>
         详细地址
       </th>
        <th>
         付款方式
       </th>
       <th>
         快递费用
       </th>
       <th>
         商品价格
       </th>
         <th>
         用户留言
       </th>
        <th>
         购买时间
       </th>
      <th>
         订单状态
       </th>';

	while($row = mysql_fetch_array($result))
	{
	// echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; 
   echo '<tr>';
   echo '<td>';
   echo $row['orderid'];
   echo '</td>';
   echo '<td>';
   echo $row['product'];
   echo '</td>';
   echo '<td>';
   echo $row['mun'];
   echo '</td>';
   echo '<td>';
   echo $row['name'];
   echo '</td>';
   echo '<td>';
   echo $row['mob'];
   echo '</td>'; 
   echo '<td>';
   echo $row['province'].$row['city'].$row['area'].$row['address'];
   echo '</td>';
   echo '<td>';
   echo $row['cod'];
   echo '</td>';
   echo '<td>';
   echo $row['zfbprice'];
   echo '</td>';
   echo '<td>';
   echo $row['price'];
   echo '</td>';
   echo '<td>';
   echo $row['guest'];
   echo '</td>';
   echo '<td>';
   echo date('Y-m-d h:i:s',$row['addtime']);
   echo '</td>';
   echo '<td>';
   echo $row['status'];
   echo '</td>';
   echo '</tr>';
	}
	echo  '</table>';
 }



  // echo $row['orderid'].$row['product'].$row['mun'].$row['name'].$row['mob'].$row['province'].
  // $row['city'].$row['area'].$row['address'].$row['zfbprice'].$row['price'].$row['guest'].date('Y-m-d h:i:s',$row['addtime'])."<br/>";
  // echo "</div>"; //排版代码
