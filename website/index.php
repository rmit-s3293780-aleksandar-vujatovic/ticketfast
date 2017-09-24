
<?php
session_start();

// Establish database connection  

$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "id2769518_testdb";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

    // Check connection
  /*  if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
    echo "Connected successfully (".$mysqli->host_info.")"; */
    
    
  /*  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - price: " . $row["price"]. " " . $row["category"]. " " . $row["age"]. "<br>";
        $eventName = $row["name"];
    }
} else {
    echo "0 results";
}*/


  // Search function

$output = '';
$dataResults = array();

if(isset($_POST['search'])){
  $searchq = $_POST['search'];

  $searchQuery = "SELECT * FROM events WHERE name LIKE '%$searchq%'";
  $searchResult = $mysqli->query($searchQuery);
  $count = mysqli_num_rows($searchResult);
  if($count == 0 || $searchq == ''){
      $output = 'No matching events!';
      $_SESSION['eventMsg'] = 'No matching events';
  }else{
    while(($eventRow = mysql_fetch_array($searchResult)) !== false){
      $ename = $eventRow['name'];
      $cat = $eventRow['category'];
      $cost = $eventRow['price'];
      $dob = $eventRow['age'];
      $poster = $eventRow['poster'];
      
      $_SESSION['ename'] = $eventRow['name'];
      $_SESSION['cat'] = $eventRow['category'];
      $_SESSION['cost'] = $eventRow['price'];
      $_SESSION['dob'] = $eventRow['age'];
      $_SESSION['poster'] = $eventRow['poster'];

      $dataResults[] = $eventRow;
      
      }

      $output .='<div> '.$ename.' '.$cat.' '.$cost.' '.$dob.' '.$poster.'</div>';
    }
    header("location: searchResults.php");
  }

//**********Search Function**********

//**************ALGORITHM**************
if($_SESSION['username'] != ''){
  $pref1 = $_SESSION['pref1'];
  $pref2 = $_SESSION['pref2'];
  $pref3 = $_SESSION['pref3'];
  $age = $_SESSION['age'];
  $sql = "SELECT * FROM events WHERE ( category = '$pref1' OR category = '$pref2' OR category = '$pref3') AND age <= '$age'";
  $result = $mysqli->query($sql);
}else{
  $sql = "SELECT * FROM events";
  $result = $mysqli->query($sql);
}



include 'includes/nav.php';
?>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
  	<title>TicketFast | Home</title>
  
  <!-- Search bar -->
  
  <form id="searchbox" action="index.php" method="post">
            <div>
    				<input name="search" type="text" class="form-control" placeholder="Search for event or category">
    				</div>
    				<input id="submit" type="submit" class="btn btn-primary" value="Search">
    			</form>
    			
    			
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
                                      <h5>Minimum Age: <?php echo $row["age"] ?><h5>
                                  </div>
                                  <div class="col-lg-6">
                                      <h5>Category: <?php echo $row["category"] ?><h5>
                                  </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
  <!--<?//php include 'testModal.php';?> -->
  <script>
    
$( ".close" ).click(function(){
  $(".modal").hide();
});
  </script>



</body>
</html>
