<?php
$id=$_POST['id'];
$name=$_POST['name'];
$class=$_POST['class'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$profil_name=$_FILES['profile']['name'];
$profile_tmp=$_FILES['profile']['tmp_name'];
move_uploaded_file($profile_tmp,'images/'.$profil_name);
$conn=mysqli_connect('localhost','root','','app');
$sql="INSERT INTO users (name , class , address , phone , gender , profile)
VALUES ('$name', '$class', '$address' , '$phone' , '$gender' ,'$profil_name')";
$ans=mysqli_query($conn,$sql);

header('location:index.php')
?>