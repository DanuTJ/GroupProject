<?php
include_once '../../config/connection.php';

$empid= $_GET["id"];
$sql = "DELETE FROM attendance WHERE Emp_ID='$empid'";
if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">';
    echo 'alert("Record deleted successfully");';
    echo 'window.location.href="ManageAttendance.php";';
    echo '</script>';
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>