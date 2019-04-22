<?php
/*
 * @Author: Twilight 
 * @Date: 2019-04-08 11:24:41 
 * @Last Modified by: Twilight
 * @Last Modified time: 2019-04-22 10:20:14
 */
/*************** 艾森首页 页面 ****************/
   header("content-type: text/html; charset=utf8");/* 头文件设置 */
?>

<!-- 路径基址 -->
<!-- <base href="./View"> -->
<!-- 网页名 -->
<title>ASonc</title>

<!-- 引入头文件 head -->
<?php include_once('./View/Common/head.html'); ?>
<!-- 引入单独样式文件 -->
<link rel="stylesheet" href="./Static/CSS/index.css" type="text/css" media="All">


<!-- 引入头部文件 header -->
<?php include_once('./View/Common/header.html'); ?>


<!-- 引入单独HTML文件 body -->
<?php include_once('./View/index_border.html'); ?>


<!-- 引入脚部文件 footer -->
<?php include_once('./View/Common/foot.html'); ?>


<script>
    // 字体自适应 Start
   var width_srceen = screen.width;
   var font_size = "";
   window.onresize = function () {
      changbody_fontSize(".chang_fontSize");
   }
   window.onload = function () {
      $("html").css("-webkit-text-size-adjust", "none");
      font_size = $(".chang_fontSize").css("font-size").split("px")[0];
      changbody_fontSize();
   }

   function changbody_fontSize(obj) {
      var new_window_width = $(window).width();
      var multiple = new_window_width / width_srceen;
      var hi = font_size * multiple;
      $(".chang_fontSize").css("font-size", hi + "px");
   }
    // 字体自适应 END
</script>