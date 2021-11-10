<?php

echo $path  = basename($_SERVER['REQUEST_URI']). '<br>';

echo  substr($path, 0, strpos($path, "?")) . '<br>';

echo $_GET['id'];


    $path = explode('?',$path);
    $path = $path[0];

    $path = str_replace('/bills/dashboard/','',$_SERVER['REQUEST_URI']);
