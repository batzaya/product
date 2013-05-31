<?php ob_start();?>
<center class="search">
    <form action="" method="GET">
        <label for="search">Хайлт:</label>
        <input type="text" id="search" name="search"/>
        <input type="submit" value="хайх"/>
    </form>
    <h3>Бараа</h3>
</center>
<table class="product" id="product" border="0">
    <tr>
        <td>Нэр</td>
        <td>Төрөл</td>
        <td>Үнэ</td>
    </tr>
<?php foreach ($products as $product):?>
    <tr>
        <td><?php echo $product['name'];?></td>
        <td><?php echo $product['type'];?></td>
        <td><?php echo $product['price']; ?></td>
        <td><a href="<?php echo user_uri('/buy?id='.$product['id']) ?>">Худалдаж авах</a></td>
    </tr>
        <td colspan="4"><?php echo $product['content'];?></td>
    </tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
<?php endforeach;?>
</table>
<center>
    <?php if (!($pageno - 1 == 0)) { ?>
        <a href="<?php echo user_uri('?pageno='.($pageno - 1).(isset($find) ? '&search='.$find : '')); ?>" >Өмнөх</a>
    <?php } ?>
    <?php if ($pageno <= $limit) { ?>
        <a href="<?php echo user_uri('?pageno='.($pageno + 1).(isset($find) ? '&search='.$find : '')); ?>" >Дараах</a>
    <?php } ?>
</center>
<?php $content = ob_get_clean();?>
<?php require_once('layout.php');?>
