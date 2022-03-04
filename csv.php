<?php ## чтение CSV-файла

    $f = fopen("file.csv", "rt") or die("Cannot open file.csv");
    for ($i = 0; $data = fgetcsv($f, 1000, ";"); $i++) {
        $num = count($data);
        echo "<h3>строка номер $i (полей: " . $num . "):</h3>";
        for ($j = 0; $j < $num; $j++) {
            print "[$j]: $data[$j]<br />";
            }
    }
    fclose($f);
?>