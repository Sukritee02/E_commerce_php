<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<a href="index.php"><img src="img/logo.png" class="logo" alt="company logo"></a>
<div>
    <ul id="navbar">
        <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
        <li><a href="shop.php" class="<?php echo $current_page == 'shop.php' ? 'active' : ''; ?>">Shop</a></li>
        <li><a href="blog.php" class="<?php echo $current_page == 'blog.php' ? 'active' : ''; ?>">Blog</a></li>
        <li><a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a></li>
        <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact us</a></li>
        <li id="lg-bag"><a href="cart.php" class="<?php echo $current_page == 'cart.php' ? 'active' : ''; ?>"><i class="bi bi-bag"></i></a></li>
        <a href="#" id="close"> <i class="bi bi-x"></i></a>
    </ul>              
</div>
<div id="mobile">
    <i class="bi bi-bag"></i>
    <i id="bar" class="bi bi-list"></i>
    
</div>