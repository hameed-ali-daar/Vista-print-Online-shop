<?php
include '../DBconnect.php';

if (isset($_POST['submit'])) {
  $cat_Name = $_POST['cat_Name'];
  $cat_desc = $_POST['cat_desc'];


  $sql = "INSERT INTO `category` (cat_Name, cat_desc) 
            VALUES ('$cat_Name','$cat_desc');";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo '<script>
      alert("Your Category Has been Added to the list")
     </script>';
  } else {
    die(mysqli_error($conn));
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - DaarWap</title>

  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/custom.css" />
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
</head>

<body>

  <div class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../images/logo-daarWap.png" class="logo" alt="logo" />
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarStore" title="Toggler">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarStore ">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="../index.php" class="nav-link text-white"> Home </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white"> About </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white"> Contact </a>
          </li>
        </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hameed Ali Daar</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="./Profile/Personal.html">Profile</a>
            <a class="dropdown-item" href="./Profile/Contact.html">Contact</a>
            <a class="dropdown-item" href="./Profile/subscription.html">Subscriptions</a>
            <a class="dropdown-item" href="#">Notifications</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./User/Reset-Password.html">Change Password</a>
          </div>
        </li>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="../index.php" class="nav-link text-white">Sign Out</a>
        </li>
      </ul>
    </div>


  </div>

  <!-- //Bread Crups -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="../index.php">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="../admin/Add_Category.php">Add Category</a>
    </li>
  </ol>

  <!-- form -->

  <div class="container mt-0">
    <form method="post" enctype="multipart/form-data">
      <div class="col-xl-6 offset-xl-3">
        <div class="row mt-5">
          <div class="col-xl-12 form-group text-center">
            <div class="jumbotron">
              <h1 class="heading text-center display-3">SHOP</h1>
              <p class="paragraph text-center text-primary">
                "Please add Category details"
              </p>
            </div>
          </div>
          <div class="col-xl-12 form-group">
            <label for="cat_desc" class="col-form-label font-weight-bold">Category</label>
            <input type="text" id="cat_Mame" name="cat_Name" class="form-control"  placeholder="Please Enter the Category Name" />
          </div>
          <div class="col-xl-12 form-group">
            <label for="cat_desc" class="col-form-label font-weight-bold">Description</label>
            <textarea type="text" id="cat_desc" name="cat_desc" class="form-control" rows="5" placeholder="Please Enter the description for your Category"></textarea>
          </div>
          
        </div>
        <div>
          <hr />
          <button class="btn btn btn-primary mb-4" name="submit">Add Category</button>
          <a href="../admin/list.php" class="btn btn btn-secondary mb-4" name="list">View Category List</a>
        </div>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>