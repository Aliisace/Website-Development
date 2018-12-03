function loadDoc() {
	var variable = new XMLHttpRequest();
	
	variable.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("moreText").innerHTML = this.responseText;
        }
    };

    variable.open("GET", "file.txt", true);
    variable.send();
}