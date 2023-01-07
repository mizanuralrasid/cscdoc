<?php

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
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
  <title>Dashboard</title>

  <!-- CSS only -->
  <link rel="stylesheet" href="index.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />

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
                <li><a class="dropdown-item" href="admin profile.php">My account</a></li>
                <li><a class="dropdown-item" href="admin-profile.php">Setting</a></li>
                <script src=""></script>
                <li><a class="dropdown-item" href="logout.php"> Logout</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </section>

  <main class="main">
    <div class="container">


      <div class="grid">
        <a href="services.html" class="item" id="">
          <span class="icon"><i class="fa-solid fa-house"></i></span>home</a>
        <a href="users.php" class="item" id=""><span class="icon"><i class="fa-solid fa-users"></i></span>users</a>
        <a href="" class="item" id=""><span class="icon"><i class="fa-solid fa-people-group"></i></span>
          team</a>
        <a href="services.php" class="item" id=""><span class="icon"><i class="fa-solid fa-business-time"></i></span> services</a>
        <!-- <a href="" class="item" id=""></a> -->
        <!-- <a href="" class="item" id=""></a> -->
      </div>
    </div>
  </main>
  <div class="footer w-100 h-5 text-center bg-white"><a href="">Mizanur alrasid</a></div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>