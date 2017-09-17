
<?php
session_start();

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
      <!--<tr> -->
        
          <!--<td><input type="image"src="Maroon5.jpg" width="200" height="300" id="modalbtn"></td>-->
        <!--<div class="modal fade" id="myModal1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modeal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="modal">&times;</button>
                  <h1 class="modal-tittle" id="myModalLabel">Maroon 5 Comes Down Under </h1>
              </div>
              <div class="modal-body">
                <p>Maroon 5 comes back down under in 2017. More information to be released nearing event. Register to TicketFast to receive notification on event.</p>
              </div>
              <div class="model-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          </div> -->
          <td><label>Name</label></td>
          <td><label>Category</label></td>
          <td><label>Price</label></td>
          <td><label>Age (Minimum)</label></td>
          <td><label>Image</label></td>          
          <td><!--empty--></td>
        <?php
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"]."</td>".
                "<td>".$row["category"]."</td>".
                "<td> $".$row["price"]."</td>".
                "<td>".$row["age"]."</td>".
                '<td><img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/></td>'.
                "<td><a href='deleteEvent.php?event_id=".$row['event_id']."'>DELETE</a></td>".
                "</tr>";
            }
        ?>
     <!-- </tr> -->
    </tbody>

  </table>
  </div>
  </div>
  <?php
include 'includes/footer.php';
?>

</body>
</html>