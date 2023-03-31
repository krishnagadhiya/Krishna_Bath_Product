<?php
if (isset($_GET['login_success']) && $_GET['login_success'] == 1) {
    echo "<script>alert('Welcome!')</script>";
    echo "<script>window.location.assign('dashboard.php')</script>";
}
?>
<?php
session_start();
if (isset($_SESSION['user_admin_id']) && $_SESSION['user_admin_id'] != null) {
    $admin_username = $_SESSION['user_admin_username'];
?>    
<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OCS - Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
   <?php
   include("header.php")?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include("left_sidebar.php")?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dashboard</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <?php
                    require_once('../config.php');
                    ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card bg-primary">
                            <div class="card-body" style="height:180px; width:200px;">
                                <h3 class="card-title text-white">Users</h3>
                                <?php
                                $select_users = "SELECT * FROM users_registrations";
                                $query_users = mysqli_query($conn, $select_users);
                                $res_users = mysqli_num_rows($query_users);
                                ?>
                                <p class="card-text">Number of users = <?php echo $res_users;?>.</p>
                                <a href="view_users.php" class="btn btn-rounded btn-dark">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card bg-brand">
                            <div class="card-body" style="height:180px; width:200px;">
                                <h3 class="card-title">Category</h3>
                                <?php
                                $select_category = "SELECT * FROM category";
                                $query_category = mysqli_query($conn, $select_category);
                                $res_category = mysqli_num_rows($query_category);
                                ?>
                                <p class="card-text">Number of categories = <?php echo $res_category;?>.</p>
                                <a href="view_category.php" class="btn btn-rounded btn-light">View</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card bg-secondary">
                            <div class="card-body" style="height:180px; width:200px;">
                                <h3 class="card-title text-white">Products</h3>
                                <?php
                                $select_product = "SELECT * FROM product";
                                $query_product = mysqli_query($conn, $select_product);
                                $res_product = mysqli_num_rows($query_product);
                                ?>
                                <p class="card-text">Number of products  = <?php echo $res_product;?>.</p>
                                <a href="view_product.php" class="btn btn-rounded btn-info">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card bg-success">
                            <div class="card-body" style="height:180px; width:200px;">
                                <h3 class="card-title">Orders</h3>
                                <?php
                                $select_orders = "SELECT * FROM orders";
                                $query_orders = mysqli_query($conn, $select_orders);
                                $res_orders = mysqli_num_rows($query_orders);
                                ?>
                                <p class="card-text">Number of orders = <?php echo $res_orders;?>.</p>
                                <a href="view_orders.php" class="btn btn-rounded btn-danger">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <?php include("footer.php"); ?>
            <!-- style="border-top: 500px solid rgba(152, 166, 173, .2);"============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/jquery.slimscroll.js"></script>
    <script src="../js/main-js.js"></script>
</body>
 
</html>
<?php
}
else {
    header("Location: index.php");
}
?>