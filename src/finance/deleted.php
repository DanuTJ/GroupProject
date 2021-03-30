<?php
include_once '../../config/connection.php';

$uid= $_GET["id"];
$sql = "DELETE FROM finance WHERE id='$uid'";
if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">';
    echo 'alert("Record deleted successfully");';
    echo 'window.location.href="ManageUtility.php";';
    echo '</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

