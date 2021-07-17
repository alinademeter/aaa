function validaremail(){
var mailformat=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if (email.value.match(mailformat)) {
	alert("Valid email address!");
	document.email.text1.focus();
	return true;
}
else{
	alert("You have entered an invalid email address!");
	document.email.text1.focus();
	return false;
}
}

function onlyAlphabets(){
	var regex =/^[a-zA-Z]*$/;
	if (regex.test(document.f.name.value)) {
		return true;
	}else{
		document.getElementById("notification").innerHTML = "Alphabets Only";
		return false;
	}
}