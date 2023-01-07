<?php
include_once '../admin/config.php';


if (isset($_POST['submit'])) {
  $id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


  <!-- css link -->
  <link rel="stylesheet" href="../css/pan-doc.css">

  <!-- bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container d-flex flex-column justify-content-center align-items-center pan-doc" style="height: 100%;">
    <div class="card w-100  border border-primary">
      <div class="card-body">
        <h5 class="card-title">Documents</h5>
        <h6 class="card-subtitle mb-2 text-muted">SUPPORTING DOCUMENTS(INDIVIDUAL):</h6>
        <p class="card-text">
        <ol>
          <?php

          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $s = "select * from services where id='$id'";
            $result = $conn->query($s);
            if (mysqli_num_rows($result) > 0) {
              foreach ($result as $row);
            }
          ?>
            <h4><?php echo $row['title']; ?></h4>
            <p>
            <h5>Price <?php echo $row['price']; ?></h5>
            </p>
            <div class="">
              <?php echo $row['doc1']; ?>
            </div>
            <div class="">
              <?php echo $row['doc2']; ?>
            </div>
            <div class="">
              <?php echo $row['doc3']; ?>
            </div>
            <div class="">
              <?php echo $row['doc4']; ?>
            </div>
            <div class="">
              <?php echo $row['doc5']; ?>
            </div>
            <div class="">
              <?php echo $row['doc6']; ?>
            </div>
            <div class="">
              <?php echo $row['doc7']; ?>
            </div>
            <div class="">
              <?php echo $row['doc8']; ?>
            </div>
            <div class="">
              <?php echo $row['doc9']; ?>
            </div>
            <div class="">
              <?php echo $row['doc10']; ?>
            </div>
            <div class="">
              <?php echo $row['doc11']; ?>
            </div>
            <div class="">
              <?php echo $row['doc12']; ?>
            </div>
            <div class="">
              <?php echo $row['doc13']; ?>
            </div>
            <div class="">
              <?php echo $row['doc14']; ?>
            </div>
            <div class="">
              <?php echo $row['doc15']; ?>
            </div>

          <?php
          }
          ?>
          </p>
          <div class="container apply-btn">
            <a href="../forms/<?php echo $row['title'].".php" ?>" class="card-link w-25"><img src="../images/applyonline-button.gif" alt=""></a>

          </div>

      </div>
    </div>
  </div>







  <!-- bootstrap js link -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>