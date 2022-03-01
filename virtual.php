<?php
//эмуляция виртуал в сиджиай версии пхп
if (!function_exists("virtual")) {
    //тогда определяем свою
    echo "virtual";
    function virtual($uri)  {
    $url = "http://".$_SERVER["HTTP_HOST"].$uri;
    echo file_get_contents($url);
    }
}
virtual("/");
?>
