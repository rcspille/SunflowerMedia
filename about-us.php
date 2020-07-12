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

    <title>About Sunflwr Web Design | Phoenix, AZ | Sunflwr</title>
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
            <h1>About <span class="text-blue">Sunflwr</span></h1>
            <p class="text-justify">While the Sunflower brand has only come into existence recently, we have been in the service of web design, programming, and photography
              for the last 8 years. Our clients span the United States, and we've even begun to extend our services to Europe. Our goal is to provide the best affordable web design
              possible without sacrificing quality.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 text-right bg-sunflower-transparent"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-light-blue">
      <div class="container bg-light-arrow-btm"></div>
    </div>

    <div class="container-fluid bg-light-blue">
      <div class="container pt-lg-3 pt-md-3 pt-sm-3 pt-3 pb-lg-5 pb-md-5 pb-sm-5 pb-5">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
            <div class="card shadow-lg text-dark" data-aos="fade-up">
              <div class="card-header bg-green">
                <i class="fa fa-user mr-3"></i>FOUNDER &AMP; LEAD DESIGNER/DEVELOPER
              </div>
              <div class="card-body row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-blue">
                  <img src="./img/design/riley.jpg" class="polaroid">
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-3 text-md-left text-sm-justify text-justify">
                  <h3>Riley Spiller</h3>
                  <p>I am the lead designer, developer, and founder of Sunflwr. I am currently a student at Arizona State University in Tempe, Arizona, but
                    I have already racked up around 10 years of experience as a web developer. Ever since 6th grade, I have been interested in building websites and
                    coding awesome programs. This is when I bought my first HTML and CSS books, self-teaching myself everything I needed to know for the first several
                    years. More recently, I have been certified by the Codecademy Web Development Bootcamp.</p>
                  <p>I am proficient in <b>HTML5</b>, <b>CSS3</b>, <b>PHP</b>, <b>MySQL</b>, and <b>JQuery</b>, and I utilize the <b>Bootstrap5</b> framework to build
                    clean and responsive dekstop and mobile websites. You can always skip the jargon and view my <a href="portfolio.php">recent work</a> to see my
                    skills firsthand!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
            <div class="card text-justify shadow-lg" data-aos="fade-up">
              <div class="card-header blue-bg">
                <i class="fa fa-home mr-3"></i>OUR LOCATION
              </div>
              <div class="card-body">
                <p class="card-text">We call sunny <b>Phoenix AZ</b> home, so naturally we opted for a bright and warm theme for the Sunflower brand. We do not
                  have a physical office; we mostly meet clients in cafes and libraries or via conference call, and most of our build process happens remotely.</p>
                <img src="./img/design/phoenix.jpg" class="polaroid">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
            <div class="card text-justify shadow-lg" data-aos="fade-up">
              <div class="card-header bg-warning">
                <i class="fa fa-angellist mr-3"></i>WORRY FREE
              </div>
              <div class="card-body">
                <p class="card-text">If you&#39;re looking to get a website, you&#39;re also probably trying to run a business. We don&#39;t want to add to the
                  stress. At Sunflwr, we pride ourselves on being able to share your vision, letting us work self-sufficiently while you focus on maintaning
                  your livelihood. In fact, our customers almost always mention how much better we understand their needs than other developers with whom they have
                  worked.
                  </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
            <div class="card text-justify shadow-lg" data-aos="fade-up">
              <div class="card-header bg-magenta">
                <i class="fa fa-dollar mr-3"></i>PRICE VS. QUALITY
              </div>
              <div class="card-body">
                <p class="card-text">You may be wondering: <b>How do we combine low prices and a quality product?</b> Normally, this wouldn&#39;t be possible,
                  but we are not trying to get rich on this. We are trying to grow a brand while developing an awesome array of services. Naturally, we must
                  start small and build from there. Get your quality desktop and mobile website while we are still building our portfolio! These prices will
                  not last forever. If you&#39;re still unsure, just view our <a href="portfolio.php">portfolio</a>. These are real customers who opted for
                  our web design services, paying only <a href="web-design.php#pricing">our prices</a> listed!</p>
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
            <a name="contactSuccess" href="#contactForm" data-toggle="collapse"><button type="button" class="btn btn-sm btn-warning <?php if($success!=""){echo "d-none";}?>">Ask Us Anything!</button></a>
          </div>
          <div class="col-md-7 col-sm-12 text-md-left text-sm-center text-center">
            <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>#contactSuccess" class="<?php if($nameErr==""&&$emailErr==""&&$phoneErr==""&&$messageErr==""){echo "collapse";}?> row <?php if($success!=""){echo "d-none";}?>">
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
                <button class="btn bg-warning text-dark mb-md-3 mb-sm-0 mb-0 mt-3 float-right" type="submit">Send Message</button>
              </div>
            </form>
            <?php if($success!=""){echo "<h2 class='text-warning text-center'><i class='fa fa-lg fa-thumbs-up'></i><br>".$success."</h2>";}?>
          </div>
          <div id="contactForm" class="<?php if($nameErr==""&&$emailErr==""&&$phoneErr==""&&$messageErr==""){echo "collapse";}?> col-md-5 col-sm-12 text-md-left text-sm-center text-center mt-md-0 mt-sm-4 mt-5 border-left">
            <h4 class="mb-3">Or contact us <span class="text-warning">directly:</span></h4>
            <p><i class="fa fa-envelope mr-2"></i><a href="mailto:info@mysunflwr.com">info@mySUNFLWR.com</a></p>
            <p><i class="fa fa-phone mr-2"></i>upon request</p>
            <p class="text-muted alert alert-primary small dismiss">We value your privacy. Your information will never be sold or shared.</p>
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
