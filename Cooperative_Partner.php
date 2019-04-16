<?php
/*
 * @Author: Twilight 
 * @Date: 2019-04-08 14:25:55 
 * @Last Modified by:   Twilight 
 * @Last Modified time: 2019-04-08 14:25:55 
 */
// 艾森合作伙伴 页面

   header("content-type: text/html; charset=utf8");/* 头文件设置 */
?>


<!-- 网页名 -->
<title>ASonc Cooperative Partner</title>

<!-- 引入头文件 head -->
<?php include_once('./View/Common/head.html'); ?>
<!-- 引入单独样式文件 -->
<!-- <link rel="stylesheet" href="./CSS/xxx.css" type="text/css" media="All"> -->


<!-- 引入头部文件 header -->
<?php include_once('./View/Common/header.html'); ?>


<!-- 引入单独HTML文件 body -->
<?php include_once('./View/partner.html'); ?>


<!-- 引入脚部文件 footer -->
<?php include_once('./View/Common/foot.html'); ?>