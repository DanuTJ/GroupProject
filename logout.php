<?php
//start the session
session_start();

//destroy the session
if(session_destroy()) {
    //redirect to login
    header("Location:login.php");
    exit;
}
?>