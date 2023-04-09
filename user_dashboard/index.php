<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- bootstrap --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sell.css">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
                        
</head>
<body>
 

<div class="header">

                                    <div class="container-fluid  p-0">
                                    <nav class="navbar navbar-expand-lg ">
                                    <div class="container-fluid ">
                                   <div class="collapse navbar-collapse" >
                                    <ul class="navbar-nav2  mb-2 mb-lg-0">

<!--                                     <a href="#" class="loggo"> <i class="fas fa-shopping-basket"></i> Ecoshop </a>
 -->                                    <li >                                    
                                    <a class="nav-link "  href="index.php?listing">Create New Listing</a>
                                    </li>
                                    <li>
                                    <a class="nav-link" href="index.php?manage_order">Manage Order</a>
                                    </li>
                                    <li>
                                    <a class="nav-link" href="index.php?my_order">My Order</a>
                                    </li>
                                    <li >
                                    <a class="nav-link" href="index.php?stock"> Stock Availability</a>
                                    </li>
                                    <li>
                                    <a class="nav-link" href="index.php?categories"> Insert Categories</a>
                                    </li>
                                   <!--  <li >
                                    <a class="nav-link" href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"><sup>1</sup></i></a>
                                    </li> -->
                                    </ul>  
                                    

                                    <img src="../images/profile.png" class="profile" onclick="toggleMenu()">
                                    <div class="sub-menu-wrap" id="subMenu">
                                    <div class="sub-menu">
                                    <div class="user-info">
                                    <img src="../images/profile.png" >
                                    <h3>name</h3>
                                    </div>
                                    <hr>

                                        <a href="" class="sub-menu-link">
                                        <img src="../images/profile.png">
                                        <p>profile</p>
                                        <span>></span>
                                        </a>
                               
                                        <a href="../index.php" class="sub-menu-link">
                                        <img src="../images/logo.png" width="50">
                                        <p>Shop</p>
                                        <span>></span>
                                        </a>

                                        <a href="logout.php" class="sub-menu-link">
                                        <img src="../images/logout.png "width="50">
                                        <p>logout</p>
                                        <span>></span>
                                        </a>

                                    </div>
                                    </div>
                                    </div>
                                    </div> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    </div>
                                    </nav>
                                    </div>
                                   

                                    <div class="cat_continer ">
                                      <?php
                                      
                                      if(isset($_GET['categories'])){
                                        include('categories.php');
                                      }
                                      if(isset($_GET['listing'])){
                                        include('listing.php');
                                      }
                                      if(isset($_GET['manage_order'])){
                                        include('manage_order.php');
                                      }
                                      if(isset($_GET['my_order'])){
                                        include('my_order.php');
                                      }
                                      if(isset($_GET['stock'])){
                                        include('stock.php');
                                      }
                                      ?>
                                    </div>


     <!-- bootstrap js -->
     <script src="../includes/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>