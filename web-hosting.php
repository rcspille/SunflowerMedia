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

    <title>Affordable Web Hosting Services | Phoenix, AZ | Sunflwr</title>
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
            <h1>Full Support <span class="text-blue">Web Hosting</span></h1>
            <p class="text-justify">At <b>Sunflwr</b>, we believe in transparency. That means no hidden fees, no contracts, and the price you see
              is the price you pay. Other web hosts might offer plans starting at a few dollars a month, but you&#39;ll soon realize that you have to
              sign a contract of 3 years or more to get that price. Don&#39;t get locked down in a couple hundred dollar contract. Sunflwr has a
              vision for a new type of web hosting, one that is highly adaptable to your ever-changing needs.</p>
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
        <div class="row d-flex align-items-start">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-sm-5 mb-5">
            <div class="card text-center shadow-lg" data-aos="fade-up">
              <div class="card-header bg-green">
                <h2><i class="fa fa-tachometer mr-3"></i>SPEED</h2>
              </div>
              <div class="card-body">
                <p class="card-text text-justify"><b>Fast websites</b> are crucial to keeping visitors engaged and getting great search engine rankings.
                  At Sunflwr, we don&#39;t overcrowd servers, meaning your website will be the fastest it can be.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-sm-5 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-sm"></div>-->
            <div class="card text-center shadow-lg" data-aos="fade-up">
              <div class="card-header blue-bg">
                <h2><i class="fa fa-area-chart mr-3"></i>RELIABILITY</h2>
              </div>
              <div class="card-body">
                <p class="card-text text-justify">We offer a <b>99% uptime guarantee</b>! A reliable website is a great website. Don&#39;t fall victim
                  to the downtimes of cheap hosting. Your customers can be up at any time of day or night, and why lose business due to a server crash?</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-sm-5 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
            <div class="card text-center shadow-lg" data-aos="fade-up">
              <div class="card-header bg-warning">
                <h2><i class="fa fa-database mr-3"></i>FEATURES</h2>
              </div>
              <div class="card-body">
                <p class="card-text text-justify">Our web hosting services come with all the features of larger web hosts -- minus the cost. Don&#39;t
                  miss out on your website functionality! Our hosting plans come with the latest <b>PHP</b> compilers, <b>MySQL</b> databases, <b>custom
                  email</b> clients, and other highly-used features.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-sm-5 mb-5">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-lg"></div>-->
            <div class="card text-center shadow-lg" data-aos="fade-up">
              <div class="card-header bg-magenta">
                <h2><i class="fa fa-support mr-3"></i>SUPPORT</h2>
              </div>
              <div class="card-body">
                <p class="card-text text-justify">Facing an issue? Need more functionality? Sunflwr is here with <b>exceptional support</b>. We
                  know the ins and outs of web hosting and are here to fix any problems you may face. We&#39;re available daily by phone, email, and live
                  chat! No need to stress when you have Sunflwr.</p>
              </div>
            </div>
          </div>
        </div>
        <a name="pricing"></a>
      </div>
    </div>

    <!-- begin PRICING TABLE -->
    <div class="container-fluid bg-stripe-blue pt-5 pb-5">
      <div class="container">
        <center><h2 class="white-text mb-4">Phoenix Web Hosting Packages</h2></center>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricingTable" data-aos="flip-left" data-aos-delay="250">
                    <h3 class="title">BASIC</h3>
                    <div class="price-value">
                        <span class="currency">$</span>
                        <span class="amount">10</span>
                        <span class="month">/month</span>
                    </div>
                    <ul class="pricing-content">
                        <li><b>1</b> Website</li>
                        <li><b>1GB</b> Storage</li>
                        <li><b>10GB</b> Bandwidth</li>
                        <li><b>Unlmtd.</b> Email Accounts</li>
                        <li><b>Unlmtd.</b> Databases</li>
                        <li><b>Daily</b> Support</li>
                        <li><b>Weekly</b> Backups</li>
                    </ul>
                    <a href="contact.php" class="pricingTable-signup">Get Started</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricingTable pink" data-aos="flip-left" data-aos-delay="500">
                    <h3 class="title">PLUS</h3>
                    <div class="price-value">
                        <span class="currency">$</span>
                        <span class="amount">15</span>
                        <span class="month">/month</span>
                    </div>
                    <ul class="pricing-content">
                        <li><b>3</b> Websites</li>
                        <li><b>3GB</b> Storage</li>
                        <li><b>30GB</b> Bandwidth</li>
                        <li><b>Unlmtd.</b> Email Accounts</li>
                        <li><b>Unlmtd.</b> Databases</li>
                        <li><b>Daily</b> Support</li>
                        <li><b>Weekly</b> Backups</li>
                    </ul>
                    <a href="contact.php" class="pricingTable-signup">Get Started</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricingTable blue" data-aos="flip-left" data-aos-delay="750">
                    <h3 class="title">ENTREPRENEUR</h3>
                    <div class="price-value">
                        <span class="currency">$</span>
                        <span class="amount">20</span>
                        <span class="month">/month</span>
                    </div>
                    <ul class="pricing-content">
                        <li><b>5</b> Websites</li>
                        <li><b>10GB</b> Storage</li>
                        <li><b>100GB</b> Bandwidth</li>
                        <li><b>Unlmtd.</b> Email Accounts</li>
                        <li><b>Unlmtd.</b> Databases</li>
                        <li><b>Daily</b> Support</li>
                        <li><b>Weekly</b> Backups</li>
                    </ul>
                    <a href="contact.php" class="pricingTable-signup">Get Started</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricingTable green" data-aos="flip-left" data-aos-delay="1000">
                    <h3 class="title">ENTERPRISE</h3>
                    <div class="price-value">
                        <span class="currency">$</span>
                        <span class="amount">25</span>
                        <span class="month">/month</span>
                    </div>
                    <ul class="pricing-content">
                        <li><b>10</b> Websites</li>
                        <li><b>Unlmtd.</b> Storage</li>
                        <li><b>Unlmtd.</b> Bandwidth</li>
                        <li><b>Unlmtd.</b> Email Accounts</li>
                        <li><b>Unlmtd.</b> Databases</li>
                        <li><b>Daily</b> Support</li>
                        <li><b>Daily</b> Backups</li>
                    </ul>
                    <a href="contact.php" class="pricingTable-signup">Get Started</a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
          <div class="mx-auto text-white d-flex align-items-start" data-aos="fade-right">
            <div class="mr-5">
              <h3>Need custom web design?</h3>
              <p>Professional results. Mobile-friendly. <i>Flat rate</i>.</p>
              <a href="web-design.php"><button class="btn btn-sm bg-warning">Learn More</button></a>
            </div>
            <div class="pl-3">
              <p><span class="display-4">$99</span>/flat</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end PRICING TABLE -->

    <!-- begin PROGRAMMING SERVICES -->
    <div class="container-fluid bg-light pt-5 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <center><h2>In Need of <span class="text-blue">Programming Services?</span></h2></center>
          </div>
          <div class="col-12">
            <p>While we mostly focus on web design here at Sunflwr, we also are well-versed in web programming using <b>PHP</b>, <b>MySQL</b>, and
              <b>Javascript</b>. This means we are able to create a wide array of web apps that can give your website even more functionality. Some customers
              require websites with more than just static pages, instead needing dynamic content that is easy to update and is more interactive with the users.
              There are so many different things that can be built with custom programming that it would be impossible to list it all on this page.
                Please <a href="contact.php">contact us</a> to see if Sunflwr custom programming services are a fit for you!</p>
          </div>
          <div class="col-md-8 col-sm-12 col-12 text-justify">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">User Logins</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">CMS</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Widgets &amp; APIs</a>
              </div>
            </nav>
            <div class="tab-content mb-5" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>We can build custom user login systems for your website. For example, suppose you offer clients a support portal where they can log in to view
                  their personalized subscriptions or services, pay bills, or request help. <b>Sunflwr has you covered.</b> Custom logins can be created
                  so that certain parts of your website are restricted unless a user subscribes to a service or simply creates an account. The possibilities
                  are truly endless.</b></p>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <p>A content management system, or CMS, is a web application used to easily and quickly add, remove, and update information displayed on your website.
                  For instance, the contact info that we have displayed on the bottom of every page is stored in a single database. We can update our email address
                  once in the database, and it will be updated on every page automatically! A CMS can also be used to manage products in a store, allowing you to
                  add, remove, and update products with a single edit -- all without having to touch any sort of code!</p>
              </div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p><b>Sunflwr</b> can create custom widgets for your website using third-party APIs. If it&#39;s available online, we more than
                  likely can implement it! For instance, suppose an API offered by Weather.com returns the local weather given a postal code. We can
                  use this data to create a local weather widget (or plugin) on your website that automatically raises the price of umbrellas in your store when
                  rain is forecasted.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-12">
            <div class="card shadow-sm" data-aos="flip-down">
              <div class="card-header bg-stripe-blue text-white">
                CUSTOM PROGRAMMING
              </div>
              <div class="card-body alert-primary pt-0 pb-0">
                <center>
                  <p class="card-text text-muted">Just <span class="display-4 text-blue">$39</span>/hr!</span></p>
                </center>
              </div>
            </div>
            <figcaption class="figure-caption text-center mb-4">FIRST HOUR FREE with any web design package</figcaption>
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
