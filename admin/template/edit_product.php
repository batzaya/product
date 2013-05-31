<form method="POST" action="">
    <table>
        <tr>
            <td><label for="name">Барааны нэр:</label></td>
            <td><input type="text" name="name" id="name" value="<?php echo $product['name'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="type">Барааны төрөл:</label></td>
            <td><input type="text" name="type" value="<?php echo $product['type'] ?>" id="type"></td>
        </tr>        
        <tr>
            <td><label for="price">Барааны үнэ:</label></td>
            <td><input type="text" name="price" id="price" value="<?php echo $product['price'] ?>"></td>
        </tr>
        <tr>
            <td><label for="content">Барааны тайлбар:</label></td>
            <td><textarea name="content" id="content" rows=8 cols="19"><?php echo $product['content'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Хадгалах"/>
            </td>
        </tr>
    </table>
</form>
