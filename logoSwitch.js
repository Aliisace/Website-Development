/*
	Desc: Skeleton code for CSS swap.  Refer to the cookie.js library included in the zip file
	
	Author: Lynsay A. Shepherd
	
	Date: September 2016
*/

window.onload = function()
{
	getCookieS();
	prepPage();
} 

function prepPage() {
	//check cookies	
	document.getElementById("l0").onclick = function(){setLogo("l0")};
	document.getElementById("l1").onclick = function(){setLogo("l1")};
	document.getElementById("l2").onclick = function(){setLogo("l2")};
	document.getElementById("l3").onclick = function(){setLogo("l3")};
}

function setLogoCookie(name, value, expires)
{
	expires = new Date((new Date()).getTime() + expires*3600000);
  	var argv = setCookie.arguments;
  	var argc = setCookie.arguments.length;
  	var path = (argc > 3) ? argv[3] : null;
  	var domain = (argc > 4) ? argv[4] : null;
  	var secure = (argc > 5) ? argv[5] : false;
  	document.cookie = name + "=" + escape(value) + 
                    ((expires == null) ? "" : ("; expires=" + 
                    expires.toGMTString())) +
                    ((path == null) ? "" : ("; path=" + path)) +
                    ((domain == null) ? "" : ("; domain=" + domain)) +
                    ((secure == true) ? "; secure" : "");                  
}//end function setCookie

function getCookieS(name)
{
   	var ckname = name + "=";
   	var dc = document.cookie;

   	if (dc.length > 0)
	{
      	begin = dc.indexOf(ckname);
      	if(begin != -1)
		{
         	begin += ckname.length;  
         	end = dc.indexOf(";", begin);
         	if(end == -1){end=dc.length;}
         	return unescape (dc.substring(begin, end));
      	}
   	}
   	return;
}//end function getCookie

function deleteCookie(name)
{
  	var expire = new Date();
  	expire.setTime(expire.getTime() - 1);	//set expiration date to history
  	var cookieval = getCookie(name);
  	if (cookieval != null)
	{ 
     	document.cookie = name + '=' + cookieval + "; expires=" + expire.toGMTString();
     	return true;
  	}
  	else
  	{
		return false;
	}
}//end function deleteCookie

function setLogo(Logo) {
	if (Logo == "l0"){
		document.getElementById("imageLogo").src = "options/option0.png";
		setLogoCookie("l0", );
	}
	else if (Logo == "l1"){
		document.getElementById("imageLogo").src = "options/option1.png";
		setLogoCookie("l1");
	}
	else if (Logo == "l2"){
		document.getElementById("imageLogo").src = "options/option2.png";
		setLogoCookie("l2");
	}
	else if (Logo == "l3"){
		document.getElementById("imageLogo").src = "options/option3.png";
		setLogoCookie("l3");
	}
	else {
		alert("that's not an option: " + Logo);
	}  
}