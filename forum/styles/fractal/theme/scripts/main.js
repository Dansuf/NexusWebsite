var isNavOpened = false;



function toggleNav()
{
	if(isNavOpened)
		{
			document.getElementById("even-bigger-wrapper").style.width="100%";
			document.getElementById("usr-nav").style.display="none";
			document.getElementById("usr-nav").style.right="-250px";
			isNavOpened = false
		}
	else
		{
			document.getElementById("even-bigger-wrapper").style.width="calc(100% - 250px)";
			document.getElementById("usr-nav").style.display="inline-block";
			document.getElementById("usr-nav").style.right="0";
			isNavOpened = true;
		}
}