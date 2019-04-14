<?php
/*
 * @Author: Twilight 
 * @Date: 2019-04-08 14:26:01 
 * @Last Modified by:   Twilight 
 * @Last Modified time: 2019-04-08 14:26:01 
 */
// 艾森联系我们 页面

   header("content-type: text/html; charset=utf8");/* 头文件设置 */
?>


<!-- 网页名 -->
<title>ASonc Contact Us</title>

<!-- 引入头文件 head -->
<?php include_once('./View/head.html'); ?>
<!-- 引入单独样式文件 -->
<link rel="stylesheet" href="./CSS/contact_us.css">
<!-- <link rel="stylesheet" href="./CSS/case.css"> -->

<!-- 引入头部文件 header -->
<?php include_once('./View/header.html'); ?>


<!-- 引入单独HTML文件 body -->
<?php include_once('./View/contact_us.html'); ?>
<!-- 引入js -->
<script src="../JS/case.js">
   if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
      new WOW().init();
   }
</script>


<!-- 引入脚部文件 footer -->
<?php include_once('./View/foot.html'); ?>