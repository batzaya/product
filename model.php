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
    $query = "INSERT INTO product (product_name, type, price, content, date) 
             VALUES ('".$name."', '".$type."', '".$price."', '".$content."',
             '".date("Y-m-d H:i:s")."')";
    $con = connection();
    mysqli_query($con, $query);
    sql_close($con);
}


function add_tender($name, $address, $id){
    $query = "INSERT INTO tender (user_name, address, date, product_id)
            VALUES ('".$name."', '".$address."', '".date("Y-m-d H:i:s")."',
            '".$id."')";
    $con = connection();
    mysqli_query($con, $query);
    sql_close($con);
}

function get_all_products(){
    $rs = mysqli_query(connection(), "SELECT * FROM product ORDER BY date ASC");
    $products = array();
    while($product = mysqli_fetch_array($rs) ){
        $products[] = $product;
    }
    return $products;
}


function delete_product($id){
    $id = intval($id);
    $con = connection();
    mysqli_query($con, "DELETE FROM product WHERE id= ".$id);
    sql_close($con);
}


function update_product($id){
    $query = "UPDATE product SET product_name = '%s', type = '%s', price = '%s',
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


function get_all_admins(){
    $rs = mysqli_query(connection(), "SELECT * FROM admin");
    $admins = array();
    while($admin = mysqli_fetch_array($rs) ){
        $admins[] = $admin;
    }
    return $admins;
}


function get_all_tender(){
    $rs = mysqli_query(connection(), "SELECT t.user_name, t.address, t.date,
          t.id, p.product_name, p.price
          FROM tender as t
          LEFT JOIN product as p
          ON t.product_id = p.id
          ORDER BY t.date");
    $tenders = array();
    while ($tender = mysqli_fetch_array($rs) ){
        $tenders[] = $tender;
    }
    return $tenders;
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


function delete_tender($id){
    $id = intval($id);
    $con = connection();
    mysqli_query($con, "DELETE FROM tender WHERE id = ".$id);
    sql_close($con);
}
?>
