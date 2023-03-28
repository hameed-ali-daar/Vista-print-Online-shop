<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password - DaarWap</title>

    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/custom.css" />
    <link
      rel="shortcut icon"
      href="../images/favicon.ico"
      type="image/x-icon"
    />
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
              <a class="dropdown-item" href="./User/Reset-Password.html"
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
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="../index.html">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="../User/forgot-Password.html">Forgot Password</a>
      </li>
    </ol>
    <div class="container mt-0">
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
            <label for="email" class="col-form-label font-weight-bold"
              >Email</label
            >
            <input
              type="email"
              id="email"
              class="form-control"
              placeholder="Enter Your Email Address"
            />
          </div>
        </div>
        <div>
          <hr />
          <button class="btn btn btn-primary">Recover Password</button>
          <a href="./login.html" class="float-right btn btn-secondary">Cancel</a>
        </div>
      </div>
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
