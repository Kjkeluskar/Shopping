<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
}
</style>
</head>
<body>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Electronic')" id="defaultOpen">Electronic</button>
  <button class="tablinks" onclick="openCity(event, 'Watch')">Watch</button>
  <button class="tablinks" onclick="openCity(event, 'Cosmetic')">Cosmetic</button>
</div>

<div id="Electronic" class="tabcontent">
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="shopping";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}

$sql = "SELECT * from products";

$result = mysqli_query($conn,$sql);

while($resultArray = mysqli_fetch_array($result))
{
   echo '<div class="col-sm-4">';
   echo '<div class="card">';
   echo '<div class="card-header">'.$resultArray['pname'].'</div>';
   echo '<div class="card-body">';
   echo '<img src="'.$resultArray['pimage'].'" class="img-responsive" style="width:100%" alt="Image">';
   echo '<p class="pt-3 lead text-center"><i class="fa fa-inr"></i><label id="lblRate">'.$resultArray['rate'].'</label>/-</p>';
   echo '</div>';
   echo '<div class="card-footer">';
   echo '<a href="product.php?pid='.$resultArray['productID'].'" class="btn btn-primary d-flex justify-content-center">Buy Now</a>';
   echo '</div>';
   echo '</div>';
   echo '</div>';
}
?>
</div>

<div id="Watch" class="tabcontent">
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="shopping";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}

$sql = "SELECT * from product";

$result = mysqli_query($conn,$sql);

while($resultArray = mysqli_fetch_array($result))
{
   echo '<div class="col-sm-4">';
   echo '<div class="card">';
   echo '<div class="card-header">'.$resultArray['pname'].'</div>';
   echo '<div class="card-body">';
   echo '<img src="'.$resultArray['pimage'].'" class="img-responsive" style="width:100%" alt="Image">';
   echo '<p class="pt-3 lead text-center"><i class="fa fa-inr"></i><label id="lblRate">'.$resultArray['rate'].'</label>/-</p>';
   echo '</div>';
   echo '<div class="card-footer">';
   echo '<a href="product.php?pid='.$resultArray['productID'].'" class="btn btn-primary d-flex justify-content-center">Buy Now</a>';
   echo '</div>';
   echo '</div>';
   echo '</div>';
}
?>
</div>

<div id="Cosmetic" class="tabcontent">
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="shopping";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}

$sql = "SELECT * from cosmetic";

$result = mysqli_query($conn,$sql);

while($resultArray = mysqli_fetch_array($result))
{
   echo '<div class="col-sm-4">';
   echo '<div class="card">';
   echo '<div class="card-header">'.$resultArray['pname'].'</div>';
   echo '<div class="card-body">';
   echo '<img src="'.$resultArray['pimage'].'" class="img-responsive" style="width:100%" alt="Image">';
   echo '<p class="pt-3 lead text-center"><i class="fa fa-inr"></i><label id="lblRate">'.$resultArray['rate'].'</label>/-</p>';
   echo '</div>';
   echo '<div class="card-footer">';
   echo '<a href="product.php?pid='.$resultArray['productID'].'" class="btn btn-primary d-flex justify-content-center">Buy Now</a>';
   echo '</div>';
   echo '</div>';
   echo '</div>';
}
?>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
