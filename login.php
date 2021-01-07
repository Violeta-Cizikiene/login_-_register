<?php
require('./process/loginProcess.php');
require('./include/head.php');
require('./include/nav.php');



echo feedbackElement();
?>

<div class="container">

	<h1>Login</h1>

	<form action="" method="post" autocomplete="off">

		<div class="input-group">
			<label for="email">Email</label><br>
			<input class="" type="text" name="email" id="email" value="">
		</div>

		<div class="input-group">
			<label for="password">Password</label><br>
			<input class="" type="text" name="password" id="password" value="">
		</div>

		<button type='submit'>Login</button>

	</form>

</div>
