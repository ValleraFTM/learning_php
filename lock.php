<!DOCTYPE html>
<html lang="ru">
<head>
<title>Усовершенствованный скрипт блокировки сервера</title>
<meta charset='utf-8'>
</head>
<body>
<?php
    if (!isset($_REQUEST['doGO'])) {?>
        <form action="<?=$_SERVER['SCRIPT_NAME']?>">
        login:<input type="text" name="login" value="root"><br />
        passw:<input type="password" name="password" value="Z10N0101"><br />
        <input type="submit" name="doGo" value="press button">
        </form>
<?php } else {
        if ($_REQUEST['login'] == "root" && $_REQUEST['password'] == "Z10N0101") {
            echo "доступ открыт для пользователя {$_REQUEST['login']}";        
        } else {
                echo "доступ закрыт!";
          }
        }
        ?>
</body>
</html>
