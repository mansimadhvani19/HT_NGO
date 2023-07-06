<?php
    // Config file to connect to the database

    // Connecting to the database

    $DB_SERVER = 'localhost';
    $DB_USERNAME = 'root';
    $DB_PASSWORD = '';
    $DB_NAME = 'ht_ngo';


    $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

    if(!$conn){
        die("Connection to the database failed die to ". mysqli_connect_error());
    }

?>
