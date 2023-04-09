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
    <link rel="stylesheet" href="./css/cart.css">

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
                                    <a href="index.php" class="logo"> <i class="fas fa-shopping-basket"></i> Ecoshop </a>
<!-- search area start -->                   
                                    <form class="d-flex" role="search" action="search.php" method="get">
                                    <input class="form-control  me-2" name="search" type="search" placeholder="Search here..." aria-label="Search">
                                    <input type="submit" name="search_now" value="search" class="button">
                                    </form>
<!-- search area end -->                   

                                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                   <span class="navbar-toggler-icon"></span></button>
                                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="product.php"> Products</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#"> Register</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="cart_table.php"> <i class="fa fa-shopping-cart" aria-hidden="true"><sup><?php cart_num();?></sup></i></a>
                                    </li>
                                    </ul>
<!-- Profile dropdown start -->
                                    <nav>
                                    <img src="./images/profile.png" class="profile" onclick="toggleMenu()">
                                    <div class="sub-menu-wrap" id="subMenu">
                                    <div class="sub-menu">
                                    <div class="user-info">
                                    <img src="./images/profile.png" >
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
                                          <img src="./images/logout.png "width="50">
                                          <p>logout</p>
                                          <span>></span>
                                          </a>

                                    </div>
                                    </div>
                                    </nav>
<!-- Profile dropdown end -->

                                    </div>
                                    </div>
                                    </div>
                                    </nav>
                                    </div>
 <!-- header navbar end here-->
                                    <?php
                                    cart();

                                    ?>


<!-- cart table start here -->

                                <div class="container">
                                    <div class="row">
                                        <form action="">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Shop</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Qt</th>
      <th scope="col">Total Price</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  <?php
    $total=0;

    $select="SELECT * FROM `carts` order by product_id ";
    $result=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($result)){
        $user=$row['username'];
        $product_id=$row['product_id'];
        $title=$row['title'];
        $image=$row['image'];
        $product_price=$row['price'];
            $price=array($row['price']);
            $count_price=array_sum($price);
            $total+=$count_price;
    ?> 

    <tr>
      <th scope="row"><a href='shop.php' class='user'><svg xmlns='http://www.w3.org/2000/svg'fill='currentColor' class='bi bi-shop' viewBox='0 0 16 16'>
                                                       <path d='M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z'/>
                                                       </svg><?php echo $user?></a></th>
      <td ><input class="checkbox" type="checkbox">
      <img src='./user_dashboard/product_uploads/<?php echo  $image ?>' width='150' class='image'>
      <?php echo $title?></td>
      <td><h4>₱<?php echo $product_price?></h4></td>
      <td>  <input type='text'name="Qty"></td>
      <?php
                                                         
                                                         if(isset($_POST['update'])){
                                                         $quantity=$_POST['Qty'];

                                                        $select="SELECT * FROM tbl_user";
                                                        $result=mysqli_query($conn,$select);
                                                        while($row_data=mysqli_fetch_assoc($result)){
                                                            $user=$row_data['user_id'];
                                                            $username=$row_data['username'];

                                                            $update= " UPDATE carts SET Qt= '$quantity' WHERE username='$username'";
                                                            $result=mysqli_query($conn,$update);
                                                             $total= $total* $quantity;

                                                            

                                                             

                                                         }
                                                        }
                                                         ?>
      <td><h4>₱<?php echo $product_price?></h4></td>
      <td>
        <input type="submit"  name="update"value="Update">
       <button class="delete">Delete</button>
     </td> 
    </tr>
       
    <?php
  } 
 ?>
                                                     
     

     
                                                    
    
  </tbody>
</table>
<div class="checkout">                                            
                                          <h4 class="total">Total: ₱<?php echo $total?></h4>
                                          <a href="#"><h3>Check Out</h3></a>
                                        </div>

                                  </form>
                                    </div>
                                </div>

<!-- cart table end here-->


<!--footer start here-->
                                        <?php
                                        include './includes/footer.php';
                                        ?>
<!--footer end here-->
                   






  <!-- bootstrap js -->
  <script src="./includes/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>