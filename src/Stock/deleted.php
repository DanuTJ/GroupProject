<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';


for($i=0; $i < 6; $i++) {
    
    $sql =mysqli_query($conn, "INSERT INTO  del_stock SELECT * FROM stock WHERE id='" . $_GET["id"] . "'"); 
    $sql = mysqli_query($conn,"DELETE FROM stock WHERE id='" . $_GET["id"] . "'");

    if(!$sql) { die(mysqli_error()); }
}

mysqli_close($conn);
?>