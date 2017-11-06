<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html

PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >

<html>
<head>
<title>欢迎</title>
</head>

<body background="/Qin/Public/Images/denglu.jpeg">
<center>
<form action='__URL__/do_login' method='post' name='myForm'>
	<input type="text" name="username" placeholder="username"><br><br>
	<input type="password" name="password" placeholder="password"><br><br>
	<input type="tsxt" name="code" placeholder="code"><br><br>
	<img src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random()'/><br><br>
	<input type="submit" style="width:155px;">
</from>
<br><br>
if you dont have an account<a href="/shzu/index.php/Add">click here</a>
</center>
</body>
</html>