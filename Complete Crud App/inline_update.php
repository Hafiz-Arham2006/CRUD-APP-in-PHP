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
<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','app');
$sql="SELECT * FROM users WHERE id=$id";
$ans=mysqli_query($conn,$sql);
if(mysqli_num_rows($ans) >0){
    while($data=mysqli_fetch_assoc($ans)){

 
?>
<div class="container p-5">
<center>
<form action="inline_edit.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td><input type="hidden" value="<?php echo $data['id'] ?>" name="id" class="form-control"></td>
            <td rowspan="7"><img src="./images/<?php echo $data['profile'] ?>" alt="" style="height:260px"></td>
        </tr>
        <tr>
            <td><input type="text" value="<?php echo $data['name'] ?>" name="name" class="form-control" placeholder="Student Name"></td>
        </tr>
        <tr>
            <td><input type="text" value="<?php echo $data['class'] ?>" name="class" class="form-control" placeholder="Student Class"></td>
        </tr>
        <tr>
            <td><input type="text" value="<?php echo $data['address'] ?>" name="address" class="form-control" placeholder="Student Address"></td>
        </tr>
        <tr>
            <td><input type="number" value="<?php echo $data['phone'] ?>" name="phone" class="form-control" placeholder="Student Phone"></td>
        </tr>
        <tr>
            <td><input type="text" value="<?php echo $data['gender'] ?>" name="gender" class="form-control" placeholder="Student Gender"></td>
        </tr>
        <tr>
            <td><label for="image"><h5>Choose Picture: </h5></label><input type="file" name="image"  class="form-control" placeholder="Student Picture"></td>
        </tr>
        <tr>
            <td><button type="submit" class="btn-lg btn-primary mt-2">Update</button></td>
        </tr>    
    </table>
</form>
</center>

</div>
<?php
   }
}
?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>