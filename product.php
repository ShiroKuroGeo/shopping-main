<?php
include "includes/db_con.php";
include "functions/index_function.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link rel="stylesheet" href="./css/style.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>
        <!-- header navbar start here-->
        <div class="header">
            <div class="container-fluid p-0">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a href="index.php" class="logo">
                            <i class="fas fa-shopping-basket"></i>
                            Ecoshop 
                        </a>
                        <!-- search area start -->
                        <form class="d-flex" role="search" action="search.php" method="get">
                            <input class="form-control  me-2" name="search" type="search" placeholder="Search here..." aria-label="Search">
                            <input type="submit" name="search_now" value="search" class="button">
                        </form>
                        <div class="col-lg-7 d-flex justify-content-end align-items-end">
                    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active mt-1" aria-current="page" href="userDashboard.html">Home</a>
                            <a class="nav-link active mt-1" href="product.php">Product</a>
                            <a class="nav-link active mt-1" href="dashCartTable.php"><i class="fa fa-shopping-cart" aria-hidden="true"><sup id="cartNumber"></sup></i></a>
                            <a class="nav-link active" href="#"><img src="./images/profile.png" width="60px" class="profile" onclick="toggleMenu()"></a>
                            <nav>
                                <div class="sub-menu-wrap" id="subMenu">
                                    <div class="sub-menu">
                                        <div class="user-info">
                                            <img src="./images/profile.png" class="profile" width="100px">
                                            <h3 id="nameOfUser">Name</h3>
                                        </div>
                                        <hr>
                                        <a href="./eco-post/index.php" class="sub-menu-link">
                                            <img src="./images/profile.png" width="100px">
                                            <p>profile</p>
                                            <span>></span>
                                        </a>
                                        <a href="./user_dashboard/index.php" class="sub-menu-link">
                                            <img src="./images/logo.png" width="100px">
                                            <p>My dashboard</p>
                                            <span>></span>
                                        </a>
                                        <a class="sub-menu-link" >
                                            <img src="./images/logout.png " width="100">
                                            <button type="button" class="form-control btn btn-outline-danger btn-sm" id="btnLogout">Log out</button>
                                            <span>></span>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                    </div>
                </nav>
            </div>
        </div>
<!-- Profile dropdown start -->
        <nav>
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="./images/profile.png">
                        <h3>name</h3>
                    </div>
                    <hr>
                    <a href="" class="sub-menu-link">
                        <img src="./images/profile.png">
                        <p>profile</p>
                        <span>></span>
                    </a>
                    <a href="./user_dashboard/index.php" class="sub-menu-link">
                        <img src="./images/logo.png">
                        <p>My dashboard</p>
                        <span>></span>
                    </a>
                    <a href="logout.php" class="sub-menu-link">
                        <img src="./images/logout.png " width="50">
                        <p>logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
<section class="home" id="home">
    <div class="content">
        <h3>
            Show your <span>handmade</span>
            products in here
        </h3>
        <p>Lets become a nature lover by recycling our gabages and show the world how beautiful recycable handmade product is. .</p>
    </div>
</section>
<!-- Product start here -->
<section>
    <div class="row">
        <h1 class="heading">ECO PRODUCTS</h1>
        <div class="col-md-20 ">
            <div class="row">
                <div class="sad" id="cartNumber"></div>
            </div>
        </div>
    </div>
</section>
<!-- Product end here -->
<!--footer start here-->
<!-- <?php
include './includes/footer.php';
?> -->
<!--footer end here-->
<!-- bootstrap js -->
<script src="./includes/script.js"></script>
<script src="javaScript/dashboard.js"></script>
<script src="javaScript/toggle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
