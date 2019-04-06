<?php session_start();
$pn1=$_SESSION['pn1'];
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
$sql="select pid from patient where pn1='$pn1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        $pid=$row['pid'];
		
    }
	$_SESSION['pid']=$pid;
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
        <h2 class="text-center"> Patient initial Investigation Form</h2>

        <div class="row">

            <div class="col-sm-12">
                <form action="patInves.php" method='POST'>

                    <div class="form-group">
                        <label for="">Patient ID</label>
                        <input class="form-control" type="text" id="example-number-input" name="pid"  value="<?php echo $pid ?>" >

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlMail">Date of Admission <span style="color:red">*<span></label>

                        <input class="form-control" type="date" value="<?php echo $doa ?>" id="example-date-input" >
                    </div>


                    <div class="form-group">

                        <label for="exampleFormControlName">Your Name <span style="color:red">*<span></label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" name="" value="<?php echo $fName ?>"class="form-control required" ></div>
                            <div class="col-sm-4">
                                <input type="text" name="" value="<?php echo $mName ?>" class="form-control required" ></div>
                            <div class="col-sm-4">
                                <input type="text" name="" value="<?php echo $lName ?>" class="form-control required"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlMail">Date of Birth</label>

                        <input class="form-control" type="date" value="<?php echo $dob ?>" id="example-date-input" >
                    </div>

                    <h3>All above information will be printed for system</h3>


                    <div class="form-group">
                        <label for="exampleFormControlMail">Patient Personal Information</label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-6 row ">
                                <label for="">Height</label>
                                <input class="form-control" type="number" id="example-number-input" name="height">
                            </div>
                            <div class="col-sm-6 ">
                                <label for="">Weight</label>
                                <input class="form-control" type="number" id="example-number-input" name="weight">
                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <label for=""> Symptom of disease</label>
                        <input type="text"  class="form-control required margin" placeholder="1" name="sd1" value="kl">
                        <input type="text"  class="form-control required margin" placeholder="2" name="sd2">
                        <input type="text"  class="form-control required margin" placeholder="3"name="sd3">
                        <input type="text" class="form-control required margin" placeholder="4" name="sd4">
                        <input type="text"  class="form-control required margin" placeholder="5" name="sd5">
                        <input type="text"  class="form-control required margin" placeholder="6"name="sd6">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlMail">Blood Pressure</label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-6 row ">
                                <label for="">Lower</label>
                                <input class="form-control" type="number" id="example-number-input" name="Bplow">
                            </div>
                            <div class="col-sm-6 ">
                                <label for="">Higher</label>
                                <input class="form-control" type="number" id="example-number-input" name="Bphigh">
                            </div>

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="exampleFormControlName">General food habit </label>
                        <br>
                        <label for="">Breakfast</label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text"  class="form-control required" placeholder="1" name="bft1"></div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control required" placeholder="2" name="bft2"></div>
                            <div class="col-sm-4">
                                <input type="text"  class="form-control required" placeholder="3" name="bft3"></div>
                        </div>

                    </div>

                    <div class="form-group">

                        <label for="">Lunch</label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text"  class="form-control required" placeholder="1" name="l1"></div>
                            <div class="col-sm-4">
                                <input type="text"  class="form-control required" placeholder="2" name="l2"></div>
                            <div class="col-sm-4">
                                <input type="text"  class="form-control required" placeholder="3" name="l3"></div>
                        </div>

                    </div>

                    <div class="form-group">

                        <label for="">Dinner</label>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4 row">
                                <input type="text" class="form-control required" placeholder="1" name="d1"></div>
                            <div class="col-sm-4">
                                <input type="text"  class="form-control required" placeholder="2" name="d2"></div>
                            <div class="col-sm-4">
                                <input type="text"  class="form-control required" placeholder="3" name="d3"></div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="">Game</label> <br>
                        <label class="checkbox-inline"><input type="checkbox" value="Football" name="game[]">Football</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Cricket" name="game[]">Cricket</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Hockey" name="game[]">Hockey</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Volyball" name="game[]">Volyball</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Chess" name="game[]">Chess</label>
                        <label class="checkbox-inline"><input type="checkbox" value="All" name="game[]">All</label>
                        <label class="checkbox-inline"><input type="checkbox" value="None" name="game[]">None</label>
                    </div>

                    <div class="form-group">
                        <label for="">Others</label> <br>
                        <label class="checkbox-inline"><input type="checkbox" value="Tourism" name="hobby[]">Tourism</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Writing" name="hobby[]">Writing</label>

                    </div>

                    <div class="form-group">
                        <label for="">Disease Name</label>
                        <input type="text" class="form-control required" placeholder="Disease" name="dn">
                    </div>

                    <p>Signature with date</p>

                    <div class="form-group">
                        <label for="">Doctor id</label>
                        <input class="form-control" type="number" id="example-number-input" name="docId">
                    </div>

                    <div class="form-group">
                        <label for="">Name of the Doctor</label>
                        <input class="form-control" type="text" name="docName">
                    </div>

                    <div class="form-group">
                        <label for="">Designation</label>
                        <input class="form-control" type="text" name="desig">
                    </div>


                    <div class="form-group">
                        <input type="submit" name="submit" value="SAVE" class="form-control btn btn-primary">
                    </div>

                    <br><br>


                </form>
            </div>


        </div>
    </div>





</body>

</html>