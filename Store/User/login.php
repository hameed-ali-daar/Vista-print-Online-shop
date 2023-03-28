<?php
include '../DBconnect.php';

  if (isset($_POST['submit'])){

    if($_SERVER['REQUEST_METHOD'] ==='POST'){
      //Getting Values sunmited in form

    $username = $_POST['name'];
    $password = $_POST['password'];

//escape to prevent from sql injection
/*
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    
      // Hash the password for added security
      $hashedPassword = hash('sha256', $password);*/
      
    //Varify credentials against database values
    $sql = "SELECT * FROM register WHERE name='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 1){
      // flage for indicating user is logged in
      session_start();
      $_SESSION['logged_in'] = true;

      // refirect user if logged in 
      header('Location: ../admin/admin.php');
      exit;
    }
    else{
      echo "Logged in failed please check user name and password";
    }
      // Close the database connection
  mysqli_close($conn);

    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - DaarWap</title>

    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/custom.css" />
    <link
      rel="shortcut icon"
      href="../images/favicon.ico"
      type="image/x-icon"
    />
  </head>

  <div class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../images/logo-daarWap.png" class="logo" alt="logo" />
      </a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarStore"
        title="Toggler"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarStore ">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="../index.html" class="nav-link text-white"> Home </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white"> About </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white"> Contact </a>
          </li>
        </ul>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-white"
            data-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="true"
            aria-expanded="false"
            >Hameed Ali Daar</a
          >
          <div class="dropdown-menu">
            <a class="dropdown-item" href="./Profile/Personal.html"
              >Profile</a
            >
            <a class="dropdown-item" href="./Profile/Contact.html">Contact</a>
            <a class="dropdown-item" href="./Profile/subscription.html"
              >Subscriptions</a
            >
            <a class="dropdown-item" href="#">Notifications</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./User/Reset-Password.php"
              >Change Password</a
            >
          </div>
        </li>
      </div>
    </div>
    
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a href="./User/login.html" class="nav-link text-white">Sign In</a>
      </li>
      <li class="nav-item">
        <a href="./first-thing/.html" class="nav-link text-white">Sign Out</a>
      </li>
    </ul> -->
  </div>
  <body>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="../index.html">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="../User/login.php">Login</a>
      </li>
    </ol> 
    
    <div class="container mt-0">
    <form method="post">   
      <div class="col-xl-6 offset-xl-3">
      
        <div class="row mt-5">
          <div class="col-xl-12 form-group text-center">
            <img
              src="../images/logo-daarWap.png"
              alt="DaarWap"
              class="logo-img"
            />
          </div>
          <div class="col-xl-12 form-group">
            <label for="Username" class="col-form-label font-weight-bold"
              >Username</label
            >
            <input
              type="text"
              id="Username"
              name="name"
              class="form-control"
              placeholder="Enter Your User Name"
            />
          </div>

          <div class="col-xl-12 form-group">
            <label for="Password" class="col-form-label font-weight-bold"
              >Password</label
            >
            <input
              type="password"
              id="Password"
              name="password"
              class="form-control"
              placeholder="Enter Your Password"
            />
          </div>
          <div class="col-xl-12">
            <input type="checkbox" name="checkbox" id="RememberMe" />
            <label for="RememberMe" class="form-check-label"
              >Remember Password</label
            >
            <a href="./Forgot-Password.html" class="float-right"> Forgot Password </a>
          </div>
        </div>
        <div>
          <hr />
          <button class="btn btn btn-primary" name="submit">Login</button>
          <a href="./Register.html" class="float-right"> Register Now </a>
        </div>
      </div>
      </form>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
