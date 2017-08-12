function object(o) {
	function F() {};
	F.prototype = o;
	return new F();
}
window.onload = function() {
	let a = 123;
	console.log(a);
	 a =a+1;
	 console.log(a);
	var person = {
		name:"chengtianci",
		friends:["bobo","jianjian","tp","zirong"]
	};
	
	console.log(person.name);
	console.log(person.friends);

	var anotherperson = object(person);
	anotherperson.name = "wangcheng";
	anotherperson.friends.push("shuaibi");

	console.log(person.name);
	console.log(person.friends);
	console.log(anotherperson.prototype);
	console.log(anotherperson.name);
	console.log(anotherperson.friends);

	var yetAnotherperson = object(person);
	yetAnotherperson.name = "wenhua";
	yetAnotherperson.friends.push("choubi");

	console.log(person.name);
	console.log(person.friends);
	console.log(anotherperson.name);
	console.log(anotherperson.friends);
	console.log(yetAnotherperson.name);
	console.log(yetAnotherperson.friends);

	delete yetAnotherperson;

	console.log(person.name);
	console.log(person.friends);
	console.log(anotherperson.name);
	console.log(anotherperson.friends);

	delete anotherperson;

	console.log(person.name);
	console.log(person.friends);
}

