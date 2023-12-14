<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");?>
	
   
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarOut</title>

    <!-- import css custome file -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!-- header section starts -->
    <header class="header">

        <div id="menu-btn" class="fa-solid fa-bars"></div>

        <a href="#" class="logo">Car<span>Out</span></a>

        <!-- navbar section -->
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#vehicles">Vehicles</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
        </nav>

        <!-- login button -->
        <div id="login-btn">
            <button type="button" class="btn" onclick="window.location.href='login.php'; ">login</button>
            <i class="fa-regular fa-user"></i>
        </div>


    </header>
    <!-- header section ends -->

    

    <!-- home section starts -->
    <section class="home" id="home">

        <h1 class="home-parallax" data-speed="-2">Find your car</h1>
        <img class="home-parallax" data-speed="5" src="./image/car0.png" alt="">


    </section>
    <!-- home section end -->


    <!-- icon section starts -->
    <section class="icons-container">

        <div class="icons">
            <i class="fa-solid fa-house"></i>
            <div class="content">
                <h3>100+</h3>
                <p>branches</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa-solid fa-car"></i>
            <div class="content">
                <h3>500+</h3>
                <p>cars sold</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa-solid fa-users"></i>
            <div class="content">
                <h3>350+</h3>
                <p>happy clients</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa-solid fa-car"></i>
            <div class="content">
                <h3>390+</h3>
                <p>new cars</p>
            </div>
        </div>

    </section>
    <!-- icon section end -->

    <!-- vehical section starts-->
    <section class="vehical" id="vehicles">

        <h1 class="heading">Bestselling <span>vehicals</span></h1>

        <div class="slider">

            <div class="wrapper">
                <div class="fa-solid fa-angle-left preNext" id="preBtn"></div>

                <div class="wraper-boxx">
                    <div class="box active" id="car-img1" onclick="window.location.href='cardetails.html'; ">
                        <img src="./image/ToyotaHighlander.png" alt="">
                        <div class="content">
                            <h3>Toyota Highlander</h3>
                            <div class="price"><span></span>SAR 158,478.68</div>
                            <p>

                                <span class="fa-solid fa-circle"></span> New 2023
                                <span class="fa-solid fa-circle"></span>Automatic Transmission
                                <span class="fa-solid fa-circle"></span>7-in. color LCD Multi-Information Display
                                <span class="fa-solid fa-circle"></span>2.4-liter 4-cylinder turbo
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="box" id="car-img2" onclick="window.location.href='cardetails2.html';">
                        <img src="image/Tesla2018.png" alt="">
                        <div class="content">
                            <h3>Tesla Model3</h3>
                            <div class="price"><span></span> 172,559,80 SAR</div>
                            <p>

                                <span class="fa-solid fa-circle"></span> 2018
                                <span class="fa-solid fa-circle"></span>blind-spot monitoring
                                <span class="fa-solid fa-circle"></span>FM/HD, seek-scan Radio
                                <span class="fa-solid fa-circle"></span>75 kWh for the Long Range version
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="box" id="car-img3" onclick="window.location.href='cardetails3.html';">
                        <img src="image/car5.png" alt="">
                        <div class="content">
                            <h3>Jeep Wrangler</h3>
                            <div class="price"><span></span>SAR 104,771.39</div>
                            <p>

                                <span class="fa-solid fa-circle"></span> 2018
                                <span class="fa-solid fa-circle"></span>Great off-road capability
                                <span class="fa-solid fa-circle"></span>3.6-liter V-6 with 285 hp and 260 lb-ft of torque
                                <span class="fa-solid fa-circle"></span>Quick-shifting eight-speed automatic
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="box" id="car-img4" onclick="window.location.href='cardetails4.html';">
                        <img src="./image/MazdaCX-5.png" alt="">
                        <div class="content">
                            <h3>Mazda cx-5</h3>
                            <div class="price"><span></span>SAR 85,000</div>
                            <p>

                                <span class="fa-solid fa-circle"></span> 2019
                                <span class="fa-solid fa-circle"></span>6-speed automatic transmission
                                <span class="fa-solid fa-circle"></span>187 hp @ 6000 rpm
                                <span class="fa-solid fa-circle"></span>All-wheel drive
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="box" id="car-img5" onclick="window.location.href='cardetails5.html';">
                        <img src="./image/NissanRogue.png" alt="">
                        <div class="content">
                            <h3>NissanRogue</h3>
                            <div class="price"><span></span>SAR 150,549.13</div>
                            <p>

                                <span class="fa-solid fa-circle"></span>2022
                                <span class="fa-solid fa-circle"></span>Automatic Transmission
                                <span class="fa-solid fa-circle"></span>97,800 miles
                                <span class="fa-solid fa-circle"></span>3-Cylinder
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="box" id="car-img6" onclick="window.location.href='cardetails6.html';">
                        <img src="./image/Lexus2032.png" alt="">
                        <div class="content">
                            <h3>lexus 350</h3>
                            <div class="price"><span></span>182,023.66 SAR</div>
                            <p>

                                <span class="fa-solid fa-circle"></span> 2023
                                <span class="fa-solid fa-circle"></span> 8-speed
                                <span class="fa-solid fa-circle"></span> 2.4L I-4 275hp 
                                <span class="fa-solid fa-circle"></span> 4-wheel anti-lock brakes(ABS)
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>
                </div>

                <div class="fa-solid fa-angle-right preNext " id="nextBtn"></div>
            </div>


            <div class="activeCircle">
                <div class="fa-regular fa-solid fa-circle" id="forCar-img1"></div>
                <div class="fa-regular fa-circle" id="forCar-img2"></div>
                <div class="fa-regular fa-circle" id="forCar-img3"></div>
                <div class="fa-regular fa-circle" id="forCar-img4"></div>
                <div class="fa-regular fa-circle" id="forCar-img5"></div>
                <div class="fa-regular fa-circle" id="forCar-img6"></div>
            </div>
        </div>

    </section>
    <!-- vehical section end-->

    <!-- services section starts -->
    <section class="services" id="services">

        <h1 class="heading">our <span>services</span></h1>

        <div class="box-container">

            <div class="box">
                <i class="fa-solid fa-car"></i>
                <h3>car selling</h3>
               

            </div>

            <div class="box">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>parts repair</h3>


            </div>

            <div class="box">
                <i class="fa-solid fa-car-burst"></i>
                <h3>car insurance</h3>


            </div>

            <div class="box">
                <i class="fa-solid fa-car-battery"></i>
                <h3>battery replacement</h3>


            </div>

            <div class="box">
                <i class="fa-solid fa-gas-pump"></i>
                <h3>oil change</h3>


            </div>

            <div class="box">
                <i class="fa-solid fa-headset"></i>
                <h3>24/7 support</h3>


            </div>
        </div>

    </section>
    <!-- services section end -->

    <!-- featured section starts -->
    <section class="featured" id="featured">

        <h1 class="heading"><span>featured</span> cars</h1>

        <div class="featured-slider">

            <div class="featured-wrapper">
                <div class="fa-solid fa-angle-left preNext" id="fPreBtn"></div>

                <div class="featured-wrapper2">
                    <div class="featured-wrapper-box">

                        <div class="box active" onclick="window.location.href='cardetails7.html';">
                            <img src="./image/car7.png" alt="">
                            <h3>Chevrolet</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">$1,500,000</div>
                            <a href="#" class="btn">check out</a>
                        </div>

                        <div class="box" onclick="window.location.href='cardetails8.html';">
                            <img src="./image/car8.png" alt="">
                            <h3>KIA</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">$1.500.000</div>
                            <a href="#" class="btn">check out</a>
                        </div>

                        <div class="box" onclick="window.location.href='cardetails9.html';">
                            <img src="./image/car9.png" alt="">
                            <h3>HONDA</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">$1.500.000</div>
                            <a href="#" class="btn">check out</a>
                        </div>

                        <div class="box" onclick="window.location.href='cardetails10.html';">
                            <img src="./image/car10.png" alt="">
                            <h3>KIA</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">$1.500.000</div>
                            <a href="#" class="btn">check out</a>
                        </div>

                        <div class="box" onclick="window.location.href='cardetails11.html';">
                            <img src="./image/car11.png" alt="">
                            <h3>TESLA</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">$1.500.000</div>
                            <a href="#" class="btn">check out</a>
                        </div>

                        <div class="box" onclick="window.location.href='cardetails12.html';">
                            <img src="./image/car12.png" alt="">
                            <h3>INFINITI</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">$1.500.000</div>
                            <a href="#" class="btn">check out</a>
                        </div>

                        <div class="box" onclick="window.location.href='cardetails13.html';">
                            <img src="./image/car13.png" alt="">
                            <h3>AUDI</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">$1.500.000</div>
                            <a href="#" class="btn">check out</a>
                        </div>

                        <div class="box" onclick="window.location.href='cardetails14.html';">
                            <img src="./image/car14.png" alt="">
                            <h3>MERCEDES-BENZ</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">$1.500.000</div>
                            <a href="#" class="btn">check out</a>
                        </div>

                    </div>
                </div>

                <div class="fa-solid fa-angle-right preNext" id="fNextBtn"></div>
            </div>

            <div class="fActCircle">
                <div class="fa-regular fa-solid fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
            </div>

        </div>


    </section>
    <!-- featured section end -->

    <!-- subscribe section starts -->
    <section class="subscribe">

        <h3>subscribe for latest updates</h3>



        <form action="">
            <input type="email" placeholder="enter your email">

            <input type="submit" placeholder="subBtn">
        </form>
    </section>
    <!-- subscribe section end -->

    <!-- review section starts -->
    <section class="reviews" id="reviews">

        <h1 class="heading">client's <span>review</span></h1>

        <div class="review-slider">
            <div class="fa-solid fa-angle-left rPreNext" id="rPreBtn"></div>
            <div class="review-wrapper">

                <div class="review-wrapper-box">

                    <div class="box active">
                        <img src="./image/user.jpg" alt="">
                        <div class="content">
                            <p>awesome!</p>
                            <h3>Atheer</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img src="./image/user.jpg" alt="">
                        <div class="content">
                            <p>wow great</p>
                            <h3>shtha</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img src="./image/user.jpg" alt="">
                        <div class="content">
                            <p>thank you</p>
                            <h3>Doa</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img src="./image/user.jpg" alt="">
                        <div class="content">
                            <p> wow it's a good website</p>
                            <h3>suha</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img src="./image/user.jpg" alt="">
                        <div class="content">
                            <p>awesome thanks</p>
                            <h3>renad</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img src="./image/user.jpg" alt="">
                        <div class="content">
                            <p>everything is clear</p>
                            <h3>john devis</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="fa-solid fa-angle-right rPreNext" id="rNextBtn"></div>

            <div class="rActCircle">
                <div class="fa-regular fa-solid fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
            </div>
        </div>
    </section>
    <!-- review section end -->

    <!-- contact section starts -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232410.15056064664!2d39.78237076862135!3d24.471295544582965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15bdbe5197d220d5%3A0x2e54514fea3b08d9!2z2KfZhNmF2K_ZitmG2Kkg2KfZhNmF2YbZiNix2Kk!5e0!3m2!1sar!2ssa!4v1701362173112!5m2!1sar!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"


            <form action="">
                <h3>get in touch</h3>
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="number" class="box">
                <textarea class="box" cols="30" rows="10" placeholder="message"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>

        </div>
    </section>
    <!-- contact section end -->

    <!-- footer section starts -->
    <section class="footer">

        <div class="footer-box-container">

            <div class="box">
                <h3>our branches</h3>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Kingdom of Saudi Arabia</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> The UAE</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> France</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Australia</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Russia</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"><i class="fa-solid fa-arrow-right"></i> home</a>
                <a href="#vehicles"><i class="fa-solid fa-arrow-right"></i> vehicles</a>
                <a href="#services"><i class="fa-solid fa-arrow-right"></i> services</a>
                <a href="#featured"><i class="fa-solid fa-arrow-right"></i> featured</a>
                <a href="#reviews"><i class="fa-solid fa-arrow-right"></i> reviews</a>
                <a href="#contact"><i class="fa-solid fa-arrow-right"></i> contact</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"><i class="fa-solid fa-phone"></i> +966-456-7890</a>
                <a href="#"><i class="fa-solid fa-phone"></i> +966-222-3333</a>
                <a href="#"><i class="fa-solid fa-envelope"></i> carout@gmail.com</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Al-Mudina, Saudi Arabia</a>
            </div>

            <div class="box">
                <h3>social media</h3>
                <a href="#"><i class="fa-brands fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>

            </div>

        </div>

    </section>
    <!-- footer section end -->

    <!-- font awsome link -->
    <script src="https://kit.fontawesome.com/ca9a6c5a17.js" crossorigin="anonymous"></script>

    <!-- import javascript custome file -->
    <script  src="js/script.js"></script>
   
</body>

</html>
