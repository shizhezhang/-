<?php
	//字符串长度
	header('Content-type:text/html;charset=utf-8');
	if(strlen($_POST['SFZ'])<18){
		echo "<script>alert('身份证号码长度不得少于18位！请重新输入');history.back();</script>";
	}
	else{
		echo "身份证输入正确";
	}
?>