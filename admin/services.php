<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <title>Dashboard</title>

  <!-- CSS only -->
  <link rel="stylesheet" href="index.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />




  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <section class="navbar">
    <nav>
      <div class="brand">
        <img src="../images/logo.png" alt="" class="logo" />
      </div>
      <span class="brand-name">Dashboard</span>
      <div class="menu">
        <ul class="menu-items">
          <li class="item">
            <span class="icon">
              <i class="fa-solid fa-bell"></i>
            </span>
          </li>
          <li class="item">
            <span class="icon"><i class="fa-solid fa-envelope-open-text"></i></span>
          </li>

          <li class="item">
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <span class="user"></span>
              </button> <?php echo  $_SESSION['username'] ?>
              <ul class="dropdown-menu w-5">
                <script src=""></script>
                <li><a class="dropdown-item" href="#">My account</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <script src=""></script>
                <li><a class="dropdown-item" href="logout.php"> Logout</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </section>

  <section class="sidebar">
    <div class="">
      <div class="container">
        <ul class="sidebar-item">
          <li class="item"><a href="welcome.php"> <i class="fa-solid fa-house"></i>Dashboard</a></li>
          <li class="item"><a href="users.php"><i class="fa-solid fa-users"></i>users</a></li>
          <li class="item"><a href=""><i class="fa-solid fa-people-group"></i>team</a></li>
          <li class="item"><a href="users.php"> <i class="fa-solid fa-business-time"></i>services</a></li>
          <li class="item"><a href=""><i class="fa-solid fa-person-biking"></i>delivery</a></li>
        </ul>
      </div>
      <hr>
      <div class="account">
        <ul class="menu-item">
          <li class="list-item"><a href=""> My account</a></li>
          <li class="list-item"><a href=""> Settings</a></li>
          <li class="list-item"><a href="
                logout.php"> Logout</a></li>
        </ul>
      </div>
    </div>
    <section class="main">
      <div class="container text-center">
        <a href="new-service.php" class="btn btn-primary">New</a>
        <!-- <div class="grid"> -->

        <table class="table col-md-6">
          <thead>
            <tr>

              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">Price</th>
              <th scope="col">Documentation</th>
              <th scope="col">Edit</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php
            include 'config.php';
            $selectquery = "select * from services";

            $result = mysqli_query($conn, $selectquery);
            $nums = mysqli_num_rows($result);
            $no;
            while ($res = mysqli_fetch_array($result)) {
              $no = $no + 1;
            ?>

              <tr class="text-left">
                <!-- <th scope="row">1</th> -->
                <td><?php echo $no; ?></td>
                <td><?php echo $res['title']; ?></td>
                <td><?php echo $res['price']; ?></td>
                <td><a href="../Documentation/service-doc.php?id=<?php echo $res['id']; ?>" class="btn btn-success">Documents</a></td>
                <td> <button class="btn btn-primary text-white"><a href="update-service.php?id=<?php echo $res['id']; ?>" class="text-white">Edit</a></button></td>
                <td> <button class="btn btn-primary text-white"><a href="delete-service.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
              </tr>
            <?php
            }
            ?>


      </div>

      </div>


    </section>
  </section>


  <!-- <div class="footer w-100 text-center bg-dark"><a href="">Mizanur alrasid</a></div> -->

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>