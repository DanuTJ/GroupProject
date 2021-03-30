<?php
include_once '../../config/connection.php';
$sql = "DELETE FROM details WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">';
    echo 'alert("Record deleted successfully");';
    echo 'window.location.href="ManageCustomer.php";';
    echo '</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>