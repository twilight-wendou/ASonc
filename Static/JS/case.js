var oCon = document.getElementById('company-list-show');
var prev = document.getElementById('company-list-btnleft');
var next = document.getElementById('company-list-btnright');
var oUl = oCon.getElementsByTagName('ul')[0];/* 必须加下标0要不然获取不到第一组ul元素 */
var oLi = oUl.getElementsByTagName("li");
var oLiW = oLi[0].offsetWidth;/* 获取第一个li标签的宽度 */
var speed=-4;/* 定义ul向左移动的大小 */
oUl.innerHTML += oUl.innerHTML;/* 克隆另外一个ul加到原来的ul上 */
var oLilength = oLi.length;/* 获取li数组的长度，这里总共四个li所以长度为4 */
oUl.style.width = oLiW * oLi.length+30+'px';/*因为这时候ul的宽度还是原来的宽度，不够新加的li标签放，所以要改变ul的宽度，由于我们用的是内边距，所以乘起来就是ul的宽度,这里记得加上px */
oUl.style.left = '-10px';/* 让ul往左移动10px */
var time=setInterval(move, 50);/* 定义定时器函数，付给变量，因为我们会清除定时器，所以要付给变量 */
function move() {
    if(oUl.offsetLeft<'-'+(oUl.offsetWidth/2)){/* 判断当ul的left值为它宽度的一半时将其宽度变为零 */
oUl.style.left=0;
    }
    if(oUl.offsetLeft>0){/* 当ul的left值大于零的时候将其left值改为ul宽度的一半 */
oUl.style.left='-'+(oUl.offsetWidth/2)+'px';
    }
    oUl.style.left = oUl.offsetLeft + speed + 'px';/* 改变ul的left值为其当前的left值加上speed的值记得最后加px */
}
oCon.onmouseover=function(){
    clearInterval(time);/* 当鼠标经过ul的时候清除定时器 */
}
oCon.onmouseleave=function(){
    time=setInterval(move, 50);/* 当鼠标离开ul的时候加入定时器 */
}
prev.onclick=function(){
    speed=-4;/* 当点击左边按钮时改变其移动的speed的值为-4 */
}
next.onclick=function(){
    speed=4;/*当点击右边按钮时改变其移动的speed的值为4让它向右移动  */
}