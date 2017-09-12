<html>
	<head>
		<meta charset="UTF-8">
		<title>Bob的汽车订单订购结果</title>
	</head>
	<body>
		<h1>Bob的汽车订单</h1>
		<h2>订购结果</h2>
		<?php 
			//创建中等风格变量名称
			$tireqty = $_POST['tireqty'];
			$oilqty = $_POST['oilqty'];
			$sparkqty = $_POST['sparkqty'];
			echo '<p>您的订单如下：<p>';
			echo $tireqty. "个轮胎</br>";
			echo $oilqty. "拼油</br>";
			echo $sparkqty."个火花塞</br>";
			
			//商品总数量
			$totalqty = 0;
			$totalqty = $tireqty + $oilqty + $sparkqty;
			echo "订单总数量：".$totalqty."</br>";
			
			//商品总金额
			$totalamount = 0.00;
			
			//常量--商品单价
			define('TIREPRICE',100);
			define('OILPRICE',10);
			define('SPARKPRICE',5);
			
			//计算商品总金额y
			$totalamount = $tireqty * TIREPRICE;
								  + $oilqty * OILPRICE;
			 					  + $sparkqty * SPARKPRICE;
			echo "总计：￥".number_format($totalamount,2)."</br>";
			echo "总共合计：￥".number_format($totalamount,2);
			echo "</br>";
			echo 'isset($tireqty)：'.isset($tireqty).'</br>';
			echo 'isset($nothere)：'.isset($nothere).'</br>';
			echo 'empty($tireqty)：'.empty($tireqty).'</br>';
			echo 'empty($nothere)：'.empty($nothere).'</br>';
			
		?>
	</body>
</html>

