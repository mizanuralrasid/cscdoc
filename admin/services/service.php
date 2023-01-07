<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container p-2">
        <div class="card p-3" style="border: none;">
            <h5 class="card-title text-center">Application Information</h5>
            <div class="card-body py-2">
                <table class="table table-bordered">
                    <?php
                    include '../config.php';
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $s = "select * from aadhar where id='$id'";
                        $result = $conn->query($s);
                        if (mysqli_num_rows($result) > 0) {
                            foreach ($result as $row);
                        }
                    ?>
                        <tr>
                            <td>Name</td>
                            <td><?php echo $row['name']; ?></td>
                        </tr>
                        <tr>
                            <td>fathers name/husband name</td>
                            <td><?php echo $row['fhname']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><?php echo $row['phone']; ?></td>
                        </tr>
                        <tr>
                            <td>village</td>
                            <td><?php echo $row['village']; ?></td>
                        </tr>
                        <tr>
                            <td>post office</td>
                            <td><?php echo $row['postoffice']; ?></td>
                        </tr>
                        <tr>
                            <td>police station</td>
                            <td><?php echo $row['policestation']; ?></td>
                        </tr>
                        <tr>
                            <td>districk</td>
                            <td><?php echo $row['dist']; ?></td>
                        </tr>
                        <tr>
                            <td>state</td>
                            <td><?php echo $row['state']; ?></td>
                        </tr>
                        <tr>
                            <td>pin</td>
                            <td><?php echo $row['pin']; ?></td>
                        </tr>
                        <tr>
                            <td>city</td>
                            <td><?php echo $row['city']; ?></td>
                        </tr>
                        <tr>
                            <td>state</td>
                            <td><?php echo $row['s_state']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <!-- <button class="btn btn-success" download>download</button> -->
        <!-- <a href="service.php" download>Download</a> -->
    </div>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>