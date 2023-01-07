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
  <title>Dashboard</title>
  <link rel="stylesheet" href="Dashboard.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="sidebar" id="sidebar">
      <div class="brand">
        <div class="logo">
          <img src="../images/logo.png" alt="" class="" />
        </div>
        <div class="brand-name"> <?php echo  $_SESSION['username'] ?></div>
      </div>
      <div class="list-groups">
        <ul class="list-items">
          <a href="">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-house"></i></span><span class="text">Dashboard</span>
            </li>
          </a>

          <a href="">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-people-group"></i></span><span class="text">Customer</span>
            </li>
          </a>
          <a href="">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-comment"></i></span><span class="text">Message</span>
            </li>
          </a>

          <a href="admin profile.php">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-gears"></i></span><span class="text">Settins</span>
            </li>
          </a>

          <a href="admin profile.php">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-lock"></i></span><span class="text">Password</span>
            </li>
          </a>
          <a href="logout.php">
            <li class="item">
              <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span><span class="text">Sign out</span>
            </li>
          </a>
        </ul>
      </div>
    </div>

    <!-- home section starts here -->
    <div class="home" id="home">
      <!-- header section starts here -->
      <div class="head" id="head">
        <div class="sidebar-toggle">
          <i class="fa-solid fa-bars" onclick="toggle()"></i>
        </div>
        <div class="search">
          <form action="" class="form">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="search here" />
          </form>
        </div>
        <div class="user">
          <img src="../images/logo.png" alt="" class="" />
        </div>
      </div>
      <!-- header ends here -->

      <!-- main -->
      <section class="main">
        <div class="top">
          <a href="" class="item">
            <div class="text">Daily Users</div>
            <div class="icon"><i class="fa-solid fa-eye"></i></div>
          </a>
          <a href="users.php" class="item">
            <div class="text">Users</div>
            <div class="icon"><i class="fa-solid fa-users"></i></div>
          </a>
          <a href="" class="item">
            <div class="text">Team</div>
            <div class="icon"><i class="fa-solid fa-people-group"></i></div>
          </a>
          <a href="service.php" class="item">
            <div class="text">Services</div>
            <div class="icon"><i class="fa-solid fa-business-time"></i></div>
          </a>
          <a href="" class="item">
            <div class="text">Message</div>
            <div class="icon"><i class="fa-solid fa-comment"></i></div>
          </a>
        </div>
      </section>
    </div>
  </div>

  <script>
    function toggle() {
      let x = document.getElementById("sidebar");
      let y = document.getElementById("home");
      let z = document.getElementById("brand-name");
      let logo = document.getElementsByClassName("logo");

      // x.classList.toggle('active');
      if (x.style.width == "20vw") {
        x.style.width = "5vw";
        z.style.display = "none";
        logo.style.display = "none";
        // y.style.left = "-400px";
      } else {
        x.style.width = "20vw";
        z.style.display = "block";
      }
    }
  </script>
</body>

</html>