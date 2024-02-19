<?php include("conectionfile.php"); ?>
<?php session_start(); ?>
<?php 
if(isset($_POST["login"])) {
    $username = $_POST["uname"];
    $email = $_POST["email"];
    //echo $username;
    $query = "SELECT * FROM user WHERE 	username = '$username' and email_id = '$email'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("query fail".mysqli_error($conn));
    }else{
        $row = mysqli_num_rows($result);
        //echo $row;
    }
    if($row == 1){
        $_SESSION["uname"] = $username;
        header("location:../index.php");
    }else{
        header("location:../login.php?msg=sorry you cant login because user and email id invalid");

    }
        
}


?>