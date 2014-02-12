var warning = true;
var storageSupported = supports_html5_storage();

if(localStorage["NavOpened"] == "1")
{
	showNav();
}
setTimeout(function(){
document.getElementById("usr-nav-reference").style.transition = "width 0.25s";
document.getElementById("even-bigger-wrapper").style.transition = "width 0.25s";
document.getElementById("usr-nav").style.transition = "width 0.25s";
},250);

function showNav()
{
	document.getElementById("usr-nav-reference").onclick=null;
	document.getElementById("usr-nav-reference").style.width="0";
	document.getElementById("even-bigger-wrapper").style.width="calc(100% - 250px)";
	document.getElementById("usr-nav").style.width="250px";
	document.getElementById("usr-nav-name").onclick=hideNav;
	
	if(storageSupported)
	{
		localStorage["NavOpened"] = "1";
	}
}

function hideNav()
{
	document.getElementById("usr-nav-name").onclick=null;
	document.getElementById("usr-nav-reference").style.width="";
	document.getElementById("even-bigger-wrapper").style.width="100%";
	document.getElementById("usr-nav").style.width="0";
	document.getElementById("usr-nav-reference").onclick=showNav;
	if(storageSupported)
	{
		localStorage["NavOpened"] = "0";
	}
}

function supports_html5_storage() {
	try 
	{
		return 'localStorage' in window && window['localStorage'] !== null;
	} 
	catch (e) 
	{
		return false;
	}
}