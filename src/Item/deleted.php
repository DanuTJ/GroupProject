<?php
include_once '../../config/connection.php';
<<<<<<< HEAD
include_once '../../public/includes/session.php';


for($i=0; $i < 6; $i++) {
    
    $sql =mysqli_query($conn, "INSERT INTO  del_cusorder SELECT * FROM cusorder WHERE id='" . $_GET["id"] . "'"); 
    $sql = mysqli_query($conn,"DELETE FROM cusorder WHERE id='" . $_GET["id"] . "'");

    if(!$sql) { die(mysqli_error()); }
=======
$sql = "DELETE FROM items WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">';
    echo 'alert("Record deleted successfully");';
    echo 'window.location.href="ManageItem.php";';
    echo '</script>';

} else {
    echo "Error deleting record: " . mysqli_error($conn);
>>>>>>> a8f6915d170ef6d4bbef0fc66fdf0a7b50277bd1
}

mysqli_close($conn);
?>