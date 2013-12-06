var enable = true;
var interval = 6000; //=10s

function refresh(){
	if(enable) location.reload(true);
}

function manipulate_refresh(){
	if(enable){
		enable=false;
		pouse_button.html("X");
	}else {
		enable=true;
		pouse_button.html(">");
	}
}

function check_state(){
	if(!enable) pouse_button.html(">");
}

var pouse_button = $('<div>></div>').css({
									"padding":"20px",
									"font-size":"50px",
									//"width":"70px",
									"margin":"50px",
									"right":"0px",
									"background-color":"#333",
									"color":"#EEE",
									"position":"fixed",
									"z-index":"999",
								});

$(document).ready(function () {
	$('body').prepend(pouse_button);
	pouse_button.on("click", function(){
		manipulate_refresh();	
	});
	window.setInterval(refresh, interval);	
	//delay(interval).alert("hello");
	check_state();
});


								
