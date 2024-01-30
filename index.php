<?php
include "database.php";
$db = new database();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Tech</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="./images/image.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="./js/main.js"></script>
</head>

<body>
    <header class="header">
        <a href="#" class="logo"><img src="./images/image.png" alt=""></a>
        <div class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Our Team</a></li>

                <li><a href="#contact">Contact</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="home">
        <h1>Imagine the Possibilities with</h1>
        <h2>HIGH TECH</h2>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
    </section>

    <section id="about" class="about">
        <h1 class="heading">ABOUT US</h1>
        <div class="row">
            <div class="content">
                <h3>Our company makes dreams come to life!</h3>
                <p>High Tech is a tech innovator dedicated to delivering cutting-edge solutions. Our mission is to exceed client expectations through expertise, client-centricity, and a culture of innovation. Join us on our journey to shape the future of technology.</p>
                <a href="#"><button class="btn">Read More</button></a>
            </div>
        </div>
    </section>

    <div class="pt-5 pb-5" style="background-color: #f2f2f2;">
        <div class="container">
            <div class="row">
                <div class="section-head col-sm-12" id="service">
                    <h1>Our Services</h1>
                    <p>We help you to build high-quality digital solutions and products as well as deliver a wide range of related professional services. We are providing world-class service to our clients.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-laptop"></i></span>
                        <h6>Web App Development</h6>
                        <p>Our Custom Web Development Services Include Both Front-End And Back-End Development. Whether It Is Enhancing An Existing App Or Architecting An Enterprise App, Our Developers Are Up For The Challenge.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-android"></i></span>
                        <h6>Mobile App Development</h6>
                        <p>We Have Expertise In Creating Multi-Platform Mobile App Solutions For Both Android And IOS Devices. Using PhoneGap, Xamarin, And React Native, We Offer Custom Mobile App That Runs Smoothly On Multiple Platforms.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-magic"></i></span>
                        <h6>Digital Marketing</h6>
                        <p>The digital marketing services that we provide have their own set of charms. By taking our digital marketing services, our clients will be able to increase visibility and engage with their customers at the online platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <section class="counters">
        <div class="container">
            <div>
                <i class="far fa-clock fa-4x"></i>
                <div class="counter" data-target="13500">0</div>
                <h3>Working Hours</h3>
            </div>
            <div>
                <i class="fas fa-gift fa-4x"></i>
                <div class="counter" data-target="720">0</div>
                <h3>Completed Projects</h3>
            </div>
            <div>
                <i class="fas fa-users fa-4x"></i>
                <div class="counter" data-target="480">0</div>
                <h3>Happy Clients</h3>
            </div>
            <div>
                <i class="fas fa-award fa-4x"></i>
                <div class="counter" data-target="120">0</div>
                <h3>Awards Received</h3>
            </div>
        </div>
    </section>

    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="section-head-1 col-sm-12" style="text-align: center;">
                    <h4 style="margin-top: -5rem;" id="portfolio"><span>Our</span> Projects</h4>

                    <p>High Tech's objective is to enable a large number of youth to take up <br>industry-relevant skill training that will help them<br> in securing a better livelihood.
                    </p>
                </div>

                <?php


                $limit = 12;
                $join = "";
                $order = "";
                $db->select('projects', '*', $join, null, $order, $limit);
                $result = $db->getResult();

                foreach ($result as list("id" => $id, "project_name" => $project_name, "project_link" => $project_link, "image" => $image)) {

                ?>

                    <div class="col-lg-4 col-sm-6">
                        <a href="<?php echo $project_link ?>" target="_blank">
                            <div class="item"> <span class="icon feature_box_col_four">
                                    <img src="<?php echo $image ?>" alt="project image" style="width: 100px; height: 100px; margin-bottom: 30px"></span>
                                </span>
                                <h6><?php echo $project_name ?></h6>
                            </div>
                        </a>
                    </div>
                <?php
                };
                ?>

                <!-- <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
            <h6>Project-2</h6>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
            <h6>Project-3</h6>
            
          </div>
        </div> -->
            </div>
        </div>
    </div>

    <div class="communicate">

        <a href="#contact"><button class="btn">Contact Now</button></a>
    </div>



    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <section class="team" style="margin-top: 7rem;">
        <h1 class="heading" style="margin-top: -1.5rem;" id="team">OUR TEAM</h1>
        <p></p>
        <div class="row">
            <div class="card">
                <div class="image">
                    <img src="./images/salman.jpg" alt="Team member 1">
                </div>
                <div class="info">
                    <h3>Salman Khan</h3>
                    <span>Web Developer</span>
                    <div class="icons">
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="image">
                    <img src="./images/shah.jpg" alt="Team member 1">
                </div>
                <div class="info">
                    <h3>Shahrukh Khan</h3>
                    <span>Mobile Developer</span>
                    <div class="icons">
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="image">
                    <img src="./images/amit.jpg" alt="Team member 1">
                </div>
                <div class="info">
                    <h3>Amitabh Bachan</h3>
                    <span>Graphic Designer</span>
                    <div class="icons">
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="image">
                    <img src="./images/kareenakapoor-1458213681.jpg" alt="Team member 1">
                </div>
                <div class="info">
                    <h3>Kareena Kapoor</h3>
                    <span>Web Designer</span>
                    <div class="icons">
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h1 class="heading">CONTACT US</h1>
    </section>
    <div class="contact-in">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711243.17762776!2d64.4398422293091!3d20.011408266548177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1644684739958!5m2!1sen!2sin" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-form">
            <form action="./contactme.php" method="POST">
                <input type="text" name="name" placeholder="Name" class="contact-form-txt" required>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required placeholder="Contact number" maxlength="10" class="contact-form-phone">
                <input type="email" name="email" placeholder="Email" class="contact-form-email" required>
                <textarea placeholder="Your Message" name="message" class="contact-form-txtarea" required></textarea>
                <input type="submit" value="Submit" name="submit" class="contact-form-btn">
            </form>
        </div>
    </div>

    <section class="faq">
        <h1 class="heading" style="margin-top: -2rem; color: #00bfff;" id="faq">FAQ</h1>
        <div class="row">
            <div class="accordion-container">


                <div class="accordion">
                    <div class="accordion-header">
                        <span>+</span>
                        <h3>How do I associate with High Tech?</h3>
                    </div>
                    <div class="accordion-body">
                        <p>The process begins when you contact us with your requirements.
                            On the basis of the further discussion, you can choose an engagement model that suits you the best.
                            After that, we begin the process of development.</p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">
                        <span>+</span>
                        <h3>Can you help my current site look more professional?</h3>
                    </div>
                    <div class="accordion-body">
                        <p>Yes. Give us your requirements and we have experienced expertise to help you give a
                            new professional look that really wonders!</p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">
                        <span>+</span>
                        <h3>When do I pay?</h3>
                    </div>
                    <div class="accordion-body">
                        <p>For most projects, equal payments are made at the start, midway, and the end of the project.
                            .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>About Us</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#">Home</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#about">About us</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#service">Our services</a></li>


                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#portfolio">Portfolio</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#team">Team</a></li>

                            <li><i class="ion-ios-arrow-forward"></i> <a href="#contact">Contact</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#faq">FAQ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact" style="font-size: 1.5rem;">
                        <h4>Contact Us</h4>
                        <p>
                            Azad Nagar<br>
                            Una<br>
                            Himachal Pradesh <br>
                            <strong>Phone:</strong> +91-8091104362<br>
                            <strong>Email:</strong> tejasvi210303@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="https://www.facebook.com/"><i class="ion-logo-facebook"></i></a>
                            <a href="https://twitter.com/login?lang=en"><i class="ion-logo-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="ion-logo-linkedin"></i></a>
                            <a href="https://www.instagram.com/"><i class="ion-logo-instagram"></i></a>
                            <a href="https://accounts.google.com/servicelogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="ion-logo-googleplus"></i></a>
                        </div>

                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 copyright" style="color: #fff; font-size: 1.3rem;">
                    Copyright &copy; 2023 High Tech Co. Website. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>
</body>

</html>