$("#openMoreDetails").click(function(){
	if ($("#moreDetails").hasClass('hidden')){
		$("#moreDetails").removeClass('hidden');
	}else{
		$("#moreDetails").addClass('hidden');
	}
});


$("#fos_user_registration_form_email").keyup(function(){
	$("#fos_user_registration_form_username").val($("#fos_user_registration_form_email").val());
});

$("#fos_user_registration_form_email").change(function(){
	$("#fos_user_registration_form_username").val($("#fos_user_registration_form_email").val());
});