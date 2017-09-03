<?php
session_start();
include 'includes/nav.php';
?>


 <title>TicketFast | Contact Us</title>
 
 
  <form action="contactsent.php" method="post" name="form">
	 
   <div class="form-group">
    <label for="name">Name</label><br>
     <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required><br>
   </div><br />

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
   </div><br />

   <div class="form-group">
    <label>Message:</label>
    <textarea class="form-control" id="exampleTextarea" name="message" rows="3" required></textarea>
   </div><br />

   <input type="submit" class="btn btn-primary" name="submit" value="Send">
   
  </form>



<!--
OLD FORM@@@@@@@@@@@@@ IGNORE FOR NOW

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
    <label>Message:</label>
    <textarea class="form-control" id="exampleTextarea" name="msg" rows="3"></textarea>
  </div><br />
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
-->



<?php

include 'includes/footer.php';

?>

</body>
</html>

