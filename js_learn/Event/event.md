#第十三章 事件
#事件流
##分为三部分
	捕获：事件沿DOM树依次向下，一直传播到时间的实际目标
	冒泡：事件沿DOM树向上传播，在每一级节点上都会发生，知道传播到doucment对象
	处于目标阶段：
##EG：
	<!DOCTYPE html>
		<html>
		<head>
			<title>例子</title>
		</head>
		<body>
			<div id="mydiv">click me</div>
		</body>
		</html>	
	捕获：document -> <html> -> <body> -> <div>
	冒泡：<div> -> <body> -> <html> -> document

#添加事件处理
##1.html中添加
	直接在onclick中添加代码
	<button onclick="alert('cilck me!!')">ClickMe！</button>

	为onclick添加属性为函数名
	<button onclick="click()">ClickMe！</button>
	<script type="text/javascript">
		click = function() {
			alert('click me !');
		}
	</script>

	~
	点击之后会创建一个封装着元素属性值的函数。  event
	这样创建的函数其作用域链document -> button
	若button被form包裹，则document -> form -> button 
	~

##2.DOM0 
	var btn = document.getElementById("btn");
	btn.onclick = function() {
	}
	btn.onclick = null;//作用域是button

##3.DOM2
	var btn = document.getElementById("btn");
	btn.addEventListener("click",function() {
		},false);
	(flase默认在冒泡阶段，true在捕获事件阶段)
	removeEventListener("click",functionName,false);
	所以无法移除匿名的//作用域是button

##IE的事件添加方法
	attachEvent();//添加到冒泡阶段 接受两个参数不是三个   
	"onclick" not "click"//不像addEventListener()
	detachEvent();//用来删除事件处理程序 

#事件对象event
##DOM event属性
	bubbles : 只读 表示事件是否冒泡
	cancelable ： 只读 表示是否可以取消事件的默认行为
	currentTarget ： 只读 当前处理事件的元素
	target : 只读 事件的目标元素
	defaultPrevented ： 只读 是否可用defaultPrevented()
	type ： 只读 事件类型

	~currentTarget和target的区别
	//点击button
	document.body.onclick = funtion(event) {
		alert(event.currentTarget === document.body);//true
		alert(this === document.body);//false
		alert(event.currentTarget === this);//true
	}

##IE event属性
	~IE DOM0级添加事件处理程序的时候event作为window的一个属性存在
	~IE attachEvent()的作用域是window但是event作为函数内的存在

	cancelBubble ： 默认false，为true的时候可以取消事件的冒泡
	returnValue ： 默认true，为false的时候可以取消事件的默认行为
	srcElement ： 事件中的目标(同DOM中的target)
	type ： 只读 事件类型

#事件类型

##UI事件
	~
	load : 当页面完全加载后在window上触发，
		   当所有框架加载完之后在框架集上触发，
		   当<img>加载完之后在img上触发，
		   当嵌入内容加载完之后在<object>上触发
	unload ： 与load相反在卸载的时候触发
	error ： js错误，加载img失败，加载<object>失败
	select :选择文本框时
	resize : 窗口大小改变或者框架大小变化在window触发
	scroll： 用户在带滚动条的元素上滚动时在该元素上触发
###load
	1.EventUtil.addHandler(window,"load",function() {
		alert("loaded!");
		})
	2.在元素中添加onload属性
		<!DOCTYPE html>
		<html>
			<head>
				<title>eg</title>
			</head>
			<body onload="fun()">
				<script type="text/javascript">
				funtion fun(){
					alert("load!")
				}
				</script>
			</body>
		</html>

	3.也能添加到img
	EventUtil.addHandler(window,"load",function() {
			var image = document.createElement("img");
			Event.addHandler(image,"load",function(event) {
				event = EventUtil.getEvent(event);
				target = EventUtil.getTarget(event);
				alert(target.src);
				})
				document.body.appendChild(image);
				image.src = "......";
		})
	确保页面已经加载完毕，再添加新的元素，确保src已经加载，在append
###unload 
	加载的两种方式与load相同
###resize 
	加载的两种方式与load相同，在window上触发所以第二种方式
	<body ></body>在body上
	在缩放变化的时候会重复触发
###scroll
	在滚动元素上触发，会重复触发-在文档不停滚动的时候
	可以来检测scrollLeft和scrollTop来检测变化
	
##焦点事件
###blur : 
	在元素失去焦点的时候触发，不会冒泡，所有浏览器都支持
###FocusIn ：
	在元素获得焦点的时候触发，冒泡，只有Opera，DOM3废弃了这个，选择了focusin
###FocusOut ：
	在元素失去焦点的时候触发，冒泡，只有Opera，DOM3废弃了这个，选择了focusout
###focus ： 
	元素获得焦点触发，不冒泡，所有都支持
###focusin ：
	在元素获得焦点的时候触发，与HTML事件focus等价，冒泡，IE 5.5+ / Safari 5.1+ / Opera / Chrome
###focusout
	在元素失去焦点的时候触发，HTML事件blur通用版，IE 5.5+ / Safari 5.1+ / Opera / Chrome

##鼠标与滚轮事件