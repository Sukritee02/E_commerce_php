<?php
$error = [];
// Check for form submission
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $size = htmlspecialchars($_POST['size']);
    $price = htmlspecialchars($_POST['price']);
    $prodname = htmlspecialchars($_POST['prodname']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $valid_sizes = array("XXL", "XL", "M", "S", "XS");
    if (empty($quantity) || !filter_var($quantity, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])) {
        $error['quantity'] = "Please enter a valid quantity (1 or more).";
    }else{
        $quantity = htmlspecialchars($_POST['quantity']);
    }
    
    if (empty($size) || !in_array($size, $valid_sizes)) {
        $error['size'] = 'Please select a valid size';
    } else {
        $size = htmlspecialchars($_POST['size']);
    }
    if(count($error) == 0){
        //database query start
        require 'insert_connection.php';
        //database query end
    }
   
}
?>
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

    <form action="<?php echo ($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <section id="prodetails" class="section_p1" >
        <div class="single-pro-image">
        <input type="image" src="img/products/f1.jpg" name="image" alt="Product Image" width="100%" class="small-img">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        
            
        
        <div class="single-pro-details">
                <h6>Home / T-Shirt</h6>
                <h4 name="prodname">Men's Fashion T-Shirt</h4>
                <input type="hidden" name="prodname" value="Mens Fashion T-Shirt">
                <h2 name="price">Rs.700.00</h2>
                <input type="hidden" name="price" value="700">
                
                <select name="size">
                    <option value="">Select Size</option>
                    <option value="XXL">XXL</option>
                    <option value="XL">XL</option>
                    <option value="M">M</option>
                    <option value="S">S</option>
                    <option value="XS">XS</option>
                </select>
                <span class="error"><?php echo isset($error['size'])?$error['size']:''; ?></span>
                <input type="number" name="quantity" min="1" value="1">
                <button class="normal" onclick="submitForm()">Add To Cart</button>
                
                <h4>Product Details</h4>
                <span>Introducing our floral half shirts for men clothing, perfect for those who want to add a touch of style to their casual wardrobe. Made with high-quality cotton material, this shirt is designed to provide comfort and durability. The regular fit and half sleeves make it ideal for everyday wear, while the floral pattern adds a unique and trendy touch. The shirt collar and casual style make it perfect for a variety of occasions, from a day out with friends to a casual office setting. With its versatile design and comfortable fit, this shirt is a must-have for any fashion-forward man.</span>
            </div>
        </section>
    </form>

    <section id="product1" class="section_p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morder Design</p>
        <div class="pro-container">

            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Floral Roses T-shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <h4>Rs.700</h4>
                </div>
                <a href="#"><i class="bi bi-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n5.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>PinkBlue Roses T-shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <h4>Rs.700</h4>
                </div>
                <a href="#"><i class="bi bi-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n6.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>BrownBlue Denim T-shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <h4>Rs.700</h4>
                </div>
                <a href="#"><i class="bi bi-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n7.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Linen Cotton Floral Pant</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <h4>Rs.700</h4>
                </div>
                <a href="#"><i class="bi bi-cart cart"></i></a>
            </div>
        </div>
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