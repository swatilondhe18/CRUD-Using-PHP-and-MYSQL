<?php
include("connection.php");

$sid= $_GET['id'];
$query = "DELETE from student WHERE Student_ID='$sid'";
$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Data Deleted Successfully')</script>";
    ?>
       <meta http-equiv = "refresh" content = "0; url = Student_List.php"/>
       <?php
    }
    else{
        echo "<script>alert('Data Failed To Delete')</script>";
}

?>