<?php
/*
 * @Author: Twilight 
 * @Date: 2019-04-08 11:24:41 
 * @Last Modified by: Twilight
 * @Last Modified time: 2019-04-08 11:51:31
 */
// 主页面
   header("content-type: text/html; charset=utf8");/* 头文件设置 */
?>

<!-- 路径基址 -->
<base href="./">
<!-- 网页名 -->
<title>ASonc</title>
<!-- 引入单独样式文件 -->
<!-- <link rel="stylesheet" href="./CSS/xxx.css" type="text/css" media="All"> -->

<!-- 引入头文件 head -->
<?php include_once('./Subpage/head.html'); ?>

<!-- 引入头部文件 header -->
<?php include_once('./Subpage/header.html'); ?>

<!-- 引入单独HTML文件 body -->
<!-- <?php include_once('./Subpage/xxx.html'); ?> -->

<!-- 引入脚部文件 footer -->
<?php include_once('./Subpage/foot.html'); ?>