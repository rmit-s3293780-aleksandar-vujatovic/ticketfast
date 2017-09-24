
<html>
<head>
	<title>Modal Dynamic Content</title>
<body>

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

        $sql = "SELECT * FROM events";
        $result = mysqli_query($conn, $sql);
        include 'includes/nav.php';
    ?>
        <div class="container" style="margin-top:30px;">
        <div class="row">
    <?php
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
    ?>
                     <div class="col-lg-3" style="margin-top:40px;">
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
                                      <p><?php echo $row["description"] ?><p>

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

            mysqli_close($conn);
    ?> 



</body>
</html>