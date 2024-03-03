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
<title>Delete</title>
</head>
<body>
    <div class="container-fluid bg-secondary text-white text-center p-3">
        <h1>DELETE RECORD</h1>
    </div>
       <!-- Navbar -->
<ul class="nav bg-dark px-auto justify-content-center text-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php"><button class="btn-secondary text-white p-2 btn-lg">HOME</button></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="update.php"><button class="btn-secondary text-white p-2 btn-lg">ADD</button></a>
      </li> 
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="update.php"><button class="btn-secondary text-white p-2 btn-lg">UPDATE</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="delete.php"><button class="btn-dark text-white p-2 btn-lg">DELETE</button></a>
  </li>
</ul>

<!-- Navbar Ends -->
<div class="container">
    
<form action="search_del.php" method="post" enctype="multipart/form-data">
<table class="table">
    <tr>
        <td><input type="number" name="id" class="form-control" placeholder="Enter ID"></td>
    </tr>
    <tr>
        <td><button type="submit" class="btn-lg btn-dark">Delete</button></td>
    </tr>
</table>
</form>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>