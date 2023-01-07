<?php
session_start();

// check if the user is already logged in
if (isset($_SESSION['username'])) {
  header("location: admin/Dashboard.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="cscdocs" />
  <meta name="keywords" content="HTML,CSS,XML,JavaScript" />
  <meta name="author" content="Rahit Sheikh" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <title>CSCdocs</title>


  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand border border-seccuess logo p-3" href="#"><img src="images/logo.png" width="35" height="40" class="img-fluid" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="web serice/index.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- header section ends -->

  <!-- home section starts  -->

  <section class="home" id="home">

    <div class="content">
      <h3>grow your business with us</h3>
      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ducimus quis tenetur sed accusantium quos est enim autem saepe eveniet!</p> -->
      <a href="#" class="btn">discover more</a>
    </div>

    <div class="image">
      <img src="images/back.png" alt="" />
    </div>
  </section>

  <!-- home section ends -->

  <!-- features section starts  -->

  <section class="feature" id="feature">
    <h1 class="heading">awesome features</h1>
    <hr />

    <div class="box-container">
      <div class="box">
        <img src="images/fe1.png" alt="" />
        <h3>Portable</h3>
        <p>We will provide your Documents in your Doorstep</p>
        <!-- <a href="#" class="btn">read more</a> -->
      </div>

      <div class="box">
        <img src="images/fe2.png" alt="" />
        <h3>Less money</h3>
        <p>
          During the pickup the documents we will take 50% of money and of
          that service after completion we will take rest 50%
        </p>
        <!-- <a href="#" class="btn">read more</a> -->
      </div>

      <div class="box">
        <img src="images/fe3.png" alt="" />
        <h3>No Extra Charges</h3>
        <p>We will provide you the services without extra charge.</p>
        <!-- <a href="#" class="btn">read more</a> -->
      </div>
    </div>
  </section>

  <!-- features section edns -->

  <!-- service section starts  -->

  <section class="service" id="service">
    <h1 class="heading">our services</h1>
    <div class="container">
      <div class="box-container">
        <?php
        include 'admin/config.php';
        $selectquery = "select * from services";

        $result = mysqli_query($conn, $selectquery);
        $nums = mysqli_num_rows($result);
        while ($res = mysqli_fetch_array($result)) {
        ?>
          <div class="box">
            <img src="<?php echo "imgupload/" . $res['image']; ?>" alt="" />
            <h3><?php echo $res['title']; ?></h3>
            <a href="Documentation/aadhar-doc.php?id=<?php echo $res['id']; ?>" class="btn">apply now</a>
          </div>
        <?php
        }
        ?>

        <!-- <div class="box">
            <img src="images/aadhar.jpeg" alt="" />
            <h3>AADHAR</h3>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="box">
            <img src="images/atal-amrit.png" alt="" />
            <h3>ATAL AMRIT</h3>
            <a href="#" class="btn">read more</a>
          </div> -->
      </div>

      <!-- <div class="box">
            <img src="images/s4.png" alt="">
            <h3>Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/s1.png" alt="">
            <h3>Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/s5.png" alt="">
            <h3>Lorem, ipsum.
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div> -->

      <div class="container view-more-btn w-100 d-flex justify-content-center align-items-center">
        <div class="justify-content-center align-items-center">
          <a href="services.php" class="btn btn-primary">view more</a>
        </div>
      </div>
    </div>
  </section>

  <!-- service section ends -->

  <!-- project section starts  -->

  <!-- <section class="project" id="project">

    <h1 class="heading">our projects</h1>

    <div class="box-container">

        <div class="box">
            <span class="number">01</span>
            <img src="images/port-img1.jpg" alt="">
            <div class="info">
                <h3>email marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">02</span>
            <img src="images/port-img2.jpg" alt="">
            <div class="info">
                <h3>web optimization</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">03</span>
            <img src="images/port-img3.jpg" alt="">
            <div class="info">
                <h3>seo marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">04</span>
            <img src="images/port-img4.jpg" alt="">
            <div class="info">
                <h3>content marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">05</span>
            <img src="images/port-img5.jpg" alt="">
            <div class="info">
                <h3>digital marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">06</span>
            <img src="images/port-img6.jpg" alt="">
            <div class="info">
                <h3>meida marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

    </div>

</section> -->

  <!-- project section ends -->

  <!-- team section starts  -->

  <!-- about us  -->
  <section class="about" id="about">
    <h1>About Us!</h1>
    <h3 style="text-align: center">
      Welcome To <span id="W_Name1">service</span>
    </h3>
    <p>
      Hello Everyone ,welcome to our website CSCdoc. Now a days in the village
      areas most of the people are uneducated and don’t have so much knowledge
      about online services and documents. So they have to visit the nearest
      Service centre and Computer centres, where they face several problems
      and feel hagitate to visit the shop. So keeping in mind that concept we
      have launched our website, where they don’t have to visit the shop our
      delivery agent will provide document pickup and document delivery
      facilities without any extra charge. And also our customer can apply for
      the services they want through our website. Our website is simply
      designed and user friendly. All they have to do is just fill-up their
      details and pay the service fee. That’s all. The service will be
      delivered to their doorstep after the Processing time.
    </p>
    <p>
      I will keep posting more important posts on my Website for all of you.
      Please give your support and love.
    </p>
    <p style="font-weight: bold; text-align: center">
      Thanks For Visiting Our Site<br /><br />
      <span style="
            color: blue;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
          ">Have a nice day!</span>
    </p>
  </section>

  <section class="team" id="team">
    <h1 class="heading">our team</h1>

    <div class="box-container">
      <div class="box">
        <img src="images/rohit.jpg" alt="" />
        <h3>Rohit sk</h3>
        <!-- <span>web optimizer</span> -->
        <p>Manager/owner of the website</p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/mizanur.jpg" alt="" />
        <h3>Mizanur Islam</h3>
        <!-- <span>web designer</span> -->
        <p>tech staff</p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <!-- <div class="box">
            <img src="images/pic3.png" alt="">
            <h3>john deo</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/pic4.png" alt="">
            <h3>john deo</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div> -->
    </div>
  </section>

  <!-- team section ends -->

  <!-- price section starts  -->

  <!-- <section class="price" id="price">

    <h1 class="heading">our pricing plans</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/p1.png" alt="">
            <h3>basic plan</h3>
            <div class="amount"><span>$</span>20.50</div>
            <p>Strategy & Research Business & Finance Analysing SEO Optimization</p>
            <a href="#" class="btn">select plan</a>
        </div>

        <div class="box">
            <img src="images/p2.png" alt="">
            <h3>standard plan</h3>
            <div class="amount"><span>$</span>30.50</div>
            <p>Strategy & Research Business & Finance Analysing SEO Optimization</p>
            <a href="#" class="btn">select plan</a>
        </div>

        <div class="box">
            <img src="images/p3.png" alt="">
            <h3>premium plan</h3>
            <div class="amount"><span>$</span>50.50</div>
            <p>Strategy & Research Business & Finance Analysing SEO Optimization</p>
            <a href="#" class="btn">select plan</a>
        </div>

    </div>

</section> -->

  <!-- price section ends -->

  <!-- contact section starts  -->

  <section class="contact" id="contact">
    <h1 class="heading">contact us</h1>

    <div class="row">
      <form action="">
        <div class="inputBox">
          <input type="text" required />
          <label>name</label>
        </div>

        <div class="inputBox">
          <input type="email" required />
          <label>email</label>
        </div>

        <div class="inputBox">
          <input type="number" required />
          <label>number</label>
        </div>

        <div class="inputBox">
          <textarea required name="" id="" cols="30" rows="10"></textarea>
          <label>message</label>
        </div>

        <input type="submit" class="btn" value="send message" />
      </form>

      <!-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1619943375027!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28681.910503851843!2d89.95843618009066!3d26.025741095103026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2a03eecb51a6d%3A0xb84e629bd4dabd09!2sDhubri%2C%20Assam!5e0!3m2!1sen!2sin!4v1657193526136!5m2!1sen!2sin" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <!-- contact section ends -->

  <!-- footer section  -->

  <div class="footer">
    <div class="box-container">
      <div class="box">
        <h3>about us</h3>
        <p>
          Hello Everyone ,welcome to our website CSCdoc. Now a days in the
          village areas most of the people are uneducated and don’t have so
          much knowledge about online services and documents. So they have to
          visit the nearest Service centre and Computer centres, where they
          face several problems and feel hagitate to visit the shop. So
          keeping in mind that concept we have launched our website, where
          they don’t have to visit the shop our delivery agent will provide
          document pickup and document delivery facilities without any extra
          charge. And also our customer can apply for the services they want
          through our website. Our website is simply designed and user
          friendly. All they have to do is just fill-up their details and pay
          the service fee. That’s all. The service will be delivered to their
          doorstep after the Processing time.
        </p>
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href="#">home</a>
        <a href="#">feature</a>
        <a href="#">service</a>
        <a href="#">project</a>
        <a href="#">team</a>
        <a href="#">price</a>
        <a href="#">contact</a>
        <a href="admin/register.php">admin registration</a>
        <a href="admin/login.php">admin login</a>
      </div>

      <div class="box">
        <h3>category</h3>
        <a href="#">digital marketing</a>
        <a href="#">media marketing</a>
        <a href="#">content marketing</a>
        <a href="#">email marketing</a>
        <a href="#">seo marketing</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#">facebook</a>
        <a href="#">twitter</a>
        <a href="#">instagram</a>
        <a href="#">linkedin</a>
      </div>
    </div>

    <h1 class="credit">
      &copy; copyright by
      <a href="https://mizanuralrasid.github.io/Mizanuralrasid/">mizanur alrasid</a>
      @ 2021
    </h1>
  </div>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>

  <!-- bootstrp js cdn link -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>