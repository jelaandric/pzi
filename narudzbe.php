<head>
	<link rel="stylesheet" href = "http://maxcdn.bootstrapcdn.com/
	bootstrap/3.3.7/css/bootstrap.min.css">
	<script src = "https://ajax.googleapis.com/ajax/libs/
	jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/
		bootstrap.min.js"></script>
</head>
<div class="col-md-12">
	<?php
		//prikaz narudzbi iz BP administrator
		include_once("model/povezivanje.php");
		$query = "SELECT * FROM narudzbe";
		$conn=mysqli_connect($server, $username_server, $password_server, $db_name);
		$rez = mysqli_query($conn, $query);
		if(mysqli_num_rows($rez)>0){
		?>
			<table class="table"><tr>
			<td>Id</td>
			<td>Ime</td>
			<td>Prezime</td>
			<td>Adresa</td>
			<td>E-mail</td>
			<td>Mobitel</td>
			<td>Obriši narudžbu</td>
			</tr>
		<?php
			while ($row = mysqli_fetch_array($rez)){
		?>
			<tr>
				<td ><?php echo $row['id']; ?> </td>
				<td ><?php echo $row['ime']; ?> </td>
				<td ><?php echo $row['prezime']; ?> </td>
				<td ><?php echo $row['adresa']; ?> </td>
				<td ><?php echo $row['email']; ?> </td>
				<td ><?php echo $row['mobitel']; ?> </td>
				<td ><a href="model/brisanje_narudzbe.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Obriši</a> </td>
			</tr>
	</div>			
		<?php
		}

			
			}

?>
<?php
include_once("controller/potvrdacontroller.php");
//Dodavanje narudžbi u BP adminitracija
?>
<div class="col-md-6 potvrda-form">
        <h3>Dodaj novu narudžbu?</h3>
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" name="ime" class="form-control" placeholder="Ime *" value="" required />
                </div>
                <div class="form-group">
                    <input type="text" name="prezime" class="form-control" placeholder="Prezime *" value=""required />
                </div>
                <div class="form-group">
                    <input type="text" name="adresa" class="form-control" placeholder="Adresa *" value=""required />
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="E-mail *" value="" required/>
                </div>
                <select name="mobitel" class="form-control">
                    <option>iPhone</option>
                    <option>iPhone 11</option>
                    <option>Samsung s20</option>
                    <option>Samsung s10<option>
                </select>
</br>
                <div class="form-group">
                    <input type="submit" name="potvrdi" class="btn btn-success" value="Potvrdi" />
                    <a href = "index.php" class="btn btn-danger" role ="button">Natrag</a>
                </div>
                
            </form>
    </div>