<?php
session_start();
if($_SESSION['studentID'] == null)
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php 
    include 'plugins.php';
    ?>
    <style>
   h1{
       background-color:lightblue;
   }
   body{
       background-color:lightslategray;

   }
   
   </style>
   
</head>
<body>
<div class="container">
<?php include 'header.php';?>
      

    <h1>welcome to user</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST")
    <div class="form-group">
    <input type="submit" value="logout">
    </div>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        session_destroy();
        header("Location:index.php");
    }
?>
<div>
<?php include 'footer.php';?>
</body>
</html>