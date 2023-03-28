<?php
include '../DBconnect.php';

// select all products from database



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/custom.css" />
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
  <title>Hamiii's Working</title>
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
            <a href="#" class="nav-link text-white"> Home </a>
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
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="./User/login.php" class="nav-link text-white">Sign In</a>
      </li>
      <li class="nav-item">
        <a href="./User/Register.php" class="nav-link text-white">Register</a>
      </li>
    </ul>
  </div>

  <div class="jumbotron">
    <h1 class="heading display-4">Listed data of All Category</h1>
    <p class="paragraph">
      Here is the all data of all Category. Click on Update if you want to edit the data & Delete button if you wants to remove the data.
    </p>
    <p class="paragraph">
      If You want to add more Categories then Click <a href="../admin/Add_category.php" class="btn btn-success .hover-primary">HERE</a>
    </p>
  </div>
  <div class="container mb-3">


    <?php
    // Show the products data as table
    $sql = "SELECT * FROM category";
    $result = mysqli_query($conn, $sql);
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>SR</th>
          <th>Name</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sr = "1";
        $sql = "SELECT * FROM category";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $sr++; ?></td>
            <td><?php echo $row['cat_Name']; ?></td>
            <td><?php echo $row['cat_desc']; ?></td>
            <td>
              <a href="./edit_category.php?cat_id=<?php echo $row['cat_id']; ?>" class="btn btn-secondary">Edit</a>
              <a href="../admin/delete_category.php?cat_id=<?php echo $row['cat_id']; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php
        }
        mysqli_close($conn);
        ?>
      </tbody>
    </table>


  </div>
  <hr />
  <footer class="d-flex justify-content-between">
    <a href="#"> Privacry </a>
    <div>
      <p>Copyright &copy; Daarwap 2022. All rights reserved</p>
    </div>
    <a href="#"> Agreement </a>
  </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>