			<div class="container">
				<input type="hidden" name="name" id="name" value="<?php echo $_POST['name']; ?>" required>
				<input type="hidden" name="email" id="email" value="<?php echo $_POST['email'];  ?>" required>
				<input type="hidden" id="phone" name="phone" placeholder="123-4567-8912" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" value="<?php echo $_POST['phone'];  ?>" require><br>
				<input type="hidden" name="address" id="address" value="<?php  echo $_POST['address'];  ?>" required>
				<input type="hidden" name="exp" id="exp" value="<?php  echo $_POST['exp'];  ?>" required>
				<input type="hidden" name="dobday" id="dobday" value="<?php  echo $_POST['dobday'];  ?>" required>

				<input type="hidden" name="dobmonth" id="dobmonth" value="<?php  echo $_POST['dobmonth'];  ?>" require>

				<input type="hidden" name="dobyear" id="dobyear" value="<?php  echo $_POST['dobyear'];  ?>" required>

				<input type="hidden" name="resume" id="resume" value="<?php  echo $_FILES["resume"]["name"]  ?>" required>
				<input type="hidden" name="avatar" id="avatar" value="<?php  echo $_FILES["avatar"]["name"];  ?>" required>
			</div>