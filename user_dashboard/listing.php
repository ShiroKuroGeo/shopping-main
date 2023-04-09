
<?php
include "../includes/db_con.php";


  if(isset($_POST['submit'])){  
/* 
    $select="SELECT * FROM tbl_user";
    $result=mysqli_query($conn,$select);
    while($row_data=mysqli_fetch_assoc($result)){
        $id=$row_data['user_id'];
        $name=$row_data['username']; */
      
        

    
    $title=$_POST['title'];
  $price=$_POST['price'];
  $cat=$_POST['cat'];
  $description=$_POST['description'];
  $status='true';
  
  
  $image1=$_FILES['file1']['name'];
  $image2=$_FILES['file2']['name'];
  $image3=$_FILES['file3']['name']; 

  $temp_file1=$_FILES['file1']['tmp_name'];
   $temp_file2=$_FILES['file2']['tmp_name'];
  $temp_file3=$_FILES['file3']['tmp_name']; 

  if ($image1>50000  && $image2 >50000 & $image3>50000 ){
    echo "Sorry your file is too large.";
  }else
  {
    echo "File uploaded successfully.";

  }

   if( $title=='' or $price=='' or $cat==''  or $description=='' or $image1=='' or $image2=='' or $image3=='' ){
   echo "<script>alert('Please fill all the fields!')</script>";
   exit();
   }else{
    move_uploaded_file($temp_file1,"./product_uploads/$image1");
    move_uploaded_file($temp_file2,"./product_uploads/$image2");
    move_uploaded_file($temp_file3,"./product_uploads/$image3"); 
      
   $insert = "INSERT INTO `products` (title,price,category,description,status,date,image_1,image_2,image_3)
   VALUES ('$title','$price','$cat','$description','$status',NOW(),'$image1','$image2','$image3')";
   $result=mysqli_query($conn,$insert);
   if ($result) {
   echo "<script>alert('Product has been created successfully.')</script>";
   echo "<script>window.open('index.php','_self')</script>";
   } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
   }
   }
/*   } */
   $conn->close();
   } 
   ?>    

                             <form action="" method="post" enctype = "multipart/form-data" >
                             <div class="create_listing text-center ">   
                             <h2>Create new Listing</h2>
                             <input type="file" name="file1"  class="files"placeholder="file" multiple><br>
                             <input type="file" name="file2"  class="files"placeholder="file"><br>
                             <input type="file" name="file3"  class="files"placeholder="file"><br> 
                             <input type="text" name="title"id="name" placeholder="Title"><br>
                             <input type="number" name="price" id="name" placeholder="Price"><br>
                             <select name="cat" id="options">
                             <option value=""id="pick">Choose Categories</option> 
                             <?php
                              
                             $select = "SELECT * FROM `category`"; 
                             $result_query = mysqli_query($conn, $select);
                             while($row=mysqli_fetch_assoc($result_query)){
                             $category_title=$row['category_title'];
                             $id=$row['id'];
                             echo " <option value='$id'>$category_title</option>";
                             }
                             ?>
                     

                             </select><br>
                              
                             <textarea name="description" id="text" cols="30" rows="3" placeholder="Description"></textarea><br>
                             <a href=""><button type="submit" name="submit" >Post</button></a>
                             </div>
                             </form>

    </div>