<?php
/*
 * @Author: Twilight 
 * @Date: 2019-04-08 14:25:40 
 * @Last Modified by:   Twilight 
 * @Last Modified time: 2019-04-08 14:25:40 
 */
// 艾森产品列表 页面

   header("content-type: text/html; charset=utf8");/* 头文件设置 */
?>


<!-- 网页名 -->
<title>ASonc Product List</title>

<!-- 引入头文件 head -->
<?php include_once('./View/Common/head.html'); ?>
<!-- 引入单独样式文件 -->
<link rel="stylesheet" href="./Static/CSS/product-list.css">


<!-- 引入头部文件 header -->
<?php include_once('./View/Common/header.html'); ?>


<!-- 引入单独HTML文件 body -->
<?php include_once('./View/product_list.html'); ?> 


<!-- 引入脚部文件 footer -->
<?php include_once('./View/Common/foot.html'); ?>