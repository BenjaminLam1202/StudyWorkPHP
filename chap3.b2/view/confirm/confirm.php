

<?php 
include '../../objects/contact.php';


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$exp = $_POST['exp'];
$dobday = $_POST['dobday'];
$dobmonth = $_POST['dobmonth'];
$dobyear = $_POST['dobyear'];
$resume = $_POST['resume'];
$avatar = $_POST['avatar'];
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
		<form action="../thank/thank.php" method="post">
			<h2 style="font-size:1.2vw">Name&emsp;&emsp;&emsp;&emsp;:&nbsp<?php echo $name?></h2><br>
			<h2 style="font-size:1.2vw">Address&emsp;&emsp;&emsp;:&nbsp<?php echo $address;?></h2><br>
			<h2 style="font-size:1.2vw">Email&nbsp&emsp;&emsp;&emsp;&emsp;:&nbsp<?php echo $email;?></h2><br>
			<h2 style="font-size:1.2vw">Experience&emsp;&emsp;:&nbsp<?php echo $exp;?>&nbspyears</h2><br>
			<h2 style="font-size:1.2vw">Birth&emsp;&emsp;&emsp;&emsp;&ensp;:&nbsp<?php echo $dobday."/".$dobmonth."/".$dobyear;?></h2><br>
			<h2 style="font-size:1.2vw">Resume&emsp;&emsp;&emsp;:&nbsp<?php echo $resume;?></h2><br>
			<h2 style="font-size:1.2vw">Avatar:&emsp;&emsp;&emsp;:&nbsp<?php echo $avatar;?></h2><hr>
			<?php include '../../controller/hidden/hidden.php'; ?>
			<input type="submit" name="go" value="Submit" class="btn btn-secondary btna btn-lg active btn-block">
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