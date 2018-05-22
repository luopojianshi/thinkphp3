<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>创建留言板</title>
  <link rel="stylesheet" href="/thinkphp3/Public/css/common.css">
</head>
<body>
  <div class="add-message">
    <a class="title ta-c" href="add.php">添加留言</a>
    <hr class="line">
    <form class="content" action="add.php" method="post">
      <div class="input-group clearfix">
        <span class="label fl">用户: </span>
        <input name="user" class="fields fl" type="text" autofocus>
      </div>
      <div class="input-group clearfix">
        <span class="label fl">标题: </span>
        <input name="title" class="fields fl" type="text">
      </div>
      <div class="input-group clearfix">
        <span class="label fl">内容: </span>
        <textarea name="content"class="area-fields fl"></textarea>
      </div>
      <label fl for=""></label fl>
      <div class="input-group clearfix">
        <span class="label fl"></span>
        <input id="public" class="button fl" type="submit" value="发布留言">
        <input id="reset" class="button fl" type="reset" value="重置">
      </div>
    </form>
  </div>
</body>
</html>