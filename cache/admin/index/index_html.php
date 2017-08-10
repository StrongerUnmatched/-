<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="public/admin/css/pintuer.css">
    <link rel="stylesheet" href="public/admin/css/admin.css">
    <script src="public/admin/js/jquery.js"></script>
</head>
<body style="background-color:#197cb5;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="public/admin/image/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <?php if(!empty($_SESSION['username'])):?>
  <div class="head-l"><a class="button button-little bg-green" href="http://www.syd123.com/index.php"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 欢迎博主<?=$username;?></a> </div>
  <?php else: ?>

  <?php endif;?>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="http://www.syd123.com/index.php?m=admin&c=index&a=page" target="right"><span class="icon-caret-right"></span>博客发布</a></li>
    <li><a href="http://www.syd123.com/index.php?m=admin&c=index&a=post" target="right"><span class="icon-caret-right"></span>博客管理</a></li>
    <li><a href="http://www.syd123.com/index.php?m=admin&c=index&a=rpost" target="right"><span class="icon-caret-right"></span>评论管理</a></li>
    <li><a href="http://www.syd123.com/index.php?m=admin&c=user&a=user" target="right"><span class="icon-caret-right"></span>用户管理</a></li>
  </ul>
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);
	  $(this).toggleClass("on");
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="http://www.syd123.com/index.php?m=admin&c=index&a=page" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="http://www.syd123.com/index.php?m=admin&c=index&a=page" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>