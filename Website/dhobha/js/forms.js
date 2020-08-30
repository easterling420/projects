window.onload = () => {
	var eleImg = document.getElementById("logoID");
	var eleNav = document.getElementById("navbarID");
	var eleBody = document.getElementById("bodyID");
	var eleFooter = document.getElementById("footerID");
	var eleCredits = document.getElementById("creditsID");

	var imgHeight = eleImg.offsetHeight + 1.5 + 'px';
	var navHeight = eleNav.offsetHeight + 2 + 'px';
	var bodyTop = eleImg.offsetHeight + 2 + eleNav.offsetHeight + 2 + 'px';
	var bodyHeight = eleBody.offsetHeight + 'px';
	var footerTop = eleImg.offsetHeight + 2 + eleNav.offsetHeight + 2 + eleBody.offsetHeight + 'px';
	var footerHeight = eleFooter.offsetHeight + 'px';
	var creditsTop = eleImg.offsetHeight + 2 + eleNav.offsetHeight + 2 + eleBody.offsetHeight + eleFooter.offsetHeight + 'px';
	var creditsHeight = eleCredits.offsetHeight + 'px';

	
	document.getElementById("bg-1").style.height = imgHeight;
	document.getElementById("bg-2").style.top = imgHeight;
	document.getElementById("bg-2").style.height = navHeight;
	document.getElementById("bg-3").style.top = bodyTop;
	document.getElementById("bg-3").style.height = bodyHeight;
	document.getElementById("bg-4").style.top = footerTop;
	document.getElementById("bg-4").style.height = footerHeight;
	document.getElementById("bg-5").style.top = creditsTop;
	document.getElementById("bg-5").style.height = creditsHeight;

	eleBody.style.minHeight = window.innerHeight - eleImg.offsetHeight - eleNav.offsetHeight - eleFooter.offsetHeight - eleCredits.offsetHeight + 'px';
}
function openNav(){
	var vis = document.getElementById("navbarID");

	if(vis.style.display == "" || vis.style.display == "none"){
		vis.style.display = "block";
	}
	else{
		vis.style.display = "none";
	}
}