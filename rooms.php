<?php 

//Get parameters
$roomname = $_GET['roomname'];

//Connecting to the database
include 'db_connect.php';

//Execute sql to check whether room exists 

$sql = "SELECT * FROM `rooms` WHERE roomname = '$roomname'";

$result  = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>
<header class="site-header sticky-top py-1">
     <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        
        <span class="fs-4"><center>insideFPV ChatRoom</center></span>
      </a>

      <nav class="text-center">
        <a class="me-3 py-2 text-decoration-none" href="#">Home</a>
        <a class="me-3 py-2  text-decoration-none" href="#">About</a>
        <a class="me-3 py-2 text-decoration-none" href="#">Contact</a>
        <a class="py-2  text-decoration-none" href="#">Pricing</a>
      </nav>
    </div>
</header>
<h2>Chat Messages - <?php echo $roomname; ?> </h2>

<div class="container">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>

<input type = "text" class = "form-control" name = "usermsg" id = "usermsg" placeholder = "Add message" ><br>

<button class = "btn btn-default" name = "submitmsg"> Send </button>

</body>
</html>
