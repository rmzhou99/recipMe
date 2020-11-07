<?php
include "connectdb.php";

// Check if user is logged in or not
if(!isset($_SESSION['uname'])){
    header('Location: auth/login.php');
}

// logout
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: auth/login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">   
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
   <meta name="viewport" content="width=device-width, initial-scale=1">  
   <title>Submit a Recipe</title> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
   <link rel="stylesheet" href="custom-style.css" />   
</head>
<body>
  
<?php 
include('header.html') 
?>

<div>
    <br />
    <h1>Submit a Recipe</h1>
</div>

<?php include('footer.html') ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>