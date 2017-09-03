
<?php
session_start();

$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "events_db";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

    // Check connection
  /*  if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
    echo "Connected successfully (".$mysqli->host_info.")"; */
    
    
  $sql = "SELECT name, price, category, age, image FROM events";
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

    
include 'includes/nav.php';
?>
  	<title>TicketFast | Home</title>
  <div class="container">                                                                                     
  <div class="table-responsive">          
  <table class="table">
  	<thead>
      <tr>
        <th colspan="4"> 
          <form id="searchbox" action="">
    				<input id="search" type="text" placeholder="Type here">
    				<input id="submit" type="submit" value="Search">
    			</form>	
        </th>
    	</tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <input type="image"src="Maroon5.jpg" width="200" height="300" id="modalbtn"></td>
          <div class="modal fade" id="myModal1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          </div>
        <?php
            while($row = $result->fetch_assoc()) {
            echo " <td>" . $row["name"]."</td>";
            }
        ?>
      </tr>
    </tbody>

  </table>
  </div>
  </div>
  <?php
include 'includes/footer.php';
?>
  <?php include 'testModal.php';?>
  <script>
    
$( ".close" ).click(function(){
  $(".modal").hide();
});
  </script>

 

 






</body>
</html>