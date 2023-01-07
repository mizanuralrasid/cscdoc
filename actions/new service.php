<?php
include '../admin/config.php';
if (isset($_POST['submit'])) {
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

        $iq = "insert into services(title,price,doc1,doc2,doc3,doc4,doc5,doc6,doc7,doc8,doc9,doc10,doc11,doc12,doc13,doc14,doc15,image) values('$servicename','$price','$doc1','$doc2','$doc3','$doc4','$doc5','$doc6','$doc7','$doc8','$doc9','$doc10','$doc11','$doc12','$doc13','$doc14','$doc15','$destinationfile')";
        $q = $conn->query($iq);
        header('location:../admin/services.php');
    } else {
        echo "uplaod file jpg jpeg and png only";
    }
}

?>