<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>
<form action='__URL__/add' method='post'>
    <input type="text" name="username" placeholder="用户名"><br><br>
    <input type="password" name="password" placeholder="密码"><br><br>
    <input type="password" name="repassword" placeholder="确认密码"><br><br>
    <input type="texe" name="code"placeholder="验证码，点击刷新"><br><br>
    <img src='__APP__/Public/verify/' /><br><br>
    <input type="submit" style="width:155px;">
</form>
</body>
</html>