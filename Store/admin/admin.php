<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/custom.css" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <title>Hamiii's Working</title>
  </head>

  <body>
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
          <a href="./first-thing/.html" class="nav-link text-white">Sign Out</a>
        </li>
      </ul>
    </div>

    
      <div class="jumbotron">
        <h1 class="heading text-center display-3">SHOP</h1>
        <p class="paragraph text-center text-primary">
          "Welcome to the Dashboard"
        </p>
      </div>
      <div class="container mb-3">
      
      <div class="card-deck">
        <div class="col-xl-6 col-lg-6 card pt-5 pb-5">
          <div class="card-header">Products</div>
          <ul class="card-body">
            <span><a type="btn" class="btn btn-primary mb-2" href="./Add_Product.php"><li>Add Products</li></a></span>
            <span><a type="btn" class="btn btn-info mb-2" href="./list.php"><li>View Product List</li></a></span>
           </ul>
        </div>
        <div class="col-xl-6 col-lg-6 card  pt-5 pb-5">
          <div class="card-header">Categories</div>
          <ul class="card-body">
          <span><a type="btn" class="btn btn-primary mb-2" href="./Add_Category.php"><li>Add Categories</li></a></span>
          <span><a type="btn" class="btn btn-success mb-2" href="./Add_subcategory.php"><li>Add Sub-Categories</li></a></span>
            <span><a type="btn" class="btn btn-info mb-2" href="./Category_list.php"><li>View Categories/Sub Categories List</li></a></span>
          </ul>
        </div>
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
