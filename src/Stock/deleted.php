<?php
include_once '../../config/connection.php';
$sql = "DELETE FROM stock WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   echo '<script type="text/javascript">';
    echo 'alert("Record deleted successfully");';
    echo 'window.location.href="ManageStock.php";';
    echo '</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>