<?php
include 'hidden/short.php';
include 'objects/date.php';



if(isset($_POST['view'])) {

	//$sendMail = new contact();
	$sendMail->add_name($_POST['name']);
	$Validate=$sendMail->add_email($_POST['email']);
	$Validate = filter_var($Validate, FILTER_SANITIZE_EMAIL);
	$sendMail->add_phone($_POST['phone']);
	$sendMail->add_address($_POST['address']);
	$sendMail->add_exp($_POST['exp']);
	$sendMail->add_resume($_FILES["resume"]["name"]);
	$sendMail->add_avatar($_FILES["avatar"]["name"]);
	$sendMaild = new date("","","");
	$sendMaild->add_dobday($_POST['dobday']);
	$sendMaild->add_dobmonth($_POST['dobmonth']);
	$sendMaild->add_dobyear($_POST['dobyear']);

	//$_FILES["avatar"]["size"]         

// Nếu người dùng có chọn file để upload
        
}



?>
