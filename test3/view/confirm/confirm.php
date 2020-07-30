

<?php 
//include '../../objects/contact.php';
include '../../objects/date.php';
include '../../controller/hidden/short.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/styles.css">
	<title>Confirm</title>
</head>
<body>
	<div class="container"> 
		<br>
		<br>
	</div>
	<div class="jumbotron" id="conindex" style="background-color: #0455BF;margin-left:25%;">
		<h1 style="font-size:2vw">Confirm your mail</h1><hr>
		<form action="../thank/thank.php" method="post" enctype="multipart/form-data">
			
			<!--<h2 style="font-size:1.2vw">Name&emsp;&emsp;&emsp;&emsp;:&nbsp<?php echo $name?></h2><br>
			<h2 style="font-size:1.2vw">Address&emsp;&emsp;&emsp;:&nbsp<?php echo $address;?></h2><br>
			<h2 style="font-size:1.2vw">Email&nbsp&emsp;&emsp;&emsp;&emsp;:&nbsp<?php echo $email;?></h2><br>
			<h2 style="font-size:1.2vw">Experience&emsp;&emsp;:&nbsp<?php echo $exp;?>&nbspyears</h2><br>
			<h2 style="font-size:1.2vw">Birth&emsp;&emsp;&emsp;&emsp;&ensp;:&nbsp<?php echo $dobday."/".$dobmonth."/".$dobyear;?></h2><br>
			<h2 style="font-size:1.2vw">Resume&emsp;&emsp;&emsp;:&nbsp<?php echo $resume;?></h2><br>
			<h2 style="font-size:1.2vw">Avatar:&emsp;&emsp;&emsp;&nbsp:&nbsp<?php echo $avatar;?></h2><hr>
		-->
		<?php $target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]); 
		$target_file_resume = $target_dir . basename($_FILES["resume"]["name"]); ?>

		<table class="table">
			<tbody>
				<tr>
					<th scope="row">Name :</th>
					<td><?php echo $name?></td>
				</tr>
				<tr>
					<th scope="row">Address :</th>
					<td><?php echo $address?></td>
				</tr>
				<tr>
					<th scope="row">Email :</th>
					<td><?php echo $email?></td>
				</tr>
				<tr>
					<th scope="row">Experience :</th>
					<td><?php echo $exp?></td>
				</tr>
				<tr>
					<th scope="row">Birth :</th>
					<td><?php echo "day: ".$dobday." "."month: ".$dobmonth." "."year: ".$dobyear?></td>
				</tr>
				<tr>
					<th scope="row">Resume :</th>
					<td><?php echo $target_file_resume?></td>
				</tr>
				<tr>
					<th scope="row">Avatar :</th>
					<td><?php echo $target_file?></td>
				</tr>
			</tbody>

		</table><hr>


		<?php 
		include '../../controller/hidden/hidden.php'; 
		include '../../controller/confirmController.php';

		?>

		<?php 
		echo checkerror($name,$email,$phone,$address,$exp,$dobmonth, $dobday, $dobyear,$avatar,$resume);

		//if(isset($_POST["go"])) {


			$check = getimagesize($_FILES["avatar"]["tmp_name"]);
			$check_resume = mime_content_type($_FILES["resume"]["tmp_name"]);
			//var_dump($check_resume);
			//var_dump($check);
			if($check != false && $check_resume = "text/plain") {

				//copy($_FILES["avatar"]["tmp_name"],  "../../uploads/".$_FILES["avatar"]["name"]);
				//move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../../uploads/'.basename( $_FILES["image"]['name']));
				
				move_uploaded_file($_FILES["resume"]["tmp_name"], "../../uploads/".$_FILES["resume"]["name"]);				
				move_uploaded_file($_FILES["avatar"]["tmp_name"], "../../uploads/".$_FILES["avatar"]["name"]);

				
			}else{echo "hi";}
		//} 
		//} 

		if (checkerror($name,$email,$phone,$address,$exp,$dobmonth, $dobday, $dobyear,$avatar,$resume) == "") {


			?>
			<input type="submit" name="go" id="go" value="Submit" class="btn btn-secondary btna btn-lg active btn-block">
		<?php }else {
			?>
			<div></div>

			<?php
		} ?>
	</form>	
	<button onclick="goBack()" class="btn btn-secondary btn-sm btn-block">Go Back</button>
</div>
<script>
	function goBack() {
		window.history.back();
	}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>