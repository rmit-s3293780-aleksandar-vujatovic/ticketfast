
<?php
session_start();

// Establish connection

$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

    // Delete events

$username = $_GET['username'];

$sql = "DELETE FROM users WHERE username ='" . $username ."'"; 

echo $sql;

if (mysqli_query($mysqli, $sql)) {
    mysqli_close($mysqli);
    header('Location: signOut.php');
    exit;
} else {
    echo "Error deleting record";
}

?>
