<?php session_start();
$docId=$_SESSION['docId'];
$pid=$_SESSION['pid'];

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

$sql="select fName,mName,lName,doa,dob from patient where pid='$pid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
          $fName=$row["fName"];
		  $mName=$row["mName"];
		  $lName=$row["lName"];
		  $doa=$row["doa"];
		  $dob=$row["dob"];
    }
	
}
$conn->close();

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
        <h2 class="text-center">Medical Advise by the Specialist Form</h2>

        <div class="row">

             <form action="specialAd.php" method='POST'>
            <div class="col-sm-12">
               

                    <div class="form-group">
                        <label for="">Patient ID</label>
                        <input class="form-control" type="number" id="example-number-input" value="<?php echo $pid ?>">

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlMail">Date of Admission <span style="color:red">*<span></label>

                        <input class="form-control" type="text" id="example-date-input" value="<?php echo $doa?>">
                    </div>


                    <div class="form-group">

                        <label for="exampleFormControlName">Your Name <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text"  class="form-control required" placeholder="first name" value="<?php echo $fName ?>"></div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control required" placeholder="middle name" value="<?php echo $mName?>"></div>
                            <div class="col-sm-4">
                                <input type="text"  class="form-control required" placeholder="last name" value="<?php echo $lName?>"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlMail">Date of Birth</label>

                        <input class="form-control" type="text"  id="example-date-input" value="<?php echo $dob?>">
                    </div>


                    <div class="form-group">
                        <div class="col-sm-12 row">
                            <div class="col-sm-6 row ">
                                <label for="">Bed no :</label>
                                <input class="form-control" type="number" name="bedNo" id="example-number-input">
                            </div>
                            <div class="col-sm-6 ">
                                <label for="">Ward no :</label>
                                <input class="form-control" type="number" name="wardNo" id="example-number-input">
                            </div>

                        </div>
                    </div>

                    <br><br><br><br>
                    <h3>All above information will be printed for system</h3>
                    <br><br><br><br>

                    <div class="form-group">
                        <label for="exampleFormControlMail">Date of Advice</label>

                        <input class="form-control" type="date" name="dateOA" value="2018-04-1" id="example-date-input">
                    </div>

                    <div class="form-group ">
                        <label for="example-time-input"  class="col-2 col-form-label">Time</label>

                        <input class="form-control" type="time" name="time" value="13:45:00" id="example-time-input" name="dateOA">

                    </div>



                



                <h2>Medicine Advice</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Number of medicine </th>
                            <th>Quantity</th>
                            <th>Times in a day</th>
                            <th>Morning </th>
                            <th>Noon</th>
                            <th>Evening</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>    
                            <td> 
                                <input type="text" name="slNo" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="mId" class="form-control required" ></td>
                            <td>
                                <input type="text" name="quantity" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="perDay" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="morning" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="noon" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="evening"class="form-control required" ></td>
                        </tr>
                        <tr>
                            <td> 
                                <input type="text" name="slNo2" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="mId2" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="quantity2" class="form-control required" ></td>
                            <td>
                                <input type="text" name="perDay2" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="morning2" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="noon2" class="form-control required" ></td>
                            <td> 
                                <input type="text" name="evening2" class="form-control required" ></td>
                        </tr>
                        
                    </tbody>
                </table>
                
                <br><br><br>
                
                <h2>Test Advice</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Number of tests </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="col-sm-4 row">
                                <input type="text" name="" class="form-control required" ></div></td>
                            <td><div class="col-sm-4 row">
                                <input type="text" name="" class="form-control required" ></div></td>
                            
                        </tr>
                        <tr>
                            <td><div class="col-sm-4 row">
                                <input type="text" name="test1" class="form-control required" ></div></td>
                            <td><div class="col-sm-4 row">
                                <input type="text" name="test2" class="form-control required" ></div></td>
                            
                        </tr>
                        
                    </tbody>
					
                </table>
                      <div class="form-group">
                        <input type="submit" name="submit" value="SAVE" class="form-control btn btn-primary">
                    </div>





            </div>




        </div>
    </div>

   </form>


</body>

</html>