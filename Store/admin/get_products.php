<?php
include '../DBconnect.php';

$cat_name = $_POST['select1'];

$sql = "SELECT * FROM sub_category WHERE Parent_Category = '$cat_name'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['subcat_Name'] . "'>" . $row['subcat_Name'] . "</option>";
    }
} else {
    echo "<option value=''>No Sub Category Found</option>";
}
