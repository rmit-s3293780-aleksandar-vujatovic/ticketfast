
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

$id = $_GET['event_id'];

$sql = "DELETE FROM events WHERE event_id =" . $id .""; 

if (mysqli_query($mysqli, $sql)) {
    mysqli_close($mysqli);
    header('Location: eventListAdmin.php');
    exit;
} else {
    echo "Error deleting record";
}

?>
