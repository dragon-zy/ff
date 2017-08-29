<?php
	
//$host="bxw2442620608";//主机名
//$db_user="bds297784390";//数据库用户名
//$db_pass="";//数据库用户名密码
//
//$db_name="bds297784390_db";//数据库名称
//$timezone="Asia/Shanghai";//时区
//
////mysql_connect连接mysql数据库 需指定相应信息
//$link=mysql_connect($host,$db_user,$db_pass);
//
////mysql_select_db选择你用的数据库
//mysql_select_db($db_name,$link);
//
//mysql_query("SET names UTF8");
//
//header("Content-Type: text/html; charset=utf-8");
//date_default_timezone_set($timezone); //北京时间
//$dbh = mysql_connect(' localhost','bds297784390','al0riginLity');
//mysql_select_db('bds297784390_db');
//$query = "insert into requests(date, request, email, priority,status) values (NOW(),'$description', '$email', '$priority', 'NEW')";
//$res = mysql_query($query, $dbh);
//$query = "select max(id) from requests";
//$res = mysql_query($query, $dbh);
//$err = mysql_error();
//if($err){
//echo "发生错误，请通知管理员";
//}
//$row = mysql_fetch_row($res);
//echo "未来您使用的号码为: ".$row[0];
$dbh = mysql_connect('60.205.24.41','bds297784390','al0riginLity')or die("数据库链接失败");
mysql_select_db('bds297784390_db',$dbh);
?>
