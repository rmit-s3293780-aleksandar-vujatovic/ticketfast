<?php

session_start();

include 'includes/nav.php';

/*
1. Call hidden field to make sure value passes event_id from the modal
2. get user id via query using session[username]
3. insert into history
4. insert CURRENT time now()?
5. call event name to display?
6. email maybe?
*/

if(!empty($_SESSION['username'])) {

    $servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

    //get user id based of session username
    $sqlget = $mysqli->query("SELECT id FROM users WHERE username = '{$_SESSION['username']}'") or die('Bad query!');

    //declare variable prior to loop so variable can be called later
    $user = "";

    while ($row = mysqli_fetch_array($sqlget)) {
    	$user .= $row['id'];//THESE CHANGE 
    }

    $event = $_POST['value'];
    
    $getevent = $mysqli->query("SELECT name FROM events WHERE event_id = $event");
    
    $eventname = "";
    
    while ($row = mysqli_fetch_array($getevent)) {
    	$eventname .= $row['name'];//THESE CHANGE 
    }
    
    $insert = $mysqli->query("INSERT INTO history (id, event_id, date) VALUES ($user, $event, now())");
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    echo "<h4 style='text-align:center;'>Thank you. You have purchased tickets to see " . $eventname . ".</h4>";
    echo "<h4 style='text-align:center;'>We have emailed you your tickets.</h4>";
    echo "<h4 style='text-align:center;'>You can view all purchase history in the account settings tab.</h4>";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
else {
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    echo "<h4 style='text-align:center;'>You must be signed in to purchase tickets!</h4>";
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
}


include 'includes/footer.php';





?>