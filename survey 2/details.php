<?php

session_start();
// echo $_SESSION["username"];


// die();
// if($_SESSION["username"] == null){
  if(!(isset($_SESSION['username'])) || ($_SESSION['username'] == null)) {
  // if($_SESSION["username"] != $enteredEmail){
    
  header("Location: login.php?status=success");
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_surveys";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = isset($_GET["id"]) ? $_GET["id"] : "";

$checkEmailSql = "SELECT * FROM responses WHERE id =  $id ";
// echo $checkEmailSql;

// $tetst = mysqli_fetch_array($result);
// die();





$result = mysqli_fetch_array($conn->query($checkEmailSql));

// print_r($result);

// echo '<br> Please rate the quality of the boat parking service at our marina. <br> '  ;
// "\n" . "\n";
// print_r($result[1]);

// echo '<br>Please rate the quality of information given by phone or by
// email and the wi-fi service. <br> '  ;
// "\n" . "\n";

// print_r($result[2]);

// echo '<br>Courteous? <br> '  ;
// "\n" . "\n";

// print_r($result[3]);

// echo '<br> Informative? <br> '  ;
// "\n" . "\n";

// print_r($result[4]);

// echo '<br> Prompt and efficient? <br> '  ;
// "\n" . "\n";

// print_r($result[5]);

// echo ' <br>  Please rate the quality of our call center service. <br> '  ;
// "\n" . "\n";

// print_r($result[6]);




// die();
$conn->close();

// while ($row = $result->fetch_assoc()) {
//    echo "id: " . $row["id"] . "      /      Name: " . $row["names"] ."      /      email: " . $row["emails"] ."<br>";
//      }
//     else {
//   echo "0 results";}

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         //   echo "id: " . $row["id"] . "      /      Name: " . $row["names"] ."      /      email: " . $row["emails"] ."<br>";
//         echo " <tr>

//   " . $row["names"] . "
//    " . $row["emails"] . "
 
//  </tr>";
//     }
// } else {
//     echo "0 results";
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- <div class="d-flex justify-content-end">
    <a href="logout.php" class="btn btn-outline-light btn-lg px-5">Log out</a>
</div> -->






<style>
  .navbar-brand, .nav-link, .btn {
    font-weight: bold;
    display: inline-block;
    padding: 10px 20px;
    border-radius: 15px;
    transition: transform 0.3s;
  }

  .navbar-brand:hover, .nav-link:hover, .btn:hover {
    transform: scale(1.1);
  }
</style>










    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 70px;
        }
        
        .bubbly-text {
            padding: 20px;
            background-color: #6d7f52;
            color: white;
            border-radius: 10px;
            margin: 10px;
           
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-inverse" style="background-color: #6d7f52;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: black; font-size: 25px;">Employee Survey</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#" style="color: black;">Home</a></li> -->
      <li><a href="index.php" style="color: black;  font-size: 18px;">Survey</a></li>
      <!-- <li><a href="link2.php" style="color: black;">Link 2</a></li> -->
      <li>    <a href="logout.php" class="btn btn-outline-light btn-lg px-5" style="color: black;">          Log out</a>
</li>

    </ul>
    <!-- <button class="btn btn-danger navbar-btn" style="color: black;">Button</button> -->
  </div>
</nav>





<div class="bubbly-text">
    Please rate the quality of the boat parking service at our marina. <br>
    <?php echo $result[1]; ?>
</div>

<div class="bubbly-text">
    Please rate the quality of information given by phone or by email and the Wi-Fi service. <br>
    <?php echo $result[2]; ?>
</div>

<div class="bubbly-text">
    Courteous? <br>
    <?php echo $result[3]; ?>
</div>

<div class="bubbly-text">
    Informative? <br>
    <?php echo $result[4]; ?>
</div>

<div class="bubbly-text">
    Prompt and efficient? <br>
    <?php echo $result[5]; ?>
</div>

<div class="bubbly-text">
    Please rate the quality of our call center service. <br>
    <?php echo $result[6]; ?>
</div>

<div class="bubbly-text">
    Name: <br>
    <?php echo $result[7]; ?>
</div>

<div class="bubbly-text">
    Email: <br>
    <?php echo $result[8]; ?>
</div>

</body>
</html>