$(document).ready(function () {
	
});

function center(){
	$('.verticaly_aligned').css({
        position:'absolute',
        left: ($('.verticaly_aligned:parent').width() - $('.verticaly_aligned').outerWidth())/2,
        top: ($('.verticaly_aligned:parent').height() - $('.verticaly_aligned').outerHeight())/2

	});
}

/*
$('.verticaly_aligned').css({
        'position' : 'absolute',
        'left' : '50%',
        'top' : '50%',
        'margin-left' : -$(this).width()/2,
        'margin-top' : -$(this).height()/2
    });
    */