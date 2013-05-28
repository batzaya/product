<table> 
    <tr>
        <th>Захиалагчийн нэр</th>
        <th>Захиалагчийн хаяг</th>
        <th>Захиалсан огноо</th>
        <th>Захиaлсан бараа</th>
        <th>Захиалсан барааны үнэ</th>
        <th></th>
    </tr>
    <?php foreach ($tenders as $tender):?>
    <tr>
        <td><?php echo $tender['user_name'];?></td>
        <td><?php echo $tender['address'];?></td>
        <td><?php echo $tender['date'];?></td>
        <td><?php echo $tender['product_name'];?></td>
        <td><?php echo $tender['price'];?></td>
        <td><a href="<?php echo admin_uri('/tender/delete?id='.$tender['id']) ?>">Устгах</a></td>
    </tr>
    <?php endforeach;?>
</table>
