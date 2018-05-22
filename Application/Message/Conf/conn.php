<?php
  include "config.php";
  header("Content-Type: text/html;charset=utf-8");
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die("数据库连接错误!");
  mysqli_select_db($conn, "message");
  mysqli_set_charset($conn, "utf8");
  mysqli_close($conn);
?>