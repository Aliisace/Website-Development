window.onload = function() {
  $(".variable").slick({ 
    autoplay: true,
    dots: true,
    //variableWidth: true,
    adaptiveHeight: true,
    //centerMode: true,
    slidesToShow: 1,
    respondTo: "min",
    mobileFirst: true,
    intialSlide: 1,
    focusOnSelect: true
  });
};

document.getElementById("more").onclick = function(){
	$('p').helloWorld({
	    color       : '#005dff',
	    fontStyle   : 'italic',
	    complete    : function() { alert( 'Done!' ) }
	});
	loadDoc();
};