<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-color: #D071F9;
            }
            table{
                background-color: white;
                text-align: center;
            }
            .update, .delete {
                background-color: Green;
                text-align: center;
                border:0;
                outline:none;
                height:20px;
                width: 80px;
                font-weight:bold;
                border-radius:5px;
                cursor: pointer;
            }
            .delete{
                background-color: red;
            }
        </style>
    </head>
<?php
include("connection.php");
error_reporting(0);

 $query = "SELECT * FROM student";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);


 //echo $result['sname']." ".$result['roll_no']." ".$result['std']." ".$result['division'];    

        //  echo $total;

 if($total != 0){
    ?>
    <h2 align="center"><mark> Displaying All Records</mark></h2>
    <a class="list" href='Student_Form.php'> Insert Into List</a>
    <table border="1" cellspacing="7" width="70%" align="center">
        <tr>
        <th width="5%">Student ID</th>
        <th width="15%">Student Name</th>
        <th width="10%">Student Roll No.</th>
        <th width="10%">Standard</th>
        <th width="10%">Division</th>
        <th width="20%">Operations</th>
        </tr>
        
<?php   
    while($result = mysqli_fetch_assoc($data))
    {
           
            echo"<tr>
                     <td>".$result['Student_ID']."</td>
                    <td>".$result['sname']."</td>
                     <td>".$result['roll_no']."</td>
                     <td>".$result['std']."</td>
                    <td>".$result['division']."</td>
                    <td><a href='Student_Edit.php?id=$result[Student_ID]'><input type='submit' Value='Edit' class='update'></a>
                    <a href='Student_Delete.php?id=$result[Student_ID]'><input type='submit' Value='Delete' class='delete' onclick='return onDelete()'></a></td>
                     </tr>";
    }
     }
 else
 {
    echo "Table is empty";
 }
?>
</table>
<script>
    function onDelete(){
        return confirm('Do You want to DELETE this Record? ');
    }
</script>

</html>
