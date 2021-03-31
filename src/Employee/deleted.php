<?php
include_once '../../config/connection.php';


$sql =mysqli_query($conn, "INSERT INTO  del_emp SELECT * FROM emp WHERE Employee_ID='" . $_GET["Employee_ID"] . "'"); 
$sql = mysqli_query($conn,"DELETE FROM emp WHERE Employee_ID='" . $_GET["Employee_ID"] . "'");
if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">';
    echo 'alert("Record deleted successfully");';
    echo 'window.location.href="ManageEmployee.php";';
    echo '</script>';
    
} 
$message = base64_encode(urlencode("Record Deleted Successfully"));
header('Location:ManageEmployee.php?msg=' . $message);
mysqli_close($conn);

?>

