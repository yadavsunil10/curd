<?php 
include('conectionfile.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM student_details WHERE id = $id");
    if($row = mysqli_fetch_assoc($result)) {
        
    }
}

if(isset($_POST['update'])) {
    //$id = $_POST['id'];
    $name = $_POST['name'];
    $last_name = $_POST['lastname'];
    $age = $_POST['age'];
    $query = "UPDATE student_details SET Name='$name', last_name='$last_name', age='$age' WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if($result) {
        echo "Record updated successfully";
        header("Location: index.php");  
    } else {
        echo "Error updating record: " . mysqli_error($conn);
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
    <form action="update.php?id=<?php echo $id; ?>" method="POST">
        <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value="<?php echo $row['Name']; ?>">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $row['last_name']; ?>">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age" value="<?php echo $row['age']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>
</body>
</html>

