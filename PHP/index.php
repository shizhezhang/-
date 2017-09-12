<?php 
	header("Content-type: text/html; charset=utf-8");
	echo "恭喜您走上PHP的编程之路";
	
    echo "</br>";
    
    //布尔数据类型
	$boo = true;
	if($boo == true)
		echo'变量$boo为真！';
	else
		echo'变量$boo为假!!';
		
	echo"</br>";
	
	//字符串类型
	$a = '字符串';
	echo "$a";
	
	echo"</br>";
	
	//界定符
	$i = "显示该行内容";
	echo <<<std
		这和双引号没有什么区别，\$i同样可以被输出出来。<p>\$i的内容为：$i
std;

	echo "</br>";
	
	//十进制整数
	$str1 = 1234567890;
	//十六进制整数
	$str2 = 0x1234567890;
	//八进制整数
	$str3 = 01234567890;
	//另一个八进制整数
	$str4 = 01234567;
	echo '数字1234567890不同进制的输出结果：<p>';
	echo '十进制的结果是：'.$str1.'</br>';
	echo '十六进制的结果是：'.$str2.'</br>';
	echo '八进制的结果是：';
	if($str3 == $str4){
		echo '$str3=$str4='.$str3;
	}else{
		echo '$str3 != $str4';
	}
	echo '</br>';
	
	$num = '3.1415926r*r';
	echo '使用(integer)操作符转换变量$num类型：';
	echo (integer)$num;
	echo '<p>';
	echo '输出变量$num的值：'.$num;	
	echo '<p>';
	echo '使用settype函数转换变量$num类型：';
	echo settype($num,'integer');
	echo '<p>';
	echo '输出变量$num的值：'.$num;
		
	echo '</br>';
	
	echo '当前文件路径： '.__FILE__;
	echo "</br>当前行数：".__LINE__;
	echo "</br>当前PHP版本信息：".PHP_VERSION;
	echo "</br>当前操作系统：".PHP_OS;
	
	echo "</br>";
	
	$a = -100;
	$b = 50;
	$c = 30;
	echo "\$a =".$a."</br>";
	echo "\$a =".$b."</br>";
	echo "\$c =".$c."</br>";
	echo "\$a+\$b =".($a+$b)."</br>";      //计算变量$a加$b的值
	echo "\$a-\$b =".($a-$b)."</br>";      //计算变量$a减$b的值
	echo "\$a*\$b =".($a*$b)."</br>";      //计算变量$a乘以$b的值
	echo "\$a/\$b =".($a/$b)."</br>";      //计算变量$a除以$b的值
	echo "\$a%\$c =".($a%$c)."</br>";      //计算变量$a和$b的余数，被除数为-100
	echo "\$a++ =".$a++."</br>";           //计算变量$a++的后置递增运算
	echo "运算后\$a的值为：".$a."</br>";
	echo "\$b-- =".$b--."</br>";           //计算变量$b--的后置递减运算
	echo "运算后\$b的值为：".$b."</br>";
	echo "++\$c =".++$c."</br>";           //计算变量++$c的前置递增运算
	echo "运算后\$c的值为：".$c."</br>";        
	
	//逻辑运算符
	$i=true;
	$j=true;
	$z=false;
	if($i or $j and $z)            //用or做判断
		echo "true";
	else
		echo "false";
		
	echo "</br>";
	
	if($i || $j and $z)            //用||做判断
		echo "true";
	else
		echo "false";
	
	echo "</br>";
	//三元运算符
	$value=100;
	echo ($value==false)?"三元运算符":"没有该值";
	
	echo "</br>";
	
	/*声明自定义函数*/
	function z($num){
		return "$num * $num =".$num * $num;
	}
	echo z(20);
		
	echo "</br>";
	
	
	//函数传递参数之引用传递方式
	function M(&$z){
		$z = $z * 2 + 10;
	echo "在函数内：.\$z = ".$z;
	}
	$z = 1;
	m($z);
	echo "在函数外：\$z = $z";
	
	echo "</br>";
		
	//默认参数（可选参数）
	function values($price,$tax=""){
		$price = $price+($price*$tax);
		echo "价格为：$price";
	}
	values(100,0.75);
	values(200);
	
	echo "</br>";
	
	//函数中返回值
	function G($price,$tax=0.45){
		$price=$price+($price*$tax);
		return $price;
	}
	echo G(100);
	echo "</br>";
	
	//函数的引用
	function &K($tmp=0){
		return $tmp;
	}
	$str=&K("看到了");
	echo $str;
	error_reporting(0);
	
	//取消引用
	$num=1234;
	$math=&$num;
	echo "\$math is:".$math."</br>";
	unset($math);
	echo "\$math is:".$math."</br>";
	echo "\$num is:".$num."</br>";
	
	//if语句
	$num = rand(1,31);
	if ($num % 2 == 0){
		echo "\$num = $num";
		echo "</br>";
		echo "变量 $num 是偶数。";
	}
	
	
	//elseif条件控制语句
	echo "</br>";
	$month=date("n");
	$today=date("j");
	if($today >= 1 and $today <= 10){
		echo "今天是".$month."月".$today."日上旬。";
	}else if($today >= 10 and $today <= 20){
		echo "今天是".$month."月".$today."日中旬。";
	}else{
		echo "今天是 $month 月 $today 日下旬。";
	}
	
	//while循环语句
	echo "</br>";
	$num = 1;
	$str = "10以内的偶数为： ";
	while($num <= 10){
		if($num % 2 == 0){
			$str .= $num." ";
		}
		$num++;
	}
	echo $str;
	
	
	echo "</br>";
	//do...while循环语句
	$num = 1;
	while($num != 1){
		echo "不会看到。";
	}
	do{
		echo "会看到。";
	}while($num != 1);
	
	echo "</br>";
	$num = 1;
	for($i=1;$i<=100;$i++){
		$num *= $i;
	}
	echo "100! = ".$num;
	echo "</br>";
	
	$name = array("1" => "智能机器人","2" => "数码相机","3" => "天翼3G手机","4" => "瑞士手表");
	$price = array("1" => "10000元","2" => "9500元","3" => "3000元","4" => "66666元");
	$counts = array("1" => "2","2"=> "1","3"=> "2","4"=> "3");
	?>
	<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
			<tr>
				<td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">商品名称</td>
				<td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">价格</td>
				<td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">数量</td>
				<td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">金额</td>
			</tr>
			<?php
	foreach($name as $key => $value){
		?>
		<tr>
				<td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $value ?></td>
				<td align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $price[$key] ?></td>
				<td align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $counts[$key] ?></td>
				<td align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $counts[$key]*$price[$key] ?></td>
		</tr>
	
	<?php } ?>
	</table>
	<?php
	
	$ss = 2;
	$arr = array();
	$max = 1000;
	echo $max ."以内的素数为：";
	while($ss < $max){
		$boo = false;
		foreach($arr as $value){
			if($ss % $value == 0){
				$boo = true;
				break;
			}
		}
		if(!$boo){
			echo $ss." ";
			$arr[count($arr)] = $ss;
		}
		$ss++;
	}
	
	echo "</br>";
	echo "</br>";
	
	while(true){
		$tmp = rand(1,20);
		echo $tmp." ";
		if($tmp == 10){
			echo "<p>变量等于10，终止循环。";
				break;
		}
	}
	
	echo "</br>";
	
	$str ="\r\r(:@_@ 创图书编撰伟业 展软件开发雄风 @_@:)   ";
	echo trim($str);               //去除字符串左右两边的空格
	echo "</br>";
	echo trim($str,"\r\r(: :)");    //去除字符串左右两边的特殊字符\r\r(::)
	
	echo "</br>";
	
	$text = "祝全国程序开发人员在编程之路上一帆风顺二龙腾飞三羊开泰四季平安";
	if(strlen($text)>25){
		echo substr($text,0,25)."...";
	}
	else{
		echo $text;
	}
	
	$str = "&& 明日编程词典 &&";
	echo trim($str);
	echo "</br>";
	echo trim($str,"&&");
	
	echo "</br>";
	
	$content = "白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择";
	$str = "理想选择";
	echo str_ireplace($str,"<font color='#FF000'>$str</font>",$content);
	
	echo "</br>";
	
	//声明函数array()
	$array = array("1"=>"编","2"=>"程","3"=>"词","4"=>"典");
	print_r($array);
	echo "</br>";
	echo $array['1'	];
	echo $array[2];
	echo $array[3];
	echo $array[4];

	echo "</br>";
	$array[1] = "编";
	$array[2] = "程";
	$array[3] = "词";
	$array[4] = "典";
//	var_dump(array_keys($array));
//	var_dump("4" === 4);
	print_r($array);
	
	//索引数组
	echo "</br>";
	$newarray = array('first'=>1,'secend'=>2,'third'=>3);
	echo $newarray['secend'];
	$newarray['third'] = 10;
	echo $newarray['third'];
	
	
	//关联数组
	echo "</br>";
	$array =array(1=>'PHP5',2=>'从入门',3=>'到精通');
	print_r($array);
	
	echo "</br>";
	
	//二维数组
	$str = array(
		"书籍"=>array("语文","历史","地理"),
		"体育运动"=>array(z=>"羽毛球",m=>"乒乓球"),
		"水果"=>array("苹果",5=>"葡萄","芒果")
	);
	print_r($str);
	
	echo "</br>";
	//遍历数组
	$url = array(
		"编程词典网"=>"www.mrbccd.com",
		"编程体验网"=>"www.bctv365.com",
		"编程资源网"=>"www.bc110.com",
	);
	foreach($url as $link){
		echo $link."</br>";
	}
	//字符串转换数组
	$str = "时装、休闲、职业装";
	$strs = explode("、",$str);
	print_r($strs);
	
	echo "</br>";
	//数组转换字符串
	$str = array(明日,编程词典,网址,'www.mrbccd.com',服务电话,'0431-84972266');
	echo implode(" ",$str);
	
	echo "</br>";
	//数组元素个数
	$array = array('php'=>array("PHP函数参考大全","PHP程序开发范例宝典","PHP数据库系统开发完全手册"),
							'asp'=>array("ASP经验技巧宝典"));
	echo count($array,COUNT_RECURSIVE);


	echo "</br>";
	$name = "智能机器人@数码相机@天翼3G手机@瑞士手表";
	$price = "14888@3288@1888@66666";
	$counts = "1@2@3@4";
	$arrayid = explode("@",$name);                  //将商品ID字符串转换到数组中
	$arraynum = explode("@",$price);               //将商品价格字符串转换到数组中
	$arraycount = explode("@",$counts);          //将商品数量字符串转换到数组中
	if($_POST[Submit]==true){                       
		$id = $_POST[name];                                //获取要更改的元素名称
		$num = $_POST[counts];                          //获取更改的值
		$key = array_search($id,$arrayid);            //在数组中搜索给定的值，如果成功返回键名
		$arraycount[$key] = $num;                       //更改商品数量
		$counts = implode("@",$arraycount);      //更改后的商品数量添加到购物车里
	}
	?>
	<table width="580px" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
		<tr>
			<td width="145px" align="center" bgcolor="#FFFFFF" class="STYLE1">商品名称</td>
			<td width="145px" align="center" bgcolor="#FFFFFF" class="STYLE1">价格</td>
			<td width="145px" align="center" bgcolor="#FFFFFF" class="STYLE1">数量</td>
			<td width="145px" align="center" bgcolor="#FFFFFF" class="STYLE1">金额</td>
		</tr>'
	<?php 
		for($i=0;$i<count($arrayid);$i++){
	?>
	<form action="" method="post" name="form1_<?php echo $i; ?>">
		<tr>
			<td height="25px" align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $arrayid[$i]; ?></td>
			<td align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $arraynum[$i]; ?></td>
			<td align="center" bgcolor="#FFFFFF" class="STYLE2">
				<input type="text" name="counts" id="counts" value="<?php echo $arraycount[$i]; ?>" size="8" />
				<input type="hidden" name="name" id="name" value="<?php echo $arrayid[$i]; ?>" />
				<input type="submit" name="Submit" value="更改" />
			</td>
			<td align="center" class="STYLE2"><?php echo $arraycount[$i]*$arraynum[$i]; ?></td>
		</tr>
	</form>
	<?php
		}
	?>
	</table>
	<?php 
	//获取数组最后一个元素
	$arr = array("asp","java","PHP","vb");
	$array = array_pop($arr);
	echo "被弹出的单元是：$array</br>";
	print_r($arr);
	
	
	//向数组中添加元素
	echo"</br>";
	$array_push = array("PHP函数参考大全","PHP数据库系统开发完全手册");
	array_push($array_push,"PHP程序开发范例宝典");
	print_r($array_push);

	echo "</br>";
	
	//删除数组中重复元素
	$array_push = array("PHP函数参考大全","PHP数据库系统开发完全手册","PHP函数参考大全");
	array_push($array_push,"PHP程序开发范例宝典");
	print_r($array_push);
	echo "</br>";
	$result = array_unique($array_push);
	print_r($result);

	echo "</br>";
	//声明一个一维数组
	$array = array("乒乓球","羽毛球","足球","台球");
	print_r($array);
	
	echo "</br>";
	
	//二维数组
	$str2 = array(
		"水果"=>array("n"=>"苹果","z"=>"香梨","m"=>"草莓"),
		"书籍"=>array("数学","语文","英语"),
		"体育运动"=>array("游泳",10=>"跳水","跳远"));
		echo "<pre>";
	print_r($str2);
    	echo "</pre>";

	//数组sort()升序排序----字母以首字母排序----数字以数字大小排序
	$arr = array("545","4811","25");
	sort($arr);
	$alength = count($arr);
	for($z=0;$z<$alength;$z++){
		echo $arr[$z];
		echo "</br>";
	}
    ?>
    <!--选择域标记-->
    <select name="列表方式" size="1" >
    	<option value="0" selected>网页设计</option>
    	<option value="1" >办公自动化</option>
    	<option value="2" >PHP</option>
    	<option value="3" >网页美工</option>
    	<option value="4" >测试工程师</option>
    	<option value="5" >产品经理</option>
    </select>

	<select name="菜单方式"  multiple="multiple">
    	<option value="0" selected>网页设计</option>
    	<option value="1" >办公自动化</option>
    	<option value="2" >PHP</option>
    	<option value="3" >网页美工</option>
    	<option value="4" >测试工程师</option>
    	<option value="5" >产品经理</option>
    </select>

	<form action="" method="post" name="form1">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					用户名：<input type="text" name="user" size="20" />
					密&nbsp;&nbsp;码：<input type="password" name="pwd" value="" id="pwd" size="20px" />
					<input type="submit" id="" name="submit" value="登录" />
				</td>
			</tr>
		</table>
	</form>
	<?php
		if($_POST[submit]=="登录"){
			//使用echo语句输出使用$_POST[]方法获取的用户名和密码
			echo "您输入的用户名为：".$_POST[user]."&nbsp&nbsp;密码为：".$_POST[pwd];
		}
	?>
	
	<form action="" method="post" name="form2" >
		<input type="radio" name="sex" id="sex" value="男" checked="" />男
		<input type="radio" name="sex" id="sex" value="女" />女
		<input type="submit" name="submit" value="提交"/>
	</form>
	<?php
		echo "您选择的性别为： ";                        //输出字符串
		echo $_POST['sex'];                                    //输出被选中的单选按钮值
	?>
	<form action="" method="post">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="443px" height="41px" align="center" valign="top">您喜欢的图书类型：
					<input type="checkbox" name="mrbook[]" id="" value="入门类" />入门类
					<input type="checkbox" name="mrbook[]" id="" value="案列类" />案列类
					<input type="checkbox" name="mrbook[]" id="" value="讲解类" />讲解类
					<input type="checkbox" name="mrbook[]" id="" value="实例类" />实例类
					<input type="submit" id="" name="submit" value="提交" />
				</td>
			</tr>
		</table>
	</form>
	<?php
		header('Content-type:text/html;charset=utf-8');
//		var_dump($_POST);
//		echo '<pre>';
		//判断复选框是否为空，则执行下面操作
		if($_POST[mrbook] != null){
			//输出字符串
			echo "您选择的图书类型为：";
			//通过for循环语句输出选中复选框的值
			for($z = 0;$z<count($_POST[mrbook]);$z++){
				//循环输出用户选择的图书类型
				echo $_POST[mrbook][$z]."&nbsp&nbsp;";
			}
		}

	?>
	<form action="" method="post">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="80px" height="20px" align="center"><span class="style2">意见主题</span></td>
				<td width="194px">
				<select name="sel" size="1" >
					<option value="公司发展" selected>公司发展</option>
					<option value="管理制度" >管理制度</option>
			    	<option value="后勤服务" >后勤服务</option>
			    	<option value="员工薪资" >员工薪资</option>
				</select>&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="提交"/>
				</td>
			</tr>
		</table>	
	</form>
	<?php
	//			p($_POST);
		if($_POST["sel"] !=""){
			echo "您选择的意见主题为： ",  $_POST["sel"];
	//					for($z = 0;$z < count($_POST["sel"]); $z++){
	//						echo $_POST["sel"][$z]."&nbsp&nbsp;";
	//					}
		}
		//			function p($var){echo "<pre>";var_dump($var);echo"</pre>";}
	?>
	<form action="" method="post" name="form1">
		<span class="style2">检测闰年：</span>
		<select name="year">
			<option value="2010">2010 年</option>
			<option value="2011">2011 年</option>
			<option value="2012">2012 年</option>
			<option value="2013">2013 年</option>
			<option value="2014">2014 年</option>
			<option value="2015">2015 年</option>
			<option value="2016">2016 年</option>
			<option value="2017">2017 年</option>
			<option value="2018">2018 年</option>
		</select>
		<input type="submit" name="submit" value="检测" onclick="check()" />
	</form>
	<!--if...else语句-->
	<script language="JavaScript">
		function check(){
			/*var year1 = form.year.Value*/                   //不能用此方法获取值
			/*var  year1 = document.querySelector('[name=year]').value;*/
			var  year1 = document.getElementsByName('year')[0].value;                        //
			//如果变量year1能够被4整除，而同时不能被100整除，则执行下面语句
			if((year1%4)==0 && (year1%100) != 0){
				alert(year1+"年是闰年！");
			}
			else{
				alert(year1+"年是平年！");
			}
		}
	</script>
	<form action="" method="post"name="form1" >
		<span class="style2">您最喜欢的图书类别：</span>
		<input type="radio" name="book" id="" value="生活类" onclick="checks(this.value);"/>生活类
		<input type="radio" name="book" id="" value="电脑类" onclick="checks(this.value);"/>电脑类
		<input type="radio" name="book" id="" value="科技类" onclick="checks(this.value);"/>科技类
		<input type="radio" name="book" id="" value="体育类" onclick="checks(this.value);"/>体育类
	</form>
		<script type="text/javascript">
			function checks(book){
	//					alert("您最喜欢的图书类别：" + book);
				switch(book){
					case "生活类":
						alert("您最喜欢的图书类别：" + book);
						break;
					case "电脑类":
						alert("您最喜欢的图书类别：" + book);
						break;
					case "科技类":
						alert("您最喜欢的图书类别：" + book);
						break;
					case "体育类":
						alert("您最喜欢的图书类别：" + book);
						break;
				}
			}
		</script>
		<script type="text/javascript">
			for(i=1;i<=9;i++){
				document.write(i+"*"+i+ "=" +i*i+"&nbsp;&nbsp;");
			}
		</script>
		</br>
		<script type="text/javascript">
			var str = "20以内的偶数有：";
			var i=1;
			while(i<20){
				if(i%2!=0){
					i++;
					continue;
				}
				str=str+i+" ";
				i++;
			}
			document.write(str);
		</script>
		<br>
			<!--验证表单元素是否为空-->
		<form action="" name="myform" method="post">
			<table border="0" cellspacing="0" cellpadding="0" width="532px" height="183px"  bgcolor="#CCFF66" background="img1-bg-def.png" >
				<tr><td height="71px" colspan="2" align="center">&nbsp;</td></tr>
					<tr>
						<td width="281px" align="left">
						用户名：<input name="user" type="text" id="user" size="20px" /><br>
						密&nbsp;&nbsp;&nbsp;码：<input name="pwd" type="text" id="pwd" size="20px" />
					</td>
				</tr>
				<tr>
					<td height="43px" align="center" >
						<input type="submit" id="" name="submit" onclick="return mycheck();" value="登录" />&nbsp;
						<input type="reset" name="submit2" value="重置" />
					</td>
				</tr>
			</table>
		</form>
		<script type="text/javascript">
			function mycheck(){
				if(myform.user.value==""){                                  /*通过if语句判断用户名是否为空*/
					alert("用户名称不能为空！！");myform.user.focus();return false;                /*返回表单元素位置*/
				}
				if(myform.pwd.value==""){                                  /*通过if语句判断密码是否为空*/
					alert("用户密码不能为空！！");myform.pwd.focus();return false;                /*返回表单元素位置*/
				}
			}
		</script>
		<br>
		<table border="0" cellspacing="0" cellpadding="0" width="761px" height="20px" >
			<tr>
				<td width="67px" align="center" ><a href="#">首&nbsp;页</a></td>
				<td width="75px" align="center"><a href="#" onmousemove="Lmenu('新品')">新品上架</a></td>
				<td width="75px" align="center"><a href="#" onmousemove="Lmenu('购物')">购物车</a></td>
				<td width="74px" align="center"><a href="#" onmousemove="Lmenu('会员')">会员中心</a></td>
			</tr>
		</table>
		<div id="submenu" class="word_yellow">&nbsp;</div>
		<script type="text/javascript">
			function Lmenu(value){
				switch(value){
					case"新品":
					submenu.innerHTML="<a href='#'>商品展示</a>|<a href='#'>销售排行榜</a>|<a href='#'>商品查询</a>";
					break;
					
					case"购物":
					submenu.innerHTML="<a href='#'>商品展示</a>|<a href='#'>销售排行榜</a>|<a href='#'>商品查询</a>";
					break;
					
					case"会员":
					submenu.innerHTML="<a href='#'>商品展示</a>|<a href='#'>销售排行榜</a>|<a href='#'>商品查询</a>";
					break;
				}
			}
		</script>
		<form action="" id="form1" name="form11" method="post">
			<table width="547px" border="1" cellspacing="1" cellpadding="1" bgcolor="#FBA720" >
				<tr><td height="35px" colspan="15" bgcolor="#FFFFFF" align="center"><span>订单管理</span></td></tr>
				<tr>
					<td width="77px" align="center" colspan="1" bgcolor="#FFFFFF" >说明：</td>
					<td><textarea name="readme" cols="50px" rows="5px" id="readme"></textarea></td>
					<td width="63px" height="33" bgcolor="#FFFFFF" class="STYLE2" ><input name="QK" type="button" value="清空" 					onclick="javascript:document.getElementById('readme').value='';return false;" /></td>
				</tr>
				<tr>
					<td  width="77px" align="center" bgcolor="#FFFFFF">操作：</td>
					<td height="30px"colspan="2px" align="left" bgcolor="#FFFFFF" >
						<input name="PHP3" type="checkbox" id="PHP3" value="C++" />C++编程词典全能版<br/>
						<input name="PHP4" type="checkbox" id="PHP4" value="VC" />VC编程词典钻石版<br/>
						<input name="PHP5" type="checkbox" id="PHP5" value="PHP" />PHP编程词典体验版<br/>
						<input name="PHP6" type="checkbox" id="PHP6" value="C#" />C#编程词典标准版<br/>
						<input name="PHP7" type="checkbox" id="PHP7" value="VB" />VB编程词典全能版<br/>
						<input name="PHP8" type="checkbox" id="PHP8" value="ASP" />ASP编程词典体验版
					</td>
				<tr>
					<td colspan="5px" align="center" bgcolor="#FFFFFF">
						<input name="QX" type="button" value="全选"   onclick="checkAll(form11)" width="60px" height="25px" />
						<input name="FX" type="button" value="反选"    onclick="switchAll(form11)" width="60px" height="25px" />
						<input name="BX" type="button" value="不选"   onclick="uncheckAll(form11)" width="60px" height="25px" />
					</td>
				</tr>
			</table>
		</form>
		<script type="text/javascript">
			//全选
			function checkAll(form11){
				var elements = document.getElementsByTagName('input');
				for(i=0;i<elements.length;i++){
					if(elements[i].type == "checkbox"){
//						console.log(i);
						if(elements[i].checked==false){
//							console.log(9);
							elements[i].checked=true;
						}
					}
				}
			}
			//反选
			function switchAll(form11){
				var elements = document.getElementsByTagName('input');
				for(i=0;i<elements.length;i++){
					if(elements[i].type=="checkbox"){
						if(elements[i].checked==true){
							elements[i].checked=false;
						}else if(elements[i].checked==false){
							elements[i].checked=true;
						}
					}
				}
			}
			//不选
			function uncheckAll(form11){
				var elements = document.getElementsByTagName('input');
				for(i=0;i<elements.length;i++){
					if(elements[i].type=="checkbox"){
						if(elements[i].checked==true){
							elements[i].checked=false;
						}
					}
				}
			}
		</script>
	<?php
		echo "mktime函数返回的时间戳：".mktime()."<br/>";               //返回当前时间戳
		echo "当前日期为：".date("Y-m-d",mktime())."<br/>";              //使用date()函数输出格式化后的日期
		echo "当前时间为：".date("H:i:s",mktime())."<br/>";                //使用date()函数输出格式化后的时间+9
//	    echo phpinfo(); 
		$arr = getdate();                                                 //使用getdate()函数将当前信息保存
		echo $arr[year]."-".$arr[mon]."-".$arr[mday]." ";                                          //返回当前的日期信息
		echo $arr[hours].":".$arr[minutes].":".$arr[seconds]." ".$arr[weekday];       //返回当前的时间信息
		echo "</br>";
		echo "Today is the $arr[yday]th of year";
		echo "</br>";
		
		$time1 = strtotime(date('Y-m-d H:i:s'));
		$time2 = strtotime("2017-8-26 18:00:00");
		$sub = ceil(($time2-$time1) / 3600);
		echo "现在距离2017/8/26日金冠月赛开始时间还有<font color='red'>$sub</font>小时";
		
		echo "</br>";
		/*继承*/
		/*父类*/
		class SportObject{
			public $name;                        //定义成员变量（姓名、年龄、体重、性别）
			public $age;
			public $avoirdupois;
			public $sex;
			public function __construct($name,$age,$avoirdupois,$sex){         //定义构造方法
				$this->name=$name;                                    //为成员变量赋值（姓名、年龄、体重、性别）
				$this->age=$age;
				$this->avoirdupois=$avoirdupois;
				$this->sex=$sex;
			}
			function showMe(){                                        //在父类定义方法
				echo "这句话不会显示";
			}
		}
		/*子类BeatBasketBall*/
		class BeatBasketBall extends SportObject{
			public $height;
			function __construct($name,$height){
				$this->height=$height;
				$this->name=$name;
			}
			function showMe(){
				if($this->height>185){
					return $this->name."，符合打篮球的要求！";
				}else{
					return $this->name."，不符合打篮球的要求！";
				}
			}
		}
		/*子类WeightLifting*/
		class WeightLifting extends SportObject{
			public $avoirdupois;
			function showMe(){
				if($this->avoirdupois<85){
					return $this->name."，符合举重的要求！";
				}else{
					return $this->name."，不符合举重的要求！";
				}
			}
		}
		//实例化对象
		$beatbasketball = new BeatBasketBall('科技','190');                  //实例化子类
		$weightlifting = new WeightLifting('明日','185','80','20','男');
		echo $beatbasketball->showMe()."</br>";
		echo $weightlifting->showMe()."</br>";
		
		echo "</br>";
		
		class Book{
			static $num = 0;
			public function showMe(){
				echo "您是第".self::$num."位访客";
				self::$num++;
			}
		}
		$book1=new Book();
		$book1->showMe();
		echo "</br>";
		$book2=new Book();
		$book2->showMe();
		echo "</br>";
		echo "您是第".Book::$num."位访客"; 
	
		echo "</br>";
		
		
	
		


