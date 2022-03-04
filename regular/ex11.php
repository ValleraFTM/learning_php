<?php ## многострочность
    $str = file_get_contents(__FILE__);
    $str = str_replace('/^/m', "\t", $str);
    echo "<pre>".htmlspecialchars($str)."</pre>";
?>
