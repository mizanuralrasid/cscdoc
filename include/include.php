<?php
include '../admin/config.php';
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .navbar {
      margin-top: 0px;
      width: 100%;
      position: fixed;
      z-index: 1000;
    }

    .dropdown {
      margin-right: 100px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-evenly align-items-center">
    <!-- <a class="navbar-brand" href="#">cscdocs</a> -->
    <div class="container">

      <img src="../images/logo.png" alt="" height="50px" width="50px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-evenly" id="navbarNavDropdown">
      <div class="">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>

      <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active d-flex justify-content-bewteen align-items-center">
            <a class="nav-link color-white" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"></a><span class="text-white"> <?php echo  $_SESSION['username'] ?></span>

          <li class="item">
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <span class="user"></span>
              </button>
              <ul class="dropdown-menu w-5">
                <script src=""></script>
                <li><a class="dropdown-item" href="admin profile.php">My account</a></li>
                <li><a class="dropdown-item" href="admin profile.php">Setting</a></li>
                <script src=""></script>
                <li><a class="dropdown-item" href="logout.php"> Logout</a></li>
              </ul>
            </div>
          </li>



          </li>
        </ul>
      </div>

    </div>
  </nav>


  <!-- JavaScript Bundle with Popper -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>