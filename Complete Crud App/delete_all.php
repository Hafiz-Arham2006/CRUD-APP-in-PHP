<?php
$conn=mysqli_connect('localhost','root','','app');
$sql="TRUNCATE users";
$ans=mysqli_query($conn,$sql);

header('location:index.php');

?>