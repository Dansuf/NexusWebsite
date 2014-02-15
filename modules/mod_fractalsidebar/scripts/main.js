var warning = true;

if(Modernizr.localstorage && localStorage["NavOpened"] == "1")
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
	if(Modernizr.csscalc)
		document.getElementById("even-bigger-wrapper").style.width="calc(100% - 250px)";
	else
	{
		window.onresize=function(){document.getElementById("even-bigger-wrapper").style.width= (getBodyWidth() - 250) + "px";};
		window.onresize();
	}
	document.getElementById("usr-nav").style.width="250px";
	document.getElementById("usr-nav-name").onclick=hideNav;
	
	if(Modernizr.localstorage)
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
	if(Modernizr.localstorage)
	{
		localStorage["NavOpened"] = "0";
	}
}

/* Code below from http://www.geekpedia.com/code100_Get-window-width-and-height.html */

function getBodyWidth()
{
        var x = 0;
        if (self.innerHeight)
        {
                x = self.innerWidth;
        }
        else if (document.documentElement && document.documentElement.clientHeight)
        {
                x = document.documentElement.clientWidth;
        }
        else if (document.body)
        {
                x = document.body.clientWidth;
        }
        return x;
}