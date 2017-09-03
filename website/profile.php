<?php
session_start();


    
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
                    <div>
                        <div class="form-group">
                             <label for="InputUsername">Username</label></br>
                                 <text id="InputUsername" name="username"><?= $_SESSION['username']?></text>
                        </div>
                        <div class="form-group">
                             <label for="InputEmail1">Email</label></br>
                                 <text id="InputEmail1" name="email"><?= $_SESSION['email']?> (CAN EDIT EVENTUALLY)</text>
                        </div>
                        <div class="form-group">
                             <label for="InputUsername">Password</label></br>
                                 <button id="passwordHidden" name="password" class="passHidden btn btn-default">Hold to show</button>
                                 <text id="passwordShow" name="password" class="passShow"><?= $_SESSION['password']?></text>
                        </div>
                        <div>
                       
                        <div>
                            <label for="pref1">Preference 1</label></br>
                            <text id="pref1" name="pref1"><?= $_SESSION['pref1']?></text>
                        </div>
                        <div>
                            <label for="pref1">Preference 2</label></br>
                            <text id="pref2" name="pref2"><?= $_SESSION['pref2']?></text>
                        </div>
                        <div>
                            <label for="pref3">Preference 3</label></br>
                            <text id="pref3" name="pref3"><?= $_SESSION['pref3']?></text>
                        </div></br>
                        <div>
                           <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="messages">
                    <label>Purchase History</label></br>
                    <div>
                        
                        
                        <!-- _____________________
                            Aleks
                            ______________________
                        
                        -->
                        All purchases
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



    </script>



</html>