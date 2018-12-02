//save user preference with cookies

window.onload = function() {
	prepPage();
};

function prepPage() {
	checkCookie();
	document.getElementById("l0").onclick = function() {setLogo("l0")};
	document.getElementById("l1").onclick = function() {setLogo("l1")};
	document.getElementById("l2").onclick = function() {setLogo("l2")};
	document.getElementById("l3").onclick = function() {setLogo("l3")};
}

function showCookie(){
    console.log(document.cookie);
}

function setLogoCookie(cname, cvalue, exdays) {
	// Encode value in order to escape semicolons, commas, and whitespace
    document.cookie = "Logo=; max-age=0";
    
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookieS(Logo) {
	// Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");
    
    // Loop through the array elements
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        
        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if(name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }
    
    // Return null if not found
    return null;
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
    	document.cookie = "Logo=; max-age=0";
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