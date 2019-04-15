<?php
/*
 * @Author: Twilight 
 * @Date: 2019-04-08 11:24:41 
 * @Last Modified by: Twilight
 * @Last Modified time: 2019-04-14 19:32:58
 */
/*************** 艾森首页 页面 ****************/
   header("content-type: text/html; charset=utf8");/* 头文件设置 */
?>

<!-- 路径基址 -->
<!-- <base href="./"> -->
<!-- 网页名 -->
<title>ASonc</title>

<!-- 引入头文件 head -->
<?php include_once('./View/head.html'); ?>
<!-- 引入单独样式文件 -->
<link rel="stylesheet" href="./Static/CSS/index.css" type="text/css" media="All">


<!-- 引入头部文件 header -->
<?php include_once('./View/header.html'); ?>


<!-- 引入单独HTML文件 body -->
<?php include_once('./View/index_border.html'); ?>


<!-- 引入脚部文件 footer -->
<?php include_once('./View/foot.html'); ?>