<h1>
<?php 
    function myecho() {
        for ($i=0;$i<func_num_args();$i++) {
            echo func_get_arg($i)."<br />\n";
            }
    }

    myecho("mercury", "venera", "eath", "mars");
?></h1>
<hr><h1>
<?php
    function myecho1() {
        foreach(func_get_args() as $v) {
            echo "$v<br />\n";
        }
    }
    myecho1("mercury", "venera", "eath", "mars");
?>
</h1>
