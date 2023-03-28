<?php
include '../DBconnect.php';
//getting data from database

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $pro_name = $row['pro_name'];
    $pro_cat = $row['pro_cat'];
    $pro_desc = $row['pro_desc'];
    $pro_img = $row['pro_img'];
}
    //submit function
if (isset($_POST['update'])) {



    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // $id = $_POST['id'];
        $pro_name = $_POST['pro_name'];
        $pro_cat = $_POST['pro_cat'];
        $pro_desc = $_POST['pro_desc'];
        $pro_img = $_FILES['pro_img']['name'];
      
        //Validate inputs

        $target = "./pro_images/" . basename($pro_img);


        $sql = "UPDATE `products` SET pro_name='$pro_name', pro_cat=  '$pro_cat', pro_desc='$pro_desc' WHERE id=$id;";
        if(isset($_FILES['pro_img']['name']) && !empty($_FILES['pro_img']['name'])){
            $pro_img = $_FILES['pro_img']['name'];
            $target = "./pro_images/" . basename($pro_img);
            if (move_uploaded_file($_FILES['pro_img']['tmp_name'], $target)) {
                $sql = "UPDATE `products` SET pro_name='$pro_name', pro_cat='$pro_cat', pro_desc='$pro_desc', pro_img='$pro_img' WHERE id=$id;";
            }
        }
        
        $result = mysqli_query($conn, $sql);

        echo '<script>
  alert("Your Product Has been updated")
 </script>';
    }
    if (!$result) {
        die(mysqli_connect_error());
    }
}
// else{
//   echo "it shows an error of ". mysqli_connect_errno();
// }




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

    <div class="container mt-0">
        <form method="post" enctype="multipart/form-data">
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
                        <input type="hidden" id="id" value="<?php echo $id; ?>">
                        <input type="text" id="pro_name" name="pro_name" class="form-control" value="<?php echo $pro_name;  ?>" />
                    </div>
                    <div class="col-xl-12 form-group">
                        <label for="pro_cat" class="col-form-label font-weight-bold">Category</label>
                        <?php
                        // for making dynamic selection
                            
                            $sql1 = "SELECT * FROM products INNER JOIN category ON products.pro_cat = category.cat_Name";
                            $result1 = mysqli_query($conn, $sql1)
                            or die("Query Unsuccessfull");

                            $sql2 = "SELECT * FROM category";
                            $result2 = mysqli_query($conn, $sql2);
    
                            
                            if (mysqli_num_rows($result1 ) || mysqli_num_rows ($result2)){
                                echo "<select id='id' name='pro_cat' class='form-control'>";

                                while($row1 = mysqli_fetch_assoc($result1)){
                                    $slected = ($row1['pro_cat'] == $row1['pro_cat']) ? "selected" : "";
                                }
                                    
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                    echo "<option value='{$row2['cat_Name']}'>{$row2['cat_Name']}</option>";
                                }
                            echo "</select>";
                            }
                        ?>

                            

                    </div>
                    <div class="col-xl-12 form-group">
                        <label for="pro_desc" class="col-form-label font-weight-bold">Description</label>
                        <textarea type="text" id="pro_desc" name="pro_desc" class="form-control" rows="5" value="<?php echo $pro_desc;  ?>"><?php echo $pro_desc;  ?></textarea>
                    </div>
                    <div class="col-xl-12 form-group">
                        <label for="pro_img" class="col-form-label font-weight-bold">Product image</label>
                        <?php echo $row['pro_img'];  ?>
                        <input type="file" id="pro_img" name="pro_img" class="form-control" placeholder="Please select product image" value="<?php echo $pro_img;  ?>" />
                    </div>
                </div>
                <div>
                    <hr />
                    <button class="btn btn btn-primary"  type="submit" name="update">Update</button>
                    <a href="../admin/list.php" class="btn btn btn-Secondary"  type="list" name="update">View List</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>