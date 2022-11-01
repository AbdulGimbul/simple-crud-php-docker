<?php
$databaseHost = 'db-mysql';
$databaseName = 'MY_DATABASE'; // NAMA DATABASE
$databaseUsername = 'MYSQL_USER'; // USERNAME DATABASE
$databasePassword = 'MYSQL_PASSWORD'; //PASSWORD DATABASE

// MENGHUBUNGKAN DATABASE
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// JIKA DATABASE TIDAK ADA ATAU TIDAK TERSAMBUNG
if (mysqli_connect_errno()) {
    printf("%s \n", mysqli_connect_error());
    exit();
}
