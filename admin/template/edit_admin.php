<form method="POST" action="">
    <table>
        <tr>
            <td><label for="username">Хэрэглэгчийн нэр:</label></td>
            <td><input type="text" name="username" id="username" value="<?php echo $admin['name'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="password">Нууц үг:</label></td>
            <td><input type="password" id="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Хадгалах"/>
            </td>
        </tr>
    </table>
</form>
