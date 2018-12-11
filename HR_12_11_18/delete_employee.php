<?php
$id = $_GET['id'];

$db = mysqli_connect("localhost","root","","hr_db");
$result = mysqli_query($db,"delete from list_employee where id='$id'");
header("location:tables.php");


?>