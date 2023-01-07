<?php


//This script will handle login
session_start();

// check if the user is already logged in
if (isset($_SESSION['username'])) {
  header("location: welcome.php");
  exit;
}
require 'config.php';




if (isset($_POST['submit'])) {
  if (!empty(trim($_POST['username'])) && !empty(trim($_POST['password'])) && !empty(trim($_POST['cpassword']))) {
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);
    $cpassword = ($_POST["cpassword"]);




    // convert your password into hash_password
    $pass_hash = password_hash($password, PASSWORD_BCRYPT);
    $cpass_hash = password_hash($cpassword, PASSWORD_BCRYPT);



    // select the username form the exiting table and verify the user information if the information is already uesd let them know message this username is already taken


    $s = "select * from users where username='$username'";

    // execute the query 
    $q = $conn->query($s);


    // verify the information is already taken or not
    $nums = mysqli_num_rows($q);
    if ($nums > 0) {
?>
      <script>
        // document.getElementById("err").innerHTML = "This username is already taken try another";
        alert("this username is already taken try another");
      </script>
      <!-- echo"this username is already taken try another"; -->
      <?php
    } else {
      if ($password === $cpassword) {
        $r = "insert into users(username,password) values('$username','$pass_hash')";
        $rq = $conn->query($r);
        if ($rq) {
      ?>

          <script>
            alert("Thank you for Register");
          </script>
          <!-- echo "inserted successfully"; -->
        <?php

          header('location:login.php');
        } else {
          echo "not inserted";
        }
      } else {
        ?>
        <script>
          alert("password does not match");
        </script>
        <!-- echo ("password does not match"); -->
    <?php
        header('locaton:register.php');
      }
    }
  } else {
    ?>
    <script>
      // document.getElementById('#err').innerHTML = "All fields are required!";
      alert("all fields are required");
    </script>
<?php
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

</head>

<body>
  <div class="container w-100 d-flex flex-column justify-content-center align-items-center mt-4">
    <div class="card col-md-6">
      <span id="err"></span>
      <div class="card-title">
        <!-- <h4 class="text-danger text-center">Regitration</h4> -->
      </div>

      <div class="card-body">
        <form action="" method="post" class=" g-3 needs-validation" novalidate>
          <fieldset>
            <legend class="text-danger">Registration in php</legend>
            <div class="form-group">
              <label for="" class="form-label">name</label>
              <input type="text" class="form-control" name="username" id="name" placeholder="enter your  name here" />
            </div>
            <div class="form-group">
              <label for="" class="form-label">password</label>
              <input type="text" class="form-control" name="password" id="password" placeholder="password" />
            </div>
            <div class="form-group">
              <label for="" class="form-label">confirm password</label>
              <input type="text" class="form-control" name="cpassword" id="cpassword" placeholder="confirm password" />
            </div>
            <div class="form-group my-2 w-100 text-center">
              <button type="submit" class="btn btn-primary" name="submit" onclick="submit()">submit</button>
              <a href="login.php">already have an account</a>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  </div>




  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>