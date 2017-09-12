<?php
	//密码长度
//	ini_set("display_errors", "1");
//	error_reporting(E_ALL);
header('Content-type:text/html;charset=utf-8');
	if(strlen($_POST['pwd'])<6){
		echo "<script>alert('用户密码的长度不得少于6位！请重新输入');history.back();</script>";
	}
	else{
		echo "用户输入正确！";
	}
?>