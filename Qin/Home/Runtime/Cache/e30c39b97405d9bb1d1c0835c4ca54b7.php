<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html

PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >

<html>
<head>

<title>simple document</title>

<script type="text/javascript">
function startTime()
{
var today=new Date()
var h=today.getHours()
var m=today.getMinutes()
var s=today.getSeconds()
// add a zero in front of numbers<10
m=checkTime(m)
s=checkTime(s)
document.getElementById('time').innerHTML=h+":"+m+":"+s
t=setTimeout('startTime()',500)
}

function checkTime(i)
{
if (i<10) 
  {i="0" + i}
  return i
}
</script>
</head>
<body onload="startTime()">
<center>
欢迎你,<?php echo ($name); ?>!

<a href="../Myimformation">个人信息</a>
<a href="../Update">修改信息</a>
<br><br><br>
<div id='time'></div>

<a href="../Message"><h2>留言区</h2></a>

</center>
</body>
</html>