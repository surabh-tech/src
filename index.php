<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>S R Consultant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favi.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
 
  <?php
     include("header.php")
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 >Welcome to S R Consultant</h2>
            <p data-aos="fade-up">We are a team of civil engineers and architects performing a superior standard of work. We are engaged in Project Management Consultancy, Structural Engineering Services, Architectural Planning, Structural Audit & Retrofitting ,Valuation and Proof checking.
.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>We Apply Advanced Technologies
For Relevant Conditions.</h3>
              <p>Our Aim is To Reach Perfection
& We Chase To Reach Excellence..
              <p>From groundbreaking concepts to impeccable execution, we're here to turn your vision into reality. Request a quote now and elevate your projects with our expertise. Your engineering triumph begins with us.</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Get a quote</h3>
              <p>Your vision, our expertise – together, we build the future. Request a quote today and take the first step towards realizing your infrastructure dreams."</p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Constructions</h2>
          <p>Crafting Dreams into Concrete Realities</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Passion for Precision</h4>
                    <p>We approach every project with an artist's eye and an engineer's precision, ensuring that every brick laid resonates with quality.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-2.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Innovation at Core</h4>
                    <p>Embrace the future of construction with us. We integrate cutting-edge technologies, setting new standards for efficiency and sustainability.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-3.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Machinery Marvels</h4>
                    <p> Immerse yourself in the power and grace of cutting-edge construction machinery. Every post showcases the artistry behind the build.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-4.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Timely Triumphs:</h4>
                    <p> Punctuality is our virtue. We understand the significance of timelines and deliver results that exceed expectations..</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2>Services</h2>
          <p>Exceptional Services, Unrivaled Expertise ✨</p>
        </div>
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>RCC Buildings</h3>
              <p>In the construction trade, when we say concrete, we mean reinforced concrete. The full name is concrete reinforced cement or RCC construction. RCC (Reinforced concrete) is concrete containing steel bars or rebars, called reinforcing bars..</p>
              <a href="contact.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Steel Structures</h3>
              <p>The steel structure is a structure mainly made of steel, and it is one of the main types of building structures. The characteristics of steel are high strength, lightweight, excellent overall rigidity, and strong deformability. So it is especially suitable for large-span, super-high and super-heavy buildings. The steel structure is a steel beam, steel column, steel truss, and other components made of section steel and steel plate, and welds, bolts, or rivets connect each component or part.</p>
              <a href="contact.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Masonry Structures</h3>
              <p>There are essentially two approaches to the investigation and assessment of masonry structures. The first involves basic, low-tech methods, while the second uses much more sophisticated, and therefore more expensive, techniques. This article looks mainly at the less expensive methods available. It also looks briefly at the questions raised by investigative work and where to go for further help.</p>
              <a href="contact.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Structural Audit</h3>
              <p>Our Structural engineers are experts in creating sturdy frameworks onto which structures are built. The team possesses innate knowledge of all the integrated parameters of a sound structural design encompassing the stability, strength, and rigidity of the structure. Having designed many renowned structures across various sectors, the team has reached new heights of expertise in engineering design and structural analysis.</p>
              <a href="contact.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Architectural Planning</h3>
              <p>Our vibrant team of Architects creates intelligent and sustainable designs in the arena of Urban Design, Residential, Commercial, Hospitality and Institutional. The team also has an exceptional knack for interior designs of various kinds & magnitudes of structures.</p>
              <a href="contact.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Project Management</h3>
              <p>We have an extremely competent team of Project Managers who are so well-equipped with rich knowledge & experience that enables them to provide expert project management advice and expert suggestions to the clients. With their expertise, our PMs face various challenges with the utmost professionalism; which involve challenges pertaining to Designs, Constructability, Long lead material, Inter Contractor Coordination, Engineering, Safety, etc</p>
              <a href="contact.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>At S R CONSULTANT</h3>
            <p>Our commitment to excellence is woven into every service we provide. Explore a world of unparalleled quality and innovation with our golden line of offerings</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Architectural Brilliance</a></h4>
                <p> Immerse yourself in the artistry of architectural design. Our experts craft spaces that harmonize aesthetics, functionality, and sustainability.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Engineering Precision:</a></h4>
                <p>Experience the power of precision. From structural engineering to infrastructure development, our team ensures every project stands tall with strength and resilience.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Innovative Solutions:</a></h4>
                <p> Embrace forward-thinking solutions. We integrate cutting-edge technologies, ensuring your projects are at the forefront of industry advancements</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Construction Mastery</a></h4>
                <p>Witness the magic of construction unfold. Our seasoned professionals bring blueprints to life, creating landmarks that stand as testaments to our craftsmanship.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Modisit</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Praesenti</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Explica</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Nostrum</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Neque exercitationem debitis</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Voluptatibus commodi accusamu</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Omnis fugiat ea explicabo sunt</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section -->
    

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
    <div class="section-header" >
          <h2>Our Projects</h2>
          <p>Unleashing boundless possibilities, where every structure is a testament to meticulous craftsmanship and innovative design, providing a captivating blend of functionality and aesthetics</p>
        </div>
      <div class="container" data-aos="fade-up">
      
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-Apartments">Apratments</li>
            <li data-filter=".filter-Banglose">Banglose</li>
            <li data-filter=".filter-commercial">Commercial</li>
            <li data-filter=".filter-industrial">Industrial </li>
            <li data-filter=".filter-other">Others</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-other">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/other2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Maharaj</h4>
                  <p></p>
                  <a href="assets/img/projects/other2.jpg" title="Maharaj" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-other">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/other1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Mandir</h4>
                  <p></p>
                  <a href="assets/img/projects/other1.png" title="Temple" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-Apartments">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/apart1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Millenium Plaza</h4>
                  <p> </p>
                  <a href="assets/img/projects/apart1.png" title="Millenium Plaza" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-Apartments">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/apart2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Arch Dosti</h4>
                  <p> </p>
                  <a href="assets/img/projects/apart2.png" title="Arch Dosti" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-Apartments">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/apart3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Naik Apartment</h4>
                  <p> </p>
                  <a href="assets/img/projects/apart3.jpg" title="Naik Apartment" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-Banglose">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Bangalo1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Samadhan Residence-</h4>
                  <p></p>
                  <a href="assets/img/projects/Bangalo1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-Apartments">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/apart4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Subhlabh Heights-</h4>
                  <p> </p>
                  <a href="assets/img/projects/apart4.jpg" title="Subhlabh Heights-" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-Banglose">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Bangalo2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Banglose 2</h4>
                  <p></p>
                  <a href="assets/img/projects/Bangalo2.jpg" title="Banglose 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-commercial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/commercial3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Krishna Mega Mall & Multiplex-</h4>
                  <p></p>
                  <a href="assets/img/projects/commercial3.jpg" title="Krishna Mega Mall & Multiplex-" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-commercial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/commercial2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Krishna Square-</h4>
                  <p></p>
                  <a href="assets/img/projects/commercial2.jpg" title="Krishna Square-" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-commercial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/commercial4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Krishna Business Centre-</h4>
                  <p></p>
                  <a href="assets/img/projects/commercial4.jpg" title="Krishna Business Centre " data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-commercial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/commercial1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Millenium Plaza-</h4>
                  <p></p>
                  <a href="assets/img/projects/commercial1.jpg" title="Millenium Plaza-" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-commercial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/commercial5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Hotel Tuljabhavani-</h4>
                  <p></p>
                  <a href="assets/img/projects/commercial5.jpg" title="Hotel Tuljabhavani-" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-commercial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/commercial6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Happy Homes-</h4>
                  <p></p>
                  <a href="assets/img/projects/commercial6.jpg" title="Happy Homes" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Projects Item  -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-Banglose">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Bangalo3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kakani Bungalow-</h4>
                  <p></p>
                  <a href="assets/img/projects/Bangalo3.jpg" title="Kakani Bungalow" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Vikram Tea Processor Pvt. Ltd</h4>
                  <p></p>
                  <a href="assets/img/projects/industrial1.jpg" title="Vikram Tea Processor Pvt. Ltd" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Varroc Engineering Ltd Plant I</h4>
                  <p></p>
                  <a href="assets/img/projects/industrial2.png" title="Varroc Engineering Ltd Plant I" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Parason Machinery (I) Pvt. Ltd.</h4>
                  <p></p>
                  <a href="assets/img/projects/industrial3.jpg" title="Parason Machinery (I) Pvt. Ltd." data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial41.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Forbes & Company Ltd.</h4>
                  <p></p>
                  <a href="assets/img/projects/industrial41.jpg" title="Forbes & Company Ltd." data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial51.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Rathi steel n metal Pvt Ltd, Icon Steel</h4>
                  <p></p>
                  <a href="assets/img/projects/industrial51.png" title="Rathi steel n metal Pvt Ltd, Icon Steel" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial52.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Rathi steel n metal Pvt Ltd, Icon Steel</h4>
                  <p></p>
                  <a href="assets/img/projects/industrial52.png" title="Rathi steel n metal Pvt Ltd, Icon Steel" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial61.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kalika Steel Alloys Pvt. Ltd. </h4>
                  <p></p>
                  <a href="assets/img/projects/industrial61.jpg" title="Kalika Steel Alloys Pvt. Ltd. " data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial62.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kalika Steel Alloys Pvt. Ltd. </h4>
                  <p></p>
                  <a href="assets/img/projects/industrial62.jpg" title="Kalika Steel Alloys Pvt. Ltd. " data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial72.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Jalna Siddhivinayak Alloys Pvt. Ltd</h4>
                  <p></p>
                  <a href="assets/img/projects/industrial72.jpg" title="Jalna Siddhivinayak Alloys Pvt. Ltd" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-industrial">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/industrial71.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Jalna Siddhivinayak Alloys Pvt. Ltd</h4>
                  <p></p>
                  <a href="assets/img/projects/industrial71.jpg" title="Jalna Siddhivinayak Alloys Pvt. Ltd" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-other">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/other3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Entrance Gate</h4>
                  <p></p>
                  <a href="assets/img/projects/other3.png" title="Entrance Gate" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-other">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/other5.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Foot Over Bridge </h4>
                  <p></p>
                  <a href="assets/img/projects/other5.png" title="Foot Over Bridge " data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section>

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include("footer.php");?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>