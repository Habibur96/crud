<?php
$s_id= $_GET['id'];

$conn= mysqli_connect("localhost", "root","", "crud") or die("connection failed.");


$sql = "DELETE FROM student Where S_id={$s_id}";

$result=mysqli_query($conn,$sql) or die ("Queary failed");
header ("Location: http://localhost/crud/crud/index.php");
mysqli_close($conn);

?>