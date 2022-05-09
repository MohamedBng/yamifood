function verifChamp(){
	var login = document.getElementById("floatingInput").value; 
	var password = document.querySelector('#floatingPassword').value; 

	if (login == ""){ 
		event.preventDefault();
		alert("Un champ n'est pas remplie");
		stopImmediatePropagation();
	}

	if (password == ""){ 
		event.preventDefault();
		alert("Un champ n'est pas remplie");
		stopImmediatePropagation();
	}

}