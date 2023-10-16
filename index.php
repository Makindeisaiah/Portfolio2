<?php

include "./includes/connection.php";

if (isset($_POST['send_message'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = mysqli_query($conn, "INSERT INTO contact (`full_name`, `email`, `subject`, `message`) VALUES ('$full_name', '$email', '$subject', '$message') ");


    if ($query) {
        $alert = "Your mail has been submitted";
        $color = "success";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Makinde Isaiah</title>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <?php if (isset($alert)) {
    ?>
        <div class="alert alert-<?php echo $color ?>">
            <?php echo $alert ?>
        </div>
    <?php
    }
    ?>
    <!-- navbar start -->
    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container-lg">
            <a class="navbar-brand text-danger fw-bold fs-4" href="#">Isaiah</a>
            <div class="dropdown">
                <button class="btn btn-secondary btn-danger px-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#home">Home</a></li>
                    <li><a class="dropdown-item" href="#about">About</a></li>
                    <li><a class="dropdown-item" href="#services">Services</a></li>
                    <li><a class="dropdown-item" href="#portfolio">Portfolio</a></li>
                    <li><a class="dropdown-item" href="#testimonials">Testimonials</a></li>
                    <li><a class="dropdown-item" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- home section start -->
    <section class="home py-5 mt-5" id="home">
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-md-0">
                    <div class="home-img" text-center>
                        <img src="./images/programmer.jpg" alt="profile-img" height="300px" width="300px" style="border-radius:340px" ;>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="home-text">
                        <p class="text-muted mb-1">Hello I'm</p>
                        <h1 class="text-danger text-uppercase fs-1 fw-bold">Web Developer</h1>
                        <h2 class="fs-4">Makinde Isaiah Oluwatoyin</h2>
                        <p class="mt-4 text-muted"></p>
                        <a href="#portfolio" class="btn btn-danger px-3 mt-3">My work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->


    <!-- about section start -->
    <section class="about py-5" id="about">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 class="fs-4 mb-3">Makinde Isaiah Oluwatoyin</h3>
                        <p text-muted>I’m a web developer living in Lagos, Nigeria. I spend my days with my hands in many different areas of web development from front end programming (HTML, CSS, Bootstrap and Javascript) to back end engineering (PHP and SQL), digital accessibility, user experience and visual design.</p>
                    </div>
                    <div class="banner">
                        <div class="row text-center text-uppercase my-3">
                            <div class="col-sm-4">
                                <div class="fact-item">
                                    <h4 class="fs-1 fw-bold">3</h4>
                                    <p class="text-muted">Project Completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center text-uppercase my-3"">
                        <div class=" col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">2</h4>
                                <p class="text-muted">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center text-uppercase my-3"">
                        <div class=" col-sm-4">
                        <div class="fact-item">
                            <h4 class="fs-1 fw-bold">90</h4>
                            <p class="text-muted">Positive Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center">
                    <a href="#" class="btn px-3 btn-danger me-5">Download CV</a>
                    <div class="social-links">
                        <a href="#" class="text-dark me-2"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0">
            <div class="skill-item mb-4">
                <h3 class="fs-6">Html</h3>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="skill-item mb-4">
                <h3 class="fs-6">Css</h3>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="skill-item mb-4">
                <h3 class="fs-6">Javascript</h3>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 55%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="skill-item mb-4">
                <h3 class="fs-6">php</h3>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="skill-item mb-4">
                <h3 class="fs-6">SQL</h3>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="skill-item mb-4">
                <h3 class="fs-6">Bootstrap</h3>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- service section start -->
    <section class="services py-5" id="services">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center align-items-center">
              <center><div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger fs-2">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </div>
                        <h3 class="fs-5 py-2">Web Development</h3>
                        <p class="text-muted">Building, creating, and maintaining of websites.</p>
                    </div>
                </div></center>
            </div>
        </div>
    </section>

    <!-- service section end -->

    <!-- portfolio section start -->
    <section class="portfolio py-5" id="portfolio">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Latest Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="./images/project-1.png" class="w-100 img-thumbnail" alt="portfolio item">
                        <h3 class="text-capitalize fs-5 my-2">Fashion Section</h3>
                        <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="./images/project-2.png" class="w-100 img-thumbnail" alt="portfolio item">
                        <h3 class="text-capitalize fs-5 my-2">Fashion Section</h3>
                        <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="./images/project-3.png" class="w-100 img-thumbnail" alt="portfolio item">
                        <h3 class="text-capitalize fs-5 my-2">Music Section</h3>
                        <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio section end -->

    <!-- freelancer available section start -->
    <section class="freelancer-available py-5 bg-danger">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="text-light fs-5">Do you have any project ?</p>
                    <h2 class="fs-1 text-white mb-4">I'm Available For Freelancer Projects</h2>
                    <a href="#contact" class="btn btn-outline-light">Hire Me</a>

                </div>
            </div>


        </div>
    </section>
    <!-- freelancer available section end -->


    <!-- testimonials section start -->
    <section class="testimonials py-5" id="testimonials">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active bg-danger"></li>
                            <li class="bg-danger" type="button" data-bs-target="#carousel1" data-bs-slide-to="1"></li>
                            <li class="bg-danger" type="button" data-bs-target="#carousel1" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner p-1">
                            <!-- testi item start -->
                            <div class="testi-item carousel-item active bg-white shadow-sm rounded p-4 mb-5">
                                <div class="testi-author-info d-flex align-items-center">
                                    <img src="./images/Afrorock-ceo.jpeg" height="100px" width="100px" alt="author img" class="img-thumbnail rounded-circle">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Olayinka Jegede</h3>
                                        <p class="text-muted m-0">Afrorock-ceo</p>
                                    </div>
                                </div>
                                <p class="text-muted mt-3">Thanks for all your work and ideas. I am far more pleased with it than I expected to be.</p>
                                <div class="rating text-danger">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!-- testi item end -->
                            <!-- testi item start -->
                            <div class="testi-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                                <div class="testi-author-info d-flex align-items-center">
                                    <img src="./images/ay-virus-ceo.jpeg" height="100px" width="100px" alt="author img" class="img-thumbnail rounded-circle">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Tanimowo Ayomide</h3>
                                        <p class="text-muted m-0">Virus Shot</p>
                                    </div>
                                </div>
                                <p class="text-muted mt-3">It has been a pleasure to work with Isaiah to create a website for the new Music website which is working well. They met tight timetables and were always responsive to ideas and requests.</p>
                                <div class="rating text-danger">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!-- testi item end -->
                            <!-- testi item start -->
                            <div class="testi-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                                <div class="testi-author-info d-flex align-items-center">
                                    <img src="./images/isaiah ceo 3.jpeg" height="100px" width="100px" alt="author img" class="img-thumbnail rounded-circle">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Makinde Isaiah</h3>
                                        <p class="text-muted m-0">i-TECH</p>
                                    </div>
                                </div>
                                <p class="text-muted mt-3">I thought building a website would be difficult. Not at all. Isaiah made the process simple, understandable and effective.</p>
                                <div class="rating text-danger">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!-- testi item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials section end -->

    <!-- contact section start -->
    <section class="contact py-5" id="contact">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Contact Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-danger">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Email</h3>
                            <p class="text-muted">makindeisaiah@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-danger">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Phone</h3>
                            <p class="text-muted">+234 703 329 5471</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-danger">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Visit Office</h3>
                            <p class="text-muted">No. 2b, Prince Adelowo Adedeji Street, Lekki, Lagos, Nigeria.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="contact-form">
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <input type="text" name="full_name" placeholder="Full Name" class="form-control  form-control-lg fs-6 border-0 shadow-sm" value="" />
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <input type="text" name="email" placeholder="Email" class="form-control form-control-lg fs-6 border-0 shadow-sm" value="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <input type="text" name="subject" placeholder="Subject" class="form-control form-control-lg fs-6 border-0 shadow-sm" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <textarea rows="5" name="message" placeholder="Message" class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="send_message" class="btn btn-danger px-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section end -->

    <!-- footer start -->
    <footer class="footer border-top py-4">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <p class="m-0 text-center text-muted">&copy; 2022 Makinde Isaiah</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- footer end -->












    <script src="./bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>

</html>