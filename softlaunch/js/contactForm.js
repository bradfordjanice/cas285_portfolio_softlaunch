/*
File Name: contactForm.js
Date: 05/10/18
Programmer: Janice Bradford
Project: jsb Animation Studios Portfolio
*/

/* CONTACT FORM */

function validateContactForm() {
  var missingInfo = false;
  var msg = "";
  
  if (document.forms["contactForm"]["firstName"].value == "") {
    msg = msg + "First name\n";
    missingInfo = true;
  }
  if(document.forms["contactForm"]["lastName"].value == "") {
    msg = msg + "Last name\n";
    missingInfo = true;
  }
  if (document.forms["contactForm"]["email"].value == "") {
    msg = msg + "Email address\n";
    missingInfo = true;
  }
	if (document.forms["contactForm"]["subject"].value == "") {
		msg = msg + "Subject\n";
		missingInfo = true;
	}
  if (document.forms["contactForm"]["comment"].value == "") {
    msg = msg + "Your comment or question\n";
    missingInfo = true;
  }
  if(msg !== "") {
    alert("Please enter the following information:\n\n" + msg);
    return false;
  }
}