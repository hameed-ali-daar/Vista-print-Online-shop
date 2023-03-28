<?php
include '../DBconnect.php';

if (isset($_POST['submit'])) {
  $pro_name = $_POST['pro_name'];
  $pro_cat = $_POST['cat_Name'];
  $pro_desc = $_POST['pro_desc'];
  $pro_img = $_FILES['pro_img']['name'];
  $target = "./pro_images/" . basename($pro_img);

  if (move_uploaded_file($_FILES['pro_img']['tmp_name'], $target)) {
    $sql = "INSERT INTO `products` (pro_name, pro_cat, pro_desc, pro_img) 
            VALUES ('$pro_name','$pro_cat','$pro_desc','$pro_img');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo '<script>
      alert("Your Product Has been Added to the list")
     </script>';
    } else {
      die(mysqli_error($conn));
    }
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script defer src="../js/validation.js"></script>
  
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

    <!-- <ul class="navbar-nav">
        <li class="nav-item">
          <a href="./User/login.html" class="nav-link text-white">Sign In</a>
        </li>
        <li class="nav-item">
          <a href="./first-thing/.html" class="nav-link text-white">Sign Out</a>
        </li>
      </ul> -->

  </div>

  <!-- //Bread Crups -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="../index.php">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="../admin/Add_Product.php">Add Product</a>
    </li>
  </ol>

  <!-- form -->
  <div id="error">

</div>
  <div class="container mt-0">
    <form id="form" method="post" enctype="multipart/form-data">
      <div class="col-xl-6 offset-xl-3">
        <div class="row mt-5">
          <div class="col-xl-12 form-group text-center">
            <!-- <img src="../images/logo-daarWap.png" alt="DaarWap" class="logo-img" /> -->
            <div class="jumbotron">
              <h1 class="heading text-center display-3">SHOP</h1>
              <p class="paragraph text-center text-primary">
                "Please add product details"
              </p>
            </div>
          </div>
          
          <div class="col-xl-12 form-group">
            <label for="pro_name" class="col-form-label font-weight-bold">Name of Product</label>
            <input type="text" id="pro_name" name="pro_name" class="form-control" placeholder="Please Enter the Name of Product" />
          </div>
          <div class="col-xl-12 form-group">
            <label for="pro_cat" class="col-form-label font-weight-bold">Category</label>
            <?php
            $sql = "SELECT * FROM category";
            $result = mysqli_query($conn, $sql);

            //Check if query was successful
            if (mysqli_num_rows($result) > 0) {
              echo "<select id='cat_Name' name='cat_Name' class='cat_Name form-control'>";
              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='" . $row['cat_Name'] . "'>" . $row['cat_Name'] . "</option>";
              }
              echo "</select>";
          } else {
              echo "Not a single category Found";
          }
          ?>
      </div>
      <div class="col-xl-12 form-group">
          <label for="subcat_Name" class="col-form-label font-weight-bold">Sub Category</label>
          
          <?php
          $sql = "SELECT * FROM sub_category";
          $result = mysqli_query($conn, $sql);

          //Check if query was successful
          if (mysqli_num_rows($result) > 0) {
              echo "<select id='subcat_Name' name='subcat_Name' class='form-control'>";
              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='" . $row['subcat_Name'] . "'>" . $row['subcat_Name'] . "</option>";
              }
              echo "</select>";
          } else {
              echo "Not a single category Found";
          }

          ?>
          </div>
          <div class="col-xl-12 form-group">
            <label for="pro_desc" class="col-form-label font-weight-bold">Description</label>
            <textarea type="text" id="pro_desc" name="pro_desc" class="form-control" rows="5" placeholder="Please Enter the description of your product"></textarea>
          </div>
          <div class="col-xl-12 form-group">
            <label for="pro_img" class="col-form-label font-weight-bold">Product image</label>
            <input type="file" id="pro_img" name="pro_img" class="form-control" placeholder="Please select product image" />
          </div>
        </div>
        <div>
          <hr />
          <button class="btn btn btn-primary mb-4" type="submit" id="submit" name="submit">Add Product</button>
          <a href="../admin/list.php" class="btn btn btn-secondary mb-4" name="list">View Product List</a>
        </div>
      </div>
    </form>
  </div>


  <!-- //script for dependent category -->

  <script type="text/javascript">
        $(document).ready(function() {
            $("#cat_Name").change(function() {
                var select1_value = $(this).val();
                console.log(select1_value);
                $.ajax({
                    url: 'get_products.php',
                    type: "POST",
                    data: {
                        select1: select1_value
                    },
                    success: function(data) {
                        console.log(data);
                        $("#subcat_Name").html(data);
                    }
                });
            });
        });
    </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>