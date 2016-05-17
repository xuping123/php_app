
<?php

header("Content-Type: text/html; charset=utf-8");
 if($_GET['code']=='49ba59abbe56e057'){
	$mysql_server_name='127.0.0.1';
	$mysql_username	  ='root';
	$mysql_password	  ='huweishen.com';
	$mysql_database	  ='simple_project';
 	$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
	
  mysql_query("set names 'utf8'"); 
	mysql_select_db($mysql_database); //打开数据库
  $sql ="select * from wx_public_data"; 

  $pagesize = 10;    //每页显示到数量
    
    //计算一共有多少记录，用于计算页数
  $rs = mysql_query("select count(*) from wx_public_data");
  $row = @mysql_fetch_array($rs);
  $numrows = $row[0];

    //计算页数
    $pages = intval($numrows / $pagesize);
    if ($numrows % $pagesize)
    {
        $pages++;
    }

    //设置页数
    if (isset($_GET['page']))
    {    
        $page = intval($_GET['page']);
    }
    else
    {
        $page = 1;        //其他情况，都指向第一页
    }
    
    //计算记录的偏移量
    $offset = $pagesize * ($page - 1);

    //读取指定记录
    $result = mysql_query("select * from wx_public_data order by addtime desc limit $offset,$pagesize");


    //$result = mysql_query($sql,$conn); 
    
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
         用户留言
       </th>
        <th>
         购买时间
       </th>
      <th>
         订单状态
       </th>
      <th>
         操作
       </th>';

	while($row = mysql_fetch_array($result))
	{

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
   echo $row['guest'];
   echo '</td>';
   echo '<td>';
   echo date('Y-m-d h:i:s',$row['addtime']);
   echo '</td>';
   echo '<td>';
   $id=$row['orderid'];
   echo $row['status']==0? "未发货|<a href='./express.php?id=$id'>发货</a>":'已发货';
   echo '</td>';

    echo '<td>';
   echo  "<a href='./delect.php?id=$id'>删除订单</a>";
   echo '</td>';


   echo '</tr>';
	}
	echo  '</table>';
  echo "<div align='center'> 共".$pages."页(".$page."/".$pages.")";
  for ($i = 1;$i < $page;$i++)
  {
      echo "<a href='admin.php?code=49ba59abbe56e057&page=".$i."'>[".$i."]</a>";
  }
  echo "[".$page."]";
  for ($i = $page + 1;$i <= $pages;$i++)
  {
      echo "<a href='admin.php?code=49ba59abbe56e057&page=".$i."'>[".$i."]</a>";
  }
  echo "</div>";
 }else{
  echo '不准访问';
  exit;
 }



  // echo $row['orderid'].$row['product'].$row['mun'].$row['name'].$row['mob'].$row['province'].
  // $row['city'].$row['area'].$row['address'].$row['zfbprice'].$row['price'].$row['guest'].date('Y-m-d h:i:s',$row['addtime'])."<br/>";
  // echo "</div>"; //排版代码