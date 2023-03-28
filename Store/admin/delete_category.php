<?php
include '../DBconnect.php';

$cat_id = $_GET['cat_id'];
$sql = "SELECT * FROM category WHERE cat_id=$cat_id";
$result=mysqli_query($conn, $sql);

if ($result) {
// sql to delete a record
    $sql = "DELETE FROM category WHERE cat_id=$cat_id";
    $result=mysqli_query($conn, $sql);

    if ($result) {
        ?>
       <script>
       alert ("Record deleted successfully")
       </script>
   <?php
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Error selecting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<a href="../admin/Category_list.php">Back to the Category List</a>