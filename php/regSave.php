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
        $sqlstr="select * from regtable where username='$username'";
        $result=mysql_query($sqlstr,$con);
        $rows=mysql_num_rows($result);
        //如果$result执行成功，那么说明数据库里头有该用户名
        //那么，说明他在数据库表里头占了一行
        if($rows<=0){
        	//没找到  
        	//执行插入语句
             $sqlstr="insert into regtable values('$username','$password')";
             $result=mysql_query($sqlstr,$con);
             //4)关闭数据库
             mysql_close($con);

             //3.响应
             if($result){
             	//数据插入成功
                echo "1";
             }else{
             	//失败     数据插入失败
                echo "99";
             }

        }else{
            //4)关闭数据库
            mysql_close($con);
            // 已经被注册 
            echo "0";
        }
    }
?>