<html>
<head>
    <title>JMOB</title>
    <link rel = "stylesheet" href= "css/style.css">
</head>
<body>
    <div class = "main">

<div class = "information">
    <div class="overlay"></div>
    <img src="images/mobile.png" class="mobile">
    <div id="circle">
        <div class="feautre one">
            <img src = "images/camera.png">
            <div>
                <h1>Kamera</h1>
                <p>12MP</p>
            </div>
        </div>
        <div class="feautre two">
            <img src = "images/processor.png">
            <div>
                <h1>Procesor</h1>
                <p>Snamdragon Octa-core 11nm</p>
            </div>
        </div>
        <div class="feautre three">
            <img src = "images/display.png">
            <div>
                <h1>Zaslon</h1>
                <p>6.5" </p>
            </div>
        </div>
        <div class="feautre four">
            <img src = "images/battery.png">
        <div>
            <h1>Baterija</h1>
            <p>5000mA</p>
        </div>
    </div>
</div>
</div>
<div class="controls">
    <img src="images/arrow.png" id="upBtn">
    <h3>Samsung A81</h3>
    <img src="images/arrow.png" id="downBtn"></br></br>
    <a href = "potvrda.php" class="btn btn-info" role ="button">Kupi mobitel</a>
</div>
</div>

<script>
    var circle = document.getElementById("circle");
    var upBtn = document.getElementById("upBtn");
    var downBtn = document.getElementById("downBtn");

    var rotateValue = circle.style.transform;
    var rotateSum;

upBtn.onclick = function(){
    rotateSum = rotateValue + "rotate(-90deg)";
    circle.style.transform = rotateSum;
    rotateValue = rotateSum;
}
downBtn.onclick = function(){
    rotateSum = rotateValue + "rotate(90deg)";
    circle.style.transform = rotateSum;
    rotateValue = rotateSum;
}
</script>
<div class="row1">
    <div style=" width: 50%; height: 300px; float: left;">
    <h2 style="margin-left:10px; margin-top:50px;">Samsung s10</h2>
    <h4 style="margin-left:40px;">Zaslon: 5.8"</h4>
    <h4 style="margin-left:40px;">Memorija: 128GB</h4>
    <h4 style="margin-left:40px;">Kamera: 10MP</h4>
    <h4 style="margin-left:40px;">Baterija: 3100mAh</h4>
    <h4 style="margin-left:40px;">Cijena: 900KM</h4>
    <a href="potvrda.php" class="btn btn-info" role="button" style="margin-left:40px;">Kupi mobitel</a>
    <img src="images/s30.jpg" class="mobile" style=" width: 180px; height: 180px; margin-top:150px;">
</div>

     <div style=" width: 50%; height: 300px; float: right;">
     <h2 style="margin-left:10px;">Samsung S20</h2>
     <h4 style="margin-left:40px;">Zaslon: 6.2"</h4>
     <h4 style="margin-left:40px;">Memorija:128 GB</h4>
     <h4 style="margin-left:40px;">Kamera: 12MP</h4>
     <h4 style="margin-left:40px;">Baterija: 4000mAh</h4>
     <h4 style="margin-left:40px;">Cijena: 1000KM</h4>
     <a href="potvrda.php" class="btn btn-info" role="button" style="margin-left:40px;">Kupi mobitel</a>
    <img src="images/S20.jpg" class="mobile" style=" width: 180px; height: 180px; margin-top:150px; margin-left:600px;">
    </div>
</div>
<div class="row2">
    <div style=" width: 50%; height: 300px; float: left;">
    <h2 style="margin-left:10px;">iPhone11</h2>
    <h4 style="margin-left:40px;">Zaslon: 5.8"</h4>
    <h4 style="margin-left:40px;">Memorija:64 GB</h4>
    <h4 style="margin-left:40px;">Kamera: 12MP</h4>
    <h4 style="margin-left:40px;">Baterija: 3110mAh</h4>
    <h4 style="margin-left:40px;">Cijena: 1300KM</h4>
    <a href="potvrda.php" class="btn btn-info" role="button" style="margin-left:40px;">Kupi mobitel</a>
    <img src="images/i11.jpg" class="mobile" style=" width: 180px; height: 180px; margin-top:450px;">

    </div>  
    <div style=" width: 50%; height: 300px; float: right;">
    <h2 style="margin-left:10px;">iPhone12</h2>
    <h4 style="margin-left:40px;">Zaslon: 6.1"</h4>
    <h4 style="margin-left:40px;">Memorija: 128 GB</h4>
    <h4 style="margin-left:40px;">Kamera: 12MP</h4>
    <h4 style="margin-left:40px;">Baterija: 2000mAh</h4>
    <h4 style="margin-left:40px;">Cijena: 1500KM</h4>
    <a href="potvrda.php" class="btn btn-info" role="button" style="margin-left:40px;">Kupi mobitel</a>
    <img src="images/i12.jpg" class="mobile" style=" width: 180px; height: 180px; margin-top:450px; margin-left:600px;">
    </div>
</div>
</body>
</html>