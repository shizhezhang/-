<?php
		header('Content-type:text/html;charset=utf-8');
	$link = mysql_connect('localhost','root','root') or die('不能连接到数据库服务器！可能是数据库服务器没有启动，或者用户名密码有误！'.mysql_error());

	$db_selected = mysql_select_db('test',$link);

	if($db_selected){
		echo '数据库选择成功！';
	}else{
		exit('连接失败');
	}
	
	$result=mysql_query('insert into user values("TX","147258")',$link);
	
	echo mysql_error();
	
	?>
