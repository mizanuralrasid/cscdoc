<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>pan card users</title>
</head>

<body>

    <div class="container">

        <table class="table table-borderless mt-5">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
                        <?php
            include 'config.php';
            error_reporting(0);
            $selectquery = "select * from aadhar";

            $result = mysqli_query($conn, $selectquery);
            $nums = mysqli_num_rows($result);
            $no;
            while ($res = mysqli_fetch_array($result)) {
              $no = $no + 1;
            ?>

            <tr>
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $res['name']; ?></td>
                <td><a href="services/service.php?id=<?php echo $res['id']; ?>" class="btn btn-primary">View</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
    
    
    
    <!-- bootstrap js link -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>