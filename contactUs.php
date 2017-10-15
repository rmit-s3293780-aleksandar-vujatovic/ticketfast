<?php
session_start();
include 'includes/nav.php';
?>

 <title>TicketFast | Contact Us</title>
 
 <!-- Contact form -->
 
  <form action="contactsent.php" method="post" name="form">
	 
   <div class="form-group">
    <label for="name">Name</label>
     <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
   </div>

   <div class="form-group">
    <label>Email address:</label>
     <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
   </div>

   <div class="form-group">
     <label for="subject">Subject</label>
       <select class="form-control" id="subject" name="subject" onchange='checkvalue(this.value)' required>
        <option>General Enquiry</option>
        <option>Account Enquiry</option>
        <option>Billing Enquiry</option>
        <option>Employment</option>
        <option>Refunds</option>
        <option value="others">Other</option>
       </select>
       
       <input class="form-control" type="text" name="othersubject" id="othersubject" style='display:none' placeholder='Please enter subject'/>

   </div>

   <div class="form-group">
    <label>Message:</label>
    <textarea class="form-control" id="exampleTextarea" name="message" rows="3" required></textarea>
   </div>

   <input type="submit" class="btn btn-primary" name="submit" value="Send">
   
  </form>


<?php

include 'includes/footer.php';

?>

<script>
 function checkvalue(val)
{
    if(val==="others")
       document.getElementById('othersubject').style.display='block';
    else
       document.getElementById('othersubject').style.display='none'; 
}
</script>

</body>
</html>