<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <script src="/onlinevote/Public/js/jquery.js"></script>
</head>

<body>
    <form id="loginForm" action="<?php echo U('Home/User/login');?>" method="post">
        用户名：
        <input id="username" type="text" name="username">
        <br> 密码：
        <input id="password" type="password" name="password">
        <br>
        <input id="login" type="button" value="登录">
    </form>

    <script>
    	$(function(){
    		$('#login').click(function(){
    			var action = $('#loginForm').attr('action');
    			var username = $('#username').val();
    			var password = $('#password').val();
    			// console.log(action);
    			// console.log(username);
    			// console.log(password);
    			$.post(action,{username:username, password:password}, function(info){
    				console.log(info);
    			})
    		})
    	})
    </script>
</body>

</html>