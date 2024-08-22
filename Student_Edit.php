<?php include("connection.php");

$sid= $_GET['id'];

$query = "SELECT * FROM student where Student_ID='$sid'";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
  
<body>
    <div class="Container">
        <form action="" method="POST">
            <div class="title">Update Student Details</div> 
            <div class="Form">

                <div class="input_field">
                    <label for=""> Student  Name</label>
                    <input type="text" value="<?php  echo $result['sname'];?>" class="input" name="sname" >
                </div>
                <div class="input_field">
                    <label for=""> Roll Number</label>
                    <input type="number" value="<?php  echo $result['roll_no'];?>" class="input" name="rno"  >
                </div>
                <div class="input_field">
                    <label for=""> Standard</label>
                    
                    <input type="number" value="<?php  echo $result['std'];?>" class="input" name="std" >
                </div>
                <div class="input_field">
                    <label for=""> Division</label>
                   
                    <input type="text" value="<?php  echo $result['division'];?>" class="input" name="division" >
                </div>  
                <div class="input_field"> 
                    <input type="Submit" value="Update"   class="btn1" name="Update">
                </div> 
            </div> 
            
            </form> 
    </div>
               
</body>

</html>

<?php
    // if($_POST['abcd'])
    if($_SERVER['REQUEST_METHOD']=='POST')
    { 
        
        $sname    = $_POST['sname'];
        $rno      = $_POST['rno'];
        $std      = $_POST['std'];
        $division = $_POST['division'];

        $query ="UPDATE student SET sname='$sname',roll_no='$rno',std='$std',division='$division' where Student_ID='$sid'";
       $data = mysqli_query($conn, $query);
       
       if($data){
            echo "<script>alert('Data Updated Successfully')</script>";
       ?>
       <meta http-equiv = "refresh" content = "0; url = Student_List.php"/>
       <?php
       //Both Code are able to redirect and refresh the next page
        // echo "<script>
        //         alert('Data Updated Successfully');
        //         window.location.href = 'display.php'; // Redirect to the form page or the same page
        //       </script>";
        }
        else{
            // echo "failed to Update";
            echo "<script>alert('failed to Update')</script>";
            }

    }
       // Close the database connection
       mysqli_close($conn);
?>
