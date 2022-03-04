<?php ## применение preg_grep() 
    foreach (preg_grep('/^ex\d/s', glob("*")) as $fn)
        echo "файл примера: " . $fn."<br />";
?>