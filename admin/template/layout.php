<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="txt/css" href="/static/product_style.css">
</head>
<body>
    <div style="width: 800px; margin: auto;">
        <a href="<?php echo admin_uri('') ?>">Бараанууд</a>
        <a href="<?php echo admin_uri('/admin') ?>">Админууд</a>
        <a href="<?php echo admin_uri('/order') ?>">Захиалгууд</a>
        <a href="<?php echo admin_uri('/logout') ?>">Гарах</a>
        <hr/>
        <?php echo $content;?>
    </div>
</body>
</html>
