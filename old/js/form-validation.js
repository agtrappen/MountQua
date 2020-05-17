function isEmail(email) {

    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    return regex.test(email);
                
}
$("#button").click(function(){

	var errorMessage = "";


	if(isEmail($("#email").val()) == false) {

		errorMessage += "email adres is niet geldig";
	}

   if ($.isNumeric($("#telefoon").val()) == false) {
                
                errorMessage += "<p>Your phone number is not numeric</p>"
                
            }

	alert(errorMessage);
});