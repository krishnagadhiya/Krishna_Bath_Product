<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>

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
    <h1>our shop</h1>
    <p> <a href="home.html">home >></a> shop </p>
</div>

<section class="category">

    <h1 class="title"> our <span>category</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

    <?php
        require_once('config.php');
        $select = "SELECT * FROM category";
        $query = mysqli_query($conn, $select);
        while ($res = mysqli_fetch_assoc($query)) 
        {
    ?>
        <a href="product.php?category=<?php echo $res['category_id'];?>" class="box">
            <img src="uploads/<?php echo $res['category_image']; ?>" alt="">
            <h3> <?php echo $res['category_name'];?> </h3>
        </a>
    <?php
        }
    ?>
        <!-- <a href="#" class="box">
            <img src="image/t.png" alt="">
            <h3>Towel Rack</h3>
        </a>

        <a href="#" class="box">
            <img src="image/SoapDish.png" alt="">
            <h3>Soap Dish</h3>
        </a>

        <a href="#" class="box">
            <img src="image/WTap.png" alt="">
            <h3>Water Tap</h3>
        </a>

        <a href="#" class="box">
            <img src="image/Sw.png" alt="">
            <h3>Shower</h3>
        </a> -->

    </div>

</section>

<section class="products">

    <h1 class="title"> our <span>products</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

    <?php
        require_once('config.php');
        // if(isset($_GET['category']))
        // {
        // $select1 = "SELECT * FROM product where product_category = ".$_GET['category'];
        // }
        // else{
        //     $select1 = "SELECT * FROM product ORDER BY product_id DESC LIMIT 8;";
        // }
        $select1 = "SELECT * FROM product ORDER BY product_id DESC LIMIT 8;";
        $query1 = mysqli_query($conn, $select1);
        while ($res1 = mysqli_fetch_assoc($query1)) 
        {
    ?>

        <div class="box" style="height: 429px;
    width: 289px;">
            <div class="icons">
                <a href="add_cart(<?php echo $res['product_id'];?>)" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="Product_Details.php?product_id=<?php echo $res1['product_id'];?>" class="fas fa-eye" ></a>

                <!-- <a href="Product_Details.php" class="fas fa-eye"></a> -->
                <!-- <a href = 'Product_Details.php?product_id=" class="fas fa-eye"></a> -->
            </div>
            <div class="image">
                <img src="uploads/<?php echo $res1['product_image']; ?>" alt="">
            </div>
            <div class="content">
                <h3><?php echo $res1['product_name'];?></h3>
                <div class="price">Rs. <?php echo $res1['product_price'];?></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

    <?php
        }
    ?>

        <!-- <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>organic food</h3>
                <div class="price">$18.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>organic food</h3>
                <div class="price">$18.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>organic food</h3>
                <div class="price">$18.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>organic food</h3>
                <div class="price">$18.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>organic food</h3>
                <div class="price">$18.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product-7.jpg" alt="">
            </div>
            <div class="content">
                <h3>organic food</h3>
                <div class="price">$18.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product-8.jpg" alt="">
            </div>
            <div class="content">
                <h3>organic food</h3>
                <div class="price">$18.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div> -->

    </div>

</section>






















<!-- footer section starts  -->

<?php 
include("footer.php");
?>

<!-- footer section ends -->













<!-- custom css file link  -->
<script src="js/script.js"></script>
<script type='text/javascript'></script>
                            
                            <script>
                                 function add_cart(product_id) {
                    $.ajax({
                        url:'fetch_cart.php',
                        data:'id='+product_id,
                        method:'get',
                        dataType:'json',
                        success:function(cart){
                            console.log(cart);
                            $('.badge').html(cart.length);
                        }
                    });
                }
                            </script>
</body>
</html>