<?php 
echo $id=$_POST['sid'];
echo $name=$_POST['sname'];
echo $address=$_POST['saddress'];
echo $class=$_POST['sclass'];
echo $phone=$_POST['sphone'];

$conn= mysqli_connect("localhost", "root","", "crud") or die("connection failed.");
$sql = "UPDATE student SET name='{$name}', address ='{$address}', class={$class}, phone='{$phone}' where s_id=$id";
$result=mysqli_query($conn,$sql) or die ("Queary failed");

header ("Location: http://localhost/crud/crud/index.php");
mysqli_close($conn);
?>