<?php
 $name=$_POST['sname'];
 $address=$_POST['saddress'];
 $class=$_POST['class'];
 $phone=$_POST['sphone'];

$conn= mysqli_connect("localhost", "root","", "crud") or die("connection failed.");
$sql = "INSERT INTO student(name, address, class, phone) values ('{$name}','{$address}','{$class}','{$phone}')";
$result=mysqli_query($conn,$sql) or die ("Queary failed");

header ("Location: http://localhost/crud");
mysqli_close($conn);
?>