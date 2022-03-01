<?php
$message = "работа не может быть продолжена из-за ошибок:<br />";
$check = function(array $errors) use ($message)
{
    if (isset($errors) && count($errors)>0) {
        echo $message;
        foreach ($errors as $error) {
            echo "$error<br />";
        }
       }
    };
$check([]);
$errors[] = "заполните имя пользоателя";
$check($errors);

$message = "список требований";
$errors = ["PHP", "MySQL", "memcache"];
$check($errors);
?>
