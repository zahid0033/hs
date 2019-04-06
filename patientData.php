<?php session_start();
$pid=$SESSION['pid'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="select * from patient where pId=$pid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
		$doa=  $_POST["doa"];
$fName=$row["fName"];
$mName=$row["mName"];
$lName=$row["lName"];
$dob=$row["dob"];
$pn1=$row["pn1"];
$pn2=$row["pn2"];
$streetNo=$row["streetNo"];
$streetName=$row["streetName"];
$area=$row["area"];
$thana=$row["thana"];
$dist=$row["dist"];
$pn1=$row['pn1'];
$pn2=$row['pn2'];
$PstreetNo=$row["PstreetNo"];
$PstreetName=$row["PstreetName"];
$Parea=$row["Parea"];
$Pthan=$row["Pthana"];
$Pdist=$row["Pdist"];
$amount=$row["amount"];

$job=$row["job"];
$room=$row["room"];


}

}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Admission Form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
   
   <div class="container back">
        <h2 class="text-center"> Patient Admission Reciept</h2>

        <div class="row">
        
        
        <div class="col-sm-12">
                <form action="printPaitaint.php" method="POST">
                    
                    <div class="form-group">
                        <label for="">Patient ID</label>
                         <input class="form-control" type="number" id="example-number-input" value="<?php echo $pid;?>">
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlMail">Date of Admission <span style="color:red" value="<?php echo $doa;?>>*<span></label>

                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div>
                    
                    
                    <div class="form-group">

                        <label for="exampleFormControlName">Your Name <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="" class="form-control required" placeholder="first name" value="<?php echo $fName;?>></div>
                            <div class="col-sm-4">
                                <input type="text" name="" class="form-control required" placeholder="middle name" value="<?php echo $mName;?>></div>
                            <div class="col-sm-4">
                                <input type="text" name="" class="form-control required" placeholder="last name" value="<?php echo $lName;?>></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlMail">Date of Birth</label>

                        <input class="form-control" type="date" value="2018-04-1" id="example-date-input" value="<?php echo $dob;?>>
                    </div>


                    <div class="form-group">

                        <div class="col-sm-12 row margin">
                            <div class="col-sm-6 row">
                                <label for="exampleFormControlMail">Mobile Number (1)</label>
                                <input class="form-control" type="tel" value="+880" id="example-tel-input" value="<?php echo $pn1;?>>
                            </div>
                            <div class="col-sm-6">
                                <label for="exampleFormControlMail">Mobile Number (2)</label>
                                <input class="form-control" type="tel" value="+880" id="example-tel-input" value="<?php echo $pn2;?>>
                            </div>
                        </div>

                    </div>
                    
                    <div class="form-group">

                        <label>Present Address  **</label>

                        <div class="col-sm-12 row margin">

                            <div class="col-sm-6 row">
                                <label for="exampleFormControlName">Street no/Village</label>
                                <input type="text" name="" class="form-control required" placeholder=" street no"value="<?php echo $street;?>>
                            </div>

                            <div class="col-sm-6">
                                <label for="exampleFormControlName">Street Name</label>
                                <input type="text" name="" class="form-control required" placeholder="street name" value="<?php echo $streetName;?>>
                            </div>


                        </div>

                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="" class="form-control required" placeholder="Area"value="<?php echo $area;?>>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="" class="form-control required" placeholder="Thana"value="<?php echo $thana;?>>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="" class="form-control required" placeholder="District" value="<?php echo $dist;?>>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">

                        <label>Permanent Address  **</label>

                        <div class="col-sm-12 row margin">

                            <div class="col-sm-6 row">
                                <label for="exampleFormControlName">Street no/Village</label>
                                <input type="text" name="" class="form-control required" placeholder=" street no" value="<?php echo $Pstreet;?>>
                            </div>

                            <div class="col-sm-6">
                                <label for="exampleFormControlName">Street Name</label>
                                <input type="text" name="" class="form-control required" placeholder="street name"value="<?php echo $PstreetName;?>>
                            </div>


                        </div>

                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="" class="form-control required" placeholder="Area"value="<?php echo $Parea;?>>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="" class="form-control required" placeholder="Thana"value="<?php echo $Pthana;?>>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="" class="form-control required" placeholder="District"value="<?php echo $Pdist;?>>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Profession : </label>
                        <input type="text" name="" class="form-control " >
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row ">
                                <label for="">Cabin no :</label>
                                <input class="form-control" type="number" id="example-number-input" name="cab">
                            </div>
                            <div class="col-sm-4 ">
                                <label for="">Ward no :</label>
                                <input class="form-control" type="number" id="example-number-input" value=<?php$_SESSION['wardNo']?>>
                            </div>
                            <div class="col-sm-4 margin">
                                <label for="">Bed no :</label>
                                <input class="form-control" type="number" id="example-number-input" value=<?php$_SESSION['bedNo']?>>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <p>Signature with date</p>
                    <span>Name of the Employee</span><br>
                    <span class="margin"> Designation </span>
                    <br><br>
                    
                    <div class="form-group">
                        <input type="submit" name="" value="SAVE" class="form-control btn btn-primary">
                    </div>
                    
                    
                    
                    
                    
                    
                    
                </form>
        </div>
        
        
        
        
        
        
        
        
       </div>
    </div>
        
        
    </body>
</html>