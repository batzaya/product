<?php
function uri_is($uri){
    $requested_uri = $_SERVER['PHP_SELF'];
    if ($requested_uri == '/index.php'.$uri){
        return True;
    }
    return False;
}


function user_uri($uri){
    return '/index.php'.$uri;
}
?>
