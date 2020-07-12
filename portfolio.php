<!doctype html>
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

    <title>Affordable Web Design Portfolio | Phoenix, AZ | Sunflwr</title>
  </head>

  <body>

    <!-- CONTACT FORM SCRIPT -->
    <?php
    date_default_timezone_set("America/Phoenix");

    // define variables and set to empty values
    $name = $email = $phone = $company = $message = "";
    $nameErr = $emailErr = $phoneErr = $companyErr = $messageErr = "";
    $success = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])){
        $nameErr = "Name is required.";
      } else {
        $name = test_input($_POST["name"]);
        $nameErr = "";
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
   	    $nameErr = "Only letters and white space allowed.";
        }
      }

      if (empty($_POST["email"])){
        $emailErr = "Email is required.";
      } else {
        $email = test_input($_POST["email"]);
        $emailErr = "";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format.";
        }
      }

      if (empty($_POST["phone"])){
        $phoneErr = "";
      } else {
        $phone = test_input($_POST["phone"]);
        $phoneErr = "";
        if (!preg_match("/^[0-9 + ( )]{0,20}$/",$phone)) {
          $phoneErr = "Only 0-9, +, () allowed.";
        }
      }

      if (empty($_POST["company"])){
        $companyErr = "";
      } else {
         $company = test_input($_POST["company"]);
      }

      if (empty($_POST["message"])){
        $messageErr = "Message is required.";
      } else {
        $message = test_input($_POST["message"]);
        $messageErr = "";
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $phoneErr == "" && $companyErr == "" && $messageErr == "") {
      $to = "spiller.riley@gmail.com";
      $emailSubject = "Sunflwr Contact Form";
      $txt = "<b>From:</b> " .$name. "<br><b>Email:</b> " .$email. "<br><b>Phone:</b> " .$phone. "<br><b>Company:</b> " .$company. "<br><b>Message:</b><br>" .$message. "<br><br><br>Sent at ".date("d-m-Y")." at ".date("H:i")." Arizona time.<br>Sent from ".htmlspecialchars($_SERVER['PHP_SELF']);
      $headers = "reply-to: ".$email. "\r\n";
      $headers .= "MIME-Version: 1.0" . "\r\n";
  	  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      mail($to,$emailSubject,$txt,$headers)
        or die();
      $success = "Mail sent successfully! We&#39;ll have someone with you soon.";
    }
    ?>

    <!-- begin NAVIGATION -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark blue-bg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="./img/design/logo.png" class="logo" alt="Sunflwr logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="about-us.php">Who We Are</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu blue-bg" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="web-design.php">Web Design</a>
                <a class="dropdown-item" href="web-hosting.php">Web Hosting</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="navbar-item">
              <a class="nav-link" href="blog/index.php">Blog</a>
            </li>
            <li class="navbar-item">
              <a class="nav-link" href="clients/index.php">Client Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end NAVIGATION -->

    <div class="container-fluid bg-light pt-md-0 pt-lg-0 pt-sm-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 pt-lg-3 pt-md-3 pt-sm-3 pt-3">
            <h1>Web Design <span class="text-blue">Portfolio</span></h1>
            <p>Our professional web design services have amazed both our clients and their site visitors alike. While we&#39;re aiming to be the best affordable
              <i>Phoenix</i> web design firm, we extend our services to anyone worldwide needing mobile-friendly and responsive websites, graphic design, and SEO
              improvement. Please <a class="text-blue" href="contact.php">contact us</a> to further discuss your options and start you web design project today!</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 text-right bg-sunflower-transparent"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-blue-flower">
      <div class="container bg-light-arrow-btm"></div>
    </div>

    <!-- begin PORTFOLIO GRID -->
    <div class="container-fluid portfolio pt-2 pb-0 bg-blue-flower">
      <div class="container">
        <div id="portfolio" class="row mt-4">

          <!-- begin THERESA HARNOIS CASE STUDY -->
          <div id="curled-corners" class="portfolio-container pt-4 pb-4 col-12 d-flex shadow-sm mb-5" data-aos="fade-right">
            <img src="./img/design/pushpin.png" data-aos="slide-down" data-aos-duration="1000" style="position: absolute; top:-10px; left: 46%; width: 65px; height:50px; z-index: 5;border:none;box-shadow:none;">
            <div class="portfolio-card bg-light d-flex flex-wrap">
              <div class="col-lg-4 col-md-3 col-sm-12 col-12 ml-0 pl-0 pr-0">
                <!-- THERESA HARNOIS GALLERY -->
                <a href="img/portfolio/web-design/fullres/theresa-harnois-home.png" data-lightbox="theresa-harnois"><img src="img/portfolio/web-design/thumbs/theresa-harnois-home.png"></a>
                <img src="./img/design/paperclip.png" id="paperclip" class="top-left">
                <figcaption class="figure-caption text-center">4 images in this gallery</figcaption>
                <a href="img/portfolio/web-design/fullres/theresa-harnois-about.png" data-lightbox="theresa-harnois"></a>
                <a href="img/portfolio/web-design/fullres/theresa-harnois-designs.png" data-lightbox="theresa-harnois"></a>
                <a href="img/portfolio/web-design/fullres/theresa-harnois-contact.png" data-lightbox="theresa-harnois"></a>
                <!-- end THERESA HARNOIS GALLERY -->
              </div>
              <div class="col-md-8 col-sm-12 col-12 pt-3 d-flex flex-wrap">
                <h2 class="col-12">Case Study: <span class="text-blue"><b>THERESA HARNOIS</b></span></h2>
                <h5 class="col-12 text-muted mark d-inline" style="z-index: -2;">Fine Jewelry &amp; Art Portfolio</span></h5>
                <p class="col-12 mt-2">Theresa Harnois of Scottsdale, Arizona, came to us to build a professional online portfolio to showcase her &quot;wearable
                  works of art.&quot;</p>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <p class="small">She wanted a website that would rival those of the top fashion designers, emulating high class living and luxury. At the same time,
                    she wanted the main focus to be on her hand-created jewelry. Given this information, we knew she needed a sleak, clean, and minimal
                    theme, reminiscent of fashion magazines with their full-page spreads accompanied by informational blips of text.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm12 col-12 small">
                  <p><strong>This is what she got:</strong></p>
                  <ul class="case-study fa-ul">
                    <li><i class="fa-li fa fa-check-square text-blue"></i>4 mobile-friendly, responsive pages</li>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>1 full-screen landing page</li>
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>2 large scrolling pages</li>
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>1 static contact page</li>
                    </ul>
                    <li><i class="fa-li fa fa-check-square text-blue"></i>resizable photo gallery with lightbox</li>
                    <li><i class="fa-li fa fa-check-square text-blue"></i>functional contact form connected to her personal email</li>
                    <li><i class="fa-li fa fa-check-square text-blue"></i>detailed visitor tracking</li>
                    <li><i class="fa-li fa fa-check-square text-blue"></i><em>template created in ~1 week</em></li>
                  </ul>
                </div>
                <div class="col-12">
                  <p>Since launching her site, Theresa has received numerous compliments from guests at the many art and fashion shows she has attended in Scottsdale.</p>
                  <p class="small"><a class="text-blue" href="http://www.theresaharnois.com" target="_blank"><i class="fa fa-external-link mr-2"></i>TheresaHarnois.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- end THERESA HARNOIS CASE STUDY -->

          <!-- begin AJL GROUP CASE STUDY -->
          <div id="curled-corners" class="portfolio-container pt-4 pb-4 col-12 d-flex shadow-sm mb-5" data-aos="fade-left">
            <img src="./img/design/pushpin-green.png" data-aos="slide-down" data-aos-duration="1000" style="position: absolute; top:-10px; left: 46%; width: 65px; height:50px; z-index: 5;border:none;box-shadow:none;">
            <div class="portfolio-card bg-light d-flex flex-wrap">
              <div class="col-lg-4 col-md-3 col-sm12 col-12 ml-0 pl-0 pr-0 d-md-none d-sm-block d-block">
                <!-- AJL GROUP GALLERY -->
                <a href="img/portfolio/web-design/fullres/ajl-group-expertise.png" data-lightbox="ajl-group"><img src="img/portfolio/web-design/thumbs/ajl-group-expertise.png"></a>
                <img src="./img/design/paperclip.png" id="paperclip" class="top-right">
                <figcaption class="figure-caption text-center">4 images in this gallery</figcaption>
                <a href="img/portfolio/web-design/fullres/ajl-group-distribution.png" data-lightbox="ajl-group"></a>
                <a href="img/portfolio/web-design/fullres/ajl-group-sports-marketing.png" data-lightbox="ajl-group"></a>
                <a href="img/portfolio/web-design/fullres/ajl-group-contact.png" data-lightbox="ajl-group"></a>
                <!-- end AJL GROUP GALLERY -->
              </div>
              <div class="col-md-8 col-sm-12 col-12 pt-3 d-flex flex-wrap">
                <h2 class="col-12">Case Study: <span class="text-blue"><b>AJL GROUP</b></span></h2>
                <h5 class="col-12 text-muted mark d-inline" style="z-index: -2;">Sports &amp; Television Marketing UK</span></h5>
                <p class="col-12 mt-2">AJL Group of London, England, needed a website to place on their business cards and to expand their reach via the world wide web.</p>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <p class="small">They gave us a few websites for inspiration, and we were able to deliver a product that met their needs, while giving them
                    their own touch of individuality. AJL Group&#39;s website is relatively simple, yet pleasing to the eye, to allow visitors to focus on
                    the business&#39; services and objectives. There are several tactful animated features, such as hovering over buttons and images. This
                    gives users a much more satisfying and fun experience navigating through the site.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 small">
                  <p><strong>This is what they got:</strong></p>
                  <ul class="case-study fa-ul">
                    <li><i class="fa-li fa fa-check-square text-blue"></i>5 mobile-friendly, responsive pages</li>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>1 full-screen landing page</li>
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>3 static informational pages</li>
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>1 static contact page</li>
                    </ul>
                    <li><i class="fa-li fa fa-check-square text-blue"></i>functional contact form connected to their personal email</li>
                    <li><i class="fa-li fa fa-check-square text-blue"></i>simple but effective animated features</li>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>rotating client wheel</li>
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>buttons &amp; images</li>
                    </ul>
                    <li><i class="fa-li fa fa-check-square text-blue"></i><em>template created in ~1 week</em></li>
                  </ul>
                </div>
                <div class="col-12">
                  <p>This site is still in its early stages. Please return later for a more current case study.</p>
                  <p class="small"><a class="text-blue" href="http://www.ajlgroup.co.uk" target="_blank"><i class="fa fa-external-link mr-2"></i>AJLGroup.co.uk</a></p>
                </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm12 col-12 ml-0 pl-0 pr-0 d-md-block d-sm-none d-none">
                <!-- AJL GROUP GALLERY -->
                <a href="img/portfolio/web-design/fullres/ajl-group-expertise.png" data-lightbox="ajl-group"><img src="img/portfolio/web-design/thumbs/ajl-group-expertise.png"></a>
                <img src="./img/design/paperclip.png" id="paperclip" class="top-right">
                <figcaption class="figure-caption text-center">4 images in this gallery</figcaption>
                <a href="img/portfolio/web-design/fullres/ajl-group-distribution.png" data-lightbox="ajl-group"></a>
                <a href="img/portfolio/web-design/fullres/ajl-group-sports-marketing.png" data-lightbox="ajl-group"></a>
                <a href="img/portfolio/web-design/fullres/ajl-group-contact.png" data-lightbox="ajl-group"></a>
                <!-- end AJL GROUP GALLERY -->
              </div>
            </div>
          </div>
          <!-- end AJL GROUP CASE STUDY -->

          <!-- begin SHANE LUTZK CASE STUDY -->
          <div id="curled-corners" class="portfolio-container pt-4 pb-4 col-12 d-flex shadow-sm mb-5" data-aos="fade-right">
            <img src="./img/design/pushpin-blue.png" data-aos="slide-down" data-aos-duration="1000" style="position: absolute; top:-10px; left: 46%; width: 65px; height:50px; z-index: 5;border:none;box-shadow:none;">
            <div class="portfolio-card bg-light d-flex flex-wrap">
              <div class="col-lg-4 col-md-3 col-sm-12 col-12 ml-0 pl-0 pr-0">
                <!-- SHANE LUTZK GALLERY -->
                <a href="img/portfolio/web-design/fullres/shane-lutzk-home.png" data-lightbox="shane-lutzk"><img src="img/portfolio/web-design/thumbs/shane-lutzk-home.png"></a>
                <img src="./img/design/paperclip.png" id="paperclip" class="top-left">
                <figcaption class="figure-caption text-center">5 images in this gallery</figcaption>
                <a href="img/portfolio/web-design/fullres/shane-lutzk-about.png" data-lightbox="shane-lutzk"></a>
                <a href="img/portfolio/web-design/fullres/shane-lutzk-art.png" data-lightbox="shane-lutzk"></a>
                <a href="img/portfolio/web-design/fullres/shane-lutzk-student-work.png" data-lightbox="shane-lutzk"></a>
                <a href="img/portfolio/web-design/fullres/shane-lutzk-contact.png" data-lightbox="shane-lutzk"></a>
                <!-- end SHANE LUTZK GALLERY -->
              </div>
              <div class="col-md-8 col-sm-12 col-12 pt-3 d-flex flex-wrap">
                <h2 class="col-12">Case Study: <span class="text-blue"><b>SHANE LUTZK</b></span></h2>
                <h5 class="col-12 text-muted mark d-inline" style="z-index: -2;">Ceramic Artist Portfolio</span></h5>
                <p class="col-12 mt-2">Shane Lutzk, now Head of Ceramics at Eastern Illinois University, first approached us while he was a student at Arizona State.</p>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <p class="small">His work had already been featured in places like Italy, the UK, and all across the United States, so Shane decided it was time
                    to get his own online portfolio. We knew that Shane&#39;s work needed to be the centerpiece of the site, so we decided on a minimal white theme to give every visitor
                    a pleasant browsing experience without distracting from the several galleries. His professional background and student successes are featured in his <em>Curriculum Vitae</em>, while a dedicated
                    news section allows him to post various interviews and upcoming exhibitions.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm12 col-12 small">
                  <p><strong>This is what he got:</strong></p>
                  <ul class="case-study fa-ul">
                    <li><i class="fa-li fa fa-check-square text-blue"></i>5 mobile-friendly, responsive pages</li>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>1 full-screen landing page featuring an image carousel and dedicated news section</li>
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>2 large photo galleries with lightbox</li>
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>1 about page featuring his CV and social medias</li>
                      <li><i class="fa-li fa fa-angle-double-right text-blue"></i>1 static contact page</li>
                    </ul>
                    <li><i class="fa-li fa fa-check-square text-blue"></i>functional contact form connected to his personal email</li>
                    <li><i class="fa-li fa fa-check-square text-blue"></i>detailed visitor tracking</li>
                    <li><i class="fa-li fa fa-check-square text-blue"></i><em>template created in ~1 week</em></li>
                  </ul>
                </div>
                <div class="col-12">
                  <p>Since launching his site, Shane has received an average of 7,200 hits per month.</p>
                  <p class="small"><a class="text-blue" href="http://www.shanelutzk.com" target="_blank"><i class="fa fa-external-link mr-2"></i>ShaneLutzk.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- end SHANE LUTZK CASE STUDY -->

          <!-- small portfolio grid -->
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
              <a href="./img/portfolio/web-design/fullres/cff-of-texas-home.png" data-lightbox="portfolio-grid-home" data-title="CFF of Texas (Texas)"><img src="./img/portfolio/web-design/thumbs/cff-of-texas-home.png"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
              <a href="./img/portfolio/web-design/fullres/paris-painting-studio-home.png" data-lightbox="portfolio-grid-home" data-title="Paris Painting Studio (Arizona)"><img src="./img/portfolio/web-design/thumbs/paris-painting-studio-home.png"></a>
            </div>
          </div>
          <!-- end small portfolio grid -->

        </div>
      </div>
      <div class="bg-light-arrow-btm arrow-top"></div>
    </div>
    <!-- end PORTFOLIO GRID -->

    <!-- begin TESTIMONIALS -->
    <!--
    <div class="container-fluid blue-bg">
      <div class="container-fluid pt-lg-4 pt-md-4 pt-sm-4 pt-4 pb-4" data-aos="fade-right">
        <center><h2>Word on the Grapevine</h2></center>
        <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container d-md-flex d-sm-block d-block align-items-center col-lg-6 col-md-8 col-sm-10 col-10">
                <img src="./img/design/g-eazy.jpg" height="100px" class="d-md-block d-sm-none d-none shadow-sm polaroid">
                <center><img src="./img/design/g-eazy.jpg" height="100px" class="d-md-none d-sm-block d-block shadow-sm text rounded-circle mb-3"></center>
                <p class="d-block text-md-center text-sm-center text-center"><i class="fa fa-quote-left fa-pull-left d-md-block d-sm-none d-none"></i><i>Riley at Sunflwr did an AMAZING job building my website, developing a ticket sales system, and filming my latest music video.</i>
                  <br><br><span class="small">-Gerald Earl Gillum, <a href="http://www.g-eazy.com" target="_blank">G-Eazy.com</a></span></p>
                </div>
            </div>
            <div class="carousel-item">
              <div class="container d-md-flex d-sm-block d-block align-items-center col-lg-6 col-md-8 col-sm-10 col-10">
                <img src="./img/design/doja-cat.jpg" height="100px" class="d-md-block d-sm-none d-none shadow-sm polaroid">
                <center><img src="./img/design/doja-cat.jpg" height="100px" class="d-md-none d-sm-block d-block shadow-sm text rounded-circle mb-3"></center>
                <p class="d-block text-md-center text-sm-center text-center"><i class="fa fa-quote-left fa-pull-left d-md-block d-sm-none d-none"></i><i>I am SO HAPPY with how my photoshoots have been turning out ever since hiring Sunflwr. Riley is a true artiste!</i>
                  <br><br><span class="small">-Amalaratna Zandile Dlamini, <a href="http://www.dojacat.com" target="_blank">DojaCat.com</a></span></p>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    -->
    <!-- end TESTIMONIALS -->

    <!-- begin OUR STRATEGY -->
    <div class="container-fluid bg-light pb-4">
      <div class="container" >
        <div class="row">
          <div class="container col-lg-12 col-md-12 col-sm-12 col-12 mt-5 text-md-center text-sm-left text-left" data-aos="fade-left">
            <h2 class="mb-4">The Road <span class="text-blue">To Perfection</span></h2>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-3 mb-3">
                <div class="card text-center shadow-lg" data-aos="fade-up">
                  <div class="card-header bg-green">
                    <i class="fa fa-handshake-o mr-3"></i>INTERVIEW
                  </div>
                  <div class="card-body">
                    <p class="card-text">This is our first session, where we get to know each other. Share your dreams, your vision, your hopes for the future of your website. We&#39;ll dig deep, finding your target demographic, ideal content for SEO, and deciding on a game plan. We&#39;ll even sketch a mock website to start the design process.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-3 mb-3">
                <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-sm"></div>-->
                <div class="card text-center shadow-lg" data-aos="fade-up">
                  <div class="card-header blue-bg">
                    <i class="fa fa-code mr-3"></i>CONSTRUCTION
                  </div>
                  <div class="card-body">
                    <p class="card-text">This is where you sit back and let us do the hard work. We convert our sketch into beautiful and functional <b>HTML5</b> and <b>CSS3</b> using the <b>Bootstrap4</b> framework. In other words, we turn your project into reality. Using any existing logos and graphics you may have already, the first draft of your website is finished!</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-3 mb-3">
                <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
                <div class="card text-center shadow-lg" data-aos="fade-up">
                  <div class="card-header bg-warning">
                    <i class="fa fa-check-circle mr-3"></i>REVIEW
                  </div>
                  <div class="card-body">
                    <p class="card-text">We love having your approval. Tell us what you love and what you&#39;re not sure about, and we promise we&#39;ll make it better. This is the repeat-until-it&#39;s-perfect step. At the same time, we&#39;ll begin creating and inputting targeted content to optimize your rankings in the most popular search engines.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-3 mb-3">
                <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-lg"></div>-->
                <div class="card text-center shadow-lg" data-aos="fade-up">
                  <div class="card-header bg-magenta">
                    <i class="fa fa-thumbs-up mr-3"></i>COMPLETION
                  </div>
                  <div class="card-body">
                    <p class="card-text">All your dreams come true. You&#39;ve got a killer website that&#39;s optimized for mobile and desktop displays, as well as targeted SEO to get you close to the top on Google listings. And it&#39;s important to note: you own your website outright. We can teach you how to manage it and part ways, or you can keep us around for <a href="#">continued maintenance</a>.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end OUR STRATEGY -->

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
    <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
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
