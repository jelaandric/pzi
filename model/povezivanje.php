<?php
    //povezivanje na bazu
    $server = 'localhost';
    $username_server = 'root';
    $password_server = '';

    $db_name = 'jmob';

    $conn = mysqli_connect($server, $username_server, $password_server, $db_name);
    if($conn==false){
        echo "neuspjesno povezivanje na server";
    }
?>