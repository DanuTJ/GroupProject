<?php
include_once 'connection.php';include_once '../../config/connection.php';
include_once '../../public/includes/session.php';$sql = "DELETE FROM details WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>