<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>UPDATE</title>
</head>
<body>
    <div class="container-fluid bg-secondary p-3 text-center text-white">
        <h1>UPDATE RECORD</h1>
    </div>
    <!-- Navbar -->
<ul class="nav bg-dark px-auto justify-content-center text-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php"><button class="btn-secondary text-white p-2 btn-lg">HOME</button></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="create.php"><button class="btn-secondary text-white p-2 btn-lg">ADD</button></a>
      </li> 
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="update.php"><button class="btn-dark text-white p-2 btn-lg">UPDATE</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="delete.php"><button class="btn-secondary text-white p-2 btn-lg">DELETE</button></a>
  </li>
</ul>

<!-- Navbar Ends -->

<div class="container">
<form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

<table class="table">
    <tr>
        <td><input type="number" name="id" class="form-control" placeholder="Enter ID"></td>
    </tr>
    <tr>
        <td><button type="submit" name="showbtn" class="btn-lg btn-success">Show Data</button></td>
    </tr>
</table>
</form>
</div>
<?php
if(isset($_POST['showbtn'])){
    $id=$_POST['id'];
$conn=mysqli_connect('localhost','root','','app');
$sql="SELECT * FROM users WHERE id='$id'";
$ans=mysqli_query($conn,$sql);
if(mysqli_num_rows($ans)){
while($data=mysqli_fetch_assoc($ans)){
?>
<div class="container">
<form action="edit.php" method="post" enctype="multipart/form-data">
    <table class="table">
            <tr>
                <td><input type="hidden" value="<?php echo $data['id'] ?>" name="id" class="form-control"></td>
            </tr>

        <tr>
            <td><input type="text" class="form-control" value="<?php echo $data['name'] ?>" name="name" placeholder="Enter Name"></td>
            <td rowspan="5"><img src="./images/<?php   echo $data['profile'] ?>" alt=""  style="height:250px"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" value="<?php echo $data['class'] ?>" name="class" placeholder="Enter Class"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" value="<?php echo $data['address'] ?>" name="address" placeholder="Enter Address"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" value="<?php echo $data['phone'] ?>" name="phone" placeholder="Enter Phone"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" value="<?php echo $data['gender'] ?>" name="gender" placeholder="Enter Gender"></td>
        </tr>
        <tr>
            <td><h5>Update Picture: </h5></td>
        </tr>
        <tr>
           <td><input type="file" name="profile" class="form-control"></td>
        </tr>
        <tr>
            <td><button type="submit" class="btn-lg btn-dark">Update</button></td>
        </tr>
    </table>
</form>
</div>

<?php


}
}
}
?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>