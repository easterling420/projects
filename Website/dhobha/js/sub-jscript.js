var i = 0;
var k = 0;
var btime = 3000;

window.onload = function(){
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
	
	setTimeout(2000, changeImg());
}


function changeImg(){
	var ele0 = document.getElementById("slideImg");
	var eleDot = document.getElementsByClassName("dot");
	
	if(k == 12){
		k = 0;
	}
	ele0.src = "../imgs/" + (++k) + ".jpg"; 

	for (i = 0; i < eleDot.length; i++) {
      eleDot[i].className = eleDot[i].className.replace(" active", "");
  	}
	eleDot[k-1].className += " active";

	setTimeout("changeImg()", btime);	
}

function nextImage(){
	var ele = document.getElementById("slideImg");
	if(k == 12){
		k = -1;
	}
	ele.src = "../imgs/" + (++k) + ".jpg";
}

function prevImage(){
	var ele = document.getElementById("slideImg");

	if(k == 0){
		k = 13;
	}

	ele.src = "../imgs/" + (--k) + ".jpg";
}
function currentSlide(imgId){
	var ele = document.getElementById("slideImg");
	ele.src = "../imgs/" + imgId + ".jpg";
}
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