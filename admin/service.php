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
                    <a href="Dashboard.php">
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

                    <a href="">
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
            <section class="row">
                <div class="recent-order">
                    <div class="thead header d-flex justify-content-between p-10">
                        <h5 class="text">Recent orders</h5>
                        <a href="new-service.php" class="btn btn-primary">New</a>
                        <a href="" type="" class="btn-primary font">View all</a>
                    </div>
                    <table>
                        <thead>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Documentation</th>
                            <th scope="col">Edit</th>
                            <th scope="col">delete</th>
                        </thead>
                        <tbody>
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
                                    <td> <button class="btn btn-primary"><a href="update-service.php?id=<?php echo $res['id']; ?>" class="text-white">Edit</a></button></td>
                                    <td> <button class="btn btn-danger"><a href="delete-service.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
            </section>
        </div>
    </div>

    <script>
        function toggle() {
            let x = document.getElementById("sidebar");
            let y = document.getElementById("home");

            x.classList.toggle('active');
            //     if(x.style.left == "-655px"){
            //     x.style.left = "0px";
            //     y.style.left = "-400px";
            // }
            // else{
            //     x.style.left = "-655px";
            // }
        }
    </script>
</body>

</html>