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
<title>ADD</title>
</head>
<body>
<div class="container-fluid bg-secondary text-white text-center p-3">
        <h1>ADD RECORD</h1>
    </div>
     <!-- Navbar -->
<ul class="nav bg-dark px-auto justify-content-center text-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php"><button class="btn-secondary text-white p-2 btn-lg">HOME</button></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="create.php"><button class="btn-dark text-white p-2 btn-lg">ADD</button></a>
      </li> 
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="update.php"><button class="btn-secondary text-white p-2 btn-lg">UPDATE</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="delete.php"><button class="btn-secondary text-white p-2 btn-lg">DELETE</button></a>
  </li>
</ul>

<!-- Navbar Ends -->
<div class="container p-3">
    <center>
    <form action="add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td><input type="hidden" name="id" placeholder="id" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="text" name="name" placeholder="Enter Name" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="text" name="class" placeholder="Enter Class" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="text" name="address" placeholder="Enter Address" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="text" name="phone" placeholder="Phone No" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="text" name="gender" placeholder="Gender" class="form-control"></td>
        </tr>
        <tr>
            <td><h5>Choose Picture :</h5><input type="file" name="profile" class="form-control"></td>
        </tr>
        <tr>
            <td><button type="submit" class="btn-lg btn-primary mt-2">ADD</button></td>
        </tr>
    </table>
    </center>
</div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>