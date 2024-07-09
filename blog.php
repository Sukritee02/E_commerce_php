<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section id="header">
        <?php require "navbar.php"; ?>
    </section>

    <section id="page-header" class="blog-header">
        <h2>#read more</h2>
        <p>Read all case studies about our products! </p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-jersey Zip-Up Hoodies</h4>
                <p>Kicksarter man braid godard colouring book, Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard ... </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>how to style a quiff</h4>
                <p>Kicksarter man braid godard colouring book, Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard ... </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/04</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Must have Skater Girl Items</h4>
                <p>Kicksarter man braid godard colouring book, Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard ... </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/06</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Runway Inspired</h4>
                <p>Kicksarter man braid godard colouring book, Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard ... </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>14/07</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b6.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>AW20 Menswear Trends</h4>
                <p>Kicksarter man braid godard colouring book, Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard ... </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>16/04</h1>
        </div>
    </section>


    <section id="pagination" class="section_p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#"><i class="bi bi-arrow-right"></i></a>
    </section>

    <section id="newsletter" class="section_p1 section_m1">
        <div class="newstext">
            <h4>Sign Up for newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section_p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Bishal Bazar, New Road, Kathmandu</p>
            <p><strong>Hours:</strong>8:00am to 7:00pm, all week</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-youtube"></i>
                    <i class="bi bi-pinterest"></i>
                    <i class="bi bi-twitter-x"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Intall app</h4>
            <p>From App Store or Google PlayStore</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateway</p>
            <img src="img/pay/esewa.png" alt="" with="50px" height="50px">
        </div>

        <div class="copyright">
            <p>&copy; 2024 developed by SK enterprise
            </p> 
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>