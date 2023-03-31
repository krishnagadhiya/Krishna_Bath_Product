<?php
session_start();
if (!empty($_SESSION['cart'])) {
    $printCount = count($_SESSION['cart']);
}
else {
    $printCount = 0;
}
if (!empty($_SESSION['user_users_id']) && !empty($_SESSION['user_users_username'])) {
    $printUsername = $_SESSION['user_users_username'];
}
else {
    $printUsername = "None"; 
}
?>
<head>
    <style>
        /* Dropdown Button */


/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #297fb829;color:#297FB8;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
    </style>
</head>
<header class="header">
<!-- #297FB8
#32CCCC -->
     <!--<a href="home.html" class="logo"> <i class="fas fa-shopping-basket"></i> groco </a> -->
    <img src="image/Logo.png" height="50px" width="150px">

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="shop.php">shop</a>
        <a href="about.php">about</a>
        <a href="review.php">review</a>
        <a href="blog.php">blog</a>
        <a href="contact.php">contact</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="cart.php"> <div id="cart-btn" class="fas fa-shopping-cart"> <span><?php echo $printCount;?></span></div></a>

        <div class="dropdown">
        <!-- <button class="dropbtn"><div id="login-btn" class="fas fa-user"></div></button> -->
        <div id="login-btn" class="fas fa-user">
        <div class="dropdown-content">

          <a style="background-color:#297FB8 ;color:white;"><h6><?php echo $printUsername; ?></h6></a>
          <a href="account_users.php"><h6>Account</h6></a>
          <a href="logout_users.php"><h6>Logout</h6></a>
     </div>
    </div>


    </div>

    <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <!-- <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/cart-1.jpg" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/cart-2.jpg" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/cart-3.jpg" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <h3 class="total"> total : <span>56.97</span> </h3>
        <a href="#" class="btn">checkout cart</a>
    </div> 

    <form action="" class="login-form">
        <h3>login form</h3>
        <input type="email" placeholder="enter your email" class="box">
        <input type="password" placeholder="enter your password" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn">
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create one</a></p>
    </form>-->

</header>

<!-- header section ends -->
