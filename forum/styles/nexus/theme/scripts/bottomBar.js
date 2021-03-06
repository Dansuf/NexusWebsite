if(!Modernizr.canvas)
	if(!readCookie("old_browser_info"))
		document.getElementById("old-browser-info").style.display="list-item";
if(!readCookie("cookie_info"))
	document.getElementById("cookie-info").style.display="list-item";

function hideOldBrowserInfo()
{
	createCookie("old_browser_info","1",1000);
	document.getElementById("old-browser-info").style.display="none";
}

function hideCookieInfo()
{
	createCookie("cookie_info","1",1000);
	document.getElementById("cookie-info").style.display="none";
}


/* Code below from http://www.quirksmode.org/js/cookies.html */

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}