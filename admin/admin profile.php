<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Profile</title>
    <style>
        #profile input {
            border: none;
        }

        #account {
            /* margin-left: 500px; */
            display: none;
            transition: 0.8s ease-in;
        }

        #setting {
            /* margin-left: 500px; */
            display: none;
            transition: 0.8s ease-in;
        }

        #admin_profile {
            height: 100vh;
            box-shadow: 2px 2px 20px gray;
        }
    </style>
</head>

<body>
    <?php
    include '../include/include.php'
    ?>
    <div class="container d-flex align-items-center py-4" id="admin_profile">
        <div class="container text">
            Update your Profile here
        </div>
        <div class="card col-md-8 mt-4">
            <div class="container d-flex justify-content-between align-items-center bg-secondary">
                <h5 href="" class="card-title text-uppercase text-center btn btn-secondary" onclick="profile()">
                    Profile
                </h5>
                <h5 href="" class="card-title text-uppercase text-center btn btn-secondary" onclick="account()">
                    My Account
                </h5>
                <h5 href="" class="card-title text-uppercase text-center btn btn-secondary" onclick="setting()">
                    Setting
                </h5>
            </div>
            <!-- <hr> -->
            <div class="card-body d-flex">



                <div class="container" id="profile">
                    <?php
                    include_once 'config.php';
                    $s = "select * from users";
                    $result = $conn->query($s);
                    $nums = mysqli_num_rows($result);
                    while ($res = mysqli_fetch_array($result)) {
                        // echo $res['password'];
                    ?>
                        <!-- <th scope="row">1</th> -->
                        <h4 class="title">Username</h4>
                        <span class="text-danger"><?php echo $res['username']; ?></span>
                        <h4>Password</h4>
                        <input type="password" disabled data-bs-toggle="password" class="border-none text-danger" value="<?php echo $res['password']; ?>" /> <br>
                        <a href="recored.php?id=<?php echo $res['id']; ?>" class="btn btn-primary text-white">update</a>
                    <?php
                    }
                    ?>
                </div>



                <div class="container text-center" id="account">
                    <p>My Account</p>
                </div>





                <div class="container text-right" id="setting">
                    <p>Setting</p>
                </div>




            </div>
        </div>
    </div>





    <script>
        var x = document.getElementById("profile");
        var y = document.getElementById("account");
        var z = document.getElementById("setting");

        function profile() {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
        }

        function account() {
            x.style.display = "none";
            y.style.display = "block";
            z.style.display = "none";
        }

        function setting() {
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "block";
        }
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>