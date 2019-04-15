// JS主文件

   /* 顶部导航栏高度 */
   $(document).ready(function () {/* 页面加载 */
      // 获取对象
      let oNavH = $('#TopNav').height();
      let oTPN = $('body'); 
      oTPN.css('paddingTop', oNavH)
   });