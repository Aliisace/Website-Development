window.onload = function() {
    $(".variable").slick({ 
        autoplay: true,
        dots: true,
        adaptiveHeight: true,
        slidesToShow: 1,
        respondTo: "min",
        mobileFirst: true,
        intialSlide: 1,
        focusOnSelect: true
    });
};

document.getElementById("blue").onclick = function(){
	$("p").helloWorld({
	    color       : '#005dff',
	    fontStyle   : 'italic'
	});
};

document.getElementById("more").onclick = function(){
    loadDoc();
};

document.getElementById("less").onclick = function(){
    $("#less").click(function(){
        $("#moreText").toggle();
        $("#evenMore").toggle();
    });
};