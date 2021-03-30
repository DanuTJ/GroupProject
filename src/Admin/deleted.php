<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';


//for($i=0; $i < 6; $i++) {
    
    $sql =mysqli_query($conn, "INSERT INTO  del_users SELECT * FROM users WHERE userID='" . $_GET["userID"] . "'"); 
    $sql = mysqli_query($conn,"DELETE FROM users WHERE userID='" . $_GET["userID"] . "'");

    if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript">';
        echo 'alert("Record deleted successfully");';
        echo 'window.location.href="EditUsers.php";';
        echo '</script>';
    } 
    $message = base64_encode(urlencode("Record Deleted Successfully"));
    header('Location:EditUsers.php?msg=' . $message);
    
    //if(!$sql) { die(mysqli_error()); }

//}
mysqli_close($conn);
?>