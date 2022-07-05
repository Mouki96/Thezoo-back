function searchFilter() {

	var filt,filtelement,h3, ul ,li,i ;
	filt = document.getElementById("Filt");
	filtelement = filt.value.toUpperCase();
	ul = document.getElementById("listener");
	li = ul.getElementsByTagName("li");


	for (var i = 0; i<li.length;  i++) {
	 h3 = li[i].getElementsByTagName("h3")[0];


	 if (h3.innerHTML.toUpperCase()
	 	.indexOf(filtelement) > -1) {
	  
	  	li[i].style.display = "";

	  } else {
	  	li[i].style.display = "none";
	  }

	}

}