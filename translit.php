<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php #транслитерация строк

function transliter($st) {
    // $st = strtr ($st,
    //     "абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛМНОПРСТУФЫЭ",
    //     "abvgdegziyklmnoprstufyeABVGDEGZIYKLMNOPRSTUFYE");
    $st = strtr($st, array(
        'е'=>"yo", 'х'=>"h", 'щ'=>"shch", 'ъ'=>'', 'Е'=>"Yo", 'Х'=>"H", 'Щ'=>"Shch", 'Ъ'=>'', 
        'ц'=>"ts", 'ь'=>'', 'Ц'=>"Ts", 'Ь'=>'', 'ч'=>"ch", 'ю'=>"yu", 'Ч'=>"Ch", 'Ю'=>"Yu",
        'ш'=>"sh", 'я'=>"ya", 'Ш'=>"Sh", 'Я'=>"Ya",
    ));
    return $st;
}
echo transliter("У попа была собака, он её любил.");
?>
</body>
</html>
