<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>显示用户信息</title>
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
    <div id='time'></div>
    <a href="<?php echo U('/LoginOut');?>">退出</a>
</center>
</body>
</html>