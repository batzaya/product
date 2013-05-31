<?php ob_start();?>
<?php 
if (isset($msg))
    echo $msg;
?>
<form action="" method="POST">
    Таны нэр: <br/><input type="text" name="name" style="width: 250px"/><br/>
    Таны хаяг:<br/> <textarea name="address" rows="10" cols="30"></textarea><br/>
    <input type="submit" value="илгээх" style="margin:auto">
</form>
<h3>Таны сонгосон бараа</h3><br/>
<table border="1" class="product">
    <tr>
        <td>Нэр:</td> 
        <td><?php echo $product['name']; ?></td>
    </tr>
    <tr>
        <td>Төрөл:</td> 
        <td><?php echo $product['type']; ?></td>
    </tr>
    <tr>
        <td>Тайлбар:</td> 
        <td><?php echo $product['content']; ?></td>
    </tr>
    <tr>
        <td>Үнэ:</td> 
        <td><?php echo $product['price']; ?></td>
    </tr>
</table>
<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>
