<?php
include 'config.php';



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Service</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

</head>

<body>
    <div class="container w-100 d-flex flex-column justify-content-center align-items-center mt-4">
        <div class="card col-md-10">
            <span id="err"></span>
            <div class="card-title">
                <!-- <h4 class="text-danger text-center">Regitration</h4> -->
            </div>

            <div class="card-body">
                <form action="../actions/new service.php" method="post" class=" g-3" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="text-danger">New Service</legend>
                        <div class="form-group">
                            <label for="" class="form-label">Service Name</label>
                            <input type="text" class="form-control" name="servicename" id="title" placeholder="enter service name" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" id="title" placeholder="enter price example Rs: 100" />
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 1</label>
                            <textarea name="doc1" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 2</label>
                            <textarea name="doc2" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 3</label>
                            <textarea name="doc3" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 4</label>
                            <textarea name="doc4" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 5</label>
                            <textarea name="doc5" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 6</label>
                            <textarea name="doc6" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 7</label>
                            <textarea name="doc7" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 8</label>
                            <textarea name="doc8" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 9</label>
                            <textarea name="doc9" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 10</label>
                            <textarea name="doc10" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 11</label>
                            <textarea name="doc11" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 12</label>
                            <textarea name="doc12" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 13</label>
                            <textarea name="doc13" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 14</label>
                            <textarea name="doc14" id="" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Document 15</label>
                            <textarea name="doc15" id="" rows="2" class="form-control"></textarea>
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
                            <a href="services.php" class="btn btn-primary">back</a>
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