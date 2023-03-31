<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/KBPstyle.css">

</head>
<body>
    
<!-- header section starts  -->
<?php 
include("header.php");
?>
<!-- header section ends -->

<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
                <span>LUXURY BATHWARE</span>
                <h3>Decor for your Bathroom</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/Napkin.png" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
            <span>LUXURY BATHWARE</span>
                <h3>Decor for your Bathroom</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/tow.png" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
            <span>LUXURY BATHWARE</span>
                <h3>Decor for your Bathroom</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/Shower-removebg-preview.png" alt="">
            </div>
        </div>

    </div>

    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>

</section>
<section class="category">

  
    <h1 class="heading1">Our <span>category</span></h1>
    <div class="box-container">

    <?php
        require_once('config.php');
        $select = "SELECT * FROM category";
        $query = mysqli_query($conn, $select);
        while ($res = mysqli_fetch_assoc($query)) 
        {
    ?>
        <a href="shop.php?category=<?php echo $res['category_id'];?>" class="box">
            <img src="uploads/<?php echo $res['category_image']; ?>" alt="">
            <h3> <?php echo $res['category_name'];?> </h3>
        </a>
    <?php
        }
    ?>
    

    </div>

</section>

<h1 class="heading1">about <span>us</span></h1>

<section class="about">

    <div class="image">
        <img src="image/about-img.png" alt="">
    </div>

    <div class="content">
        <span>welcome to our shop</span>
        <h3>fresh and organic groceries</h3>
        <p>Bathroom accessories are the items that are used inside the bathroom such as the shower curtains, shower head, soap dish, soap dispenser, towel racks, vanity sets, bathroom mirrors, etc.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem cumque molestiae blanditiis deleniti aspernatur, ab tempora quisquam sapiente commodi hic.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>



<h1 class="heading1">Our <span>Service</span></h1>

<section class="info-container">


    <div class="info">
        <img src="image/quality.png" alt="">
        <div class="content">
            <h3>Quality</h3>
            <span>Quality is Our First Priority</span>
        </div>
    </div>

    <div class="info">
        <img src="image/available.png" alt="">
        <div class="content">
            <h3>24 / 7 available</h3>
            <span>call us anytime</span>
        </div>
    </div>

    <div class="info">
        <img src="image/payment1.png" alt="">
        <div class="content">
            <h3>easy payments</h3>
            <span>cash or credits</span>
        </div>
    </div>

</section>

 <!-- <section class="banner-container">
    

<div class="banner">
        <img src="image/banner-1.jpg" alt="">
        <div class="content">
            <span>limited sales</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/banner-2.jpg" alt="">
        <div class="content">
            <span>limited sales</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/banner-3.jpg" alt="">
        <div class="content">
            <span>limited sales</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div> 

</section>
 -->





<h1 class="heading1">Our <span>Contact</span></h1>

<section class="contact">

    <div class="row">

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <input type="text" placeholder="enter your name" class="box">
                <input type="email" placeholder="enter your email" class="box">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="enter your number" class="box">
                <input type="text" placeholder="enter your subject" class="box">
            </div>
            <textarea placeholder="your message" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <!-- <iframe class="map" src="https://goo.gl/maps/zZJjbZPrGo3CNpA37 " allowfullscreen="" loading="lazy"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.297732719846!2d70.82071614926897!3d22.26670888526911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b5ed2f285bb3%3A0x4c813458c75c461!2sKBP%20MANUFACTURING%20CO.!5e0!3m2!1sen!2sin!4v1673793982824!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>













<!-- footer section starts  -->

<?php 
include("footer.php");
?>


<!-- footer section ends -->













<!-- custom css file link  -->
<script src="js/script.js"></script>

</body>
</html>