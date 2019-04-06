<?php session_start();
$pid=$_SESSION['pid'];
$sql="select mId,quantity from specaladvice where pid=$pid";

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

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$i=0;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // outpu t data of each row
    while($row = $result->fetch_assoc()) {
	      $mNo[$i]=$row['mId'];
		  $qNo[$i]=$row['quantity'];
		  $i+=1;
 	}
	}
	$j=0;
	echo $mNo[0];
	
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medicine Entry</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container back">
        <h2 class="text-center">Medicine Entry Form</h2>

        <div class="row">
            <div class="col-sm-12">
                <form action="printMedicine.php" method="POST">
					<div class="form-group">
                        <label for="exampleFormControlName">Supplier ID  <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="sid" class="form-control required" placeholder="id"></div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlName">Supplier Name  <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="sName" class="form-control required" placeholder="name"></div>
                        </div>
					</div>
					<div class="form-group">
                        <label for="exampleFormControlMail">Date of Supply </label>

                        <input class="form-control" type="date" name="dos" id="example-date-input">
                    </div>
				
				<br><br>
				<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Medicine Id</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Unit price</th>
                            <th>Quantity</th>
							<th>Date of Manufacture</th>
							<th>Expiry date</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($mNo as $value)
	{
		
	                 $sql="select name,type,unitPrice,mfc,exr from medicine where id=$value";
	                   $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                    // outpu t data of each row
                     while($row = $result->fetch_assoc()) {
	                                          $name[$j]=$row['name'];
		                                     $type[$j]=$row['type'];
		                                    $up[$j]=$row['unitPrice'];
		                                    $mfc[$j]=$row['mfc'];
		                                     $exr[$j]=$row['exr'];
		                                    $mid[$j]=$value;
											echo "<tr>
                            <td> <input type=\"text\" name=\"mid\" value=".$mid[$j]."class=\"form-control required\"></div></td>
                            <td> <input type=\"text\" name=\"name\" value=". $name[$j]." class=\"form-control required\" ></div></td>
                            <td> <input type=\"text\" name=\"type\" value=". $type[$j]." class=\"form-control required\" ></div></td>
                            <td> <input type=\"text\" name=\"up\" value=".$up[$j]." class=\"form-control required\" ></div></td>
                            <td> <input type=\"text\" name=\"q\" value=".$qNo[$j]." class=\"form-control required\" ></div></td>  
							<td> <input type=\"text\" name=\"mfc\" value=".$mfc[$j]." class=\"form-control required\" ></div></td>
                            <td> <input type=\"text\" name=\"exr\" value=". $exr[$j]." class=\"form-control required\"></div></td>  
							
                        </tr>";
											
											
                         $j+=1;		
												
 	                            }
	                       }
	   
	                   }
                        
						?>
                        
						
                    </tbody>
            </div>
        </div>

    </div>
	<div class="form-group">
                        <input type="submit" name="submit" value="SAVE" class="form-control btn btn-primary">
                    </div>
					</form>
</body>

</html>