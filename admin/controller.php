<?php
function login(){
    if (isset($_POST['login'])) {
        $login_ok = user_exists($_POST['name'], $_POST['password']);
        if ($login_ok[0]) {
            $_SESSION['login'] = true;
            list_of_products();
        } else {
            $error_msg = "Таны нэр эсвэл нууц үг буруу байна.";
        }
    }

    if (!is_logged_in()) {
        require_once('./template/login.php');
    }
}


function logout(){
    render('logout', array());
    session_destroy();
}


function list_of_products(){
    $start_limit = 0;
    $stop_limit = 8;
    $products = get_all_products($start_limit, $stop_limit);
    render('product_list', array('products' => $products));
}


function add_product(){
    if ($_POST){
        create_product($_POST['name'], $_POST['type'], $_POST['price'],
                      $_POST['content']);
        header('Location: '.admin_uri('')) ;
    }
    render('add_product', array());
}


function edit_product($id){
    if ($_POST){
        update_product($id);
        header('Location: '.admin_uri('')) ;
    }
    render('edit_product', array('product' => get_product_by_id($id)));
}


function remove_product($id){
    delete_product($id);
    header('Location: '.admin_uri(''));
}

function list_admin(){
    $admins = get_all_admins();
    render('admin_list', array('admins' => $admins));
}

function add_admin(){
    if ($_POST) {
        create_admin($_POST['username'], $_POST['password']);
        header('Location: '.admin_uri('/admin'));
    }
    render('add_admin', array());
}


function edit_admin($id){
    if ($_POST){
        update_admin($id);
        header('Location: '.admin_uri('/admin'));
    }
    render('edit_admin', array('admin' => get_admin_by_id($id)));
}


function remove_admin($id){
    delete_admin($id);
    header('Location: '.admin_uri('/admin'));
}


function list_order(){
    $orders = get_all_order();
    render('show_order', array('orders' => $orders));
}


function remove_order($id){
    delete_order($id);
    header('Location: '.admin_uri('/order'));
}
?>
