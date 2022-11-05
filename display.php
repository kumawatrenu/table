<html>
    <head>
        <title>
            Display
        </title>
       
        <style>
            body{
                background-color: gray;
            }
            h1{
                
            }
            table{
                background-color: white;
                color: black;
            }
            .update,.delete
            {
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 23px;
                width: 60px;
                font-weight: bold;
                cursor: pointer;
            }
            .delete{
                background-color: red;
            }
            .print,.add
            {
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 23px;
                width: 50px;
                font-weight: bold;
                cursor: pointer;
                float: right;
            }
            .print{
                background-color: orangered;
            }
       </style>
    </head>
    <body style="margin: 50px;">
    <h1 align="center">View All Records </h1>

    <a href='index.php'>
       <input type='submit' value='Add' class='add'>
       </a>

<script type = "text/ javascript">   -->
 
<!-- 

// -->  
<!-- </script>  
<input type = "button" value = "Print" class='print' onclick = "window.print()" />
       
       
<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM RECORD";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total != 0)
{
    ?>
    <center>
    <table border="1" cellspacing="0" width="100%">
        <tr>
        <th width="2%">Id</th>
        <th width="10%">Customer Name</th>
        <th width="5%">Location</th>
        <th width="1%">Zone</th>
        <th width="5%">Machine Model No</th>
        <th width="5%">Machine Serial No</th>
        <th width="6%">Visit Type</th>
        <th width="3%">Visit Description </th>
        <th width="5%">Commercial Detail </th>
        <th width="4%">Enter Detail </th>
        <th width="9%">Engineer Name</th>
        <th width="8%">Planned Visit Start Date</th>
        <th width="8%">Planned Visit End Date</th>
        <th width="5%">Closing Remarks</th>
        <th width="5%">Visit Status</th>
        <th width="19%">Operations</th>
        </tr>
   
   <?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
       <td>".$result['Id']."</td>
       <td>".$result['Customer_Name']."</td>
       <td>".$result['Location']."</td>
       <td>".$result['Zone']."</td>
       <td>".$result['Machine_Model_No']."</td>
       <td>".$result['Machine_Serial_No']."</td>
       <td>".$result['Visit_Type']."</td>
       <td>".$result['Visit_Description']."</td>
       <td>".$result['Commercial_Detail']."</td>
       <td>".$result['Enter_Detail']."</td>
       <td>".$result['Engineer_Name']."</td>
       <td>".$result['Planned_Visit_Start_Date']."</td>
       <td>".$result['Planned_Visit_End_Date']."</td>
       <td>".$result['Closing_Remarks']."</td>
       <td>".$result['Visit_Status']."</td>
       <td>

       <a href='update.php?id=$result[Id]'>
       <input type='submit' value='Update' class='update'>
       </a>
      
       <a href='delete.php?id=$result[Id]'>
       <input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'>
       </a>

       
      </td>

       </tr>";
        // echo "Hello Cyber Warriors<br/>";
        // $a++;
    }
}
else
{
    echo "No records found";
}

?>
 </table>
  
    </center>
    </body>
</html>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record?');
    }
 
