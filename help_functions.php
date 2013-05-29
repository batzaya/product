<?php
function uri_is($uri){
    $requested_uri = $_SERVER['PHP_SELF'];
    if ($requested_uri == '/index.php'.$uri || $requested_uri == '/admin/index.php'.$uri){
        return True;
    }
    return False;
}


function user_uri($uri){
    return '/index.php'.$uri;
}


function render($template, $args){
    foreach ($args as $key => $value){
        $$key = $value;
    }
    ob_start();
    require_once(dirname(__FILE__).'/admin/template/'.$template.'.php');
    $content = ob_get_clean();
    require_once(dirname(__FILE__).'/admin/template/layout.php');
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
