
<?php 
    $birth = [
        "Thomas Anderson" => "1962-03-11",
        "RKeanu Reeves"   => "1962-09-02",
    ];
    for (reset($birth); ($k=key($birth)); next($birth))
        echo "$k родился {$birth[$k]}<br />";
?>
<hr>
<?php 
    $numbers = [100, 313, 605];
    foreach ($numbers as $v) ++$v;
    echo "элементы массива:";
    foreach($numbers as $elt) echo $elt."<br>";
?>
