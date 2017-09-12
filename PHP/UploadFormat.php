<?php
	//上传图片
	header('Content-type:text/html;charset=utf-8');
	if($_POST['action'] == "upload"){                       //判断提交按钮是否为空
		$file_path = "./upload\\";    
//		var_dump($_POST);var_dump($_FILES);                      //定义图片在服务器中的存储位置
		$picture_name = $_FILES['u_file']['name'];              //获取上传图片的名称
		$picture_name = strstr($picture_name,".");          //通过strstr()函数截取上传图片的后缀
//		var_dump($picture_name);
//		exit;
		if($picture_name != ".jpg"){                        //根据后缀判断上传图片的格式是否符合要求
			echo "<script>alert('上传图片格式不正确，请重新上传');window.location.href = 'index2.php';</script>";
		}else if($_FILES['u_file']['tmp_name']){
			move_uploaded_file($_FILES['u_file']['tmp_name'],$file_path.$_FILES['u_file']['name']);   //执行图片上传
			echo "图片上传成功";
		}
		else{
			echo "上传图片失败";
		}
	}
?>