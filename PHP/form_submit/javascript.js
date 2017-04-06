function VALIDATE(){
	var fname;
	var mname;
	var lname;
	var bday;

	fname = document.getElementById("txt_fname").value;
	mname = document.getElementById("txt_mname").value;
	lname = document.getElementById("txt_lname").value;
	bday = document.getElementById("txt_bday").value;

	letters = /^[a-zA-Z]+$/;
	lettersSpaces = /^[a-zA-Z ]+$/;
	lettersNumbers = /^[a-zA-Z]+$/;
	numbers = /^[0-9]+$/;

	if(!fname.match(lettersSpaces)){
		alert('Please input letter on first name');
		return false;
	}
	if(bday.length < 8){
		alert('Please input 8 digits on birthday');
		return false;
	}
	return true;
}