<?php
require('./process/registerProcess.php');
require('./include/head.php');
require('./include/nav.php');


echo feedbackElement();
?>

<div class="container">

	<h1>Register</h1>

	<form action="" method="post" autocomplete="off">

		<div class="input-group">
			<label for="email">Email</label><br>
			<input class="" type="text" name="email" id="email" value="">
		</div>

		<div class="input-group">
			<label for="password">Password</label><br>
			<input class="" type="password" name="password" id="password" value="">
		</div>

		<div class="input-group">
			<label for="confirmpassword">Confirm password</label><br>
			<input class="" type="password" name="confirmpassword" id="confirmpassword" value="">
		</div>

		<button type='submit'>Register</button>

	</form>
	
</div>

</body>

</html>