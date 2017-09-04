<?php
header("Content-type: text/html; charset=utf-8"); 
$textarea1 = $_POST['textarea1'];
//连接数据库
$link = mysql_connect('localhost','root','root') or die('不能连接到数据库服务器！可能是数据库服务器没有启动，或者用户名密码有误！'.mysql_error());
//选择数据库
$a = mysql_select_db("test",$link);		
mysql_query("set names gb2312");
//查询数据库
$sql=mysql_query("select * from student where student_id = '{$textarea1}'", $link);
//	var_dump($sql); var_dump(mysql_error());
//	var_dump($textarea1);
		$info=mysql_fetch_array($sql);
		//var_dump($info);
		if($_POST['submit']=="提交"){
			$txt_book=$_POST['textarea1'];
			//var_dump($_POST);
			$sql=mysql_query("select * from  student where jack");
		}
//判断用户是否点击"提交"按钮  
if($_POST["submit"]=="提交"){
	echo "您输入的留言板内容为： ".$_POST['textarea1'];
}