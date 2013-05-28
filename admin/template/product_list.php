<a href="<?php echo admin_uri('/add') ?>">+ Шинэ Бараа нэмэх</a>
<br/>
<table>
    <tr>
        <th>Барааны нэр</th>
        <th>Барааны үнэ</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($products as $product):?>
    <tr>
        <td><?php echo $product['product_name'];?></td>
        <td><?php echo $product['price'];?></td>
        <td><a href="<?php echo admin_uri('/edit?id='.$product['id']) ?>">Засах</a></td>
        <td><a href="<?php echo admin_uri('/delete?id='.$product['id']) ?>">Устгах</a></td>
    </tr>
    <?php endforeach;?>
</table>

