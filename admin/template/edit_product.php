<form method="POST" action="">
    <table>
        <tr>
            <td><label>Барааны нэр:</label></td>
            <td><input type="text" name="name" value="<?php echo $product['product_name'] ?>"/></td>
        </tr>
        <tr>
            <td><label>Барааны төрөл</label></td>
            <td><input type="text" name="type" value="<?php echo $product['type'] ?>"></td>
        </tr>        
        <tr>
            <td><label>Барааны үнэ</label></td>
            <td><input type="text" name="price" value="<?php echo $product['price'] ?>"></td>
        </tr>
        <tr>
            <td><label>Барааны тайлбар:</label></td>
            <td><textarea name="content" rows=8 cols="10"><?php echo $product['content'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Хадгалах"/>
            </td>
        </tr>
    </table>
</form>
