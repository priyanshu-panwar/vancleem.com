var fullName = document.contactform.fullname;
var errorFullname = document.getElementById('formerror-fullname');

fullName.onchange = function() {
	var myPattern = new RegExp("([A-z0-9À-ž\s]){2,}");
	var isValid = this.value.search(myPattern) >=0;

	if (!(isValid)) {
		errorFullname.innerHTML = "Please enter a valid name.";
		document.getElementById("form-group-fullname").className = document.getElementById("form-group-fullname").className + " has-error";  // this adds the error class
	} else { //pattern not valid
		errorFullname.innerHTML = ""
		document.getElementById("form-group-fullname").className = document.getElementById("form-group-fullname").className.replace("has-error", ""); // this removes the error class
	} //pattern valid

} //my field has changed

var email = document.contactform.email;
var errorEmail = document.getElementById('formerror-email');

email.onchange = function() {
	var myPattern = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
	var isValid = this.value.search(myPattern) >=0;

	if (!(isValid)) {
		errorEmail.innerHTML = "Please enter a valid email address.";
		document.getElementById("form-group-email").className = document.getElementById("form-group-email").className + " has-error";  // this adds the error class
	} else { //pattern not valid
		errorEmail.innerHTML = ""
		document.getElementById("form-group-email").className = document.getElementById("form-group-email").className.replace("has-error", ""); // this removes the error class
	} //pattern valid

} //my field has changed