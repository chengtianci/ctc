var EventUnil = {
	addHandler : function (element,type,handler) {
		if (element.addEventListener) {
			element.addEventListener(type,handler,false);//DOM2 IE9,Firefox,Safari,Opera
		}else if (element.attachEvent) {
			element.attachEvent("on"+type,handler);//IE  添加到冒泡阶段
		}else {
			element["on"+type] = handler;//DOM0
		}
	},
	removeHandler : function (element,type,handler) {
		if (element.removeEventListener) {
			element.removeEventListener(type,handler,false);
		} else if (element.detachEvent) {
			element.detachEvent("on"+type,handler);
		}else {
			element.["on"+type] = null;
		}
	},
	getEvent : function (event) {
		return event? event : window.event;
	},
	getTarget : function (event) {
		return event.target || event.srcElement;
	},
	preventDefault : function (event) {
		if (event.preventDefault) {
			event.preventDefault();
		}else {
			event.returnValue = false;
		}
	},
	stopPropagation : function (event) {
		if (event.stopPropagation) {
			event.stopPropagation();
		}else {
			event.cancelBubble = true;
		}
	}

}
//这个添加并没有考虑到作用域的问题
//eg:IE中的attachEvent()其作用域是window
//	其他的DOM2中的addEventListener()和DOM0的onclick=fun 作用域是点击元素