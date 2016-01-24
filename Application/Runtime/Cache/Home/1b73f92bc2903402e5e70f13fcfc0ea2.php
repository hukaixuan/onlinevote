<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
</head>

<body>
    <form action="<?php echo U('Home/User/regist');?>" method="post">
        用户名：
        <input type="text" name="username">
        <br> 密码：
        <input type="password" name="password">
        <br> 确认密码：
        <input type="password" name="password2">
        <br>
        <input type="submit" value="提交">
    </form>
</body>

</html>