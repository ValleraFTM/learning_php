<?php ##использование функции json_encode()
    $arr = [
        "employee" => 'Иван Иванов',
        "phone" => [
            "916 153 2854",
            "916 643 8420"
        ]
    ];
    $arr_json = json_encode($arr, JSON_UNESCAPED_UNICODE);
    echo $arr_json;
    echo "<br />"; 
    echo " и сразу декод json-строки";
    echo "<hr><pre>";
    $arr = json_decode($arr_json, true);
    print_r($arr);
    echo "</pre>";
?>
    