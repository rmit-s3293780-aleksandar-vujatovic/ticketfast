
<?php
session_start();
$_SESSION['dataResults'] = $searchArray;
$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);


      

      $output .='<div> '.$ename.' '.$cat.' '.$cost.' '.$dob.' '.$poster.'</div>';

include 'includes/nav.php';
?>

<body>
<?php echo $_SESSION['eventMsg']; ?>  

<text><?= $_SESSION['ename']?></text>
<text><?= $_SESSION['cat']?></text>
<text><?= $_SESSION['cost']?></text>
<text><?= $_SESSION['dob']?></text>
<text><?= $_SESSION['poster']?></text>

</body>


<?php 

include 'includes/footer.php';

?>