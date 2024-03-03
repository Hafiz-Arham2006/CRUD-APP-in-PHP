<?php
$id=$_POST['id'];
$name=$_POST['name'];
$class=$_POST['class'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$profile_name=$_FILES['profile']['name'];
$profile_tmp=$_FILES['profile']['tmp_name'];
move_uploaded_file($profile_tmp, 'images/'. $profile_name);
$conn=mysqli_connect('localhost','root','','app');
$sql="UPDATE  users SET name= '$name' , class= '$class' , address = '$address'  ,  phone = '$phone' , gender= '$gender' , profile= '$profile_name' WHERE id='$id'";
$ans=mysqli_query($conn,$sql);

header('location:index.php') ;

?>