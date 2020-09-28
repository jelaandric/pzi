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
    <?php
        session_start();
        if(isset($_SESSION['id'])){
    ?>
            <div class="container">
            <!-- zaglavlje_prijava-->
            <div class="row">
                <div class="col-md-12">
                <?php
                    include_once("view/zaglavlje_prijava.php");
                ?>
                </div>
            </div>  
            <!-- glavni dio-->
            <div class="row">
                <div class="col-md-12">
                    
                    <?php
                        include_once("view/glavni.php");
                ?>
            </div>
            </div>  
        </div>

        <?php

        }else{

        ?>
    
        <div class="container">
            <!-- zaglavlje -->
            <div class="row">
                <div class="col-md-12">
                <?php
                    include_once("view/zaglavlje.php");
                ?>
                </div>
            </div>  
            <!-- glavni dio-->
            <div class="row">
                <div class="col-md-12">
                    
                    <?php
                        include_once("view/glavni.php");
                ?>
            </div>
            </div>  
        </div>
        <?php
    }
        ?>
</body>
</html>