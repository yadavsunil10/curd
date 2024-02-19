<?php include('../dbcon.php');?>
<?php session_start(); ?>
<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    //echo $username;
    //echo $email;
}
$query = "SELECT * from student WHERE name = '$username' and email = '$email'";
$result = mysqli_query($con,$query);

if(!$result){
    die("Query Failed".mysqli_error($con));
}else{
    $row = mysqli_num_rows($result);
    //echo $row;
    if($row == 1){
        $_SESSION['username'] = $username;
        header('location:../Display.php');
    }
}


?>