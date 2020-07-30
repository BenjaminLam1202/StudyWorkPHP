<?php 

if(isset($_POST["view"])) {


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
	$check = getimagesize($_FILES["avatar"]["tmp_name"]);
	if($check !== false) {
		if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
	} 
	}
} 

 ?>