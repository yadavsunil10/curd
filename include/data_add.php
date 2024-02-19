<?php include('../loginghedar.php') ?>
<?php include('conectionfile.php') ?>
<?php
if(isset($_POST["submit"])) {
    $username = $_POST["uname"];
    $email = $_POST["email"];
    //echo $username;
    $query = "INSERT INTO user(username,email_id) VALUES('$username','$email')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("query fail".mysqli_error($conn));
    }else{
        echo"data import successfully";
        //echo $row;
    }
    
        
}

?>
<form action="#" method="POST">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control"name="uname">
                
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="type" class="form-control" name="email">
            </div> <br>
           
            <button type="submit" class="btn btn-success" name="submit">submit</button>