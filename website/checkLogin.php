<?php

session_start();
$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "users_db";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

// Assign variables to equal user/pass
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];
$mypassword2=$_POST['mypassword'];
$mypassword = md5($mypassword);

$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";

$result=$mysqli->query($sql);
$count = $result->num_rows;
// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
//if ($result->num_rows == 1) {
// Register $myusername, $mypassword and redirect to file "profile.php"
            while($row = $result->fetch_assoc()) {

            $_SESSION['username'] = $row["username"];
            $_SESSION["password"] = $mypassword2;
            $_SESSION["email"] = $row["email"];
            $_SESSION["fname"] = $row["fname"];
            $_SESSION["lname"] = $row["lname"];
            $_SESSION["pref1"] = $row["pref1"];
            $_SESSION["pref2"] = $row["pref2"];
            $_SESSION["pref3"] = $row["pref3"];
            $_SESSION["age"] = $row["age"];
                  
}
header("location:profile.php");
}
else {
echo "Wrong Username or Password";
}
?>