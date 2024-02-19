<?php
include("loginghedar.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<style>
    h4{
        color: red;
        
    }
</style>
   
</head>
<body>
    
    <div class="container col-5 my-10">
        <?php 
        if(isset($_GET['msg'])){
            echo "<h4>" .$_GET["msg"]."s</h4>";
        }

         ?>
    <form action="includes/login_process.php" method="POST">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control"name="uname">
                
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="type" class="form-control" name="email">
            </div> <br>
           
            <button type="submit" class="btn btn-success" name="login">Login</button>
        
                
 </form>
    </div>
</body>
</html>