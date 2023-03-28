<?php
include '../DBconnect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$result=mysqli_query($conn, $sql);

if ($result) {
// sql to delete a record
    $sql = "DELETE FROM products WHERE id=$id";
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
<a href="../admin/list.php">Back to the List</a>