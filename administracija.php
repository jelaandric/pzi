<!--Blok administracije -->
<html>
<head>
    <title>Jmob</title>
    <link rel="stylesheet" href = "http://maxcdn.bootstrapcdn.com/
		bootstrap/3.3.7/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/
		jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/
		bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="nav nav-tabs">
                <a href="administracija.php?option=korisnici" class="btn btn-info" role="button" >Korisnici</a>
                <a href="administracija.php?option=mobadmin" class="btn btn-info" role="button">Mobiteli</a>
                <a href="administracija.php?option=narudzbe" class="btn btn-info" role="button">Narudžbe</a>
                <a href="odjava.php" class="btn btn-info" role="button">Natrag</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                    if(isset($_GET['option'])){
                        $stranica = ($_GET ['option']. ".php");
                        if(file_exists($stranica)){
                            include_once($stranica);
                        }

                    }
                ?>
            </div>
        </div>
    </div>
</body>
