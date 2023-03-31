<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review</title>

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

<div class="heading">
    <h1>client's review</h1>
    <p> <a href="home.html">home >></a> review </p>
</div>

<!-- <section class="info-container">

    <div class="info">
        <img src="image/icon-1.png" alt="">
        <div class="content">
            <h3>fast delivery</h3>
            <span>within 30 minutes</span>
        </div>
    </div>

    <div class="info">
        <img src="image/icon-2.png" alt="">
        <div class="content">
            <h3>24 / 7 available</h3>
            <span>call us anytime</span>
        </div>
    </div>

    <div class="info">
        <img src="image/icon-3.png" alt="">
        <div class="content">
            <h3>easy payments</h3>
            <span>cash or credits</span>
        </div>
    </div>

</section> -->

<section class="contact">
<div class="row">

<form action="" method="POST">
    <h3>Your Review</h3>
    <?php 
         if(isset($_POST["submit"]))
         {
            require_once('config.php');
            $q="insert into review(id,name,subject,review) values('NULL','".$_POST['nm']."','".$_POST['sub']."','".$_POST['review']."')";
            $r = mysqli_query($conn,$q);
         }
    ?>
    <div class="inputBox">
        <input type="text" placeholder="enter your name" class="box" name="nm" Required>
        <input type="text" placeholder="enter your subject" class="box" name="sub" Required>
    </div>
    <textarea placeholder="your review" cols="30" rows="10" name="review" require></textarea>
    <input type="submit" value="send review" class="btn" name="submit">
</form>

<!-- <iframe class="map" src="https://goo.gl/maps/zZJjbZPrGo3CNpA37 " allowfullscreen="" loading="lazy"></iframe> -->
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.297732719846!2d70.82071614926897!3d22.26670888526911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b5ed2f285bb3%3A0x4c813458c75c461!2sKBP%20MANUFACTURING%20CO.!5e0!3m2!1sen!2sin!4v1673793982824!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
</div>
</section>

<section class="review">

<?php
        require_once('config.php');
        $select = "SELECT * FROM review";
        $query = mysqli_query($conn, $select);
        while ($res = mysqli_fetch_assoc($query)) 
        {
    ?>

    <div class="box">
        <div class="user">
            <img src="image/user.png" alt="">
            <div class="info">
                <h3> <?php echo $res['name'];?> </h3>
                <span>happy client</span>
            </div>
        </div>
        <p> <?php echo $res['review'];?> </p>
    </div>

    <?php
        }
    ?>
     
    <!-- <div class="box">
        <div class="user">
            <img src="image/pic-2.png" alt="">
            <div class="info">
                <h3>john deo</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-3.png" alt="">
            <div class="info">
                <h3>john deo</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-4.png" alt="">
            <div class="info">
                <h3>john deo</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-5.png" alt="">
            <div class="info">
                <h3>john deo</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-6.png" alt="">
            <div class="info">
                <h3>john deo</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div> -->

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