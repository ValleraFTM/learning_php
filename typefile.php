<?php
    require_once "counter.php";
    $perms = fileperms("file.csv");
    if (($perms & 0xC000) == 0xC000) echo "socet";
    elseif (($perms & 0xA000) == 0xA000) echo "symbolic link";
    elseif (($perms & 0x8000) == 0x8000) echo "simple file";
    elseif (($perms & 0x6000) == 0x6000) echo "special block file";
    elseif (($perms & 0x4000) == 0x4000) echo "folder";
    elseif (($perms & 0x2000) == 0x2000) echo "special symbolic file";
    elseif (($perms & 0x1000) == 0x1000) echo "FIFO-file";
    else echo "unknown file";
?>