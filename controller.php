<?php
function list_of_product(){
    $pageno = 1;
    if (isset($_GET['search'])){
        $find = $_GET['search'];
        if (isset($_GET['pageno'])){
            $pageno = $_GET['pageno'];
        }
        if ($pageno == 1) {
            $start_limit = 0;
            $stop_limit = 8;
        }
        else{
            $start_limit = ($pageno - 1) * 8;
            $stop_limit = 8;
        }
        $products = get_find_result($_GET['search'], $start_limit, $stop_limit);
        $num_of_prod = get_find_count($_GET['search']);
        $limit = intval($num_of_prod / $stop_limit);
    } else {
        if (isset($_GET['pageno'])){
            $pageno = $_GET['pageno'];
        }
        if ($pageno == 1) {
            $start_limit = 0;
            $stop_limit = 8;
        }
        else{
            $start_limit = ($pageno - 1) * 8;
            $stop_limit = 8;
        }
        $products = get_all_products($start_limit, $stop_limit);
        $num_of_pro = get_product_count();
        $limit = intval($num_of_pro / $stop_limit);
    }
    require './template/list.php';
}

function buy_product($id){
    $product = get_product_by_id($id);
    
    if ($_POST){
        $msg = "Таны хүсэлт амжилттай илгээгдлээ!!!";
        add_order($_POST['name'], $_POST['address'], $id);
    }
    require './template/buy_product.php';
}
?>
