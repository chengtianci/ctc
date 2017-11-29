//
console.log("1.");
var message ;
console.log(message);//undefined
console.log(message == undefined);//true
console.log(message === undefined);//true
message = undefined;
console.log(message == undefined);//true
console.log(message === undefined);//true
//
console.log("2.");
	//虽然默认初始化为undefined，但是依旧要学会默认初始化 ‘’  null
    // console.log(abcdefg); //会报错abcdefg is not defined
console.log(typeof(abcdefg));//undefined
console.log(typeof abcdefg);//undefined
console.log(typeof(abcdefg) == undefined );//false   为什么？
//
console.log("3.");
	//null表示一个空指针对象
var car = null;
console.log(typeof(null));
console.log(typeof car);//object
console.log(typeof(car));//object

/*
*undefined 是派生自null的
*null == undefined ;//true
*==比较有隐式转换，===没有转换
*/
console.log(null == undefined);//true
console.log(null === undefined);//false
//
console.log("4.");
/**
*var message = "hello world"
*if(meaasge) {//隐式Boolean(message)
*	//code
*}
**/
//
console.log("5.")
console.log(NaN == NaN);//false
console.log(isNaN(NaN));//true
console.log(isNaN("BLUE"));//true   不可以被转换为数字
//console.log(isNaN(BLUE));//BLUE is not defined
console.log(isNaN(1245));//false
console.log(isNaN("1245"));//false  可以被转换为1245
console.log(isNaN("1245.12"));//false  可以被转换为1245.12
console.log(isNaN("1245.12.12"));//t  rue  可以被转换为数字
