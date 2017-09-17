
<?php
session_start();
$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

$searchq = $_SESSION["searchSess"];

  $searchQuery = "SELECT * FROM events WHERE name LIKE '%$searchq%'";
  $searchResult = $mysqli->query($searchQuery);
  $count = mysqli_num_rows($searchResult);
  if($count == 0){
      $output = 'No matching events!';
  }else{
    while($eventRow = $searchResult->fetch_assoc()){
      $ename = $eventRow['name'];
      $cat = $eventRow['category'];
      $cost = $eventRow['price'];
      $dob = $eventRow['age'];
      $poster = $eventRow['poster'];

      $output .='<div> '.$ename.' '.$cat.' '.$cost.' '.$dob.' '.$poster.'</div>';
  }
}

include 'includes/nav.php';
?>
<?php
   echo '<script>console.log("'.$searchq.'")</script>';
?>
<?php print("$output");?>









<?php

include 'includes/footer.php';

?>