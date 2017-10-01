<html>
<head>
<title>purchase history</title>
<style type = "text/css">
table {

	background-color: #e0e0e0;
	}

th {
	border-bottom: 4px solid #000;
	}
	
td {
	border-bottom: 2px solid #666;
	}
</style>
</head>

<body>



<?php
session_start();

include 'includes/nav.php';

    $servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

    //acquire user ID via session username
    //use id in later query
    $data = $mysqli->query("SELECT id FROM users WHERE username = '{$_SESSION['username']}'");

/*
    if ($data->num_rows > 0) {
	
	echo "connects";
	
	} else {
	echo "no connection"; 
	}
*/
    
    //declare variable before loop so you can call it outside loop
    $value = "";

    while ($row = mysqli_fetch_array($data)) {
	    $value .= $row['id'];
    }

    //echo $value;

    //query using value variable from above
    $sqlget = $mysqli->query("SELECT e.name, e.price, h.date FROM events e JOIN history h ON e.event_id = h.event_id WHERE id = $value");
    
    echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
    
    echo "<table>";
    echo "<tr><th>Event Name</th><th>Price</th><th>Date Purchased</th></tr>";

    while ($row = mysqli_fetch_array($sqlget)) {
	    echo "<tr><td>";
	    echo $row['name'];//CHANGE THESE VARIABLES ACCORDING TO QUERY
    	echo "</td><td>";
    	echo $row['price'];
	    echo "</td><td>";
    	echo $row['date'];
    	echo "</td></tr>";
        }
        
    echo "</table>";
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";


include 'includes/footer.php';

?>