<?php



if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $servicename = $_POST['servicename'];
    $price = $_POST["price"];
    $doc1 = $_POST['doc1'];
    $doc2 = $_POST['doc2'];
    $doc3 = $_POST['doc3'];
    $doc4 = $_POST['doc4'];
    $doc5 = $_POST['doc5'];
    $doc6 = $_POST['doc6'];
    $doc7 = $_POST['doc7'];
    $doc8 = $_POST['doc8'];
    $doc9 = $_POST['doc9'];
    $doc10 = $_POST['doc10'];
    $doc11 = $_POST['doc11'];
    $doc12 = $_POST['doc12'];
    $doc13 = $_POST['doc13'];
    $doc14 = $_POST['doc14'];
    $doc15 = $_POST['doc15'];
    $timeline = $_POST['doc15'];
    $files = $_FILES['file'];


    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png', 'jpg', 'jpeg');
    if (in_array($filecheck, $fileextstored)) {
        $destinationfile = '../imgupload/' . $filename;
        move_uploaded_file($filetmp, $destinationfile);

        $iq = "update services set id=$id,title='$servicename',price='$price',doc1='$doc1',doc2='$doc2',doc3='$doc3',doc4='$doc4',doc5='$doc5',doc6='$doc6',doc7='$doc7',doc8='$doc8',doc9='$doc9',doc10='$doc10',doc11='$doc11',doc12='$doc12',doc13='$doc13',doc14='$doc14',doc15='$doc15',image='$destinationfile' where id=$id";
        $q = $conn->query($iq);
        header('location:../admin/services.php');
    } else {
        echo "uplaod file jpg jpeg and png only";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>images upload</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

</head>

<body>

<?php 
include '../include/include.php';
?>


    <div class="container w-100 d-flex flex-column justify-content-center align-items-center mt-4">
        <div class="card col-md-10">
            <span id="err"></span>
            <div class="card-title">
                <!-- <h4 class="text-danger text-center">Regitration</h4> -->
            </div>

            <div class="card-body">
                <form action="" method="post" class=" g-3" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="text-danger">New Service</legend>



                        <!-- php code  -->
                        <?php

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $s = "select * from services where id='$id'";
                            $result = $conn->query($s);
                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row);
                            }
                        ?>


                            <div class="form-group">
                                <label for="" class="form-label">Service Name</label>
                                <input type="text" class="form-control" name="servicename" id="title" value="<?php echo $row['title']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" id="title" value="<?php echo $row['price']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 1</label>
                                <textarea name="doc1" id="" rows="2" class="form-control" value="<?php echo $row['doc1']; ?>"></textarea>
                            </div>
                            <div class="form-group">

                                <label for="" class="form-label">Document 2</label>
                                <textarea name="doc2" id="" rows="2" class="form-control" value="<?php echo $row['doc2']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 3</label>
                                <textarea name="doc3" id="" rows="2" class="form-control" value="<?php echo $row['doc3']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 4</label>
                                <textarea name="doc4" id="" rows="2" class="form-control" value="<?php echo $row['doc4']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 5</label>
                                <textarea name="doc5" id="" rows="2" class="form-control" value="<?php echo $row['doc5']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 6</label>
                                <textarea name="doc6" id="" rows="2" class="form-control" value="<?php echo $row['doc6']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 7</label>
                                <textarea name="doc7" id="" rows="2" class="form-control" value="<?php echo $row['doc7']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 8</label>
                                <textarea name="doc8" id="" rows="2" class="form-control" value="<?php echo $row['doc8']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 9</label>
                                <textarea name="doc9" id="" rows="2" class="form-control" value="<?php echo $row['doc9']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 10</label>
                                <textarea name="doc10" id="" rows="2" class="form-control" value="<?php echo $row['doc10']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 11</label>
                                <textarea name="doc11" id="" rows="2" class="form-control" value="<?php echo $row['doc11']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 12</label>
                                <textarea name="doc12" id="" rows="2" class="form-control" value="<?php echo $row['doc12']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 13</label>
                                <textarea name="doc13" id="" rows="2" class="form-control" value="<?php echo $row['doc13']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 14</label>
                                <textarea name="doc14" id="" rows="2" class="form-control" value="<?php echo $row['doc14']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Document 15</label>
                                <textarea name="doc15" id="" rows="2" class="form-control" value="<?php echo $row['doc15']; ?>"></textarea>
                            </div>
                            <!-- <div class="form-group">
                            <label for="" class="form-label">price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="enter your  username here" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">description</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="enter your  username here" />
                        </div> -->
                            <div class="form-group">
                                <label for="" class="form-label">service image</label>
                                <input type="file" class="form-control" name="file" />
                            </div>

                            <div class="form-group my-2 w-100 text-center">
                                <button type="submit" class="btn btn-primary" name="submit">submit</button>
                                <a href="login.php">already have an account</a>
                            </div>
                        <?php
                        }
                        ?>
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