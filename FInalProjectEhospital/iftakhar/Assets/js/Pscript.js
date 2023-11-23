function PRvalidate(){

	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var userName = document.getElementById('userName').value;
	var password = document.getElementById('password').value;
	var dob=document.getElementById('dob').value;
	let age=document.getElementById('age').value;
	let gender=document.getElementById('gender').value;
	
	//document.write('hbsdsabd');

	if(firstName == ""){
		document.getElementById('Pfn').innerHTML = "first name can't left empty";
		/* return false; */

	} if(lastName == ""){
		document.getElementById('Pln').innerHTML = "last name can't left empty";
		
	} if(userName == ""){
		document.getElementById('Pun').innerHTML = "User name can't left empty";
		
	} if(password == ""){
		document.getElementById('Ppw').innerHTML = "Password can't left empty";
		
	}else if(dob == ""){
		document.getElementById('Pdob').innerHTML = "date of birth can't left empty";
		
	} if(age == ""){
		document.getElementById('Pemail').innerHTML = "email can't left empty";
		return false;
	} if(gender == ""){
		document.getElementById('Pgd').innerHTML = "Gender can't left empty";
		return false;
	}else{
		return true;
	}


}





