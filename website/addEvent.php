
<?php
session_start();
$_SESSION['message'] = '';

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

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name = ($_POST['name']);
        $category = ($_POST['category']);
        $price = ($_POST['price']);
        $age = ($_POST['age']);
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $imagename = addslashes($_FILES['image']['name']);
        $description = ($_POST['description']);
        
        $_SESSION['name'] = $name;
        $_SESSION['category'] = $category;
        $_SESSION['price'] = $price;
        $_SESSION['age'] = $age;
        $_SESSION['image'] = $image;
        $_SESSION['description'] = $description;
        
        $sql = "INSERT INTO events (name, category, price, age, image, description, imagename)"
        . "VALUES ('$name', '$category', '$price', '$age', '{$image}', '$description', '{$imagename}')";
        
      if ($mysqli->query($sql) === true){
        $_SESSION['message'] = 'ADDED USER TO DATABASE';
        header("location: eventListAdmin.php");
      }
      else{
        $_SESSION['message'] = 'FAILED TO ADD';
      }
      }
   // }
include 'includes/adminnav.php';
?>


<head>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<title>TicketFast | Add Event</title>

</head>
        <div style="width: 100%;">
  <form action="addEvent.php" method="post" enctype="multipart/form-data">
            
    <div class="form-group">
      <label for="InputName">Name</label>
      <input type="text" class="form-control" id="InputName" name="name" placeholder="Enter event name" required>
    </div>
    
    <div class="form-group">
  <label for="age">Description</label>
  <textarea id="description" class="form-control" name="description" placeholder="Description" required></textarea>
  </div> 
    
      <div class="form-group">
 <label for="pref1">Category</label>
      <select class="form-control" id="category" name="category" required>
        <option>Theatre</option>
        <option>Musicals</option>
        <option>Concerts</option>
        <option>Comedy</option>
        <option>Sports</option>
      </select>
  </div>

     <div class="form-group">
  <label for="age">Price</label>
  <input type="text" id="price" class="form-control" name="price" placeholder="Price" required>
  </div> 
  
   
   <div class="form-group">
  <label for="age">Age limit</label>
  <input type="number" id="age" class="form-control" name="age" placeholder="Age limit" required>
  <small id="ageHelp" class="form-text text-muted">If there is no age limit, input 0.</small>
  </div>

   <div class="form-group">
  <label for="age">Poster</label>
  <input type="file" id="image" class="form-control" name="image" placeholder="Image" required>
  </div>  

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

