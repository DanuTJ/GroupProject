<?php
include_once '../../config/connection.php';

$empid= $_GET["id"];
$sql = "DELETE FROM emp WHERE Employee_ID='$empid'";
if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">';
    echo 'alert("Record deleted successfully");';
    echo 'window.location.href="ManageEmployee.php";';
    echo '</script>';
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>

