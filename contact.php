<!doctype html>

<?php
$username = "ugc8zzr3w387t";
$password = "riley350045";
$database = "db3axfv7ywdwbx";
$mysqli = new mysqli("localhost", $username, $password, $database);
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Metadata -->
    <meta name="keywords" content="Phoenix web design, Phoenix SEO, Phoenix web developer, affordable web design" />
    <meta name="description" content="Sunflwr is Phoenix's best affordable web design, experienced in mobile websites, SEO, and photography for Arizona's small businesses." />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- LightBox -->
    <link href="lightbox/css/lightbox.css" rel="stylesheet" type="text/css"/>

    <!-- Local CSS -->
    <link rel="stylesheet" type="text/css" href="./css/main.css" />

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Animate on Scroll CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Contact Us | Phoenix, AZ | Sunflwr</title>
  </head>

  <body>

    <!-- CONTACT FORM SCRIPT -->
        <?php require 'scripts/contact-form-general.php';?>
    <!-- end CONTACT FORM SCRIPT -->

    <!-- begin NAVIGATION -->
        <?php
        $query = "SELECT * FROM site WHERE name='top-navbar'";
        if ($result = $mysqli->query($query)) {
          while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $code = $row["code"];
            echo $code;
          }
          /*freeresultset*/
          $result->free();
        }
        ?>
    <!-- end NAVIGATION -->

    <div class="container-fluid bg-light pt-md-0 pt-lg-0 pt-sm-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 pt-lg-3 pt-md-3 pt-sm-3 pt-3">
            <h1>Contact <span class="text-blue">Sunflwr</span></h1>
            <p>Ready to get started with the web design process? Have any questions or comments? Please get in touch below!</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 text-right bg-sunflower-transparent"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-light-blue">
      <div class="container bg-light-arrow-btm"></div>
    </div>

    <div class="container-fluid bg-light-blue">
      <div class="container pt-lg-3 pt-md-3 pt-sm-3 pt-3">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
            <div class="card shadow-lg text-dark" data-aos="fade-up">
              <div class="card-header bg-green">
                <i class="fa fa-envelope mr-3"></i>CONTACT US
              </div>
              <div class="card-body">
                <?php echo "<h2 class='text-success text-center'>".$success."</h2>";?>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="row <?php if($success!=""){echo "d-none";}?>">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" placeholder="*Name" value="<?php echo $_POST['name'];?>">
                      <span class="text-danger"><?php echo $nameErr;?></span>
                    </div>
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" placeholder="*Email" value="<?php echo $_POST['email'];?>">
                      <span class="text-danger"><?php echo $emailErr;?></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <input name="phone" type="tel" class="form-control" placeholder="Phone" value="<?php echo $_POST['phone'];?>">
                      <span class="text-danger"><?php echo $phoneErr;?></span>
                    </div>
                    <div class="form-group">
                      <input name="company" type="text" class="form-control" placeholder="Company" value="<?php echo $_POST['company'];?>">
                      <span class="text-danger"><?php echo $companyErr;?></span>
                    </div>
                  </div>
                  <div class="col-12">
                    <textarea name="message" class="form-control" placeholder="*Your Message" rows="5"><?php echo $_POST['message'];?></textarea>
                    <span class="text-danger"><?php echo $messageErr;?></span>
                    <center><button class="btn bg-green mt-3" type="submit">Send Message</button></center>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
            <div class="card shadow-lg bg-light" data-aos="fade-up">
              <div class="card-header blue-bg">
                <i class="fa fa-address-card mr-3"></i>OTHER CONTACTS
              </div>
              <div class="card-body">
                <p class="card-text text-center">
                  <i class="fa fa-envelope mr-2"><a class="text-dark" href="mailto:info@mysunflwr.com"></i>info@mysunflwr.com</a><br>
                  <i class="fa fa-phone mt-3 mr-2"></i>available upon request
                </p>
              </div>
            </div>
            <div class="card shadow-lg mt-4 bg-light" data-aos="fade-up">
              <div class="card-body pb-0 pt-2">
                <form name="subscribe" method="POST" action="#">
                  <div class="form-group">
                    <label for="email">Subscribe to our blog!</label>
                    <div class="input-group">
                      <input name="email" type="email" class="form-control" placeholder="Enter email">
                      <div class="input-group-append">
                          <button type="submit" class="btn blue-bg">subscribe</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid blue-bg">
      <div class="container pt-0 pb-0" data-aos="fade-right">
        <div class="row">
          <div class="col-12 d-flex pt-2 pb-2 align-items-center justify-content-between">
            <h5 class="pt-2">Contact us today for a <span class='text-warning'>free, no-obligation</span> appointment to discuss your multimedia needs.</h5>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container-fluid bg-dark pt-4 pb-4">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-6 mb-md-0 mb-sm-4 mb-4">
              <h6 class="title">Services</h6>
              <p><a href="web-design.php">Web Design</a></p>
              <p><a href="web-hosting.php">Web Hosting</a></p>
              <h6 class="title mt-3">Attributions</h6>
              <p><a href="#">Giving Thanks</a></p>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
              <h6 class="title">Support</h6>
              <p><a href="#">Support Portal</a></p>
              <p><a href="#">Video Tutorials</a></p>
              <p><a href="#">Manage Your Account</a></p>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mb-md-0 mb-sm-4 mb-4">
              <h6 class="title">Affiliates</h6
              <p><a href="#">Join Our Referral Program</a></p>
              <p><a href="#">Advertise With Us</a></p>
              <p><a href="#">Manage Affiliate Account</a></p>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
              <h6 class="title">Business Stuff</h6>
              <p><a href="about-us.php">About SUNFLWR</a></p>
              <p><a href="blog/index.php">Company Blog</a></p>
              <p><a href="contact.php">Contact Us</a></p>
              <p class="mt-2">
                <a href="#"><i class="fa fa-facebook fa-lg mr-3"></i></a>
                <a href="#"><i class="fa fa-twitter fa-lg mr-3"></i></a>
                <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-1 pb-1" style="background-color: #333;">
        <div class="container">
          <div class="row">
            <div class="col-12 small d-flex align-items-center">
              <p>Copyright &copy; 2020 | <b>S U N F L W R</b></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="lightbox/js/lightbox-plus-jquery.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
        anchorPlacement: 'top-bottom',
        delay: 100,
      });
    </script>

  </body>
</html>
