<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="index_.css">
  <title>Users</title>
</head>

<body>

  <div class="container bg-secondary py-5 mt-4 shadow-lg rounded">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="Dashboard.php" class="btn btn-success">BACK</a>
      <a href="new_user_service.php" class="btn btn-secondary">New</a>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Service Name</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <!-- <th scope="col"></th> -->
        </tr>
      </thead>
      <tbody>
        <!-- php code starts here -->

        <?php
        error_reporting(0);
        include 'config.php';
        $selectquery = "select * from newusers";

        // $result = mysqli_query($conn, $selectquery);
        $result = $conn->query($selectquery);
        $nums = mysqli_num_rows($result);
        $no;
        while ($res = mysqli_fetch_array($result)) {
          $no = $no + 1;
        ?>
          <tr>
            <!-- <th scope="row">1</th> -->
            <td><?php echo $no; ?></td>
            <td><?php echo $res['servicename']; ?></td>
            <td><a href="users_name.php" class=" btn btn-primary text-white">view</a></td>
            <td><a href="delete-service.php?id=<?php echo $res['id']; ?>" class=" btn btn-primary text-white">Delete</a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>




  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>