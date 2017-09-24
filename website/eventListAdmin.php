
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

  $sql = "SELECT * FROM events";
  $result = $mysqli->query($sql);

    
include 'includes/adminnav.php';
?>
  	<title>TicketFast | Events</title>
  <div class="container" style="padding-top:7%;">                                                                                     
  <div class="table-responsive">          
  <table class="table">
    <tbody>
          <td><label>Name</label></td>
          <td><label>Category</label></td>
          <td><label>Price</label></td>
          <td><label>Age (Minimum)</label></td>
          <td><!--empty--></td>
        <?php
            while($row = $result->fetch_assoc()) {
                echo '<tr><td><figure><figcaption style="padding-bottom:20px">' . $row['name'].'</figcaption>'.
                    '<img data-content="'.$row['description'].'" class="modalBtn" style="width:15em; height:17em;" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/></figure></td>'.
                    '<td>'.$row['category'].'</td>'.
                    '<td> $'.$row['price'].'</td>';
                    if($row['age'] != 0){
                      echo '<td>'.$row['age'].'</td>';
                    }else{
                      echo '<td>No Minimum Age</td>';
                    }
                echo "<td><a href='deleteEvent.php?event_id=".$row['event_id']."'>DELETE</a></td>".
                "</tr>";
            }
        ?>
    </tbody>

  </table>
  </div>
  </div>
  <?php
include 'includes/footer.php';
?>

</body>
</html>