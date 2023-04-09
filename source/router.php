<?php
session_start();
require("user.php");
if (isset($_POST['choice'])) {
    switch ($_POST['choice']) {
        case 'login':
            $backend = new user();
            echo $backend->doLogin($_POST['Email'], $_POST['Password']);
            break;
        case 'register':
            $backend = new user();
            echo $backend->doRegister($_POST['Firsname'],$_POST['Lastname'],$_POST['Username'],$_POST['Address'],$_POST['Phone'],$_POST['Email'],$_POST['Password']);
            break;
        case 'doAddToCart':
            $backend = new user();
            echo $backend->doAddToCart($_POST['product'], $_POST['user'], $_POST['image'], $_POST['title'], $_POST['price'], $_POST['qt'], $_POST['total']);
            break;
        case 'doClickProduct':
            $backend = new user();
            echo $backend->doClickProduct($_POST['Item']);
            break;
        case 'category':
            $backend = new user();
            echo $backend->doGetCategories();
            break;
        case 'cartsNumber':
            $backend = new user();
            echo $backend->doGetNumber();
            break;
        case 'doEcoProduct':
            $backend = new user();
            echo $backend->doEcoProduct();
            break;
        case 'doSearch':
            $backend = new user();
            echo $backend->doSearch($_POST['Item']);
            break;
        case 'doGetCart':
            $backend = new user();
            echo $backend->doGetCart();
            break;
        case 'doUpdateCartQuery':
            $backend = new user();
            echo $backend->doUpdateCartQuery($_POST['Quantity'], $_POST['ID']);
            break;
        case 'doDeleteCartQuery':
            $backend = new user();
            echo $backend->doDeleteCartQuery($_POST['ID']);
            break;
        case 'logout':
            session_unset();
            session_destroy();
            echo "success";
            break;
        default:
            echo "404";
            break;
    }
}