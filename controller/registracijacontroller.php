<?php
    include_once("model/povezivanje.php");
    //upis korisnika u bazu podataka
    if(isset($_POST['registracija'])){
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $adresa = $_POST['adresa'];
        $email = $_POST['email'];
        $lozinka = $_POST['lozinka'];

        $conn = mysqli_connect($server, $username_server, $password_server, $db_name);

        if(!empty ($email) AND !empty($lozinka)){
            
            $query = mysqli_query($conn, "SELECT * FROM korisnici WHERE ime = '$ime' AND prezime = '$prezime' AND adresa = '$adresa' AND email = '$email' AND lozinka = '$lozinka'");
            $rows = mysqli_num_rows($query);

            if($rows == 0){
            ?>
                <div class="alert alert-success">
                    <a href = "#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> Uspješno ste se registrirali!<br>Idite na <a href="index.php?opcija=prijava" class="alert-link">prijavu.</a></strong>
                </div>
            <?php

                $insert = "INSERT INTO korisnici (ime, prezime, adresa, email, lozinka) VALUES ('{$ime}', '{$prezime}', '{$adresa}', '{$email}', '{$lozinka}')";
                mysqli_query($conn, $insert);
            

        }else{
            ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>GREŠKA!<br>E-mail i lozinka se već koriste!<br>Pokušajte ponovo!</strong>
                </div>
            <?php
            
        }
    }else{
        
        }
    }
    
?>