<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="assets/css/register.css"rel="stylesheet">
   <!-- <link href="assets/css/style-starter.css" rel="stylesheet">  -->
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login</div>
        <div class="title signup">Signup</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <?php
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        
        if(!empty($queries)){
          echo "<div class='alert alert-info'>".$queries['msg']."</div>";
        }
      ?>
        <div class="form-inner">

        
        <!-- added, action here -->
          <form method="post" action="user_register.php" class="login">
            <div class="field">
              <!-- fixed name attribute, username -> email -->
              <input type="text" placeholder="Email Address" name="email"required>
            </div>
            <div class="field">
              <!-- fixed name attribute, useremail-> password -->
              <input type="password" placeholder="Password" name="password" required>
            </div>
            <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login"name="login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
            <div class="signup-link"><a href="index.php">Back To Home</a></div>
          </form>
          <!-- added action and method attribute -->
          <form action="user_register.php" method="post" class="signup">
          <div class="field">
              <input type="text" placeholder="Name" name="name"required>
            </div>
            <div class="field">
              <input type="email" placeholder="Email"name="email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password"required>
            </div>
            <div class="field">
              <input type="number" placeholder="Contact"name="contact" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Address"name="address" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="signup" value="Signup">
            </div>
            <div class="signup-link"><a href="index.php">Back To Home</a></div>

          </form>
        </div>
      </div>
     
    </div>
    <script src="assets/js/register.js"></script>
</body>
</html>
<?php
// 
// handle post request
// 
if (isset($_POST["signup"])){
 $name=$_POST["name"];
 $email=$_POST["email"];
 $password= md5($_POST["password"]);
 $contact=$_POST["contact"];
 $address=$_POST["address"];

//  Database connectivity 
include("config.php");

$query= "INSERT INTO `user_register`(`name`, `email`, `password`, `contact`, `address`) VALUES ('$name','$email','$password','$contact','$address')";

$result= mysqli_query($connect,$query);

if($result>0){
  $query1= "SELECT * from `user_register` where `email`='$email'";
  $result1=mysqli_query($connect,$query1); 
  $data1=mysqli_fetch_assoc($result1);
  $_SESSION["email"]=$email;
  $_SESSION["user_type"]="user";
  $_SESSION["name"]=$name;
  $_SESSION["user_id"]=$data1["id"];
  echo"<script>window.location.assign('index.php?msg=Data inserted')</script>";
}
  else{
     echo"<script>window.location.assign('user_register.php?msg=Error')</script>";
  }
}
?> 
<?php
// 
// handle post request
// 
    if(isset($_POST["login"])){
        $email=$_POST["email"];
        $password=md5($_POST["password"]);
        // echo $email, $password;
        //database connect
        include("config.php");
        //query
        $query= "SELECT * from `user_register` where `email`='$email' and `password`='$password'";
        //query run
        $result=mysqli_query($connect,$query); 
        // print_r($result);
        if(mysqli_num_rows($result)>0){
            $data=mysqli_fetch_assoc($result);
            // print_r($data);
            //session create
            $_SESSION["email"]=$email;
            $_SESSION["user_type"]="user";
            $_SESSION["name"]=$data["name"];
            $_SESSION["user_id"]=$data["id"];
            echo "<script>window.location.assign('index.php?msg=Login successfully!!')</script>";
        }else{
            echo "<script>window.location.assign('user_register.php?msg=Invalid credentails')</script>";
        }
    }
?>