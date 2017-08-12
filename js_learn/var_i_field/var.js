
///wentizaina??

    var messages = ["MIAO！", "I AM A CAT！", "callback INTERESTING!"];
    for (var i = 0; i < messages.length; i++) {
    	console.log(i);
    	console.log(messages[i]);
	    setTimeout(function () {
	       console.log(messages[i]);
	    }, i*1500);
    }


    //ONE Solution
  //    var messages = ["Meow!", "I'm a talking cat!", "Callbacks are fun!"];

  // messages.forEach(function (message, i) {
  //   setTimeout(function () {
  //     cat.say(message);
  //   }, i * 1500);
  // });