function validateEmail(email) {
		 var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
	}

function sendOTP() {
	$(".error").html("").hide();

	var number = $("#mobile").val();
	var name = $("#name").val();
	var email = $("#email").val();

	var utm_medium = $("#utm_medium").val();
	var utm_source = $("#utm_source").val();
	var utm_campaign = $("#utm_campaign").val();



	if (number.length == 10 && number != null && name.length > 0 && validateEmail(email) == true) {
		var input = {
			"mobile_number" : number,
			"customer_email" : email,
			"customer_name" : name,
			"utm_medium" : utm_medium,
			"utm_source" : utm_source,
			"utm_campaign" : utm_campaign,
			"action" : "send_otp"
		};
		$.ajax({
			url : 'controller.php',
			type : 'POST',
			data : input,
			success : function(response) {
				$(".otp-verification").html(response);
			}
		});
	} else {
		$(".error").html('Please enter a valid number!')
		$(".error").show();
	}


if (validateEmail(email) == false) {
		$(".error").html('Please enter Valid Email!')
		$(".error").show();
}

		if (name.length == 0 )  {
		$(".error").html('Please enter a Name!')
		$(".error").show();
	}






}

function verifyOTP() {
	$(".error").html("").hide();
	$(".success").html("").hide();
	var otp = $("#mobileOtp").val();
	var input = {
		"otp" : otp,
		"action" : "verify_otp"
	};
	if (otp.length == 6 && otp != null) {
		$.ajax({
			url : 'controller.php',
			type : 'POST',
			//dataType : "json",
			data : input,
			success : function(response) {
				$(".otp-verification").html(response);
			}
		});
	} else {
		$(".error").html('You have entered wrong OTP.')
		$(".error").show();
	}
}



