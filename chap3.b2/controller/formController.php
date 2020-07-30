<?php
include '../../objects/contact.php';

if(isset($_POST['view'])) {

	

	
	$sendMail = new contact();
	$sendMail->add_name($_POST['name']);
	$Validate=$sendMail->add_email($_POST['email']);
	$Validate = filter_var($Validate, FILTER_SANITIZE_EMAIL);
	$sendMail->add_phone($_POST['phone']);
	$sendMail->add_address($_POST['address']);
	$sendMail->add_exp($_POST['exp']);
	$sendMail->add_dobday($_POST['dobday']);
	$sendMail->add_dobmonth($_POST['dobmonth']);
	$sendMail->add_dobyear($_POST['dobyear']);
	$sendMail->add_resume($_POST['resume']);
	$sendMail->add_avatar($_POST['avatar']);
	
	//$sendMail->sendMail();
	/*
	if(!$sendMail->sendMail()){
		echo "nice";
	}else{
		echo "wrong";
	}
	echo "Mail Sent. Thank you " . $sendMail->firstname . ", we will contact you shortly.";
	*/
}


?>
