
<?php
session_start();

// Establish database connection  

$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $database, $dbport);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

    // Check connection
  /*  if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
    echo "Connected successfully (".$mysqli->host_info.")"; */
    


        $searchq = $_SESSION['searchQuery'];

        $sql = "SELECT * FROM events WHERE (name LIKE '%$searchq%') OR (category LIKE '%$searchq%')";
        
        $result = mysqli_query($conn, $sql);



include 'includes/nav.php';
?>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
  	<title>TicketFast | Search Results</title>
  
    			
    			
            <div class="container">
        <div class="row">
    <?php
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
    ?>
                     <div class="col-lg-3" style="margin-top:40px;">
                       <h4 class="modal-title"><?php echo $row['name']; ?></h4>
                         <a href="#" data-toggle="modal" data-target="#<?php echo $row["event_id"]; ?>"><img src="data:image/jpeg;base64,<?php echo base64_encode($row["image"]); ?>" class="img-responsive"></a>
                     </div>
                     <!-- Modal -->
                      <div class="modal fade" id="<?php echo $row["event_id"]; ?>" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><?php echo $row["name"] ?></h4>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <img src="data:image/jpeg;base64,<?php echo base64_encode($row["image"]); ?>" class="img-responsive">
                                  </div>
                                  <div class="col-lg-6">
                                      <h5><?php echo $row["description"] ?><h5>
                                  </div>
                                  <div class="col-lg-6">
                                      <h5>Price: <?php echo $row["price"] ?><h5>
                                  </div>
                                    <div class="col-lg-6">
                                      <h5>Minimum Age: <?php 
                                      if($row["age"] != 0){
                                      echo $row["age"];
                                      }else{
                                      echo "No Minimum Age";
                                      }?><h5>
                                  </div>
                                  <div class="col-lg-6">
                                      <h5>Category: <?php echo $row["category"] ?><h5>
                                  </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <form method="post" action="purchaseEvent.php" class="buttonForm">
                                <input type="hidden" name="value" value="<?php echo $row["event_id"];?>">
                                <input type="submit" class="btn btn-danger" name="submit" value="Purchase">
                              </form>
                            </div>
                          </div>
                          
                        </div>
                      </div>		
                          <?php
                  }
        } else {
            echo "0 results";
        }
    ?>
                      </div>
                      </div>
  
  <?php
include 'includes/footer.php';
?>
</body>
</html>
