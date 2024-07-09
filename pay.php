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
    <section id="form-details" class="section_p1 space">
        
        <form action="">
        
            <h2>Billing Details</h2>
    
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" required>

            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" required>

            <label for="streetAddress">Street Address</label>
            <input type="text" class="form-control" id="streetAddress" required>

            <label for="city">Town / City</label>
           <input type="text" class="form-control" id="city" required>

           <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" required>

            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" required>

            <label for="orderNotes">Order Notes (optional)</label>
             <textarea class="form-control" id="orderNotes" rows="3"></textarea>
            <!-- </div> -->
            </form>
       
            <div id="subtotal" class="section_p1 space" style="border: none;">
            <?php $cartsubtotal=0; ?>
            <?php foreach ($users as $index => $user) { ?>
            <?php  $user['price'] ?>
            <?php  $user['quantity'] ?>
            <?php  $subtotal=($user['price']*$user['quantity']) ?>
            <?php $cartsubtotal+=$subtotal?>
            <?php } ?>
                <h3>Total Payment</h3>
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
                <button class="normal" onclick="myFunction()">Pay Now</button>
                <script>
                    function myFunction() {
                    var txt;
                    if (confirm("Press Ok to confimr your order!")) {
                    txt = "Order has been placed successfully!";
                    } else {
                            txt = "You cancel your order!";
                    }
                    document.getElementById("demo").innerHTML = txt;
                }
                </script>
        
       
            <!-- <button class="normal">
                <a href="pay.php" style="color: white; text-decoration: none;" >Procced to Checkout</a>
            </button> -->
        
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