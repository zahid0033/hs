<!--
    Hello there
-->
<?php session_start();
$wardId=$_SESSION['wardNo'];
$bedNum=$_SESSION['bedNo'];
$regId=$wardId;

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
$sql="select * from ward where wId=$wardId";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
		 $wId=$row["wId"];
		  $wardName=$row["wardName"];
		  $bedType=$row["bedType"];
          $regId=$row["regiId"];
		  $regName=$row["Name"];
		  $nusName=$row["nusName"];
		  $bedNo=$row["bedNo"];
		  $nid=$row["nusId"];
		   $rent=$row["rent"];
		    $status=$row["status"];
		  
    }
	
}
$sql="select fName,mName,lName from docInfo where docId=$regId";
$sql2="select fName,mName,lName from nurse where nId=$nid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
		$docName=$row['fName']." ".$row['mName']." ".$row['lName'];
	}
}

$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
		$nusName=$row['fName']." ".$row['mName']." ".$row['lName'];
	}
}
$_SESSION['docId']=$regId;
$_SESSION['nusId']=$nid;
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ward Information</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
<script>
function Doctor() {
    window.location.replace('http://localhost/doctorInfo.php');
}
function Nurse()
{
	window.location.replace('http://localhost/nurseIn.php')
}
</script>
</head>

<body>

    <div class="container back">
        <h2 class="text-center">Ward Information Form</h2>

        <div class="row">
            <div class="col-sm-12">
                <form action="medicineEntry.php" method="POST">
					<div class="form-group">
                        <label for="">Ward ID</label>
                        <input class="form-control" type="number" id="example-number-input" value="<?php echo $wId?>">
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlName">Ward Name <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="" class="form-control required" value="<?php echo $wardName?>">
							</div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlName">Registrar Id  <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="rid" value="<?php echo $regId?>"class="form-control required" placeholder="id"></div>
                            <div class="col-sm-4">
                                <input type="text" name="" value="<?php echo $docName?>"class="form-control required" placeholder="name"></div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlName">Nurse Supervisor Id  <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="nid" value="<?php echo $nid?>" class="form-control required" placeholder="id"></div>
                            <div class="col-sm-4">
                                <input type="text" name="nusName" value="<?php echo $nusName?>"class="form-control required" placeholder="name"></div>
                        </div>
                    </div>
			
				<br><br>
				<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Bed No.</th>
                            <th>Bed type</th>
                            <th>Rent</th>
                            <th>Status(Empty/ occupied)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td><input type="text" name="bedNo" value="<?php echo $bedNum?>" class="form-control required" ></td>
                            <td><input type="text" name="bedType" value="<?php echo $bedType?>" class="form-control required" ></td>
                            <td><input type="text" name="rent" value="<?php echo $rent?>"class="form-control required" ></td>
                            <td><input type="text" name="status" value="<?php echo $status?>" class="form-control required" ></td>               
                        </tr>
                        <tr>
                           <td>02</td>
                            <td><input type="text" name="bedNo" class="form-control required" ></td>
                            <td><input type="text" name="bedType" class="form-control required" ></td>
                            <td><input type="text" name="rent" class="form-control required" ></td>
                            <td><input type="text" name="status" class="form-control required" ></td>  
                        </tr>
					
                     			
				
					 </tbody>
            </div>
        </div>

    </div>
		            <div class="form-group">
                        <input type="submit" name="submit" value="SAVE" class="form-control btn btn-primary">
                    </div>
						</form>						
					<div class="form-group">
                        <input type="submit" name="docInfo" value="Doctor Information" onclick="Doctor()" class="form-control btn btn-primary">
                    </div>
					<div class="form-group">
                        <input type="submit" name="nusInfo" value="Nurse Information" onclick="Nurse()" class="form-control btn btn-primary">
                    </div>
	
</body>

</html>