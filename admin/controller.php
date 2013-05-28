<?php
function login(){
    if ($_POST['login']) {
        $login_ok = user_exists($_POST['name'], $_POST['password']);
        if($login_ok[0]){
            $_SESSION['login'] = true;
            list_of_products();
            break;
        }
        else{
            $error_msg = "Таны нэр эсвэл нууц үг буруу байна.";
        }
    }
    require_once('./template/login.php');
}


function logout(){
    render('logout');
    session_destroy();
}


function list_of_products(){
    $products = get_all_products();
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


function list_tender(){
    $tenders = get_all_tender();
    render('show_tender', array('tenders' => $tenders));
}


function remove_tender($id){
    delete_tender($id);
    header('Location: '.admin_uri('/tender'));
}
?>
