<?php
function list_of_product(){
    $products = get_all_products();
    require 'template/list.php';
}

function buy_product($id){
    $product = get_product_by_id($id);
    
    if ($_POST){
        $msg = "Таны хүсэлт амжилттай илгээгдлээ!!!";
        add_tender($_POST['name'], $_POST['address'], $id);
    }
    require './template/buy_product.php';
}
?>
