<?php
require_once('model.php');
require_once('controller.php');
require_once('help_functions.php');


if(uri_is('')){
    list_of_product();
}

if(uri_is('/buy') && $_GET['id']){
    buy_product($_GET['id']);
}
?>
