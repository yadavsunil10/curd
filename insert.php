<?php
include("conectionfile.php");

if(isset($_POST["add_students"])){
    $name = $_POST['name'];
    $last_name = $_POST['lastname'];
    $age = $_POST['age'];
    
    
    
   
        $query = "INSERT INTO student_details (Name, last_name, age) VALUES ('$name', '$last_name', '$age')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            die("Query Failed: " . mysqli_error($conn));
        }
        else{
            //echo"data import successfully ";
            header("Location: index.php");
           

        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT DATA ADD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form action=""method="POST">
                <div class="form-group">
                <label >name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
                
            </div>
            <div class="form-group">
                <label>last name</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="form-group">
                <label>age</label>
                <input type="text" class="form-control" name="age">
            </div>
           
            <button type="submit" class="btn btn-primary" name="add_students" value="submit">Submit</button>


    </form>

</div>
   

    
</body>
</html>
