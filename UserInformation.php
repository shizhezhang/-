<?php
	//输出用户登录信息
	while(list($name,$value)=each($_POST)){
		if($name!="submit"){
			echo "$name=$value</br>";
		}
	}
