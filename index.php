<!DOCTYPE html>
<html lang="en">
    <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- responsive webdesign for mobile/tablets-->


    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css"> <!-- improves the webpage -->
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css"> <!-- improves the webpage -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css"> <!-- css styling -->
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css"> <!-- css styling responsive-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"> <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"> <!-- aos animation -->

    <!-- Favicon Icon -->

    <link rel="shortcut icon" type="image/png" href="resources/img/logo.png">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> <!-- for the counter -->
    
    <title>Aspect Landscaping</title>

    </head>

    <body>
        <header>
            <nav class="sticky">
                <div class="row">
                    <a href="http://127.0.0.1:5500/index.html#"><img src="resources/img/logo.png" alt="Aspect logo" class="logo"></a>
                    <a href="http://127.0.0.1:5500/index.html#"><img src="resources/img/logo.png" alt="Aspect logo" class="logo-black"></a>
                    <a href="http://127.0.0.1:5500/index.html#"><img src="resources/img/title.png" alt="Aspect title" class="title"></a>
                    <!-- <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black"> <!-- so there is a black logo --> 
                    <ul class="main-nav js--main-nav">
                        <li><a href="#features">About</a></li>
                        <li><a href="#why">Why choose us</a></li>
                        <li><a href="#contact">Contact & Location</a></li>
                    </ul>
                    <a class="mobile-nav-icon"><ion-icon name="menu-outline"></ion-icon></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1> Goodbye small design. <br> Say hello to grand designs. </h1>
                <a class="btn btn-full js--scroll-to-start" href="#">I'm interested</a>
                <a class="btn btn-ghost js--scroll-to-why" href="#">Show me more</a>
            </div>

        </header>

        <section class="section-features js--section-features" id="features" data-aos="zoom-in-up"> <!-- make features the id to link to the li above -->
            <div class="row">
                <h2>Get superb quality &mdash; not mediocre quality</h2> <!--use the h1 element once and once only. ALSO instead of using a dash (-) you use &mdash-->
                <p class="long-copy">
                    Hello, we’re Aspect, your professional landscape designers. We know you yearn for a custom designed front and backyard. So let us take care of that for you. We are the best in the industry!
                </p>
            </div>
            <div class="row">
                <div class="col span-1-of-4 box"> <!-- add the box name after the default class name from the grid file, you never want to change the default grid element -->
                    <ion-icon name="pencil-outline" class="icon-big"></ion-icon>
                    <h3>Design</h3>
                    <p class="p1">
                        Our design team will develop a landscaping plan that suits your needs with plant and material recommendations. We support the local suppliers by sourcing the highest quality material from them.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <ion-icon name="hammer-outline" class="icon-big"></ion-icon>
                    <h3>Build</h3>
                    <p class="p1">
                        Aspect Landscaping is a certified registered builder by the Victorian Building Authority. You can be ensured that you will receive the highest quality as Aspect stay up to date with the new and upcoming trends!  
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <ion-icon name="ribbon-outline" class="icon-big"></ion-icon>
                    <h3>Professional finish</h3>
                    <p class="p1">
                        We take great pride and care in all of our landscaping projects. Our attention to detail and foresight we aim to leave you and your yard with an impression that lasts for years to come.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <ion-icon name="people-outline" class="icon-big"></ion-icon>
                    <h3>Local expertise</h3>
                    <p class="p1">
                        The professionals at Aspect are experts in the flora of the Melbourne metropolitan region. They understand the plants and type of landscaping that will best suit your place and needs!  
                    </p>
                </div>
            </div>
        </section>

        <section class="section-landscape"> <!-- want two rows with 4 images in each row, won't use a row class as we don't want a centred row with some images. We want to occupy 100% of the browsers width, so we use two ul one for each line. Better to put some stuff in ul instead of throwing images onto the website -->
            <ul class="landscape-showcase clearfix"> <!-- the child elements of this class which is the li elements are ones that have the float property so we say the parent has this clearfix class and so that float will be cleared after the ul element-->
                <li>
                    <figure class="landscape-photo"> <!-- it's like a container except we can contain an image and a caption for the image, in this case we will just put an image-->
                        <img src="resources/img/1.jpg" alt="Landscape">
                    </figure>
                </li>
                <li>
                    <figure class="landscape-photo"> 
                        <img src="resources/img/2.jpg" alt="Landscape">
                    </figure>
                </li>
                <li>
                    <figure class="landscape-photo">
                        <img src="resources/img/3.jpg" alt="Landscape">
                    </figure>
                </li>
                <li>
                    <figure class="landscape-photo"> 
                        <img src="resources/img/4.jpg" alt="Landscape">
                    </figure>
                </li>
            </ul>
            <ul class="landscape-showcase clearfix"> <!-- broken up into 2 blocks of 4 li so they are on separate rows -->
                <li>
                    <figure class="landscape-photo"> <!-- it's like a container except we can contain an image and a caption for the image, in this case we will just put an image-->
                        <img src="resources/img/5.jpg" alt="Landscape">
                    </figure>
                </li>
                <li>
                    <figure class="landscape-photo"> 
                        <img src="resources/img/6.jpg" alt="Landscape">
                    </figure>
                </li>
                <li>
                    <figure class="landscape-photo">
                        <img src="resources/img/7.jpg" alt="Landscape">
                    </figure>
                </li>
                <li>
                    <figure class="landscape-photo"> 
                        <img src="resources/img/8.jpg" alt="Landscape">
                    </figure>
                </li>
            </ul>
        </section>

        <section class="section-why js--section-why" id="why" data-aos="fade-up">
            <div class="row">
                <h2> Why choose Aspect landscaping? </h2>
            </div>
            <div class="row">
                <div class="col span-1-of-4 box border">
                    <img src="resources/icons/verified.svg" class="icon-medium"></img> <!-- to change the colour of an svg you need to follow its link and create fill="#4cd137" inside the path -->
                    <h3> Quality Work </h3>
                    <div class="why-feature">
                    <p class="p1">
                        Aspect landscaping operate with the highest quality materials and tools to ensure that you will be highly satisfied at the end of the project.
                    </p>
                    </div>
                </div>
                <div class="col span-1-of-4 box border">
                    <img src="resources/icons/gardening-tools.svg" class="icon-medium"></img>
                    <h3> High Skills </h3>
                    <div class="why-feature">
                    <p class="p1">
                        Our professional craftsmen are fully certified and have received extensive training to deliver top level work everytime! 
                    </p>
                    </div>
                </div>
                <div class="col span-1-of-4 box border">
                    <img src="resources/icons/handshake.svg" class="icon-medium"></img>
                    <h3> Collaboration </h3>
                    <div class="why-feature">
                    <p class="p1">
                        We consult with you the customer every step of the way as your satisfaction is our number one goal at the end of the project.
                    </p>
                    </div>
                </div>
                <div class="col span-1-of-4 box border">
                    <img src="resources/icons/loupe.svg" class="icon-medium"></img>
                    <h3> Focus on detail </h3>
                    <div class="why-feature">
                    <p class="p1">
                        We at Aspect believe that having attention to detail makes the difference between a average yard and a stunning yard! 
                    </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-4 box">
                    <p class="counter"> 200 </p>
                    <p class="p3"> Projects Completed </p>
                </div>
                <div class="col span-1-of-4 box">
                    <p class="counter"> 500 </p>
                    <p class="p3"> Happy Customers </p>
                </div>
                <div class="col span-1-of-4 box">
                    <p class="counter"> 137 </p>
                    <p class="p3"> Instagram Followers </p>
                </div>
                <div class="col span-1-of-4 box">
                    <p class="counter"> 429 </p>
                    <p class="p3"> Facebook Likes </p>
                </div>
            </div>
        </section>

        <section class="section-testimonials" data-aos="flip-up">
            <div class="row">
                <h2>Our customers highly recommend us!</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT 
                        <cite><img src="#" alt="INSERT IMAGE">INSERT NAME</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT 
                        <cite><img src="#" alt="INSERT IMAGE">INSERT NAME</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT INSERT TEXT 
                        <cite><img src="#" alt="INSERT IMAGE">INSERT NAME</cite>
                    </blockquote>
                </div>
            </div>
        </section>

        <section id="contact" data-aos="zoom-in">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="contact">
                <h4>
                    If you wish to contact us please use the form below. 
                    <br>
                    Alternatively you can contact us directly.
                    <br>
                    <br>
                    MOBILE: 0430 451 217
                    <br>
                    <br>
                    LOCATION: Melbourne Metropolitan Region
                    <br>
                    <br>
                    EMAIL: aspectlc@outlook.com
                </h4>
            </div>
            <div class="row form-box" id="form">
                <form method="post" action="mailer.php" class="contact-form"> <!-- need to setup more programming languages and stuff for the method and action to work where you actually receive the email-->
                    <div class="row">
                        <?php
                        if($_GET['successs'] == 1) {
                            echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                        }

                        if($_GET['successs'] == -1) {
                          echo "<div class=\"form-messages success\">Ooops! Something went wrong. Please try again!</div>";
                      }
                        ?>
                    </div>
                    <div class="row">   
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required> <!-- the required word means the form won't get sent until it's filled out-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends">Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/Aspectlandscapingandconstruction"><ion-icon name="logo-facebook" class="ion-social-facebook"></ion-icon></a></li>
                        <li><a href="https://www.instagram.com/aspect_lc/"><ion-icon name="logo-instagram" class="ion-social-instagram"></ion-icon></a></li>
                        <li><a href="mailto:aspectlc@outlook.com"><ion-icon name="mail-outline" class="ion-social-mail"></ion-icon></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2018 by Aspect Landscaping. All rights reserved.
                </p>
            </div>

        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- jquery plugin -->
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script> <!-- ionicon plugin -->
        <script src="https://cdn.jsdelivr.net/npm/respond@0.9.0/main.min.js"></script> <!-- good for responsive on older browsers -->
        <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script> <!-- good for responsive on older browsers -->
        <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script> <!-- good for responsive on older browsers -->
        <script src="vendors/JS/jquery.waypoints.min.js"></script> <!-- to use waypoints in js -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script> <!-- aos animate library -->
        <script src="vendors/js/jquery.counterup.min.js"></script> <!-- counter script -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> <!-- counter script -->
        <script>
            AOS.init({
                offset: 100,
                duration: 1500
            });
          </script>
        <script>
        jQuery(document).ready(function( $ )
        {
            $('.counter').counterUp({
            delay: 10,
            time: 1000
            });
        });
        </script>
        <script src="resources/js/scripts.js"></script> <!-- need to make sure our script is always the last script -->
    </body>
</html>