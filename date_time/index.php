<?php 
    define("START_TIME", microtime(true));
    echo time();
    printf("<br />время работы скрипта:%.5f c", microtime(true) - START_TIME);
?>s