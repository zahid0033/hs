<?php session_start();
$_SESSION['pn1']=$_POST['pn1'];
$doa=  $_POST["doa"];
$fName=$_POST["fName"];
$mName=$_POST["mName"];
$lName=$_POST["lName"];
$dob=$_POST["dob"];
$pn1=$_POST["pn1"];
$pn2=$_POST["pn2"];
$streetNo=$_POST["PstreetNo"];
$streetName=$_POST["Pstreet"];
$area=$_POST["Parea"];
$thana=$_POST["Pthana"];
$dist=$_POST["Pdist"];

$PstreetNo=$_POST["streetNo"];
$PstreetName=$_POST["street"];
$Parea=$_POST["area"];
$Pthana=$_POST["thana"];
$Pdist=$_POST["dist"];
$amount=$_POST['amount'];
if(!empty($_POST['job']))
	foreach ($_POST['job'] as $value) {
		$job=$value;
		# code...
	}
if(!empty($_POST['room']))
	foreach ($_POST['room'] as  $value) {
		$room=$value;
		# code...
	}
$name=$fName." ".$mName." ".$lName;


echo $name;



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

$sql = "INSERT INTO patient (fName,mName,lName, doa,dob,pn1,pn2,streetNo,streetName,area,thana,dist,PstreetNo,PstreetName,Parea,Pthana,Pdist,amount,job,room)
VALUES ('$fName','$mName','$lName', '$doa','$dob','$pn1','$pn2',$streetNo,'$streetName','$area','$thana','$dist','$PstreetNo','$PstreetName','$Parea','$Pthana','$Pdist','$amount','$job','$room')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql="select pid from patient where pn1='$pn1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          $_SESSION['pid']=$row["pid"];
    }
}

$conn->close();
$str="<script type='text/javascript'> window.location.replace('http://localhost/pat_ini_inves.php');</script>";
    echo($str);

?>