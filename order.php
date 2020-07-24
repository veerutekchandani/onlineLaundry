<?php

session_start();
$message="";
if(isset($_POST["submit-login"])) {
  if(count($_POST)>0) {
     $conn=mysqli_connect("localhost","root","","users");
     $result=mysqli_query($conn,"SELECT * FROM user WHERE Email='" . $_POST['email-login'] . "' and Password = '". $_POST['password-login']."'");
     $row  = mysqli_fetch_array($result);
     if(is_array($row)) {
        $_SESSION["email"] = $row['Email'];
        $_SESSION["name"] = $row['Name'];
     } 
     else {
        $message = "Invalid Username or Password!";
    }
    if(isset($_SESSION["email"])) {
        header("Location:orderlogin.php");
    }
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laundry</title>
  <link rel="stylesheet" href="css/laundry.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<!-- HEADER -->
<div class="header">
  <a href="home.html" class="logo fas"> <img src="images/laun.jpg" class="rounded" alt="Laundry" width=60 height=50> </a>
  <a href="home.html" style="padding: 15px;text-decoration: none;"><p style="font-size: 25px;">Online Laundry</p></a>
  <div class="header-right">
    <a  href="home.html" style="text-decoration: none;">Home</a>
    <a href="price.html" style="text-decoration: none;">Price</a>
    <a class="active" href="order.html" style="text-decoration: none;">Order</a>
    <a href="contact.html" style="text-decoration: none;">Contact Us</a>
    <a href="#about" style="text-decoration: none;">About us</a>
  </div>
</div>


<!-- LOGIN AND REGUSTER FORM --> 
<div class="container mt-3">
    <h2 align="center" style="font-family: courier;">Login OR Register to continue</h2>
    <br>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#register">Register</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active"><br>
        <div class="container">
        <!-- form for login -->
        <form action="" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email-login" placeholder="Enter email" name="email-login">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password-login" placeholder="Enter password" name="password-login">
          </div>
          <button type="submit" class="btn btn-primary" name="submit-login">Submit</button>
        </form>
        </div>
       </div>
      
      <div id="register" class="container tab-pane fade"><br>
      <div class="container">
        <!-- form for registration -->
        <form  method="POST" id="registration" action="http:\\localhost\laundry\registration.php">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone no:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter phone no." name="phone">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
          </div>
          <div class="form-group">
            <label for="confirm">Confirm Password:</label>
            <input type="password" class="form-control" id="confirm" placeholder="Confirm password" name="confirm">
          </div>
          <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit">
        </form>
      </div>
      </div>
    </div>
</div>

<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>



</body>
</html>