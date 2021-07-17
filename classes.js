function validaremail(){
var mailformat=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if (mail.value.match(mailformat)) {
	alert("Valid email address!");
	document.mail.text1.focus();
	return true;
}
else{
	alert("You have entered an invalid email address!");
	document.mail.text1.focus();
	return false;
}
}