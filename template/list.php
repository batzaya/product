<?php ob_start();?>
<table style="margin-left:500px">
<a href="<?php echo user_uri('')?>">Бараа</a>   
<?php foreach ($products as $product):?>
    <th>Бараа<hr/></th>
    <tr><td>Нэр: <?php echo $product['product_name'];?></td></tr>
    <tr><td>Төрөл: <?php echo $product['type'];?></td></tr>
    <tr><td>Тайлбар: <?php echo $product['content'];?></td></tr>
    <tr><td>Үнэ: <?php echo $product['price']; ?></td></tr>
    <tr><td id="move"><a href="<?php echo user_uri('/buy?id='.$product['id']) ?>">Худалдаж авах</a><hr/></td></tr>
<?php endforeach;?>
</table>

<?php $content = ob_get_clean();?>
<?php require_once('layout.php');?>
