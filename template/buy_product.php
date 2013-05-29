<?php ob_start();?>
<form action="" method="POST" style="margin-left:300px">
    Таны нэр: <br/><input type="text" name="name"/><br/>
    Таны хаяг:<br/> <textarea name="address" rows="10" cols="30"></textarea><br/>
    <input type="submit" value="илгээх" style="margin-left:200px"><br>
</form>

<?php 
if (isset($msg))
    echo $msg;
?>

<div style="margin-left:800px; margin-top:-250px">
    <h3>Таны сонгосон бараа</h3><br/>
    <table>
        <tr><td>Нэр: <?php echo $product['product_name']; ?></td></tr>
        <tr><td>Төрөл: <?php echo $product['type']; ?></td></tr>
        <tr><td>Тайлбар: <?php echo $product['content']; ?></td></tr>
        <tr><td>Үнэ: <?php echo $product['price']; ?></td></tr>
    </table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>
