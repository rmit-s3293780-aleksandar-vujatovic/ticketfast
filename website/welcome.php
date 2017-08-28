<?php
session_start();
?>
<?= $_SESSION['message']?>
 
</br>
Welcome <?= $_SESSION['username']?> 
</br>

<a href="index.php"><span class="navedit">Home</span></a>