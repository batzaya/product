<table border="1" class="product"> 
    <tr>
        <th>Захиалагчийн нэр</th>
        <th>Захиалагчийн хаяг</th>
        <th>Захиалсан огноо</th>
        <th>Захиaлсан бараа</th>
        <th>Захиалсан барааны үнэ</th>
        <th></th>
    </tr>
    <?php foreach ($orders as $order):?> 
    <tr>
        <td><?php echo $order['user_name'];?></td>
        <td><?php echo $order['address'];?></td>
        <td><?php echo $order['date'];?></td>
        <td><?php echo $order['name'];?></td>
        <td><?php echo $order['price'];?></td>
        <td><a href="<?php echo admin_uri('/order/delete?id='.$order['id']) ?>">Устгах</a></td>
    </tr>
    <?php endforeach;?>
</table>
