<?php
session_start();
include "../../config.php";
include "libraries/image.php";
$page = "dashboard.php";

if(!empty($_SESSION['admin'])){
    $id = $_SESSION['admin'];
    $sql = "SELECT * FROM tbl_admin WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
}else{
    header("location: ../index.php");
}

if(isset($_GET['p']))
{
    $page = $_GET['p'];

    switch($page)
    {
        case "feedback.php":
            {
                $page = "feedback.php";
                break;
            }
        case "borrower.php":
            {
                $page = "borrower.php";
                break;
            }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php" ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            <?php include "include/sidebar.php" ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include "include/navbar.php" ?>
            <!-- Navbar End -->

            <!-- Recent Sales Start -->
            <?php include $page ?>
            <!-- Recent Sales End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>