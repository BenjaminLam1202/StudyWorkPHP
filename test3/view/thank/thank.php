<?php 
include '../../objects/date.php';
//include '../../objects/contact.php';
include '../../controller/hidden/short.php';

include '../../controller/thankController.php';

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/styles.css">
	<title>Thank you</title>
</head>
<body>
	<div class="container">
		<div class="container"> 
			<br>
			<br>
		</div>
		<div class="container-fluid border rounded" style="background-color: #0455BF;" id="conindex" >
			<div class="container-fluid">
				<form action="thank.php" method="post" enctype="multipart/form-data">
					
					<h1 style="font-size:2vw">Thank you for submitting your application <?php echo $_POST["name"];?> </h1><hr><h3 style="font-size:1vw"> Do you want to send this letter?</h3><br>
					<form action="" method="post">
						<?php include '../../controller/hidden/hidden.php'; ?>
						<?php 
						//echo $avatar;
						//echo $resume;
						//$ava= basename($_FILES["avatar"]["name"]);
						//echo $ava;
						//$res = basename($_FILES["resume"]["name"]);
						//echo $res;
						echo $avatar;
							echo $resume;
						if(isset($_POST['submit'])) {
							$sendMaila = new date($name,$email,$phone,$address,$exp,$dobday,$dobmonth,$dobyear,$resume,$avatar);
							//$sendMaila->resume = $_POST[(basename($_FILES["resume"]["name"]))];
							//$sendMaila->avatar = $_POST[(basename($_FILES["avatar"]["name"]))];
							echo $avatar;
							sendMail($name,$email,$phone,$address,$exp,$dobday,$dobmonth,$dobyear,5,5);
							if(!sendMail()){
								?>
								<div class="alert alert-success fade show" role="alert">
									<strong style="font-size:1vw">Well done!</strong>
									Mail Sent. Thank you  <?php   echo $name ?> , we will contact you shortly.
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<?php  
							}else{
								?>
								<div class="alert alert-danger" role="alert">
									<h4 class="alert-heading">Oop!</h4>
									<p style="font-size:1vw">Something wrong. Thank you  <?php   echo $name ?> </p>
								</div>
								<?php 
							}
						}
						?>
						<input type="submit" class="btn btn-secondary btn-lg active btna btn-block" name="submit" id="submit" value="Send">
					</form>
				</div>
			</div>
		</form>
	</div>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>