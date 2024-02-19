<?php 
include("conectionfile.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM student_details WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query fail: " . mysqli_error($conn));
    } else {
        header('location:index.php?delete_msg=you have deleted the record');
        exit(); // Ensure no further code execution after redirection
    }
}
?>
