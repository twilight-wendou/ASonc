<?php
   
   // 测试函数
   function pre($con) {
      echo '<pre>';
      print_r($con);
      echo '</pre>';
   }
   function ieo($con) {
      echo $con.'<br>';
   }

   
   // 弹窗函数
   function alert($con, $url='') {
      $html = "<script>";
      $url ?
         $html .= "alert('{$con}');window.location.href='{$url}';":
         $html .= "alert('{$con}');window.history.go(-1);";
      echo $html .= "</script>";
      exit;/* 退出代码执行 */
   }

   // MySQL查询函数
   function Mysql_cat($sql) {
      $list = array();                 
      $result = mysql_query($sql);                 /* 执行SQL语句 获取结果集 */
      if($result && mysql_num_rows($result)>0)     /* 判断结果集有没数据 */   
         while($row = mysql_fetch_assoc($result))  /* 遍历获取结果 */
            $list[] = $row;
      return $list;
   }

   // MySQL增删改 操作函数
   function Mysql_op($sql) {
      $bool = mysql_query($sql);                   /* 执行SQL语句 */
      // if(mysql_affected_rows() > 0)
         return var_dump($bool);
   }
?>