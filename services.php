<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <title>Services</title>

  <link rel="stylesheet" href="service.css">
  <link rel="stylesheet" href="style.css">


  <!-- bootstrap link -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

  <!-- bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
</head>

<body>




  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand border border-seccuess logo p-3" href="#"><img src="images/logo.png" width="35" height="40" class="img-fluid" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="web serice/index.php">Home <span class="sr-only"></span></a>
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
  </nav>
  <section class="service" id="service">
    <h1 class="heading">our services</h1>
    <div class="container">
      <div class="box-container">
        <?php
        include 'admin/config.php';
        $selectquery = "select * from services";

        $result = mysqli_query($conn, $selectquery);
        $nums = mysqli_num_rows($result);
        while ($res = mysqli_fetch_array($result)) {
        ?>
          <div class="box">
            <img src="<?php echo "imgupload/" . $res['image'];?>" alt="" />
            <h3><?php echo $res['title']; ?></h3>
            <h5><?php echo $res['price']; ?></h5>
            <a href="pan.php" class="btn">apply now</a>
          </div>
        <?php
        }
        ?>
      </div>

      <div class="container view-more-btn w-100 d-flex justify-content-center align-items-center">
        <!-- <div class="justify-content-center align-items-center">
            <a href="services.php" class="btn btn-primary">view more</a>
          </div> -->
      </div>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>