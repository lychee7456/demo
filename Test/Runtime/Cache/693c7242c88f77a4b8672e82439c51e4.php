<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证码测试，登陆</title>
    <link rel='stylesheet' type='text/css' href=''/>
    <script src=""></script>
</head>
<body background="/Test/Public/Images/pic.jpeg">
<center>
    <form action='__URL__/do_login' method='post' name='myForm'>
        <input type="text" name="username" placeholder="用户名"><br><br>
        <input type="password" name="password" placeholder="密码"><br><br>
        <input type="text" name="code" placeholder="验证码"><br><br>
        <img src='__APP__/Public/verify/' /><br><br>
        <input type="submit" style="width:155px;">
    </form>
    <br><br>
    <font color="#ff69b4">if you don't have an account<a href="/Test/index.php/Register">click here</a></font><br/>
</center>
</body>
</html>