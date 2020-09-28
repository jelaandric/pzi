<?php
    include_once("controller/prijavacontroller.php");
?>
<head>
   <link rel = "stylesheet" href= "css/prijavacss.css">
</head>
<div class="main">

<div class="row">
<div class="overlay"></div>    
    <div class="col-md-6 login-form">
        <h3>Prijava</h3>
            <form action="index.php?opcija=prijava" method="POST">
                
                <div class="form-group">
                    <input type="text" name = "email" class="form-control" placeholder="Vaš E-mail *" value="" required/>
                </div>
                <div class="form-group">
                    <input type="password" name = "lozinka" class="form-control" placeholder="Vaša lozinka *" value=""required />
                </div>
                <div class="form-group">
                    <input type="submit" name = "prijava" class="btn btn-primary" value="Prijava" />
                </div>
                
            </form>
    </div>
</div>
</div>