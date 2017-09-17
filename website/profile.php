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
    
    //$queryUser = echo "SELECT username FROM users WHERE username = \"$username\"\;";
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
              if($_POST['password'] == $_POST['confirmpassword']){
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']); //md5 hashes password
        $password2 = ($_POST['password']);
        $pref1 = ($_POST['pref1']);
        $pref2 = ($_POST['pref2']);
        $pref3 = ($_POST['pref3']);
        $username = $_SESSION['username'];
        
        
        $_SESSION['password'] = $password2;
        $_SESSION['email'] = $email;
        $_SESSION['pref1'] = $pref1;
        $_SESSION['pref2'] = $pref2;
        $_SESSION['pref3'] = $pref3;
        
        $sql = "UPDATE users SET email='$email', password='$password', pref1='$pref1', pref2='$pref2', pref3='$pref3' WHERE username='$username'";
        
      if ($mysqli->query($sql) === true){
        $_SESSION['message'] = 'ADDED USER TO DATABASE';
        header("location: profile.php");
      }
      else{
        $_SESSION['message'] = 'FAILED TO ADD';
      }
        
      }else{
        $_SESSION['message'] = 'Passwords don\'t match!';
      }
      }
        
    
include 'includes/nav.php';
?>
<head>
    <link href="profileCss.css" rel="stylesheet">
    
    
  	<title>TicketFast | Profile</title>

</head>

<body>
<div class="row" style="min-height:300px;">
    <div  class="col-sm-6">
        <div class="col-xs-3">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#profile" data-toggle="tab">Personal Details</a></li>
                <li><a href="#messages" data-toggle="tab">Purchase History</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="profile">
                    <label>Personal Details</label></br>
                    <!-- INSERT HERE NO EDIT PROFILE -->
                    <?php include 'profileNoEdit.php'; ?>
                    <!-- INSERT ABOVE HERE -->
                    <!-- INSERT PROFILE EDIT -->
                    <?php include 'profileFormEdit.php'; ?>
                    <!-- INSERT ABOVE HERE -->
                    </div>
                <div class="tab-pane" id="messages">
                    <label>Purchase History</label></br>
                    <div>
                         All purchases
                        
                        <!-- _____________________
                            Aleks
                            ______________________
                        
                        -->
                       
                    </div>
                </div>
                <div class="tab-pane" id="settings">
                  <label>Settings</label></br>
                    <div>
                         <div class="form-check">
                              <input type="checkbox" class="form-check-input">
                              Auto Login
                          </div>
                        <div>
                           <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
 
<?php

include 'includes/footer.php';

?>

</body>

    <style>
        .passHidden{
            display: block;
        }
        .passShow{
            display: none;
        }
        .editButton{
            display: block;
        }
        .saveButton{
            display: none;
        }
        .noEditForm{
            display:block;
        }
        .formEdit{
            display:none;
        }
    </style>                    
    <script>
    
   /* <button id="passwordHidden" name="password" class="passHidden">Click to show</button>
                                 <text id="passwordShow" name="password" class="passShow"><?= $_SESSION['password']?></text> */
                                 
                                 
              var passHidden = document.getElementById('passwordHidden');
              var passShow = document.getElementById('passwordShow');
            passHidden.onmousedown = function() {
                  passShow.style.display = "block";
                  
              }
               passHidden.onmouseup = function() {
                  passShow.style.display = "none";
                }

              var saveBtn = document.getElementById('saveButton');
              var editBtn = document.getElementById('editButton');
              var noEditForm = document.getElementById('noEditForm');
              var formEdit = document.getElementById('formEdit');
              
            editBtn.onclick = function() {
                  editBtn.style.display = "none";
                  saveBtn.style.display = "block";
                  noEditForm.style.display = "none";
                  formEdit.style.display = "block";
              }



    </script>



</html>