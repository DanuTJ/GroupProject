<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';

    
    $sql =mysqli_query($conn, "INSERT INTO  del_stock SELECT * FROM stock WHERE id='" . $_GET["id"] . "'"); 
    $sql = mysqli_query($conn,"DELETE FROM stock WHERE id='" . $_GET["id"] . "'");

    if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript">';
        echo 'alert("Record deleted successfully");';
        echo 'window.location.href="ManageStock.php";';
        echo '</script>';
        
    } 
    $message = base64_encode(urlencode("Record Deleted Successfully"));
    header('Location:ManageStock.php?msg=' . $message);
    mysqli_close($conn);
    
    ?>
    