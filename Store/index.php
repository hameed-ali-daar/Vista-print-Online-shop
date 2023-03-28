<?php
include './DBconnect.php';

// select all products from database

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);


// if(mysqli_num_rows($result) > 0 ){
//   // Show the products

//   while($row = mysqli_fetch_assoc($result)){
//     echo "<div class='card-deck d-flex'>";
//     echo "<div class='col-xl-3  col-lg-3 card pt-2 pb-2 d-inline-block card-body'>";
//     echo "<img src='./admin/pro_images/" . $row['pro_img'] . "' alt='" . $row['pro_img'] . "' class='card-img-top'><br><br>";  
//     echo "<h2 class='card-header'>" . $row['pro_name'] . "</h2>";
//     echo "<p class='card-title ml-3 mt-3'>" . $row['pro_cat'] . "</p>";
//     echo "<p class='card-body'>Product Description :<br>" . $row['pro_desc'] . "</p>";
//     echo "<a href='#' class='btn btn-secondary '>Add to Cart</a>
//           <a href='#' class='btn btn-primary '>Place an Order</a>";
//     echo "</div>";  
// echo "</div>";
 
//   }
// }
// else
// {
//   echo "no product was found";
// }

// Close the database connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/custom.css" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <title>Hamiii's Working</title>
  </head>

  <body>
    <div class="navbar navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="./images/logo-daarWap.png" class="logo" alt="logo" />
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
              <a class="dropdown-item" href="./User/Reset-Password.html"
                >Change Password</a
              >
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
        <h1 class="heading display-4">Title</h1>
        <p class="paragraph">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. A culpa rem,
          expedita sapiente hic harum recusandae sint nostrum illum odit
          molestiae maiores modi. Nisi soluta maiores nobis culpa? Esse, neque?
        </p>
      </div>
      <div class="container mb-3">
    
     
     <?php
if(mysqli_num_rows($result) > 0 ){

       while ($row = mysqli_fetch_assoc($result)) {
         echo "<div class='card-deck d-flex'>";
         echo "<div class='col-xl-3  col-lg-3 card pt-2 pb-2 d-inline-block card-body mx-2 col-4'>";
         echo "<img src='./admin/pro_images/" . $row['pro_img'] . "' alt='" . $row['pro_img'] . "' class='card-img-top'><br><br>";
         echo "<h2 class='card-header'>" . $row['pro_name'] . "</h2> <br><br>";
         echo "<p class='card-title ml-3 mt-3'>" . $row['pro_cat'] . "</p>";
         echo "<p class='card-body'>Product Description :<br>" . $row['pro_desc'] . "</p>";
         echo "<a href='#' class='btn btn-primary'>Add to Cart</a>";
         echo "</div>";
         echo "</div>";

       }
  }
  else{
    echo "no product was found";
  }
?>
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
