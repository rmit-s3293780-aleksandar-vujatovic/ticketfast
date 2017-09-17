
<?php
session_start();

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
    
    
  $sql = "SELECT * FROM events";
  $result = $mysqli->query($sql);
    
  /*  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - price: " . $row["price"]. " " . $row["category"]. " " . $row["age"]. "<br>";
        $eventName = $row["name"];
    }
} else {
    echo "0 results";
}*/


//**********Search Function Shit********** 

$output = '';

if(isset($_POST['search'])){
  $_SESSION["searchSess"] = $_POST['search'];
  $searchq = $_POST['search'];

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
}
//**********Search Function Shit**********


include 'includes/nav.php';
?>
  	<title>TicketFast | Home</title>
  <div class="container">                                                                                     
  <div class="table-responsive">          
  <table class="table">
  	<thead>
      <tr>
        <th colspan="4"> 
           
           <form id="searchbox" action="searchResults.php" method="post">
            <div>
    				<input name="search" type="text" class="form-control" placeholder="Search for event or category">
    				<input id="submit" type="submit" class="btn btn-primary" value="Search">
    				</div>
    			</form>	

          <?php print("$output");?>

        </th>
    	</tr>
    </thead>
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
            <?php
               while($row = $result->fetch_assoc()) {
                include 'testModal.php';
                echo '<tr><td><figure><figcaption style="padding-bottom:20px">' . $row['name'].'</figcaption>'.
                    '<img data-content="'.$row['description'].'" class="modalBtn" style="width:15em; height:17em;" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/></figure></td>'.
                    '<td>'.$row['category'].'</td>'.
                    '<td> $'.$row['price'].'</td>'.
                    '<td>'.$row['age'].'</td>'.
                    '</tr>';
                }
            ?>
     <!-- </tr> -->
    </tbody>

  </table>
  </div>
  </div>
  
  
  <style>
    td{
      width:20em;
    }
  </style>
  
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