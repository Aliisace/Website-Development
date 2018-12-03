//save user preference with cookies

window.onload = function() {
	prepPage();
    checkCookiesEnabled();
};

function prepPage() {
	checkCookie();
	document.getElementById("l0").onclick = function() {setLogo("l0");};
	document.getElementById("l1").onclick = function() {setLogo("l1");};
	document.getElementById("l2").onclick = function() {setLogo("l2");};
	document.getElementById("l3").onclick = function() {setLogo("l3");};
	//document.getElementById("show").onclick = function() {showCookie();};
}

/*function showCookie(){
    console.log(document.cookie);
}*/

function checkCookiesEnabled() {
    if (navigator.cookieEnabled==true) {
        //alert("Cookies are enabled")
    }
    else {
        alert("Cookies are not enabled, You will be unable to save your preferences");
    }
}

function setLogoCookie(cname, cvalue, exdays) {
	// Encode value in order to escape semicolons, commas, and whitespace
    document.cookie = "l0=; exdays=0";
    document.cookie = "l1=; exdays=0";
    document.cookie = "l3=; exdays=0";
    document.cookie = "l2=; exdays=0";
    document.cookie = "cname=; exdays=0";

    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookieS(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    // Get cookie using our custom function
    var l0 = getCookieS("l0");
    var l1 = getCookieS("l1");
    var l2 = getCookieS("l2");
    var l3 = getCookieS("l3");
    
    if(l0 != "") {
        document.getElementById("imageLogo").src = "options/option0.png";
    }
    else if(l1 != "") {
        document.getElementById("imageLogo").src = "options/option1.png";
    }
    else if(l2 != "") {
        document.getElementById("imageLogo").src = "options/option2.png";
    }
    else if(l3 != "") {
        document.getElementById("imageLogo").src = "options/option3.png";
    }
    else{
    	document.cookie = "cname=; exdays=0";
    }
}

function setLogo(Logo) {
	console.log(Logo); 
	if (Logo == "l0"){
		document.getElementById("imageLogo").src = "options/option0.png";
		setLogoCookie("l0", "yes", 30);
	}
	else if (Logo == "l1"){
		document.getElementById("imageLogo").src = "options/option1.png";
		setLogoCookie("l1", "yes", 30);
	}
	else if (Logo == "l2"){
		document.getElementById("imageLogo").src = "options/option2.png";
		setLogoCookie("l2", "yes", 30);
	}
	else if (Logo == "l3"){
		document.getElementById("imageLogo").src = "options/option3.png";
		setLogoCookie("l3", "yes", 30);
	}
	else {
		document.getElementById("imageLogo").src = "options/option0.png";
		setLogoCookie("l0", "yes", 30);
	}  
}