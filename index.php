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
    <meta name="description" content="Sunflower Media is Phoenix's best affordable web design, experienced in mobile websites, SEO, and photography for Arizona's small businesses." />

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

    <title>Affordable Web Design and SEO | Phoenix, AZ | Sunflower Media</title>
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

    <header class="jumbotron jumbotron-fluid mb-lg-0 mb-md-0 mb-sm-0 mb-0">
      <div class="container" data-aos="fade-left">
        <h2 class="display-4">Affordable Phoenix Web Design</h2>
        <h3 class="lead"><i>With Professional SEO and Photography Services</i></h3>
      </div>
    </header>

    <div class="container-fluid bg-light pt-md-0 pt-lg-0 pt-sm-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 pt-lg-3 pt-md-3 pt-sm-3 pt-3">
            <h1>Hi, we&#39;re <span class="text-blue">Sunflwr.</span></h1>
            <p class="text-justify">We are a <b>digital multimedia group</b> determined to provide Phoenix&#39;s best affordable web design. How do we do it?
              By providing professional, SEO-driven websites that gain attention and get results. Our turn-key website packages include
              custom mobile website design, market research in your industry, and on-site photography services for our local clients. Best
              yet, our extreme value packages usually will see you online in 1 WEEK, giving you more time to focus on building your business.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 text-right bg-sunflower-transparent"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-light-blue">
      <div class="container bg-light-arrow-btm"></div>
    </div>

    <div class="container-fluid bg-light-blue">
      <div class="container  pt-lg-3 pt-md-3 pt-sm-3 pt-3 pb-lg-5 pb-md-5 pb-sm-5 pb-5">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-3 mb-3">
            <div class="card text-center shadow-lg" data-aos="fade-up">
              <div class="card-header bg-green">
                <i class="fa fa-desktop mr-3"></i>WEB DESIGN
              </div>
              <div class="card-body">
                <p class="card-text">All of our websites are built using the most up-to-date web standards including <b>HTML5</b>, <b>CSS3</b>, and <b>Bootstrap4</b>. This ensures that every website we launch is fast, mobile-friendly, accessible, and an absolute <i>dream</i> for search engines.</p>
                <a href="#" class="btn btn-sm bg-light"><u>why is this important?</u></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-3 mb-3">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-sm"></div>-->
            <div class="card text-center shadow-lg" data-aos="fade-up">
              <div class="card-header blue-bg">
                <i class="fa fa-camera-retro mr-3"></i>PHOTO &amp; VIDEO
              </div>
              <div class="card-body">
                <p class="card-text">On-site photography is an excellent way to add that necessary personal touch to your website. Stock photos have their purpose, but relying too heavily on them can make your website seem inorganic and fake. We can fix that with our professional quality photo and video services.</p>
                <a href="#" class="btn btn-sm btn-light"><u>show me how</u></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-3 mb-3">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-md"></div>-->
            <div class="card text-center shadow-lg" data-aos="fade-up">
              <div class="card-header bg-warning">
                <i class="fa fa-area-chart mr-3"></i>SEO MANAGEMENT
              </div>
              <div class="card-body">
                <p class="card-text">Having a beautiful, effective website has no value without proper search engine optimization (SEO). With targeted keywords, optimized page content, and a focus on market research, we can increase site traffic and keep your customers coming back for more.</p>
                <a href="#" class="btn btn-sm btn-light"><u>learn more</u></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-3 mb-3">
            <!--<div class="col-12 d-lg-block d-md-none d-sm-none d-none spacer-lg"></div>-->
            <div class="card text-center shadow-lg" data-aos="fade-up">
              <div class="card-header bg-magenta">
                <i class="fa fa-gear mr-3"></i>MAINTENANCE
              </div>
              <div class="card-body">
                <p class="card-text">Since you will own your new website outright, we can train you and your employees how to add or remove content whenever needed, along with custom support videos provided by us. And if you just want <i>us</i> to do all the work, we can set up an on-demand maintenance plan.</p>
                <a href="#" class="btn btn-sm btn-light"><u>learn more</u></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- begin TESTIMONIALS -->
    <div class="container-fluid blue-bg white-border bg-stripe-blue">
      <div class="container pt-5 pb-4"data-aos="fade-right">
        <div class="row">
          <div class="col-sm-12">
            <center><h2 class="mb-4">Word on the Grapevine</h2></center>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  				    <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
              </ol>
              <!-- Wrapper for carousel items -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-8 col-sm-9 col-12" style="margin: 0 auto;">
                      <div class="testimonial-wrapper">
                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.</div>
                        <div class="media">
                          <img src="img/design/g-eazy.jpg" class="mr-3" alt="">
                          <div class="media-body">
                            <div class="overview">
                              <div class="name"><b>Gerald Earl Gillum</b></div>
                              <div class="details">Rapper / G-Eazy, LLC.</div>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
  														    <li class="list-inline-item"><i class="fa fa-star"></i></li>
  														    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-8 col-sm-9 col-12" style="margin: 0 auto;">
                      <div class="testimonial-wrapper">
                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.</div>
                        <div class="media">
                          <img src="img/design/doja-cat.jpg" class="mr-3" alt="">
                          <div class="media-body">
                            <div class="overview">
                              <div class="name"><b>DojaCat</b></div>
                              <div class="details">Rapper / DojaCat, LLC.</div>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
  														    <li class="list-inline-item"><i class="fa fa-star"></i></li>
  														    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end TESTIMONIALS -->

    <!-- begin HOW WE DO IT -->
    <div class="container-fluid bg-light pt-5">
      <div class="container" >
        <div class="row">
          <div class="container col-lg-6 col-md-6 col-sm-12 col-12 mt-3 text-justify" data-aos="fade-right">
            <center><h2>How We <span class="text-blue">Stick Out</span></h2></center>
            <p>At <b>Sunflwr</b>, we pride ourselves on our extreme attention to detail, and we always strive for perfection, all without
              sacrificing your most valuable asset: <b>TIME</b>. Whether we&#39;re building a single <a href="web-design.php#pricing">landing page</a>
              or a <a href="web-design.php#pricing">deluxe website</a> package, we know that you&#39;re looking for a quick turnaround. After all, the faster
              you get online, the faster new customers can find your business.</p>
          </div>
          <div class="container col-lg-6 col-md-6 col-sm-12 col-12 mt-3 text-justify" data-aos="fade-left">
            <center><h2>How We <span class="text-blue">Do It</span></h2></center>
            <p>Our vast knowledge of the most current web design and coding practices allows us to quickly put together beautiful websites
              that are functional on every device by utilizing the newest <b>Bootstrap 4</b> framework. This gives us ample time to make
              revisions throughout the course of just days to ensure perfection on our end -- and total satisfaction on yours.</p>
          </div>
          <div class="container col-lg-9 col-md-9 col-sm-12 col-12 mt-3 text-justify" data-aos="fade-up">
            <center><h2>What Does This Mean <span class="text-blue">For Me?</span></h2></center>
            <p>Regardless of your web design needs, <b><i>WE DO NOT CHARGE BY THE HOUR!</i></b> Thus, it truly is in our best interest
              to get you and your business online as fast as possible. Not only does this ensure a super speedy turnaround, but it also
              means that you can always send the site back for revisions without the worry of paying more for extra work. That is how
              much we believe in the quality of our service. Learn about our extensive <a href="web-design.php#pricing">web design packages</a> and see which
              one best suits your needs. We&#39;re always here to help!</p>
          </div>
        </div>
      </div>
      <!-- SPECIAL OFFER TAB -->
      <div class="text-center pb-1">
        <a href="#special-offer" data-toggle="collapse" class="special-offer-tab"><h4 class="d-inline blue-bg text-white pb-1 pl-3 pr-3 rounded-top"><b>$<u>99</u></b> SPECIAL OFFER</h4></a>
        <a href="web-design.php" class="special-offer-tab-action collapse" id="special-offer"><h4 class="d-inline bg-warning text-white pb-1 pl-3 pr-3 rounded-top">Learn More!</h4></a>
      </div>
      <!-- end SPECIAL OFFER TAB -->
    </div>
    <!-- end HOW WE DO IT -->

    <!-- begin SPECIAL OFFER BANNER -->
    <div id="special-offer" class="collapse container-fluid alert-primary text-dark text-center special-banner pt-2 pb-2">
      <div class="container mb-0">
          <h4>Just <span class="display-4 text-danger">$99</span> gets you online!</h4>
          <ul class="list-inline fa-ul d-flex justify-content-center flex-wrap text-blue">
            <li class="list-inline-item"><i class="fa fa-li fa-check-circle mr-2"></i>professional landing page</li>
            <li class="list-inline-item"><i class="fa fa-li fa-check-circle mr-2"></i>description of your services</li>
            <li class="list-inline-item"><i class="fa fa-li fa-check-circle mr-2"></i>small photo gallery</li>
            <li class="list-inline-item"><i class="fa fa-li fa-check-circle mr-2"></i>contact info</li>
            <li class="list-inline-item"><i class="fa fa-li fa-check-circle mr-2"></i>contact form</li>
          </ul>
          <!--<a href="#" class="btn btn-sm blue-bg">Learn More</a>-->
      </div>
    </div>

    <!-- begin PORTFOLIO GRID -->
    <div class="container-fluid portfolio pt-5 pb-4 bg-sunflower-field">
      <div class="container">
        <center><h3 class="bg-trans pt-1 pb-1 pl-2 pr-2 shadow-sm d-inline-block" data-aos="fade-right">Fantastic <span class="text-blue">Results</span></h3></center>
        <div class="row mt-4">
          <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
            <a href="./img/portfolio/web-design/fullres/ajl-group-expertise.png" data-lightbox="portfolio-grid-home" data-title="AJL Group (London)"><img src="./img/portfolio/web-design/thumbs/ajl-group-expertise.png"></a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
            <a href="./img/portfolio/web-design/fullres/shane-lutzk-art.png" data-lightbox="portfolio-grid-home" data-title="Shane Lutzk (Indiana)"><img src="./img/portfolio/web-design/thumbs/shane-lutzk-art.png"></a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
            <a href="./img/portfolio/web-design/fullres/cff-of-texas-home.png" data-lightbox="portfolio-grid-home" data-title="CFF of Texas (Texas)"><img src="./img/portfolio/web-design/thumbs/cff-of-texas-home.png"></a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4" data-aos="fade-up">
            <a href="./img/portfolio/web-design/fullres/theresa-harnois-home.png" data-lightbox="portfolio-grid-home" data-title="Theresa Harnois (Arizona)"><img src="./img/portfolio/web-design/thumbs/theresa-harnois-home.png"></a>
          </div>
          <!--
          <div class="col-3 mb-4">
            <img src="./img/portfolio/web-design/thumbs/theresa-harnois-about.png">
          </div>
          -->
          <div class="col-12 mb-3" data-aos="fade-right">
            <center><a href="portfolio.php" class="btn blue-bg btn-sm ">View Complete Portfolio</a></center>
          </div>
        </div>
      </div>
    </div>
    <!-- end PORTFOLIO GRID -->

    <!-- begin CONTACT FORM -->
    <div class="container-fluid bg-light">
      <div class="container pt-5 pb-4" data-aos="fade-up">
        <div class="row">
          <div class="col-md-7 col-sm-12 text-md-left text-sm-center text-center">
            <h2 class="mb-3">Like what <span class="text-blue">you see?</span></h2>
            <p>Whatever your needs are, we would love to be a part of your next project!</p>
            <h5 class="mb-4">Contact us today for a <span class='text-blue'>free, no-obligation</span> appointment to discuss your multimedia needs.</h5>
            <a name="contactSuccess" href="#contactForm" data-toggle="collapse"><button type="button" class="btn btn-sm blue-bg <?php if($success!=""){echo "d-none";}?>">Ask Us Anything!</button></a>
            <?php echo "<h2 class='text-success text-center'>".$success."</h2>";?>
            <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>#contactSuccess" class="collapse mt-5 row <?php if($success!=""){echo "d-none";}?>">
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
                <button class="btn blue-bg mt-3 float-right" type="submit">Send Message</button>
              </div>
            </form>
          </div>
          <div class="col-md-5 col-sm-12 text-md-left text-sm-center text-center mt-md-0 mt-sm-4 mt-5 border-left">
            <h4 class="mb-3">Or contact us <span class="text-blue">directly:</span></h4>
            <p><i class="fa fa-envelope mr-2"></i><a class="text-dark" href="mailto:info@mysunflwr.com">info@mySUNFLWR.com</a></p>
            <p><i class="fa fa-phone mr-2"></i>upon request</p>
            <p class="text-muted alert alert-warning small">We value your privacy. Your information will never be sold or shared.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end CONTACT FORM -->

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
