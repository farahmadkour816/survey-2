
<?php
session_start();
echo $_SESSION["username"];

unset($_SESSION['username']);
// die();
// if($_SESSION["username"] == null){
  if(!(isset($_SESSION['username'])) || ($_SESSION['username'] == null)) {
  // if($_SESSION["username"] != $enteredEmail){
    
  header("Location: login.php?status=success");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GbolaByte Survey Page</title>
    <!-- CSS -->
    <link href="styles.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>

<body>
 
<p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a></p>


</body>
</html>