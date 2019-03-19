<?php
    header("content-type:text/html;charset:utf-8");
    //1.接收数据
    $username=$_POST['username'];
    $password=$_POST['password'];
    //2.处理 连接数据库，保存数据
    //1)建立连接
    $con=mysql_connect("localhost","root","root");
    if(!$con){
        echo "连接数据库失败！";
    }else{
        //2)选择数据库
        mysql_select_db("flowers",$con);
        //3)执行SQL语句
        $sqlstr="select * from regtable where username='$username' and userpass='$password'";
        //echo $sqlstr;
        $result=mysql_query($sqlstr,$con);
        $rows=mysql_num_rows($result);
        if($rows<=0){
        	//用户不存在，去注册或者其他
            echo "0";
        }else{
        	
        	//存在，可以登录
           echo "1";
        }
    }
?>