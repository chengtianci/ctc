// (function() {
// 	var a;//私有变量
// 	function privateFunction() {//私有函数
// 		return false;
// 	};
// 	MyObject = function () {
// 		// 构造函数，注意其申明没有用var，所以是全局变量
// 	};
// 	//公有/特权方法
// 	MyObject.prototype.publicMethod = function() {
// 		a++;
// 		return privateFunction();
// 	};
// })();//用仿作用域块封装其构造函数

(function () {
	var name = "";
	Person = function (value) {
		name = value;
	};
	Person.prototype.getName =function () {
		return name;
	};
	Person.prototype.setName = function(value) {
		name = value;
	};
})();

	var ctc = new Person("chengtianci");
	console.log(ctc.getName());
	ctc.setName("chengtaincishuaibi");
	console.log(ctc.getName());

	var cheng = new Person("hahha");
	console.log(ctc.getName());
	console.log(cheng.getName());