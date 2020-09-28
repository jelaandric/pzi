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
		//prikaz korisnika iz BP-administracija
		include_once("model/povezivanje.php");
		$query = "SELECT * FROM korisnici";
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
			<td>Lozinka</td>
			<td>Obriši korisnika</td>
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
				<td ><?php echo $row['lozinka']; ?> </td>
				<td ><a href="model/brisanje_korisnika.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Obriši</a> </td>
			</tr>
	</div>			
		<?php
		}

			
			}

?>
<?php
 include_once("controller/registracijacontroller.php");
 //dodavanje korisnika u BP - administacija
?>
<head>
   <link rel = "stylesheet" href= "">
</head>
<div class="main">

<div class="row">
<div class="overlay"></div>    
    <div class="col-md-6 register-form">
        <h3>Dodavanje korisnika</h3>
            <form action="index.php?opcija=registracija" method="POST">
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
                <div class="form-group">
                    <input type="password" name="lozinka" class="form-control" placeholder="Lozinka *" value=""required />
                </div>
                <div class="form-group">
                    <input type="submit" name="registracija" class="btn btn-success" value="Dodaj" />
                </div>
                
            </form>
    </div>
</div>
</div>