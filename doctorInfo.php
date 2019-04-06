<?php session_start();
$docId=$_SESSION['docId'];
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
$sql="select fName,mName,lName from docinfo where docId='$docId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
          $fName=$row["fName"];
		  $mName=$row["mName"];
		  $lName=$row["lName"];
		
    }
	
}


//$conn->close();



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors Information</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container back">
        <h2 class="text-center">Doctors Information Form</h2>

        <div class="row">
            <div class="col-sm-12">
                <form action="">
				    <div class="form-group">
                        <label for="">Doctor ID</label>
                        <input class="form-control" type="number" id="example-number-input" value="<?php echo $docId;?>">
                    </div>
					<div class="form-group">

                        <label for="exampleFormControlName">Your Name <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="" class="form-control required" placeholder="first name" value="<?php echo $fName;?>"></div>
                            <div class="col-sm-4">
                                <input type="text" name="" class="form-control required" placeholder="middle name" value="<?php echo $mName;?>"></div>
                            <div class="col-sm-4">
                                <input type="text" name="" class="form-control required" placeholder="last name" value="<?php echo $lName;?>"></div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlMail">Date of Birth</label>

                        <input class="form-control" type="date" value="2018-04-1" id="example-date-input">
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlMail">Date of Appointment </label>

                        <input class="form-control" type="date" value="2018-04-1" id="example-date-input">
                    </div>
					
                </form>

				<h2>Educational Qualification</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Degree </th>
                            <th>Board/Institute</th>
                            <th>Year</th>
                            <th>Division/CGPA</th>
                        </tr>
                    </thead>
                    <tbody><?php
					$sql="select degree,board,year,position from doctor where docId='$docId'";
$result = $conn->query($sql);
$i=0;
if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
		
 
                      echo   "<tr>
                            <td>$i</td>
                            <td>$row['degree']</td>
                            <td>$row['board']</td>
                            <td>$row['year']</td>
                            <td>$row['position']</td>               
                        </tr>";
						   }
	
}
						?>
                       
                    </tbody>
                </table>
                
                <br><br><br>
                <h2>Experience</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Job title</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Organization</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
					$sql="select jobTitle,Jfrom,Jto,org from doctor where docId='$docId'";
$result = $conn->query($sql);
$i=0;
if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
		
 
                      echo   "<tr>
                            <td>$i</td>
                            <td>$row['jobTitle']</td>
                            <td>$row['Jfrom']</td>
                            <td>$row['Jto']</td>
                            <td>$row['org']</td>               
                        </tr>";
						   }
	
}
						?>
                      
                    </tbody>
                </table>
				<div class="membership">
					<h3>Membership</h3>
 			     	<ul>
					  <li>BMA</li>
					  <li>British Medical Society</li>
					  <li>American Medical Society</li>
					  <li>Other</li>
					</ul> 
				<div>
            </div>

        </div>

    </div>




</body>

</html>