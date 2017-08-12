	// function MyObject () {
	// 	var privateVariable = 10;
	// 	function privateFunction () {
	// 		return false;
	// 	}
	// 	this.publicMethod = function () {
	// 		privateVariable++;
	// 		return privateFunction();
	// 	}
	// }

	function Person (name) {
		var name;
		this.getName = function () {
			return name;
		}
		this.setName  =function (value) {
			name = value;
		}
	}

	var ctc = new Person("chengtianci");
	// alert(ctc.getName());
	console.log(ctc.name);
	console.log(ctc.getName());
	ctc.setName("changtiancishuaibi");
	// alert(ctc.getName());
	console.log(ctc.getName());
	console.log(ctc.name);//无法访问name属性，只可以通过getName()获得


