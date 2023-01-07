<?php
error_reporting(0);
include 'config.php';


if (isset($_POST['submit'])) {
    // $username=$_POST['username'];
    $service_name = $_POST["servicename"];

    $iq = "insert into newusers(servicename) values('$service_name')";
    $q = $conn->query($iq);
    if ($q) {
        ?>
           <script>
            alert("New Service Add successfuly");
           </script>
        <?php
        header('location:users.php');
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new users</title>


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
                <form action="" method="post" class=" g-3" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="text-danger">New Service</legend>
                        <div class="form-group">
                            <label for="" class="form-label">Service Name</label>
                            <input type="text" class="form-control" name="servicename" id="servicename" placeholder="Service Name example: - PAN CARD" />
                        </div>

                        <div class="form-group my-2 w-100 text-center d-flex justify-content-between align-items-center">
                            <a href="users.php">BACK</a>
                            <button type="submit" class="btn btn-primary" name="submit">submit</button>
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