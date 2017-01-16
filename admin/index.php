<?php

include "lib/db.php";
include "lib/base.php";

$url = explode('/', $_SERVER['REQUEST_URI']);
//echo substr($url[3],1);
new app(substr($url[3],1));
//echo substr($_SERVER['REQUEST_URI'],1);
//echo $_SERVER['REQUEST_URI'];
?>