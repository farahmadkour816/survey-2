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
$username ="root";
$password = "";
$dbname = "employee_surveys";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$checkEmailSql = "SELECT * FROM responses";
$result = $conn->query($checkEmailSql);

// if ($result->num_rows > 0) {
//     // Output data of each row
//     // while ($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"] . "      /      Name: " . $row["names"] ."      /      email: " . $row["emails"] ."<br>";
//         }
// // 
// else {
//     echo "0 results";
// }

// " - Name: " . $row["firstname"] . " " . $row["lastname"] .

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- <button type="submit" class="btn btn-outline-light btn-lg px-5" name="submit">Login</button> -->

<!-- <a href="logout.php" class="btn btn-outline-light btn-lg px-5">Log out</a> -->


<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Employee Survey</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
    </ul>
    <a href="logout.php" class="btn btn-outline-light btn-lg px-5">Log out</a>
    <button class="btn btn-danger navbar-btn">Button</button>
  </div>
</nav> -->





<nav class="navbar navbar-inverse" style="background-color: #6d7f52;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: black; font-size: 25px;">Employee Survey</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#" style="color: black;">Home</a></li> -->
      <li><a href="index.php" style="color: black;  font-size: 18px;">Survey</a></li>
      <!-- <li><a href="link2.php" style="color: black;">Link 2</a></li> -->
    </ul>
    <a href="logout.php" class="btn btn-outline-light btn-lg px-5" style="color: black;">Log out</a>
    <!-- <button class="btn btn-danger navbar-btn" style="color: black;">Button</button> -->
  </div>
</nav>


<div class="container">
  <!-- <h2>Employee Responses</h2> -->
  <p> </p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
 if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
    //   echo "id: " . $row["id"] . "      /      Name: " . $row["names"] ."      /      email: " . $row["emails"] ."<br>";
    echo" <tr>

    <td> ".$row["names"]."</td>
    <td>".$row["emails"]."</td>
    <td><a href='details.php?id=".$row["id"]."'>View</aaaa> </td>
  </tr>";
      }}
 
    else {
      echo "0 results";
     }
     
      ?>
    </tbody>
  </table>
</div>

</body>
</html>



