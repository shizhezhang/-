<?php
		$username = $_POST['txt_book'];
	header('Content-type:text/html;charset=utf-8');
	
	//2.1
		$link = mysql_connect('localhost','root','root') or die('不能连接到数据库服务器！可能是数据库服务器没有启动，或者用户名密码有误！'.mysql_error());
		
		//2.2
	    $a = mysql_select_db("test",$link);		
//	    if($a) {echo '选择数据库成功';}else{echo '连接失败';} 
		mysql_query("set names gb2312");

	//2.3
	    $sql=mysql_query("select * from student where student_id = {$username}", $link);

		$info=mysql_fetch_array($sql);
		var_dump($info);
		if($_POST['sub']=="查询"){
			$txt_book=$_POST['txt_book'];
			var_dump($_POST);
			$sql=mysql_query("select * from  student where jack");
		}	
		if($info==false){
			echo "对不起，您检索的学生名不存在！";
		}
		
		/**
		 * 1.把名字传过来，得到名字
		 * 2.查询数据库，是否有此用户
		 *     1.连接数据库
		 *     2.选择数据库
		 *     3.查询数据库，得到资源。
		 *     4.关闭数据库。 
		 */
	?>