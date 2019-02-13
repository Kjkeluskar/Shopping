<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <?php include 'plugins.php';?>
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
<?php include 'header.php'; ?>
<div id="main">

    <h2 ALIGN="CENTRE">REGISTER YOURSELF:</h2>



     <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
            <div class="form-group">
<label for="txtname">Name</label>
<input class="form-control" type="text" name="txtname" id="txtname">
            </div>
            <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                                </div>
                                <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password" id="password">
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="conpass">Confirm password</label>
                                                            <input class="form-control" type="password" name="conpass" id="conpass">
                                                                        </div>
                                                                        <div class="form-group">
                                                            <label for="class">Class</label>
                                                            <input class="form-control" type="text" name="class" id="class">
                                                                        </div>
                                                                        <div class="form-group">
                                                            <label for="conno">Contactno</label>
                                                            <input class="form-control" type="text" name="conno" id="conno">
                                                                        </div>
                                                                        <div class="form group">
                                                                            <input class="btn btn-success" type="submit" value="register" name="btn">
                                                                        </div>

        </form>
        
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $servername = "localhost";
            $username = "root";
            $password =  "";
            $dbname =  "studentprofile";
   //create connection
   $conn = mysqli_connect($servername, $username,$password,$dbname);
   //check connection
   if (!$conn)
   {
       die("connection failed: " . mysqli_connect_error());

   }
   $Name= $_POST['txtname'];
   $Email=$_POST['email'];
   $Password=$_POST['password'];
   $Class=$_POST['class'];
   $ContactNo=$_POST['conno'];
   $sql = "INSERT INTO registration(Name,Email,Password,Class,ContactNo) VALUES('$Name','$Email','$Password','$Class','$ContactNo')";
   if(mysqli_query($conn,$sql))
   {
        echo "<script>swal ('registration successful')</script>";
       
   }
   else
   {
       echo "error:".mysqli_error($conn);
   }
   mysqli_close($conn);
}
   ?>
    </div>
    <div class="container">
    <?php include 'footer.php'; ?>
    </div>
    </div>
    
</body>
</html>
