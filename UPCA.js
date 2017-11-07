var xmlHttp;


function login(name, word){
	
    var url = "LoginCheck.php?username=" + name + "&password=" + word;
	xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = stateChanged2;
	xmlHttp.open("GET", url, true);  //open out post request
	xmlHttp.send();
}	

function logout(){
	
    var url = "logout.php"
	xmlHttp = new XMLHttpRequest();
	
	xmlHttp.open("GET", url, true);  //open out post request
	xmlHttp.send();
}	




function createlist(pn) {
	
	document.getElementById("Output").innerHTML = "<img src='spin.gif'>"
	var url = "BarcodeList.php?pn=" + pn;
	xmlHttp = new XMLHttpRequest(); //create request object
	xmlHttp.onreadystatechange = stateChanged; //register callback 
	xmlHttp.open("GET", url, true);  //open out post request
	xmlHttp.send(null);
	
}

function showsearch(){
    var url = "DisplaySearch.php"
	xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = stateChanged3;
	xmlHttp.open("GET", url, true);  //open out post request
	xmlHttp.send();
}

function showWelcome(){
    var url = "displaywelcome.php"
	xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = stateChanged4;
	xmlHttp.open("GET", url, true);  //open out post request
	xmlHttp.send();
}


function stateChanged() {
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
		
		document.getElementById("Output").innerHTML = xmlHttp.responseText;
		showWelcome();
	}
}

function stateChanged2() {
        if(xmlHttp.responseText.trim() == "True"){
		showsearch();
		
	    } else if(xmlHttp.responseText.trim() == "False") {
		window.alert("Incorrect Username/password!");
		}
		
			
}

function stateChanged3() {
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
		
		document.getElementById("searchbox").innerHTML = xmlHttp.responseText;
		createlist(0);
	}
}

function stateChanged4() {
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
		
		document.getElementById("logout").innerHTML = xmlHttp.responseText;
		
	}
}

	

function printcode(code){
	//document.getElementById("Output").innerHTML = '<img class="load" src="spin.gif" />';
	var url = "printbarcode.php?code=" + code;
	xmlHttp = new XMLHttpRequest(); //create request object
	xmlHttp.onreadystatechange = stateChanged; //register callback 
	xmlHttp.open("GET", url, true);  //open out post request
	xmlHttp.send();
}

function search(value){
	if(value == ""){
		createlist(3);
	}
	else{
	var url = "searchdb.php?value=" + value;
	xmlHttp = new XMLHttpRequest(); //create request object
	xmlHttp.onreadystatechange = stateChanged; //register callback 
	xmlHttp.open("GET", url, true);  //open out post request
	xmlHttp.send();
	}
	

	
}