<?php
		//获取图书名称及作者信息
	header('Content-type:text/html;charset=utf-8');
	while(list($name,$value)=each($_POST)){
		if($name!="submit"){
			echo "$name=$value</br>";
		}
	}
