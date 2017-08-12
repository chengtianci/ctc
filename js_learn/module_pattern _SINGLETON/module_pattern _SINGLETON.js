// //js中本来是以对象字面量的方式实现单例的
// var singleton = {
// 	name : value;
// 	method : function () {
// 		// body...
// 	}
// };

//模块模式为单例添加了私有变量和特权方法
	var singleton = function () {
		//私有变量和方法
		var a；
		function privateFunction() {
			return false;
		}
		return {//公有方法和属性
			publicvar : true;
			pubnlicmethod : function () {
				a++;
				return privateFunction();
			}
		}
	}

// //模块模式的增强
// 	var singleton = function () {
// 		//私有变量和方法
// 		var a；
// 		function privateFunction() {
// 			return false;
// 		}
// 		var object = new CustomType();//创建对象

// 		//添加公有方法属性
// 		object.publicvar = true;
// 		object.pubnlicmethod = function () {
// 			a++;
// 			return privateFunction();
// 		}
// 		return object;
// 		}
// 	}
