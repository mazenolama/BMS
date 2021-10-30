<?php

    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
    $dotenv->load();
    $con = dbConnection();
    $errors = array();


?>