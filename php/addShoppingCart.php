<?php
	//添加到购物车
	header("Content-Type:text/html;charset=utf-8");
	//1、接受客户端的数据（用户输入的数据）
	$goodsName   = $_REQUEST['goodsName'];
	$goodsId   = $_REQUEST['goodsId'];
	$goodsCount = $_REQUEST['goodsCount'];
	$goodsImg = $_REQUEST['goodsImg'];
	$goodsPrice = $_REQUEST['goodsPrice'];
	
	//2、数据保存在数据库中
	//1）、建立连接（搭桥）
	$conn = mysql_connect("localhost","root","root");
	
	//2）、选择数据库（找目的地）
	if(!mysql_select_db("flowers",$conn)){
		die("数据库选择失败".mysql_error());
		echo 11;	
	};
	
	//3）、传输数据（过桥）
	$result = mysql_query("select * from shoppingCart where goodsId='".$goodsId."' and goodsName='".$goodsName."'",$conn);
	//3.1)先查找该商品是否在购物车中存在
	if(mysql_num_rows($result)>0){
		//如果存在，则使用update语句
		$sqlstr = "update shoppingCart set goodsCount=goodsCount+".$goodsCount." where vipName='".$goodsName."' and goodsId='".$goodsId."'";
	}else{
		//如果不存在，则使用insert语句	
		$sqlstr = "insert into shoppingCart values('".$goodsId."','".$goodsName."','".$goodsImg."','".$goodsPrice."','".$goodsCount."')";		
	}
	
	$result=mysql_query($sqlstr,$conn);	
	//4）、关闭连接（拆桥）
	mysql_close($conn);
	
	if(!$result){
		die("添加失败".mysql_error());
		echo 3;
	}	
	
	//3、给客户端返回（响应） 1：表示添加成功 0：表示添加失败
	if($result>0){
		echo 1;	
	}else{
		echo 0;
	}
?>