<?php
include '../admin/config.php';
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $fhname = $_POST["fhname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $village = $_POST["village"];
  $poffice = $_POST["poffice"];
  $pstation = $_POST["pstation"];
  $dist = $_POST['dist'];
  $state = $_POST['state'];
  $pin = $_POST['pin'];
  $city = $_POST['city'];
  $s_state = $_POST['select_state'];




  $sql = "insert into aadhar(name,fhname,email,phone,village,postoffice,policestation,dist,state,pin,city,s_state) values('$name','$fhname','$email','$phone','$village','$poffice','$pstation','$dist','$state','$pin','$city','$s_state')";
  $q = $conn->query($sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <title>AADHAR Apply</title>

  <!-- css link -->
  <link rel="stylesheet" href="../css/registration.css">
  <!-- bootstrap css link  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <section class="container justify-content-center align-items-center registration">

    <div class="head-img">

      <img src="../images/back.png" alt="">
    </div>
    <div class="header text-center m-5">

      <h2>Application</h2>
      <div class="sub-header">
        <h4>Applicant information</h4>
      </div>
    </div>
    <form action="" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="applyfor">Fist Name <span class="required">*</span></label>
          <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter your Name" required>
        </div>

        <div class="form-group col-md-6">
          <label for="inputfhname">Fathers Name / Husband Name <span class="required">*</span></label>
          <input type="text" class="form-control" name="fhname" id="inputfhname" placeholder="fathers name or husband name" required>
        </div>
      </div>



      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
        </div>

        <div class="form-group col-md-6">
          <label for="inputPhone">Phone <span class="required">*</span></label>
          <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="Phone">
        </div>
      </div>

      <div class="address">
        <h5>Address</h5>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="village" id="inputVillage" placeholder="Village" required>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="poffice" id="inputpoffice" placeholder="post office" required>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="pstation" id="inputPstation" placeholder="police sattaion" required>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="dist" id="inputPassword4" placeholder="dist" required>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="state" id="inputPassword4" placeholder="state" required>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="pin" id="inputPassword4" placeholder="Pin" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" name="city" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" name="select_state" class="form-control">
            <option selected>Choose...</option>
            <option>Andhra Pradesh</option>
            <option>Arunachal Pradesh</option>
            <option>Assam</option>
            <option value="">Assam</option>
            <option value="">Bihar</option>
            <option value="">Chchattisgarh</option>
            <option value="">Goa</option>
            <option value="">Gujrat</option>
            <option value="">Jharkhand</option>
            <option value="">Karnataka</option>
            <option value="">Madhya Pradesh</option>
            <option value="">Maharashtra</option>
            <option value="">Maniour</option>
            <option value="">Meghalaya</option>
            <option value="">Mizoram</option>
            <option value="">Nagaland</option>
            <option value="">Odisha</option>
            <option value="">Punjab</option>
            <option value="">Rajasthan</option>
            <option value="">Sikkim</option>
            <option value="">Tamil Nadu</option>
            <option value="">Telehgana</option>
            <option value="">Tripura</option>
            <option value="">Uttra Pradesh</option>
          </select>
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="applyfor">Birth Certificate<span class="required">*</span></label>
          <input type="file" class="form-control" id="inputEmail4" placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Aadhar Card(parent or Guirdien)<span class="required">*</span></label>
          <input type="file" class="form-control" id="inputPassword4" placeholder="fathers name or husband name">
        </div>
      </div>




      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="applyfor">Supporting Documents(for major) <span class="required">*</span></label>
          <input type="file" class="form-control" name="" id="inputEmail4" placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Voter Card/Pan Card<span class="required">*</span></label>
          <input type="file" class="form-control" id="inputPassword4" placeholder="fathers name or husband name">
        </div>
      </div>





      <!-- <div class="form-row">
          <div class="form-group col-md-6">
            <label for="applyfor">Photo <span class="required">*</span></label>
            <input type="file" class="form-control" id="inputEmail4" placeholder="First Name" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">certificate<span class="required">*</span></label>
            <input type="file" class="form-control" id="inputPassword4" placeholder="fathers name or husband name" required>
          </div>
        </div> -->



      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="mycheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="d-flex justify-content-between">

        <button type="submit" class="btn btn-primary">Back</button>
        <button class="btn btn-primary" name="submit" onclick="check()">submit</button>
      </div>
    </form>
  </section>
  <div class="container w-100 justify-content-center align-items-center d-flex flex-items-column">

    <h6 class="text-align-center credit"> &copy; copyright by <a href="https://mizanuralrasid.github.io/Mizanuralrasid/">mizanur alrasid</a> @ 2021 </h6>
  </div>



  <script>
    function check() {
      var check = document.getElementById("mycheck");
      if (check.checked == true) {
        // text.style.display = "block";
        alert("selected");
      } else {
        //  text.style.display = "none";
        alert("Do you want to diselect the message")
      }

    }
  </script>



  <!-- bootstrap js link -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>