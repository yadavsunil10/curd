<?php include("hedar.php")?>
<?php include("conectionfile.php")?>
<?php session_start(); ?>
<?php if(isset($_SESSION['uname'])){
    echo "<h2> Hellow &nbsp; ".$_SESSION["uname"]."</h2>";
}
else{
    header("location:login.php?msg=you need to login to enter the site");
} ?>
<a href="includes/logout.php" class="btn btn-danger" style="float:right;">logout</a>
        <div class="box1">
            <h2>All STUDENT</h2>
            <style></style>
            <!---<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>-->
            <a href="insert.php"type="button" class="btn btn-primary"style="float: right;">add_student</a>

        </div>
         <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>age</th>
                <th style="width:20px">update</th>
                <th style="width:20px">delete</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $sql="SELECT * FROM student_details";
            $result = mysqli_query($conn,$sql);
            if(!$result){
                die("query fail".mysqli_error($conn));
            }
            else{
                while($row=mysqli_fetch_assoc($result)){
                  
                    ?>
                    
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>"class="btn btn-primary">update</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>"class="btn btn-danger">delete</a></td>
                    </tr>
                    <?php
                }
            } 


            ?>
        </tbody>
    </table>
    <?php
     if(isset($_GET['message'])){
       echo"<h6>".$_GET['message']."</h6>";
     }

     ?>
     <?php
       if(isset($_GET['insert_msg'])){
         echo"<h6>".$_GET['message']."</h6>";
       }

    ?>
     <?php
       if(isset($_GET['delete_msg'])){
         echo"<h6>".$_GET['delete_msg']."</h6>";
       }

    ?>

    </div>
</body>
</html>

<?php
include("footar1.php")
?>