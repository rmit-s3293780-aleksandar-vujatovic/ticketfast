<?php 
	include 'includes/nav.php';


	echo '
		<form action="passwordReset.php" method="POST">
			E-mail Address: <input type="text" name="email" id="email" placeholder="Enter email" /><br />
			New Password: <input type="password" name="password" id="password" placeholder="Enter Password" /><br />
			Confirm Password: <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirmpassword" /><br />
			<input type="hidden" name="link" value="';
	?>
	<?php
		if (isset($_GET["link"])) {
			echo $_GET["link"];
			}
		echo '" /><input type="submit" name="ResetPasswordForm" value=" Reset Password " />
		</form>';



	include 'includes/footer.php'
?>