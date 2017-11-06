<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html

PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >

<html>
<head>
<title>simple document</title>
<link rel='stylesheet' type='text/css' href=''/>
<script src=""></script>
</head>
<body>
<center>
<form action='__URL__/add' method='post'>
	<input type="text" name="username" placeholder="用户名"><br><br>
	<input type="password" name="password" placeholder="密码"><br><br>
	<input type="password" name="repassword" placeholder="确认密码"><br><br>
	<input type="texe" name="code"placeholder="验证码，点击刷新"><br><br>
	<img src="/shzu/Home/Action/Public/code" onclick='this.src=this.src+"?"+Math.random()'/><br><br>
	<input type="submit" style="width:155px;">
</form>
</center>
</body>
</html>