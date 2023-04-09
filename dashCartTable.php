<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Cart</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/submenu.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <!-- Still on the go -->
</head>
<body>
    <div class="modal fade" id="addCheckOut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add this Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="addthisItemToCart">
                    Check Out
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="addThisProductToCart" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg header">
        <div class="container-fluid ms-5">
            <div class="row d-flex justify-content-between ms-auto">
                <div class="col-lg-2">
                    <div class="ecoLogo">
                        <a class="navbar-brand me-5 ms-5" href="#">
                            <i class="fas fa-shopping-basket"></i>
                            EchoShop
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-2">
                    <form class="d-flex" role="search" action="search.php" method="get">
                        <input class="form-control  me-2" name="search" type="search" placeholder="Search here..." aria-label="Search">
                        <input type="submit" name="search_now" value="search" class="button">
                    </form>
                </div>
                <div class="col-lg-7 d-flex justify-content-end align-items-end">
                    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active mt-1" aria-current="page" href="dashboard.php">Home</a>
                            <a class="nav-link active mt-1" href="product.php">Product</a>
                            <a class="nav-link active mt-1" href="dashCartTable.html"><i class="fa fa-shopping-cart" aria-hidden="true"><sup id="cartNumber"></sup></i></a>
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
        </div>
    </nav>
    
    <section class="mb-5 pb-5">
        <div class="forNavbar">
            <!-- For navbar sticky only -->
        </div>
        <div class="mt-5">
            <div class="container">
                <table class="table border text-center" id="products-table" style="overflow-y: scroll;">
                    <thead class="fst-italic">
                        <tr>
                            <th scope="col">Shop</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="border" id="tblCart">

                    </tbody>
                </table>
                <div class="d-flex justify-content-end align-items-end">
                    Total Cost:<span id="totalCostOfCart" class="ms-4 me-3"></span>
                    <button type="button" class="btn btn-outline-success" id="checkOutItem" data-bs-toggle="modal" data-bs-target="#addCheckOut">Check Out</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <section>
        <?php
            include './includes/footer.php';
        ?>
    </section>
    <!-- Jquery -->
    <script src="javaScript/jquery.js"></script>
    <script src="javaScript/toggle.js"></script>
    <script src="javaScript/cartTable.js"></script>
    <script src="javaScript/UserLogout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>