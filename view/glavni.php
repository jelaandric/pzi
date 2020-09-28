<?php
    //glavni dio dinamičke  stranice
    if(isset($_GET['opcija'])){
		$stranica = ($_GET ['opcija']. ".php");
		
		
		if(file_exists($stranica)){
            include_once($stranica);
        }
}
    else{
    ?>
    <head>
   <link rel = "stylesheet" href= "css/glavnicss.css">
    </head>
    <div class="main">
        <div class="overlay">
        </div>
        <div class="col-md-6">
        <h1 style="color:gray;">Nudimo Vam u svojoj ponudi veliki izbor mobitela po pristupačnim cijenama!</h1>
        <h2 style="color:gray;">Najbolji omjer cijene i kvalitete </h2>
        <h3 style="color: gray;">Bez obzira tražite li uređaj sa osnovnim funkcijama ili napredniji uređaj s mnoštvom korisnih funkcija</h3></div>
        
      
    </div>

    <?php
}


