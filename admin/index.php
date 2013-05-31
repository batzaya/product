<?php
session_start();


$dir = dirname(__FILE__);
require_once($dir.'/../model.php');
require_once($dir.'/controller.php');
require_once($dir.'/../help_functions.php');


if(is_logged_in()){
    
    if (uri_is('')){
        list_of_products();
    }

    if (uri_is('/add')) {
        add_product();
    }

    if (uri_is('/edit') && $_GET['id']) {
        edit_product($_GET['id']);
    }

    if (uri_is('/delete') && $_GET['id']) {
        remove_product($_GET['id']);
    }

    if (uri_is('/admin')) {
       list_admin(); 
    }

    if (uri_is('/admin/add')) {
        add_admin();
    }

    if (uri_is('/admin/edit') && $_GET['id']) {
        edit_admin($_GET['id']);
    }

    if (uri_is('/admin/delete') && $_GET['id']) {
        remove_admin($_GET['id']);
    }

    if (uri_is('/order')) {
        list_order();
    }

    if (uri_is('/order/delete') && $_GET['id']) {
        remove_order($_GET['id']);
    }

    if (uri_is('/logout')) {
        logout();
    }
    header('Status: 404 Not Found');
    render('404', array());
}else{
    login();
}
?>
