<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "audible";
$conn = new mysqli($servername,$username,$password,$dbname);


$sql = "select * from cart where user_id = '$userid'";
$result  = mysqli_query($conn, $sql);
echo mysqli_num_rows($result);

?>