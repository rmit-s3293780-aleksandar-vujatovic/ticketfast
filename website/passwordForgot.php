<?php
include 'includes/nav.php';
?>



<form action="passwordChange.php" method="post" name="form">
    <div class="form-group">
        <label>Email address:</label>
        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div><br />
        <input type="submit" class="btn btn-primary" name="forgotPass" value="Send">
</form>
 
 
    
    
<?php
include 'includes/footer.php';
?>