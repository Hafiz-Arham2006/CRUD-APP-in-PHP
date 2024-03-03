<?php
$id=$_POST['id'];
$conn=mysqli_connect('localhost','root','','app');
$sql="DELETE FROM users WHERE id='$id'"; 
$ans=mysqli_query($conn,$sql);
header('location:index.php');

?>