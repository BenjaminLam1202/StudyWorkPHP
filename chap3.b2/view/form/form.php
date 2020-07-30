<?php 
include '../../controller/formController.php';

?>

<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/styles.css">
	<title>Form submission</title>
</head>
<body>
	<div class="container">
		<div class="container"> 
			<br>
			<br>
		</div>
		<div class="container-fluid" id="conindex" style="background-color: #0455BF;">
			<form action="../confirm/confirm.php" method="post" id="fi">
				<div class="container">
				<h1 class="sui">SUBMIT TODAY</h1>
				</div>
				<hr>

				<div class="w-100 p-1">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg></span>
						</div>
						<input type="text" class="form-control btna" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name="name" id="name" value="<?php if (isset($_POST['name'])) { echo $_POST['name']; } ?>" required>

					</div>
				</div>
				<div class="w-100 p-1">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
							</svg></span>
						</div>
						<input type="email" class="form-control btna" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="email" id="email" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>" required>

					</div>
				</div>

				<div class="w-100 p-1">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><svg class="bi bi-book" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 0 0 1 2.82z"/>
								<path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
							</svg></span>
						</div>
						<input type="number" class="form-control btna" placeholder="Experience" aria-label="Email" aria-describedby="basic-addon1" name="exp" id="exp" value="<?php if (isset($_POST['exp'])) { echo $_POST['exp']; } ?>" required>

					</div>
				</div>

				<div class="w-100 p-1">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
								<path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg></span>
						</div>
						<input type="tel" class="form-control btna" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1" id="phone" name="phone" placeholder="123-4567-8912" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" value="<?php if (isset($_POST['phone'])) { echo $_POST['phone']; } ?>" required>

					</div>
				</div>

				<div class="w-100 p-1">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><svg class="bi bi-house-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
								<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
							</svg></span>
						</div>
						<input type="text" class="form-control btna" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1" name="address" id="address" value="<?php if (isset($_POST['address'])) { echo $_POST['address']; } ?>" required>

					</div>
				</div>

				<div class="contain" style="width: 55%">
					<label for="birth" style="font-size:1vw">Birth</label>
					<select name="dobday" id="dobday" class="inp btm">
						<?php for ($i=1; $i <32; $i++) { ?>
							<option value="<?= htmlspecialchars($i) ?>"><?= htmlspecialchars($i) ?></option>

						<?php }?>
					</select>
					<select name="dobmonth" id="dobmonth" class="inp btm">
						<?php $array = array(1, 2, 3, 4,5,6,7,8,9,10,11,12); 
						foreach ($array as $num) :?>
							<option value="<?= htmlspecialchars($num) ?>"><?= htmlspecialchars($num) ?></option>

						<?php endforeach ?>
					</select>
					<select name="dobyear" id="dobyear" class="inp btm">
						<?php for ($i= date("Y"); $i >1800; $i--) { ?>
							<option value="<?= htmlspecialchars($i) ?>"><?= htmlspecialchars($i) ?></option>

						<?php }?>
					</select>

				</div>
				<div class="w-100 p-1">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3"><svg class="bi bi-person-bounding-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
								<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg></span>
						</div>
						<input type="text" class="form-control btna" id="basic-url" placeholder="Url Resume (doc/pdf)" aria-label="Url resume (doc/pdf)"aria-describedby="basic-addon3" name="resume" id="resume" value="<?php if (isset($_POST['resume'])) { echo $_POST['resume']; } ?>" required>
					</div>
				</div>
				<div class="w-100 p-1">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3"><svg class="bi bi-file-text" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
								<path fill-rule="evenodd" d="M4.5 10.5A.5.5 0 0 1 5 10h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
							</svg></span>
						</div>
						<input type="text" class="form-control btna" id="basic-url" placeholder="Url 3x4 image" aria-label="Url 3x4 image" aria-describedby="basic-addon3" name="avatar" id="avatar" value="<?php if (isset($_POST['avatar'])) { echo $_POST['avatar']; } ?>" required>
					</div>
				</div>
				<input type="submit" name="view" value="view" class="btn sui btn-secondary btn-sm ">
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html> 