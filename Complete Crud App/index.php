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
<title>CRUD</title>
</head>
<body>
<div class="container-fluid bg-secondary p-3">
<h1  style="padding-bottom:10px;" class="text-center text-light">STUDENT'S RECORD</h1>    
   
<form action="search.php" method="get">
    
    <input type="search" name="search" placeholder="Search Students" class="form-control p-3">
        <br>
    <button type="submit" class="btn-lg">Search</button>
    </form>
</div>
      <!-- Navbar -->
      <ul class="nav bg-dark px-auto justify-content-center text-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php"><button class="btn-dark text-white p-2 btn-lg">HOME</button></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="create.php"><button class="btn-secondary text-white p-2 btn-lg">ADD</button></a>
      </li> 
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="update.php"><button class="btn-secondary text-white p-2 btn-lg">UPDATE</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="delete.php"><button class="btn-secondary text-white p-2 btn-lg">DELETE</button></a>
  </li>
  <li class="nav-item ms-auto">
  <a class="nav-link" aria-current="page" href="delete_all.php"><button class="btn-danger text-white p-2 btn-lg">Delete all Records</button></a>
</li>
</ul>

<!-- Navbar Ends -->

<div class="container p-1">
<div class="container-fluid p-2">

<?php
$conn=mysqli_connect('localhost','root','','app');
$sql="SELECT * FROM users";
$ans=mysqli_query($conn,$sql);
if(mysqli_num_rows($ans) > 0){
?>

<table class="table table-hover table-bordered text-center mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CLASS</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
            <th>GENDER</th>
            <th>PICTURE</th>
            <th colspan="3">OPERATIONS</th>
            
        </tr>
    </thead>
<tbody>
    <?php while($data=mysqli_fetch_assoc($ans)){ ?>
            <tr>
                <td><?php  echo $data['id'] ?></td>
                <td><?php  echo $data['name'] ?></td>
                <td><?php  echo $data['class'] ?></td>
                <td><?php  echo $data['address'] ?></td>
                <td><?php  echo $data['phone'] ?></td>
                <td><?php  echo $data['gender'] ?></td>
                <td><img src="./images/<?php  echo $data['profile'] ?>" alt="" style="height:50px"></td>
                <td><a href="inline_update.php?id=<?php echo $data['id'] ?>"><button class="btn-success p-1">Update</button></a></td>
                <td><a href="inline_del.php?id=<?php echo $data['id'] ?>"><button class="btn-danger p-1" onclick="return del()">Delete</button></a></td>    
            
            </tr>
<?php  } ?>
    </tbody>
</table>

</div>
</div>
<?php }
else{
    echo '<h1 class="text-center">No Record. ADD RECORD FIRST!</h1>';
}

?>
<script>

function del(){
    return  confirm("Do you Want to Delete this Record ?");
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>