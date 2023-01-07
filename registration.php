<?php  
  
include 'connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <title>registration</title>

    <!-- css link -->
    <link rel="stylesheet" href="css/registration.css">
    <!-- bootstrap css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<section class="container d-flex flex-column justfy-content-center align-items-center registration">
  <div class="container head-img">

    <img src="images/back.png" class="img-fluid" alt="">
</div>
    <div class="header text-center m-5">

        <h2>Registration</h2>
        <div class="sub-header">
            <h4>Applicant information</h4>
        </div>
    </div>
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="applyfor">Name <span class="required">*</span></label>
            <input type="text" class="form-control" id="inputfname" name="
            rname" placeholder="First Name" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Fathers Name / Husband Name <span class="required">*</span></label>
            <input type="text" class="form-control" id="inputfathersname" name="rfhname" placeholder="fathers name or husband name" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="remail" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPhone">Phone <span class="required">*</span></label>
            <input type="number" class="form-control" id="phnumber" name="rphone" placeholder="Phone" required>
          </div>
        </div>
        <div class="address">
            <h5>Address</h5>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="village" name="rvillage" placeholder="village" required>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="post-office" placeholder="rpostoffice" required>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="inputpolicestation" name="rpolicestation" placeholder="police sattaion" required>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="inputdistrick" name="rdist" placeholder="dist" required>
            </div>
            <div class="form-group col-md-6">
              <!-- <label for="state">state</label> -->
               <!-- <select name="" id="applyfor">
                <option value="select">select</option>
                <option value="select">Andhra Pradesh</option>
                <option value="select">Arunachal Pradesh</option>
                <option value="select">Assam</option>
                <option value="select">Bihar</option>
                <option value="select">Chhattisgarh</option>
                <option value="select">Goa</option>
                <option value="select">Gujarat</option>
                <option value="select">Haryana</option>
                <option value="select">selHimachal Pradeshect</option>
                <option value="select">Jharkhand</option>
                <option value="select">Karnataka</option>
                <option value="select">Kerala</option>
                <option value="select">Madhya Pradesh</option>
                <option value="select">Maharashtra</option>
                <option value="select">Manipur</option>
                <option value="select">Meghalaya</option>
                <option value="select">Mizoram</option>
                <option value="select">Nagaland</option>
                <option value="select">Odisha</option>
                <option value="select">Punjab</option>
                <option value="select">Rajasthan</option>
                <option value="select">Sikkim</option>
                <option value="select">Tamil Nadu</option>
                <option value="select">Telangana</option>
                <option value="select">Tripura</option>
               </select>  -->
              <input type="text" class="form-control" id="inputState" name="rstate" placeholder="state" required>
               
            </div>
            <div class="form-group col-md-6">
              <input type="number" class="form-control" id="inputpin" name="rpin" placeholder="Pin" required>
            </div>
          </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="rcity" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>

            <input type="text" class="form-control" name="rstate2" id="state">
            <!-- <select id="inputState" class="form-control">
              <option selected>Choose...</option>
                <option value="select">Andhra Pradesh</option>
                <option value="select">Arunachal Pradesh</option>
                <option value="select">Assam</option>
                <option value="select">Bihar</option>
                <option value="select">Chhattisgarh</option>
                <option value="select">Goa</option>
                <option value="select">Gujarat</option>
                <option value="select">Haryana</option>
                <option value="select">selHimachal Pradeshect</option>
                <option value="select">Jharkhand</option>
                <option value="select">Karnataka</option>
                <option value="select">Kerala</option>
                <option value="select">Madhya Pradesh</option>
                <option value="select">Maharashtra</option>
                <option value="select">Manipur</option>
                <option value="select">Meghalaya</option>
                <option value="select">Mizoram</option>
                <option value="select">Nagaland</option>
                <option value="select">Odisha</option>
                <option value="select">Punjab</option>
                <option value="select">Rajasthan</option>
                <option value="select">Sikkim</option>
                <option value="select">Tamil Nadu</option>
                <option value="select">Telangana</option>
                <option value="select">Tripura</option>
            </select> -->
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" name="rzip" id="inputZip">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="inputusername" name="rusername" placeholder="Choose a username" required>
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" id="inputpassword" name="rpassword" placeholder="Create a password" required>
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" id="inputcpassword" name="rcpassword" placeholder="Confirm password" required>
          </div>
        </div>
          
        <!-- <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div> -->
        <div class="container d-flex justify-content-between">

            <button type="reset" class="btn btn-primary">Reset</button>
            <button class="btn btn-primary">submit</button>
        </div>
      </form>
      <span class="text-center w-100 d-flex justify-content-center">Already Registered <a href="admin-login.html"> Login</a> </span>
</section>




    <!-- bootstrap js link -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>