<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- swiper css link -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!--custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a class="logo" herf="Home.php">Travel</a>
        <nav class="navbar">
            <a href=Home.php>Home</a>
            <a href=about.php>About</a>
            <a href=package.php>Package</a>
            <a href=book.php>Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
       
    </section>
    <!-- header section end  -->
    
    <div class="heading" style="background:url(image/header-bg-3.png) no-repeat">
        <h1>Book Now</h1>
    </div>
    
    <!-- booking section starts -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>
        <form action="booking_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="enter your email" name="email" >
                </div>
                <div class="inputBox">
                    <span>phone no:</span>
                    <input type="number" placeholder="enter your phone no." name="phone">
                </div>
                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to:</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date"  name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving</span>
                    <input type="date" name="leaving">
                </div>

            </div>
            
            <input type="submit" value="submit" class="btn" name="send">    
        </form>

    </section>

    <!-- booking section ends -->
    




<!-- footer section starts -->


<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Packages</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
            <a href="#"><i class="fas fa-angle-right"></i>Privacy</a>
            <a href="#"><i class="fas fa-angle-right"></i>Term & Condition</a>
        </div>
        <div class="box">
            <h3>contact infac</h3>
            <a href="#"><i class="fas fa-phone"></i>7719849077</a>
            <a href="#"><i class="fas fa-phone"></i>7719849078</a>
            <a href="#"><i class="fas fa-envelope"></i>shindesanchit33@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Pune India - 411015</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
        </div>    
    </div>
    <div class="credit"> created by <span>Sanchit33</span> | all the rights reserved!</div>


</section>


<!-- footer section ends -->




<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>



<!-- custom js file link -->
<script src="JS/script.js"></script>
</body>
</html>