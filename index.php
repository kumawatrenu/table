<?php include("connection.php") ?>
<!doctype html>
<html lang="en">
  <head>
       <title>Service Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="css/style.css">
    <body>

    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Service Call Record
        </div><br/>

        <div class="form">
            
            <div class="input_field">
                <label> Customer Name:</label>
                <input type="text" class="input" name="cname" value="" placeholder="Enter Customer Name" required>
               
                <label> Location:</label>
                <input type="text" class="input" name="location" value="" placeholder="Enter Location" required/>

                <label>  Zone: </label>
                <input type="text" class="input" name="zone" value="" placeholder="Enter Zone" required/>
                </div>
            
            <div class="input_field">
                <label>  Machine Model No.: </label>
                <input type="text" class="input" name="model" value="" placeholder="Enter Model No." required/>
            
                <label> Machine Serial.No.: </label>
                <input type="text" class="input" name="serial" value="" placeholder="Enter Serial No." required/>
            </div>

            <div class="input_field">
                <label>  Visit Type: </label>
                <select class="selectbox" class="input" name="visit" required>
                <option value="">
                    --Please Select Visit --
                </option>
                    <option value="amc visit">AMC Visit</option>
                    <option value="service visit">Service Visit</option>
                    <option value="installation visit">Installation Visit</option>
                    <option value="remote support">Remote Support</option>
                </select>
                <label> Visit Description: </label>
                <input type="text" class="input" name="type" value="" required>
            
            </div>
                      
            <div class="input_field">
                <label>  Commercial Detail: </label>
                <select class="selectbox" name="comm" required>
                <option value="">
                    -- Select Refrence--
                </option>
                    <option value="offer no">Offer No.</option>
                    <option value="po no">Po No.</option>
                    <option value="approval no">Approval No. Free</option>
                    <option value="free"> Free</option>
               </select>      
                <label>  Enter Detail </label>
                <input type="text" class="input" name="number" value="" placeholder="Enter Commercial No." required/>
            </div>
        

            <div class="input_field">
            <label> Engineer Name </label>
                <input type="text" class="input" name="ename" value="" placeholder="Enter Engineer Name" required>
                </div>

            <div class="input_field">
                <label>Start date:</label>
                <input type="date" class="input" name="start" value="" required/>

                <label>End date:</label>
                <input type="date" class="input" name="end" value="" required/>
    </div>

            <div class="input_field">
            <label> Closing Remarks</label>
                <input type="text" class="input" name="remarks" value="" placeholder="Enter Remarks" required>

                <label> Visit Status: </label>
                <select class="selectbox" name="status" required>
                <option value="">
                    --Please Select Visit Status --
                </option>
                    <option value="open" >Open</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="confirm">Confirm</option>
                    <option value="completed">Completed</option>
                </select>            
                </div>
                
           
           
            <div class="input_field">

                <input type="submit" value="Save" class="btn" name="save"/>

                <a href="display.php" class="btn" type="submit" name="view">View</a>

                <a href="men-power-utilization.php" type="submit" class="btn" name="power">Men Power Utilization</a>
            </div>
            </div>
        
             </form>
    </div>
      </body>
    
</html>

 <?php

if (isset($_POST['save']))
{
    $cus_name = $_POST['cname'];
    $location = $_POST['location'];
    $zone = $_POST['zone'];
    $machine = $_POST['model'];
    $serial = $_POST['serial'];
    $visit = $_POST['visit'];
    $description = $_POST['type'];
    $comm = $_POST['comm'];
    $detail=$_POST['number'];
    $enigneer = $_POST['ename'];
    $start_date = $_POST['start'];
    $end_date = $_POST['end'];
    $remarks = $_POST['remarks'];
    $status= $_POST['status'];
    

    $query = "INSERT INTO RECORD (Customer_Name,Location,Zone,
    Machine_Model_No,Machine_Serial_No,
    Visit_Type,Visit_Description,Commercial_Detail,Enter_Detail,
    Engineer_Name,Planned_Visit_Start_Date,Planned_Visit_End_Date,Closing_Remarks,Visit_Status)VALUES('$cus_name','$location','$zone',
    '$machine','$serial','$visit','$description','$comm','$detail','$enigneer','$start_date','$end_date','$remarks',
    '$status')"; 

    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Data Inserted into Database')</script>";
        ?>

        <meta http-equiv = "refresh" content = "0; 
        url = http://localhost/hello/display.php" />

        <?php
     }
    else
    {
        echo "Failed";
    }
// }
// else{
//     echo "Please fill the form";
// }
}
?> 