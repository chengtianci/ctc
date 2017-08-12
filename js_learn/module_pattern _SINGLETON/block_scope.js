// (function() {
// 	//这里就是块级作用域，见js书P185
// })();
	function outputScreen1(count) {
		for (var i = 0; i <= count; i++) {
			console.log(i);			
		}
		console.log(i+"多出来的一次i");
		console.log("此处的i依然可以输出！");
	}

	function outputScreen2(count) {
		(function(){
			for (var i = 0; i <= count; i++) {
			console.log(i);			
			}
		})();
		console.log(i);
		console.log("此处的i依然不能输出！");
	}
	outputScreen1(3);
	console.log("分割");
	outputScreen2(5);
	