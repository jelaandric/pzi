<?php
//brisanje korisnika iz BP-administrator
    if(isset($_GET['delete_id'])){
        $id=$_GET['delete_id'];

        require 'povezivanje.php';

    $brisanje= "DELETE FROM korisnici WHERE id={$id}";
    $conn=mysqli_connect($server, $username_server, $password_server, $db_name);

    mysqli_query($conn, $brisanje);
    header('Location: ../administracija.php');
    }