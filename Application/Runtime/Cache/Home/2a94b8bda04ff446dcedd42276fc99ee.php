<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link href="/onlinevote/Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/onlinevote/Public/css/my.css">
</head>

<body>
    <div class="container">
        <!-- 导航栏 -->
        <nav class="navbar navbar-default">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">投票网</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">创建投票</a></li>
                        <li><a href="#">创建问卷</a></li>
                        <li><a href="#">微信投票</a></li>
                        <li><a href="#">管理中心</a></li>
                        <li><a href="#">帮助中心</a></li>
                        <li><a href="#">关于</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="站内搜索">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">用户名 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo U('Home/User/login');?>">登录</a></li>
                                <li><a href="<?php echo U('Home/User/regist');?>">注册</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">注销</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- 滚动栏 -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators下方小圆点 -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> </li>
                <li data-target="#carousel-example-generic" data-slide-to="1"> </li>
                <li data-target="#carousel-example-generic" data-slide-to="2"> </li>
            </ol>
            <!-- Wrapper for slides 内容-->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/onlinevote/Public/images/index0.jpg" alt="...">
                    <div class="carousel-caption">
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
                <div class="item">
                    <img src="/onlinevote/Public/images/index2.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="/onlinevote/Public/images/index3.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row">
            <div class="col-md-4" name="left">
                <h3>公告板</h3>
                <p>
                    磐石投票是一个免费在线投票平台，创建投票有很多配置项可以让你创建出丰富多彩的投票形式，生成独立的投票、调查页,分享到微信朋友圈，也可以生成Javascrpit调用代码嵌入到您的网页上。 2016年元旦放假通知 如何创建微信投票？ 怎样创建带报名功能的微信投票？ 新功能：视频投票 让投票更惊艳 怎样创建微信视频投票 怎样创建多媒体视频投票 新功能：QQ验证投票 调查问卷示例 怎样创建在线报名表 什么是在线报名表 单选投票样例 看图心理测试(单选投票样例) 多选投票样例 凭密码投票样例，密码：1234 快速投票样例
                </p>
            </div>
            <div class="col-md-4" name="center">
                <h3>投票</h3>
                <img src="/onlinevote/Public/images/index1.jpg" width="350" height="200">
            </div>
            <div class="col-md-4" name="right">
                <h3>留言板</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12" name="show">
                <h3>投票结果展示</h3>
                <p>
                    、只能在微信内查看与投票 2、用户需先关注您的公众账号才能投票（也就是关注后投票） 3、用户可以报名参与活动，是为公众账号增加关注的营销利器！ 创建微信投票 怎样创建微信关注后投票？ 了解详情
                </p>
            </div>
            <div class="col-md-12" name="show_weixin">
                <h3>微信投票结果展示</h3>
                <p>
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">网页尾</div>
        </div>
        <!-- <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>  -->
        <script src="/onlinevote/Public/js/jquery.js"></script>
        <script src="/onlinevote/Public/js/bootstrap.min.js"></script>
    </div>
</body>

</html>