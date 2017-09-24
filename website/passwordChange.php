<?php

include 'includes/nav.php';



//Establish connection

if (isset($_POST['forgotPass'])){
    

    $servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport) or die("Unable to connect");

    $email = $mysqli->real_escape_string($_POST["email"]);

    $data = $mysqli->query("SELECT id FROM members WHERE email='$email'");

    //check is user exists
    if ($data->num_rows > 0) {
        
        //Unique randomized code to send reset link
        $code = "102#2R62B152%6799ORP!054199D*7R6QQ09";

		// Create the unique user password reset key
		$password = hash('MD5', $code.$email);

		// Create a url which we will direct them to reset their password
		$resetlink = "@@@@@@@@@@@@@@@@@@@@@   HOSTING WEBSITE  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@/passwordResetForm.php?link=".$password;

        //Email reset link
		$message = "To reset your password, please click the link below.\n\n" . $resetlink . "\n\n";
	    mail($userExists["email"], "ticketfast.000webhostapp.com/ - Password Reset", $message);
		
		// email link to reset password, else error prompt shown
		
		echo "<h3 style='text-align:center;'> We have emailed you a link to reset your password.</h3>";

    } else {
        echo "<h3 style='text-align:center;'> Sorry - it looks like your email does not exist in our system!</h3>";
    }
} else {
    echo "<h3 style='text-align:center;'> Something went wrong. </h3>";
}

include 'includes/footer.php';

?>



































































