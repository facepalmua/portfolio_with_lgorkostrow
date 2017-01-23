<?php
    include "lib/db.php";
    include "lib/base.php";

    $url = explode('/', $_SERVER['REQUEST_URI']);

    new app($_SERVER['REQUEST_URI']);
    
?>
