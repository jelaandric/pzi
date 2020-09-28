<?php
	include_once("model/povezivanje.php");
	//upis naručenih mobitela u bazu u bazu podataka
	if(isset($_POST['potvrdi'])){
		$ime = $_POST['ime'];
		$prezime = $_POST['prezime'];
		$adresa = $_POST['adresa'];
		$email = $_POST['email'];
		$mobitel = $_POST['mobitel'];
		$conn = mysqli_connect($server, $username_server, $password_server, $db_name);
		$insert = "INSERT INTO narudzbe (ime, prezime, adresa, email, mobitel) VALUES ('{$ime}', '{$prezime}', '{$adresa}', '{$email}', '{$mobitel}')";
		mysqli_query($conn, $insert);
	}
	if(!empty ($email) AND !empty($mobitel)){
	?>
		<div class="alert alert-success">
            <a href = "#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong> Uspješno ste naručili mobitel!<br>Vratite se na <a href="index.php?opcija=mobitel" class="alert-link">početnu stranicu.</a></strong>
	</div>
    <?php
	}
?>