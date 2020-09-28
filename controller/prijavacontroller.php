<?php
    //prijava korisnika
    include_once("model/povezivanje.php");
    if(isset($_POST['prijava'])){
        $email = $_POST['email'];
        $lozinka = $_POST['lozinka'];

        $conn = mysqli_connect($server, $username_server, $password_server, $db_name);

        $query = mysqli_query($conn, "SELECT * FROM korisnici WHERE email = '$email' AND lozinka = '$lozinka'");
        $rows = mysqli_num_rows($query);

        if($rows == 1){
           // Sesija
           $_SESSION['email']=$email;
           $_SESSION['lozinka']=$lozinka;
           $_SESSION['id']=$rows;
            header("Location:index.php");
            if($email=="admin@admin" AND $lozinka=="admin"){
                header("Location:administracija.php");
            }
        }else{
            
            ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>GREŠKA!<br>Ime i prezime ne postoje u bazi!<br>Molimo Vas registrirajte se !</strong>
                </div>
            <?php
            
        }
    }
?>