<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include 'plugins.php';?>
</head>
<body>

    <?php include 'header.php';?>
    <div class="container">

<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1" ></li>
        <li data-target="#demo" data-slide-to="2" ></li>
        <li data-target="#demo" data-slide-to="3" ></li>
     
     
     

    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/image1.jpg" alt="image1" width="100%" height="450">
        </div>

        <div class="carousel-item">
            <img src="images/image2.jpg" alt="image3" width="100%" height="450">
        </div>

        <div class="carousel-item">
            <img src="images/image4.jpg" alt="image4" width="100%" height="450">
        </div>

        <div class="carousel-item">
            <img src="images/image5.jpg" alt="image5" width="100%" height="450">
        </div>
       

    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
</div>
</div>
<?php include 'php.php';?>
</body>
</html>
