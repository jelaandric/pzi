<?php
 include_once("controller/registracijacontroller.php");
?>
<head>
   <link rel = "stylesheet" href= "css/regcss.css">
</head>
<div class="main">

<div class="row">
<div class="overlay"></div>    
    <div class="col-md-6 register-form">
        <h3>Registracija</h3>
            <form action="index.php?opcija=registracija" method="POST">
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
                <div class="form-group">
                    <input type="password" name="lozinka" class="form-control" placeholder="Vaša lozinka *" value=""required />
                </div>
                <div class="form-group">
                    <input type="submit" name="registracija" class="btn btn-success" value="Registracija" />
                </div>
                
            </form>
    </div>
</div>
</div>