<?php
function connection(){
    $con = mysqli_connect("localhost", "root", "123", "Zaya");
    if(mysqli_connect_errno($con)){
        echo "Failed to connect MySQL: ".mysqli_connect_error();
    }
    return $con;
}


function sql_close($con){
    mysqli_close($con);
}


function get_product_by_id($id){
    $con = connection();
    $id = intval($id);
    $query = 'SELECT * FROM product WHERE id = '.$id;
    $result = mysqli_query($con, $query);
    $product = mysqli_fetch_assoc($result);

    sql_close($con);

    return $product;
}


function create_product($name, $type, $price, $content){
    $query = "INSERT INTO product (name, type, price, content, date) 
             VALUES ('".$name."', '".$type."', '".$price."', '".$content."',
             '".date("Y-m-d H:i:s")."')";
    $con = connection();
    mysqli_query($con, $query);
    sql_close($con);
}


function add_order($name, $address, $id){
    $query = "INSERT INTO `order` (user_name, address, product_id, date)
             VALUES ('".$name."', '".$address."', '".$id."', '".date("Y-m-d H:i:s")."')";
    $con = connection();
    mysqli_query($con, $query);
    sql_close($con);
}

function get_all_products($start_limit, $stop_limit){
    $rs = mysqli_query(connection(), "SELECT * FROM product ORDER BY date DESC
          LIMIT ".$start_limit.", ".$stop_limit."");
    $products = array();
    while($product = mysqli_fetch_array($rs) ){
        $products[] = $product;
    }
    return $products;
}


function get_find_result($search, $start_limit, $stop_limit){
    $con = connection();
    $rs = mysqli_query($con, "SELECT * FROM product WHERE name LIKE '%".$search."%' OR content LIKE '%".$search."%' 
          LIMIT ".$start_limit.", ".$stop_limit."");
    $products = array();
    while($product = mysqli_fetch_array($rs)){
        $products[] = $product;
    }
    sql_close($con);
    return $products;
}


function delete_product($id){
    $id = intval($id);
    $con = connection();
    mysqli_query($con, "DELETE FROM product WHERE id= ".$id);
    sql_close($con);
}


function update_product($id){
    $query = "UPDATE product SET name = '%s', type = '%s', price = '%s',
             content = '%s' WHERE id=%s";
    $sql = sprintf($query,
                   addslashes($_POST['name']),
                   addslashes($_POST['type']),
                   addslashes($_POST['price']),
                   addslashes($_POST['content']),
                   $id);
    mysqli_query(connection(), $sql);
}


function user_exists($name, $password){
    $query = "SELECT COUNT(*) FROM admin 
             WHERE name='".$name."' AND password='".$password."'";
    $result = mysqli_query(connection(), $query);

    $count = mysqli_fetch_array($result);
    return $count;
}


function get_product_count($search=null){
    $query = "SELECT COUNT(*) as num FROM product";
    $count = mysqli_fetch_array(mysqli_query(connection(), $query));
    $num_of_pro = $count['num'];
    return $num_of_pro;
}


function get_find_count($search){
    $query = "SELECT COUNT(*) as num FROM product WHERE name LIKE
             '%".$search."%' OR content LIKE '%".$search."%'";
    $count = mysqli_fetch_array(mysqli_query(connection(), $query));
    $num_of_prod = $count['num'];
    return $num_of_prod;
}


function get_all_admins(){
    $rs = mysqli_query(connection(), "SELECT * FROM admin");
    $admins = array();
    while($admin = mysqli_fetch_array($rs) ){
        $admins[] = $admin;
    }
    return $admins;
}


function get_all_order(){
    $rs = mysqli_query(connection(), "SELECT o.id, o.user_name, o.address, o.date, p.name, p.price
          FROM `order` as o
          LEFT JOIN product as p
          ON o.product_id = p.id
          ORDER BY o.date");
    $orders = array();
    while ($order = mysqli_fetch_array($rs) ){
        $orders[] = $order;
    }
    return $orders;
}


function create_admin($name,$pass){
    $query = "INSERT INTO admin (name, password) 
             VALUES ('".$name."', '".$pass."')";

    $con = connection();
    mysqli_query($con, $query);
    sql_close($con);
}


function update_admin($id){
    $query = "UPDATE admin SET name = '%s' WHERE id=%s";
    $sql = sprintf($query,
                   addslashes($_POST['username']),
                   $id);
    mysqli_query(connection(), $sql);
}


function get_admin_by_id($id){
    $con = connection();
    $id = intval($id);
    $query = 'SELECT * FROM admin WHERE id = '.$id;
    $result = mysqli_query($con, $query);
    $admin = mysqli_fetch_assoc($result);

    sql_close($con);

    return $admin;
}

function delete_admin($id){
    $id = intval($id);
    $con = connection();
    mysqli_query($con, "DELETE FROM admin WHERE id = ".$id);
    sql_close($con);
}


function delete_order($id){
    $id = intval($id);
    $con = connection();
    mysqli_query($con, "DELETE FROM `order` WHERE id = ".$id);
    sql_close($con);
}
?>
