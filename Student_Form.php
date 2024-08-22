<?php include("connection.php")?>

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
        <form action="" method="POSt">
            <div class="title"> Student Data</div> 
            <div class="Form">

                <div class="input_field">
                    <label for=""> Student  Name</label>
                    <input type="text" class="input" name="sname" >
                </div>
                <div class="input_field">
                    <label for=""> Roll Number</label>
                    <input type="number" class="input" name="rno"  >
                </div>
                <div class="input_field">
                    <label for=""> Standard</label>
                    
                    <input type="number" class="input" name="std" >
                </div>
                <div class="input_field">
                    <label for=""> Division</label>
                   
                    <input type="text" class="input" name="division" >
                </div>
                
                <div class="input_field">
                    
                    <input type="Submit" value="Submit" class="btn1" name="submit">
                </div>
                <div class="input_field">
                    
                    <a class="list" href='Student_List.php'> Display List</a>
                </div>

            </div>  
            </form> 
    </div>
    
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sname    = $_POST['sname'];
        $rno      = $_POST['rno'];
        $std      = $_POST['std'];
        $division = $_POST['division'];
       //$query ="INSERT INTO student  VALUES('$sname','$rno','$std','$division')";
       $query ="INSERT INTO student (sname, roll_no, std, division)    VALUES('$sname','$rno','$std','$division')";

       $data = mysqli_query($conn,$query);

             if($data){
                echo "<script>alert('Data Inserted Successfully')</script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url = Student_Form.php"/>
                <?php
                 }
             else{
                echo "Error : Data Not Inserted";
                //echo "mysqli_error($conn)";
            }
       }
    
       // Close the database connection
       mysqli_close($conn);
?>