<?php
require("database.php");
class user{

    public function doRegister($fname, $lname, $user, $address, $phone, $email, $pass){
        return $this->register($fname, $lname, $user, $address, $phone, $email, $pass);
    }
    public function doLogin($email, $password){
        return $this->login($email, $password);
    }
    public function doAddToCart($product, $user, $image, $title, $price, $qt, $total){
        return $this->addToCart($product, $user, $image, $title, $price, $qt, $total);
    }
    public function doGetCategories(){
        return $this->getCategory();
    }
    public function doGetNumber(){
        return $this->cartNumber();
    }
    public function doEcoProduct(){
        return $this->ecoProduct();
    }
    public function doSearch($item){
        return $this->searchProduct($item);
    }
    public function doGetCart(){
        return $this->cartTable();
    }
    public function doClickProduct($item){
        return $this->clickProduct($item);
    }
    public function doUpdateCartQuery($qt, $id){
        return $this->updateCartQuery($qt, $id);
    }
    public function doDeleteCartQuery($id){
        return $this->deleteCarts($id);
    }

    private function register($fname, $lname, $user, $address, $phone, $email, $pass){
        try {
            if ($this->checkRegistration($fname, $lname, $user, $address, $phone, $email, $pass)) {
                $db = new database();
                if ($db->getStatus()) {
                    $encrypt = md5($pass);
                    $stmt = $db->getCon()->prepare($this->registerQuery());
                    $stmt->execute(array($fname, $lname, $user, $address, $phone, $email, $encrypt));
                    $result = $stmt->fetch();
                    if (!$result) {
                        $db->closeConnection();
                        return "success";
                    }else{
                        $db->closeConnection();
                        return "failed";
                    }
                }else{
                    return "403";
                }
            } else {
                return "403";
            }
        } catch (PDOException $th) {
            return "501";
        }
    }

    private function login($email,$password){
        try {
            if ($this->checkLogin($email,$password)) {
                $db = new database();
                if ($db->getStatus()) {
                    $tmp = md5($password);
                    $stmt = $db->getCon()->prepare($this->loginQuery());
                    $stmt->execute(array($email,$tmp));
                    $result = $stmt->fetch();
                    if ($result) {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $tmp;
                        $db->closeConnection();
                        return "200";
                    }else{
                        $db->closeConnection();
                        return $email . $tmp;
                    }
                }else{
                    return "403";
                }
            } else {
                return "403";
            }
        } catch (PDOException $th) {
            return "501";
        }
    }

    private function addToCart($product, $user, $image, $title, $price, $qt, $total){
        try {
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])) {
                $db = new database();
                if ($db->getStatus()) {
                    $totalPrice = $price * $qt;
                    $stmt = $db->getCon()->prepare($this->insertToCartQuery());
                    $stmt->execute(array($product, $this->userId(), $user, $image, $title, $price, $qt, $totalPrice));
                    $result = $stmt->fetch();
                    if (!$result) {
                        $db->closeConnection();
                        return "200";
                    }else{
                        $db->closeConnection();
                        return "404";
                    }
                }else{
                    return "403";
                }
            } else {
                return "403";
            }
        } catch (PDOException $th) {
            return "501";
        }
    }

    //Get all category
    private function getCategory(){
        try{
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])){
                $db = new database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->getCategoryQuery());
                    $stmt->execute(array());
                    $result = $stmt->fetchAll();
                    $db->closeConnection();
                    return json_encode($result);
                }else{
                    return "403";
                }
            }else{
                return "403";
            }
        }catch(PDOExeption $th){
            return "501";
        }
    }

    //Number of cart in the carts
    private function cartNumber(){
        try{
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])){
                $db = new database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->getCartsNumberQuery());
                    $stmt->execute(array($this->userId()));
                    $result = $stmt->fetchAll();
                    $db->closeConnection();
                    return json_encode($result);
                }else{
                    return "403";
                }
            }else{
                return "403";
            }
        }catch(PDOExeption $th){
            return "501";
        }
    }

    
    private function ecoProduct(){
        try{
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])){
                $db = new database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->getProductsQuery());
                    $stmt->execute(array());
                    $result = $stmt->fetchAll();
                    $db->closeConnection();
                    return json_encode($result);
                }else{
                    return "403";
                }
            }else{
                return "403";
            }
        }catch(PDOExeption $th){
            return "501";
        }
    }

    private function searchProduct($item){
        try{
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])){
                $db = new database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->getSearchQuery());
                    $searchItem = "%$item%";
                    $stmt->execute(array($searchItem));
                    $result = $stmt->fetchAll();
                    $db->closeConnection();
                    return json_encode($result);
                }else{
                    return "403";
                }
            }else{
                return "403";
            }
        }catch(PDOExeption $th){
            return "501";
        }
    }

    private function clickProduct($item){
        try{
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])){
                $db = new database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->getClickProductQuery());
                    $stmt->execute(array($item));
                    $result = $stmt->fetchAll();
                    $db->closeConnection();
                    return json_encode($result);
                }else{
                    return "403";
                }
            }else{
                return "403";
            }
        }catch(PDOExeption $th){
            return "501";
        }
    }

    private function deleteCarts($id){
        try{
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])){
                $db = new database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->getDeleteCartQuery());
                    $stmt->execute(array($id));
                    $result = $stmt->fetch();
                    if (!$result) {
                        $db->closeConnection();
                        return "200";
                    }else{
                        $db->closeConnection();
                        return "404";
                    }
                }else{
                    return "403";
                }
            }else{
                return "403";
            }
        }catch(PDOExeption $th){
            return "501";
        }
    }

    private function cartTable(){
        try{
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])){
                $db = new database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->getCartQuery());
                    $stmt->execute(array($this->userId()));
                    $result = $stmt->fetchAll();
                    $db->closeConnection();
                    return json_encode($result);
                }else{
                    return "403";
                }
            }else{
                return "403";
            }
        }catch(PDOExeption $th){
            return "501";
        }
    }

    private function updateCartQuery($qt, $id){
        try{
            if($this->checkLogin($_SESSION['email'],$_SESSION['password'])){
                $db = new database();
                if($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->getUpdateCartQuery());
                    $stmt->execute(array($qt, $id));
                    $result = $stmt->fetch();
                    if (!$result) {
                        $db->closeConnection();
                        return "200";
                    }else{
                        $db->closeConnection();
                        return "404";
                    }
                }else{
                    return "403";
                }
            }else{
                return "403";
            }
        }catch(PDOExeption $th){
            return "501";
        }
    }

    private function userId(){
        try{
            $db = new database();
            if($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->loginQuery());
                $stmt->execute(array($_SESSION['email'],$_SESSION['password']));
                $tmp = null;
                while ($row = $stmt->fetch()) {
                    $tmp = $row['user_id'];
                }
                $db->closeConnection();
                return $tmp;
            }
        } catch (PDOException $th) {
            return "501";
        }
    }


    //Checking
    private function checkRegistration($fname, $lname, $email, $user, $address, $phone, $pass){
        if($fname != "" && $lname != "" && $email != "" && $user != "" && $address != "" && $phone != "" && $pass != "" ){
            return true;
        }else{
            return false;
        }
    }
    private function checkLogin($email, $pass){
        if($email != "" && $pass != ""){
            return true;
        }else{
            return false;
        }
    }
    //Queries
    private function registerQuery(){
        return "INSERT INTO tbl_user(`fname`, `lname`,`username` ,`address`, `phone`, `email`,`password`) VALUES(?,?,?,?,?,?,?)";
    }
    private function loginQuery(){
        return "SELECT * FROM tbl_user WHERE `email` = ? AND `password` = ?";
    }

    private function insertToCartQuery(){
        return "INSERT INTO `carts`(`product_id`, `user_id`, `username`, `image`, `title`, `price`, `Qt`, `total_price`) VALUES (?,?,?,?,?,?,?,?)";
    }
    private function getCategoryQuery(){
        return "SELECT * FROM category";
    }
    private function getCartsNumberQuery(){
        return "SELECT * FROM carts WHERE user_id = ?";
    }
    private function getProductsQuery(){
        return "SELECT * FROM products order by title";
    }
    private function getSearchQuery(){
        return "SELECT * FROM `products` WHERE title like ?";
    }
    private function getCartQuery(){
        return "SELECT * FROM `carts` WHERE user_id = ?";
    }
    private function getClickProductQuery(){
        return "SELECT * FROM `products` WHERE product_id = ?";
    }
    private function getUpdateCartQuery(){
        return "UPDATE `carts` SET `Qt` = ? WHERE id = ?";
    }
    private function getDeleteCartQuery(){
        return "DELETE FROM `carts` where id = ?";
    }
    
}
?>