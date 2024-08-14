<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <link href="assets/css/Login.css" rel="stylesheet" />
  <link href="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap-grid.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- header -->
  <header id="site-header" class="fixed-top">
    <!-- <div class="container-fluid"> -->
    <nav class="navbar navbar-expand-lg navbar-dark stroke">
      <h1> <a class="navbar-brand mx-3">
          <span class="fa fa-heart  "></span> <span class="sub-logo">Charity</span>Loom
        </a></h1>
    </nav>
    </div>
  </header>
  <!--header  -->
  <div class=" login-container">
    <!-- <div class="row justify-content-center"> -->
    <!-- <div class="col-md-6"> -->
    <div class="login-panel">
      <div class="card-body">
        <h2 class="card-title text-center">Login</h2>
        <?php
        if (isset($_REQUEST["msg"])) {
        ?>
          <div class="alert alert-info">
            <?php
            echo $_REQUEST["msg"];
            ?>
          </div>
        <?php
        }
        ?>
        <form method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Email" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Password" />
          </div>
          <button type="submit" name="login_btn" class="btn btn-primary ">Login</button>
          
          <div class="text-center my-3">
            <a href="index.php">Go to Home</a>
          </div>
        </form>
      </div>
    </div>
    <script src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
// if(isset($_REQUEST["login_btn"])){
// $password=md5($_REQUEST["password"]);
// $email=$_REQUEST["email"];

// //  Database connectivity
// include("config.php");

// $query= "INSERT INTO `ngo`( `email`, `password`) VALUES ('$email','$password')";

// $result=mysqli_query($connect,$query);

// if($result>0){
//     echo"<script>window.location.assign('ngo_Ds.php?msg=Data inserted')</script>";
//   }
//     else{
//        echo"<script>window.location.assign('ngo_Ds.php?msg=Error')</script>";
//       }
//     }
//  
?>

<?php


if (isset($_REQUEST["login_btn"])) {
  $password = md5($_REQUEST["password"]);
  $email = $_REQUEST["email"];
  echo $password, $email;

  include("config.php");


  $query = "select * from ngo where email='$email' and password='$password'";
  $result = mysqli_query($connect, $query);

  if (mysqli_num_rows($result) > 0) {
    $ngo = mysqli_fetch_assoc($result);
    $_SESSION["email"] = $email;
    $_SESSION["user_type"] = "ngo";
    $_SESSION["name"] = $ngo["name"];
    $_SESSION["user_id"] = $ngo["id"];
    echo "<script>window.location.assign('ngo_Ds.php?msg=Login Successfully')</script>";
  } else {
    echo "<script>window.location.assign('ngo_login.php?msg=Please Login')</script>";
  }
}

?>