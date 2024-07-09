
<?php require 'select_connection.php'; ?>
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

    <section id="page-header" class="about-header">
        <h2>#Let's talk</h2>
        <p>LEAVE A MESSAGE,We love to hear from you!</p>
    </section>

    <section id="cart" class="section_p1">
        <table  width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>SubTotal</td>
                </tr>
            </thead>
            <tbody>
                <?php $cartsubtotal=0; ?>
                <?php foreach ($users as $index => $user) { ?>
                    <tr>
                        <td><a href="del_connection.php?id=<?php echo $user['id'] ?>"><i class="bi bi-x-circle"></i></a></td>
                        <td><img src="<?php echo $user['image'] ?>" alt=""></td>
                        <td><?php echo $user['prodname'] ?></td>
                        <td><?php echo $user['price'] ?></td>
                        <td><?php echo $user['quantity'] ?></td>
                        <td><?php echo $subtotal=($user['price']*$user['quantity']) ?></td>
                        <?php $cartsubtotal+=$subtotal?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section_p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart SubTotal</td>
                    <td><strong>Rs: <?php echo $cartsubtotal ?></strong></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rs: <?php echo $cartsubtotal ?></strong></td>
                </tr>
            </table>
            <button class="normal">
                <a href="pay.php" style="color: white; text-decoration: none;" >Procced to Checkout</a>
            </button>
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