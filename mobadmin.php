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
		// prikaz mobitela iz BP- administracija
		include_once("model/povezivanje.php");
		$query = "SELECT * FROM mobiteli";
		$conn=mysqli_connect($server, $username_server, $password_server, $db_name);
		$rez = mysqli_query($conn, $query);
		if(mysqli_num_rows($rez)>0){
		?>
			<table class="table"><tr>
			<td>Id</td>
			<td>Model</td>
			<td>Zaslon</td>
			<td>Memorija</td>
			<td>Kamera</td>
			<td>Baterija</td>
			<td>Obriši</td>
			</tr>
		<?php
			while ($row = mysqli_fetch_array($rez)){
		?>
			<tr>
				<td ><?php echo $row['id']; ?> </td>
				<td ><?php echo $row['model']; ?> </td>
				<td ><?php echo $row['zaslon']; ?> </td>
				<td ><?php echo $row['memorija']; ?> </td>
				<td ><?php echo $row['kamera']; ?> </td>
				<td ><?php echo $row['baterija']; ?> </td>
				<td ><a href="model/brisanje_narudzbe.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Obriši</a> </td>
			</tr>
	</div>			
		<?php
		}

			
			}

?>