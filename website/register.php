
<?php
session_start();
$_SESSION['message'] = '';

$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "users_db";
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
      //passwords match
          $username = $mysqli->real_escape_string($_POST['username']);
          
    $queryUser = mysql_query("SELECT username FROM users WHERE username= '$username'");

      if(mysql_num_rows($queryUser)>=1){
        $_SESSION['message'] = 'Username already exists!';
      }else{
      if($_POST['password'] == $_POST['confirmpassword']){
        
        
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']); //md5 hashes password
        $fname = ($_POST['fname']);
        $lname = ($_POST['lname']);
        $pref1 = ($_POST['pref1']);
        $pref2 = ($_POST['pref2']);
        $pref3 = ($_POST['pref3']);
        
        $_SESSION['username'] = $username;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        
        $sql = "INSERT INTO users (username, email, fname, lname, password, pref1, pref2, pref3)"
        . "VALUES ('$username', '$email', '$fname', '$lname', '$password', '$pref1', '$pref2', '$pref3')";
        
        //if query is successful, redirect to welcome
        
      if ($mysqli->query($sql) === true){
        $_SESSION['message'] = 'ADDED USER TO DATABASE';
        header("location: welcome.php");
      }
      else{
        $_SESSION['message'] = 'FAILED TO ADD';
      }
        
      }else{
        $_SESSION['message'] = 'Passwords don\'t match!';
      }
      }
    }
include 'includes/nav.php';
?>





	<title>TicketFast | Register</title>

        <div style="width: 100%;">
  <form action="register.php" method="post">
    
    <div class="visible alert alert-danger alert-dismissable fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <?=$_SESSION['message'] ?>
    </div>
            
    <div class="form-group">
      <label for="InputFirstName">First Name</label>
      <input type="text" class="form-control" id="InputFirstName" name="fname" placeholder="Enter First Name" pattern = "[A-Za-z]{1,}" title="Example: Tony" required>
    </div>
    <div class="form-group">
      <label for="InputSurname">Surname</label>
      <input type="text" class="form-control" id="InputSurname" name="lname"placeholder="Enter Surname" pattern = "^[A-Za-z]{1,}" title="Example: StarK" required>
    </div>
    <div class="form-group">
      <label for="InputUsername">Username</label>
      <input type="text" class="form-control" id="InputUsername" name="username" placeholder="Enter Username" title="Example: StarK" required>
    </div>
    <div class="form-group">
      <label for="InputEmail1">Email address</label> <!-- pattern = "^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  -->
      <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" title="Example: example@gmail.com" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="InputPassword">Password</label>
      <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password" pattern = "(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
      <small id="passwordHelp" class="form-text text-muted">Password must contain at least 8 Characters (UpperCase, LowerCase, Number/SpecialCharacter).</small>
    </div>
    <div class="form-group">
      <label for="InputPassword1">Confirm Password</label>
      <input type="password" class="form-control" id="InputPassword1" name="confirmpassword" placeholder="Confirm Password" required>
  </div>
  
  <div class="form-group">
 <label for="pref1">Preferences</label>
      <select class="form-control" id="pref1" name="pref1" required>
        <option>Theatre</option>
        <option>Musicals</option>
        <option>Concerts</option>
        <option>Comedy</option>
        <option>Sports</option>
      </select>
  </div>
  <div class="form-group">
      <select class="form-control" id="pref2" name="pref2">
        <option>None</option>        
        <option>Theatre</option>
        <option>Musicals</option>
        <option>Concerts</option>
        <option>Comedy</option>
        <option>Sports</option>
      </select>
      </div>
      
      <div class="form-group">
      
      <select class="form-control" id="pref3" name="pref3">
        <option>None</option>        
        <option>Theatre</option>
        <option>Musicals</option>
        <option>Concerts</option>
        <option>Comedy</option>
        <option>Sports</option>
      </select>
  </div>
  <!--<div class="form-group">
    <label for="exampleSelect2">Preferences</label>
    <select multiple class="form-control" id="exampleSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  
  <textarea rows="10" cols="75">
    Terms & Conditions
    The following terms are used to govern the TicketFast website. By visiting this website, you give permission to be bound to these terms. TicketFast reserves the right to amend the terms at any given time and it is the responsibility of the visitor to keep updated with the websites terms.
    1.	You agree that you will only use TicketFast for personal use only.
    2.	You agree that all information provided to TicketFast is accurate and regularly updated
    3.	You agree that you will not publish any harmful, misdirecting or copyright material on the Ticketfast website
    4.	No portions of the TicketFast website may be used for commercial purposes
    5.	We reserve the right to block your access to the TicketFast website if it is believed that you are in breach of the TicketFast Terms & Conditions
    6.	Deliberately attempting to access or compromise the TicketFast website is prohibited
    7.	Any visitors that copyright will have their website privileges terminated."
  </textarea> 

  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" required>
      Agree to terms and conditions
    </label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  </div>


<?php

include 'includes/footer.php';

?>

  </body>
</html>
<style>
        .visible{
            display: none;
        }
</style>
<?php 
  if($_SESSION['message'] != ''):?>
<script>
      $(".visible").css('display', 'block');
</script>
<?php endif; ?>




