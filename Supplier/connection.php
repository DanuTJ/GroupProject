<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "testdb";
$conn=mysqli_connect($servername,$username,$password,"cusdetails");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>