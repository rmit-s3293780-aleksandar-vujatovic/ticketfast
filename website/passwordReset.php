<?php

include 'includes/nav.php';

    $servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport) or die("Unable to connect");


    // Was the form submitted
    if (isset($_POST["ResetPasswordForm"])) {
         
    //Gather the post array data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $gethash = $_POST["link"];

    //Unique randomized code to match with prior unique code
    $code = "102#2R62B152%6799ORP!054199D*7R6QQ09";

    // Generate the reset key
    $resetkey = hash('MD5', $code.$email);

    //check to see if the new reset key match the old one
    if ($resetkey == $gethash) {
         
        //check to see if passwords match
        if ($password == $confirmpassword){
             
			//hash and secure the new password
            $password = hash('MD5', $code.$password);
            
            //Update the user's password in the db
			$mysqli->query("UPDATE users SET password = '$password' WHERE email='$email'");

        echo "<h3 style='text-align:center;'> Your password has been successfully reset.</h3>";
        } else
            echo "<h3 style='text-align:center;'> Your password's do not match.</h3>";
    } else
		echo "<h3 style='text-align:center;'> Your password reset key is invalid.</h3>";
}

include 'includes/footer.php'

?>
    