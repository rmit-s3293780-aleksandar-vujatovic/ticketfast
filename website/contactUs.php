<?php

include 'includes/nav.php';



//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {
  
  //Email information
  $admin_email = "acobc2@gmail.com";
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  
  //$email = $_REQUEST['email'];
  // $subject = $_REQUEST['subject'];
  //$comment = $_REQUEST['comment'];

  echo '</br>';
  echo '</br>';
  echo '</br>';

 
 //@@@@@@@@@@@@@ STYLE OUTPUT @@@@@@@@@@@@@@@



  echo "You entered the following: ";
  echo '</br>';
  echo "Email: " . $email;
  echo '</br>';
  echo "Subject: " . $subject;
  echo '</br>';
  echo "Message: " . $comment;
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

<script>
function validateForm() {
    var x = document.forms["contactform"]["email"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

	<title>TicketFast | Contact Us</title>
 <form name ="contactform" method="post">
  <div class="form-group">
    <label>Email address:</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div><br />
  
   <div class="form-group">
 <label for="subject">Subject</label>
      <select class="form-control" id="subject" name="subject" required>
        <option>General Enquiry</option>
        <option>Account Enquiry</option>
        <option>Billing Enquiry</option>
        <option>Employment</option>
        <option>Refunds</option>
        <option>Other</option>
      </select>
      <br />
  
   <div class="form-group">
    <label>Comment:</label>
    <textarea class="form-control" id="exampleTextarea" name="comment" rows="3"></textarea>
  </div><br />
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
<?php
  }
?>

<?php

include 'includes/footer.php';

?>

</body>
</html>