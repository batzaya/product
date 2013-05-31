<html>
<head>
    <meta charset="utf-8" />
   <link rel="stylesheet" type="txt/css" href="/static/product_style.css">
</head>
<body>
    <div style="width: 500px; margin: auto">
        <h1>Нэвтрэх хэсэг</h1>
        <form id="form" action="" method="POST">
            <table>
                <tr>
                    <td>Хэрэглэгчийн нэр:</td>
                    <td><input type="text" name="name" value=""/></td>
                <tr>
                    <td>Нууц үг:</td>
                    <td><input type="password" name="password"/></td>
                </tr>            
                <tr>
                    <td></td>
                    <td><input type="submit" value="нэвтрэх" name="login"/></td>
                </tr>
                <?php 
                if (isset($error_msg))
                echo $error_msg; 
                ?>
            </table>
        </form>
    </div>
</body>
</html>
