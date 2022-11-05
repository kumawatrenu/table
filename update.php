<?php include("connection.php");

$Id = $_GET['id'];

$query = "SELECT * FROM RECORD where Id = '$Id'";
$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <body>

    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Update Call Record
        </div><br/>

        <div class="form">
            
            <div class="input_field">
                <label> Customer Name:</label>
                <input type="text" value="<?php echo $result['Customer_Name']; ?>" class="input" name="cname"  placeholder="Enter Customer Name" required>
               
                <label> Location:</label>
                <input type="text" value="<?php echo $result['Location']; ?>"class="input" name="location"  placeholder="Enter Location" required/>

                <label>  Zone: </label>
                <input type="text"  value="<?php echo $result['Zone']; ?>" class="input" name="zone"  placeholder="Enter Zone" required/>
                </div>
              
            <div class="input_field">
                <label>  Machine Model No.: </label>
                <input type="text" value="<?php echo $result['Machine_Model_No']; ?>" class="input" name="model" placeholder="Enter Model No." required/>
            
            <label> Machine Serial.No.: </label>
                <input type="text" value="<?php echo $result['Machine_Serial_No']; ?>" class="input" name="serial" value="" placeholder="Enter Serial No." required/>
            </div>

            
            <div class="input_field">
                <label>  Visit Type: </label>                       
                <select class="selectbox" name="visit" required>
                <option value="">
                    -- Select Visit --
                </option>

                    <option value="amc visit"
                    <?php
                    
                    if($result['Visit_Type'] == 'amc visit')
                    {
                        echo "selected";
                    }
                    ?>
                    >
                    AMC Visit</option>

                    <option value="service visit"
                    <?php
                    if($result['Visit_Type'] == 'service visit')
                    {
                        echo "selected";
                    }
                    ?>    
                    >
                    Service Visit</option>

                    <option value="installation visit"
                    <?php
                    if($result['Visit_Type'] == 'installation visit')
                    {
                        echo "selected";
                    }
                    ?>    
                    >
                    Installation Visit</option>

                    <option value="remote support"
                    <?php
                    if($result['Visit_Type'] == 'remote support')
                    {
                        echo "selected";
                    }
                    ?>    
                    >
                    Remote Support</option>
                </select>


                <label> Visit Description: </label>
                <input type="text" class="input" value="<?php echo $result['Visit_Description']; ?>" name="type" value="" required>
                
            </div>
          
            
                <div class="input_field">
                <label>  Commercial Detail: </label>
                
                <select class="selectbox" name="comm" required>
                <option value="">
                    --Please Select Commercial--
                </option>
                    <option value="offer no"
                    
                    <?php
                    if($result['Commercial_Detail'] == 'offer no')
                    {
                        echo "selected";
                    }
                    ?>
                    >Offer No.</option>
                    <option value="po no"
                    <?php
                    if($result['Commercial_Detail'] == 'po no')
                    {
                        echo "selected";
                    
                }
                ?>
                    >Po No.</option>

                    <option value="approval no"
                    <?php
                    if($result['Commercial_Detail'] == 'approval no')
                    {
                        echo "selected";
                    }
                    ?>
                    >Approval No. Free</option>

                    <option value="free"
                    <?php
                    if($result['Commercial_Detail'] == 'free')
                    {
                        echo "selected";
                    }
                    ?>
                    >Free</option>
               </select>
               
                
                       
                <label>  Enter Detail </label>
                <input type="text" class="input" name="number" value="<?php echo $result['Enter_Detail']; ?>" placeholder="Enter Commercial No." required/>
            </div>

            <div class="input_field">
            <label> Engineer Name </label>
                <input type="text" class="input" name="ename" value="<?php echo $result['Engineer_Name']; ?>" placeholder="Enter Engineer Name" required>
                </div>
                
            <div class="input_field">
                <label>Start Date:</label>
                <input type="date" class="input" name="start" value="<?php echo $result['Planned_Visit_Start_Date']; ?>" required>
                <label>End Date:</label> 
                <input type="date" class="input" name="end" value="<?php echo $result['Planned_Visit_End_Date']; ?>" required>
               
                </div><br/>

            <div class="input_field">
                <label> Closing Remarks</label>
                <input type="text" class="input" name="remarks" value="<?php echo $result['Closing_Remarks']; ?>" placeholder="Enter Remarks" required>
            

            
                <label>  Visit Status: </label>
                
                <select class="selectbox" name="status" required>
                <option value="">
                    --Please Select Visit Status --
                </option>
                    <option value="open"
                    <?php
                     if($result['Visit_Status'] == 'open')
                     {
                         echo "selected";
                     }
                    ?>
                    >
                    Open</option>
                    <option value="ongoing"
                    <?php

                    if($result['Visit_Status'] == 'ongoing')
                    {
                        echo "selected";
                    }
                    ?>
                    >Ongoing</option>
                    <option value="confirm"
                    <?php
                     if($result['Visit_Status'] == 'confirm')
                     {
                         echo "selected";
                     }
                    ?>
                    >Confirm</option>
                    <option value="completed"
                    <?php
                     if($result['Visit_Status'] == 'completed')
                     {
                         echo "selected";
                     }
                    ?>
                    
                    >Completed</option>
                </select>
                </div>
                <br/>
           
           
            <div class="input_field">
                <input type="submit" value="Update" class="btn" name="update"/>
                <a href="index.php" type ="submit" value="" class="btn" name="back"> Back</a>
            </div>

     </form>
    </div>

      </body>
    
</html>

<?php

if (isset($_POST['update']))
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
    $engineer = $_POST['ename'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $remarks = $_POST['remarks'];
    $status= $_POST['status'];
    
$query = "UPDATE Record set Customer_Name='$cus_name',Location='$location',
Zone='$zone',Machine_Model_No='$machine',Machine_Serial_No ='$serial',Visit_Type='$visit',
Visit_Description='$description',Commercial_Detail='$comm',Enter_Detail='$detail',
Engineer_Name='$engineer',Planned_Visit_Start_Date='$start',Planned_Visit_End_Date='$end',
Closing_Remarks='$remarks',Visit_Status='$status'where id='$Id'";

    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        ?>

        <meta http-equiv = "refresh" content = "0; 
        url = http://localhost/hello/display.php" />

        <?php
     }
    else
    {
        echo "Failed to Update";
    }
// }
// else{
//     echo "Please fill the form";
// }
}
?> 