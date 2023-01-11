function propertyBtn(){
	var button = document.getElementById("propertyDescription");
	button.style.opacity = "1";
}



function propertyBtn2(){
	var button = document.getElementById("propertyDescription2");
	button.style.opacity = "1";
}

function bookmarkBtnInside(){
	var button = document.getElementById("bookmarkBtnInside");

	button.style.color = "#FFD700";
	if ((button.click)){
		alert('Sucessfully Added To Favourite !');
		}
		else{}

		
	
}


function addFavourite(){
	document.getElementById("addFavourite").submit()
}