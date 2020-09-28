<?php
 include_once("controller/potvrdacontroller.php");
?>
<head>
<link rel="stylesheet" href = "http://maxcdn.bootstrapcdn.com/
		bootstrap/3.3.7/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/
		jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/
		bootstrap.min.js"></script>
   <link rel = "stylesheet" href= "css/potvrdacss.css">
</head>
<div class="main">

<div class="row">
<div class="overlay"></div>    
    <div class="col-md-6 potvrda-form">
        <h3>Želite li potvrditi Vašu narudžbu?</h3>
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" name="ime" class="form-control" placeholder="Vaše ime *" value="" required />
                </div>
                <div class="form-group">
                    <input type="text" name="prezime" class="form-control" placeholder="Vaše prezime *" value=""required />
                </div>
                <div class="form-group">
                    <input type="text" name="adresa" class="form-control" placeholder="Vaša adresa *" value=""required />
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Vaš E-mail *" value="" required/>
                </div>
                <select name="mobitel" class="form-control">
                    <option>iPhone</option>
                    <option>iPhone 11</option>
                    <option>Samsung s20</option>
                    <option>Samsung s10<option>
                    <option>Samsung A81<option>
                </select>
</br>
                <div class="form-group">
                    <input type="submit" name="potvrdi" class="btn btn-success" value="Potvrdi" />
                    <a href = "index.php" class="btn btn-danger" role ="button">Natrag</a>
                </div>
                
            </form>
    </div>
</div>
</div>