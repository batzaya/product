<?php
function uri_is($uri){
    $requested_uri = $_SERVER['PHP_SELF'];
    if ($requested_uri == '/admin/index.php'.$uri){
        return True;
    }
    return False;
}


function render($template, $args){
    foreach ($args as $key => $value){
        $$key = $value;
    }
    ob_start();
    require_once(dirname(__FILE__).'/template/'.$template.'.php');
    $content = ob_get_clean();
    require_once(dirname(__FILE__).'/template/layout.php');
}


function admin_uri($uri){
    return '/admin/index.php'.$uri;
}


function is_logged_in(){
    if ((isset($_SESSION['login']) && $_SESSION['login'])){
        return True;
    }else{
        return False;
    }
}
?>
