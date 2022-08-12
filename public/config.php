<?php

/**
 * Configuration for database connection
 *
 */
/** Connection to MYSQL not working due to root password*/

$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
