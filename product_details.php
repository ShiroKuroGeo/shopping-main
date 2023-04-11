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
        <link rel="stylesheet" href="./css/card.css">
        <link rel="stylesheet" href="./css/carousel.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>
    <div class="modal fade" id="addtocart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add this Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="addthisItemToCart">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="addThisProductToCart" class="btn btn-primary">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
            </div>
        </div>
    </div>
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
                      <div class="searchInbox">
                        <div class="input-group input-group-sm">
                            <input type="search" class="form-control" name="searchProduct" id="searchProduct" placeholder="Search a Product">
                            <button class="btn btn-outline-success bg-light" id="btnSearch">Search</button>
                        </div>
                      </div>
                      <!-- search area end -->
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                  <a class="nav-link " aria-current="page" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="product.php">Products</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="cart_table.php">
                                      <i class="fa fa-shopping-cart" aria-hidden="true"><sup id="cartNumber"></sup></i>
                                  </a>
                              </li>
                          </ul>
                          <!-- Profile dropdown start -->
                          <nav>
                              <img src="./images/profile.png" class="profile" onclick="toggleMenu()">
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
                          <!-- Profile dropdown end -->
                      </div>
                  </div>
                </nav>
              </div>
            </div>
<!-- Product start here -->
<section>
    <div class="rows">
        <div class="col-md-20  ">
            <div class="row-1">
            <?php
              product_image_1();
            ?> 
            </div>
            <div class="row-2">
                <h3>Product Description</h3>
                <?php
                  product_decription();
                ?> 
            </div>
            <div class="row-3">
                <h3>Product Ratings</h3>
            </div>
        </div>
    </div>
</section>
<!-- Product end here -->
<!--footer start here-->
<!--  -->
<!--footer end here-->
<!-- bootstrap js -->
<script src="./includes/script.js"></script>
<script src="javaScript/jquery.js"></script>
<script src="javaScript/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
