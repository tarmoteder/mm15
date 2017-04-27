
// loeme tavalist tekstifaili

(function(){

var link = document.getElementsByTagName("a")[0];
alert(link);
link.onclick = function(){
	var ajaxrequest = new XMLHttpRequest();
// 0 - uninitialized 1 - loading 2 - loaded 3- interactive 4 - complete

ajaxrequest.onreadystatechange = function(){

	if ((ajaxrequest.readyState == 4) && (ajaxrequest.status == 200 || ajaxrequest.status == 304 )){
		var body = document.getElementsByTagName("body")[0];
		var p = document.createElement("p");
		var pText = document.createTextNode(ajaxrequest.responseText);

		p.appendChild(pText);
		body.appendChild(p);
	}
};

// avame päringu

ajaxrequest.open('GET', "files/ajax.txt");

// sooritame päringu

ajaxrequest.send(null);

return false;
};

})();

// AJAXiga lugemine HTMList

(function(){

var link = document.getElementsByTagName("a")[1];
link.onclick = function(){
	var ajaxrequest = new XMLHttpRequest();

ajaxrequest.onreadystatechange = function(){

	if ((ajaxrequest.readyState == 4) && (ajaxrequest.status == 200 || ajaxrequest.status == 304 )){
		var body = document.getElementsByTagName("body")[0];
		var d = document.createElement("div");
		body.appendChild(d);
		
		var div = document.getElementsByTagName("div")[0];
		div.innerHTML = ajaxrequest.responseText;

		
	}
};

ajaxrequest.open('GET', "files/ajax.html");
ajaxrequest.send(null);

return false;
};

})();

