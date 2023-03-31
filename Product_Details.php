<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - GoSNippets</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <link rel="stylesheet" href="css/KBPstyle.css">


                                <style>body {
    font-family: 'Roboto Condensed', sans-serif;
    background-color: #f5f5f5
}

.hedding {
    font-size: 20px;
    color: #ab8181`;
}

.main-section {
    position: absolute;
    left: 50%;
    right: 50%;
    transform: translate(-50%, 5%);
}

.left-side-product-box img {
    width: 100%;
    height: 100%;

}

.left-side-product-box .sub-img img {
    margin-top: 5px;
    width: 83px;
    height: 100px;
}

.right-side-pro-detail span {
    font-size: 15px;
}

.right-side-pro-detail p {
    font-size: 25px;
    color: #a1a1a1;
}

.right-side-pro-detail .price-pro {
    color: #E45641;
}

.right-side-pro-detail .tag-section {
    font-size: 18px;
    color: #5D4C46;
}

.pro-box-section .pro-box img {
    width: 100%;
    height: 200px;
}

@media (min-width:360px) and (max-width:640px) {
    .pro-box-section .pro-box img {
        height: auto;
    }
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
                            </head>

                            <?php include("header.php");?>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="container" style="margin-top:150px;">
    <div class="col-lg-8 border p-3 main-section bg-white">
        <div class="row hedding m-0 pl-3 pt-0 pb-3" >
            Product Detail 
        </div>
        <?php

        require_once('config.php');
        $id=$_REQUEST['product_id'];
        $select = "SELECT * FROM product where product_id=$id";
        $query = mysqli_query($conn, $select);
        while ($res = mysqli_fetch_assoc($query)) 
        {
    ?>
    
    
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img src="uploads/<?php echo $res['product_image'];?>" class="border p-3">
               
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                           
                            <p class="m-0 p-0"><?php echo $res['product_name'];?></p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro"><?php echo $res['product_price'];?></p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <span><?php echo $res['product_description'];?></span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <!-- <div class="col-lg-12">
                            <p class="tag-section"><strong>Tag : </strong><a href="">Woman</a><a href="">,Man</a></p>
                        </div> -->
                        <div class="col-lg-12">
                            <h6>Quantity :</h6>
                            <input type="number" class="form-control text-center w-100" value="1">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6 pb-2">

                                    <button onclick="add_cart(<?php echo $res['product_id'];?>)" class="btn btn-danger w-100">Add to Cart</button>
                                    
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="btn btn-success w-100">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
      
    </div>
  
</div>
<!-- <section style="margin-top:200px">
<div >  <?php include("footer.php") ?></div>
 </section> -->



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