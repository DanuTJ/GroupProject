<?php
<<<<<<< HEAD:Item/deleted.php
include_once 'connection.php';
$sql = "DELETE FROM items WHERE id='" . $_GET["id"] . "'" ;
=======
include_once '../../config/connection.php';
$sql = "DELETE FROM items WHERE id='" . $_GET["id"] . "'";
>>>>>>> d518cef17a2282c9c2b95d8c45173feee8c054a8:src/Item/deleted.php
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>