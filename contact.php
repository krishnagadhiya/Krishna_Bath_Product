<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

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
    <h1>contact us</h1>
    <p> <a href="home.html">home >></a> contact </p>
</div>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>+91 99091 36934</p>
            <p>+91 79903 61407</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>kbpbath@gmail.com</p>
            <p>www.kbpbath.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>Rajkot (Guj.) India.</p>
        </div>

    </div>

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