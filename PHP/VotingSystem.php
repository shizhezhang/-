<?php
	//投票系统
	header('Content-type:text/html;charset=utf-8');
	if($_POST["submit"]!=""){
		$content=$_POST["content"];
		$data=explode("*",$content);
		while(list($name,$value)=each($data)){
			echo '<input type="checkbox" name="checkbox" value="checkbox">';
			echo $value."\n";
		}
	}
