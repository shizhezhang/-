window.onload=function(){
	//首先获取所有标题栏和标题栏所对应需要切换的内容的标签元素的值
	var lis=document.getElementById('notice-tit').getElementsByTagName('li');
	var divs=document.getElementById('notice-con').getElementsByTagName('div');
	//遍历所有标题栏lis下内容的li
	if(lis.length=divs.length){
		for(var i=0;i<lis.length;i++){
			lis[i].id=i;
			//添加鼠标移动事件
			lis[i].onmouseover=function(){
				//清除所有li上的class
				for(var j=0;j<lis.length;j++){
					lis[j].className='';
					divs[j].style.display="none"
				}
				//设置当前为高亮显示
				this.className='select';
				divs[this.id].style.display="block"
			}
		}
	}
}
