<?php 
    require_once "counter.php";
    echo "<pre>";
    print_r(glob("C:/windows/*/*.{exe, ini}", GLOB_BRACE));
?>