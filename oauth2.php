<?php
session_start();
if (isset($_GET['code'])){
	header("Content-Type: text/html; charset=utf-8");


	$code=$_GET['code'];
	$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxc0c43224a56dbe2d&secret=1274829e69cbd66baf9e9b7d9ef9d773&code=$code&grant_type=authorization_code";
	$res=file_get_contents($url);
	$result=json_decode($res,true);
   if($result){
	   $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wxc0c43224a56dbe2d&secret=1274829e69cbd66baf9e9b7d9ef9d773";
	   $res=file_get_contents($url);
	   $result1=json_decode($res,true);
	   $access_token=$result1['access_token'];
	   $_SESSION['open_id']=$openid=$result['openid'];
	   $url="https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
	   $res=file_get_contents($url);
	   $result=json_decode($res,true);
	   if($result['subscribe']=='0'){
		  $_SESSION['oauth']=false;
		 $url='http://www.wwwpower.cn/wx_public/wx_pblic.html?oauth=oauth&oauth=oauth';
		 header("refresh:0;url=$url");
		exit;
	   }elseif($result['subscribe']=='1'){
		 $_SESSION['oauth']=true;
		 $url='http://www.wwwpower.cn/wx_public/wx_pblic.html?oauth=oauth&oauth=oauth';
		 header("refresh:0;url=$url");
		exit;
	   }
   }
}else{
    echo "NO CODE";
}
?>