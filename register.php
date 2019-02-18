<?php
/**
 * Created by PhpStorm.
 * User: 小城
 * Date: 2019/2/16
 * Time: 20:49
 */
header("content-type:text/html;charset=utf-8");
$uname = $_GET['uname'];
$upwd = $_GET["upwd"];
//$uemail = $_GET["uemail"];
echo $uname;
mysql_connect("127.0.0.1","root","root");
mysql_select_db("user");
mysql_query("set names utf8");

$sql = "select * from `user` where  name = '$uname'";
$res = mysql_query($sql);
$arr = mysql_fetch_assoc($res);

if($arr){ // 有此用户名,不可以注册
    echo 0;
}else{//没有这个用户名，可以注册
    $sql = "insert into `user` (name,pwd) VALUES ('$uname','$upwd')";
    $res = mysql_query($sql);//返回布尔值；添加成功返回true
    if($res){ // 添加成功  注册成功
        echo 1;
    }else{//注册失败
        echo 2;
    }

}


?>