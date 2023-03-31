<?php
if (isset($_GET['remove_success']) && $_GET['remove_success'] == 1) {
    echo "<script>alert('Product removed!')</script>";
    echo "<script>window.location.assign('cart.php')</script>";
}
if (isset($_GET['order_success']) && $_GET['order_success'] == 1) {
    echo "<script>alert('Order placed!')</script>";
    echo "<script>window.location.assign('cart.php')</script>";
}

?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OCS - Cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/otherStyle.css">
    <link rel="stylesheet" href="css/userpage.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
 

<!-- custom css file link  -->
<link rel="stylesheet" href="css/KBPstyle.css">

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php include("header.php")?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <!-- <div class="dashboard-wrapper"> -->
            <div class="container-fluid dashboard-content" style="background-color: white;">    
                
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <br>
                            <br>
                            <h2 class="pageheader-title">Cart</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Your cart</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mx-5">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    	<div class="card">
                    		<div class="card-body">
                    			<div class="table-responsive">
                    				<table class="table table-bordered">
                    					<thead>
                    						<tr>
                    							<th>S. No.</th>
                    							<th>Product Name</th>
                    							<th>Price</th>
                    							<th>Quantity</th>
                    							<th>Total</th>
                    							<th>Action</th>
                    						</tr>
                    					</thead>
                    					<form method="post" action="insert_orders.php">
                    					<tbody>
                    						<?php
                    						if ($printCount == 0) {
                    						?>
                    						<tr>
                    							<td colspan="6" align="center">Your cart is empty!</td>
                    						</tr>
                    						<?php } else { ?>
                    						<?php
                                            $total_amount = 0;
                    						require_once('config.php');
                    						for ($i=0; $i < count($_SESSION['cart']); $i++) { 
                    							$select = "SELECT * FROM product where product_id = {$_SESSION['cart'][$i]}";
                    							$query = mysqli_query($conn, $select);
                    							$j = $i;
                    							while ($res = mysqli_fetch_assoc($query)) { 
                                                $total_amount = $total_amount + $res['product_price'];
                    						?>
                    						<tr>
                    							<td><?php echo ++$j;?></td>
                    							<td><?php echo $res['product_name'];?><input type="hidden" name="hidden_product_name[]" value="<?php echo $res['product_name'];?>"></td>
                    							<td>Rs. <?php echo $res['product_price'];?><input type="hidden" name="hidden_product_price[]" value="<?php echo $res['product_price'];?>"></td>
                    							<td><input class="form-control" type="number" min="1" max="9" step="1" value="1" name="product_quantity[]" onchange="prodTotal(this)"></td>
                    							<td><span>Rs. <?php echo $res['product_price'] * 1;?></span><input type="hidden" name="hidden_product_total[]" value="<?php echo $res['product_price'];?>"></td>
                    							<td align="center"><a href="remove_product.php?val_i=<?php echo $i;?>"><i class="fas fa-trash-alt"></i></a></td>
                    						</tr>
                    					    <?php } ?>
                    					    <?php } ?>
                    					    <?php } ?>
                    					    <tr>
                    					    	<td colspan="4" align="right">Total Amount:</td>
                    					    	<td colspan="2" id="total_amount"><span>Rs. <?php if ($printCount == 0){echo 0;} else {echo $total_amount;}?></span><input type="hidden" name="hidden_total_amount" value="<?php echo $total_amount;?>"></td>
                    					    </tr>
                                            <tr>
                                                <td colspan="3">
                                                    Delivery Date:<input class="form-control" type="date" name="delivery_date" required="">
                                                </td>
                                                <td colspan="3">
                                                    Payment Method:<select class="form-control" name="payment_method" id="advFieldsStatus" >
                                                        <option value=""  >Cash</option>
                                                        <option value="Bank Deposit" >Card</option>
                                                    </select>
                                                </td>
                                            </tr>
                                           </tbody>
                                           <tbody id="bank_form">
                                            <tr>
                                                <td colspan="6">
                                                    Card Details
                                                </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">Card Name</th>
                                                    <th colspan="3">Card Number</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><input  class="form-control" placeholder="Name" type="text" name="cname" id=""></td>
                                                    <td colspan="3"><input  class="form-control" placeholder="Number" type="text" name="cnumber" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">Exp Date</th>
                                                  
                                                    <th colspan="3">CVV</th>
                                                </tr>    
                                                <tr>
                                                    <td colspan="3"><input  class="form-control" placeholder="Month" type="month" name="cdate" id=""></td>
                                                    <td colspan="3"><input  class="form-control" placeholder="CVV" type="text" name="cvv" id=""></td>
                                                </tr> 
                                                </tbody>
                    					    <tbody>
                    					    	<td colspan="6" align="right">
                    					    		<button class="btn btn-warning" onclick="clear_cart()">Clear</button>
                    					    		<button class="btn btn-primary" type="submit">Checkout</button>
                    					    	</td>
                    					    </tbody>
                    					
                    					</form>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                    </div>

                </div>

            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include("footer.php"); ?>
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        <!-- </div> -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/main-js.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
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
        function prodTotal(quantity) { 
            var price = $(quantity).parent().prev().find('input').val();
        	var total = quantity.value * price;
            $(quantity).parent().next().find('input').val(total);
            $(quantity).parent().next().find('span').html("Rs. "+total);
            var total_amount = 0;
            $('input[name="hidden_product_total[]"]').each(function(){
                total_amount += parseInt($(this).val()); 
            });
            $('#total_amount').find('span').html("Rs. "+total_amount);
            $('#total_amount').find('input').val(total_amount);
        }  
        function clear_cart() {
            var flag = confirm("Do you want to clear cart?");
            if (flag) {
                window.location.href = "clear_cart.php";
            }
        }
    </script>


<script src="https://js.stripe.com/v2/"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js">  
</script> 

<script>
    $(document).ready(function () {
		advFieldsStatus = $('#advFieldsStatus').val();

		$('#bank_form').hide();

        $('#advFieldsStatus').on('change',function() {
            advFieldsStatus = $('#advFieldsStatus').val();
            if ( advFieldsStatus == '' ) {
				$('#bank_form').hide();
            }else if ( advFieldsStatus == 'Bank Deposit' ) {
				$('#bank_form').show();
            }
        });
	});
</script>



</body>
 
</html>