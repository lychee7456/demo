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
<h2>修改信息</h2>
<form method="post" action="__URL__/update2">
<input type="text" name='username' value="<?php echo ($data["username"]); ?>" placeholder="用户名"/><br><br><br>
<input type='password' name='password' value="<?php echo ($data["password"]); ?>" placeholder="密码"/><br><br><br>
<input type="submit">
</form>
</center>
</body>
</html>