var warning = true;

function showNav()
{
	document.getElementById("usr-nav-reference").onclick=null;
	document.getElementById("even-bigger-wrapper").style.width="calc(100% - 250px)";
	document.getElementById("usr-nav-reference").style.width="0";
	document.getElementById("usr-nav").style.width="250px";
	//document.getElementById("usr-nav-reference-hex").style.marginLeft="270px";
	document.getElementById("usr-nav-name").onclick=hideNav;
	if(warning)
	{
		var src = document.getElementById("usr-img").src;
		document.getElementById("usr-img").src = src.substring(0,src.length-11) + "char.png";
		warning = false;
	}
}

function hideNav()
{
	document.getElementById("usr-nav-reference").style.width="";
	document.getElementById("usr-nav-name").onclick=null;
	document.getElementById("even-bigger-wrapper").style.width="100%";
	document.getElementById("usr-nav").style.width="0";
	//document.getElementById("usr-nav-reference-hex").style.marginLeft="";
	document.getElementById("usr-nav-reference").onclick=showNav;
}