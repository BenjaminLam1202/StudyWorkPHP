<?php 
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


function cal_age($dob){
	$currentyear = date("Y");
	$age = $currentyear - $dyear;
	return $age;
} 


function is_image($avatar)
{
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {

		return true;
	}
	return false;
}
function check_size($avatar)
{
	$file = "../".$target_file;
	$a = getimagesize($file);
	$image_width = $a[0];
	$image_height = $a[1];
	if($image_width < 301 && $image_height < 401)
	{
		return true;
	}
	return false;
}
function check_bits($avatar)
{
	if ($_FILES["avatar"]["size"] > 2097152) {
		return false;
	}
	return true;
}




function checkresume($resume)
{

	if (mime_content_type($_FILES["resume"]["tmp_name"]) != "text/plain") {
		return false;
	}else{
		return true;
	}
	
}



function checkerror($name,$email,$phone,$address,$exp,$dobmonth, $dobday, $dobyear,$avatar,$resume)
{
	$errors="";

	if(checkdate($dobmonth, $dobday, $dobyear) == false){
		$errors .= '- Something wrong with yours birthday!<br />';
	}
	if($name == ""){
		$errors .= '- Cannot be blank!<br />';
	}
	if(strlen($name) > 30){
		$errors .= '- Name must be under 30 letters!<br />';
	}
	if ($email == "") {
		$errors .= '- You forgot to enter a email!<br />';
	}
	if(strlen($email) > 30){
		$errors .= '- Email must be under 30 letters!<br />';
	}
	if ($phone == "") {
		$errors .= '- You forgot to enter a phone!<br />';
	}
	if(strlen($phone) > 30){
		$errors .= '- Email must be under 30 letters!<br />';
	}	
	if ($address == "") {
		$errors .= '- You forgot to enter an address!<br />';
	}
	if(strlen($address) > 1000){
		$errors .= '- address must be under 1000 letters!<br />';
	}
	if ($exp == "") {
		$errors .= '- Something wrong with yours exp!<br />';
	}
	if(strlen($exp) > 2){
		$errors .= '- Experience cannot over 99 years !<br />';
	}
	if($exp > cal_age($dobyear)){
		$errors .= '- Experience cannot more than yours age!<br />';
	}
	if (is_image($avatar)==false) {
		$errors .= '- this image is not valid!<br />';
	}
	if (check_size($avatar) == false) {
		$errors .= '- this image is over 300x400 pixel!<br />';
	}
	if (check_bits($avatar) == false) {
		$errors .= '- this image cannot over 2MB !<br />';
	}
	
	return $errors;
}


?>