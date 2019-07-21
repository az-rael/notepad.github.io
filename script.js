var frmvalidator  = new Validator("contactform");
3
frmvalidator.addValidation("name","req","Please provide your name");
4
frmvalidator.addValidation("email","req","Please provide your email");
5
frmvalidator.addValidation("email","email",
6
  "Please enter a valid email address");
