<?php session_start();
$pid=$_SESSION['pid'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$sd1=$_POST['sd1'];
$sd2=$_POST['sd2'];
$sd3=$_POST['sd3'];
$sd4=$_POST['sd4'];
$sd5=$_POST['sd5'];
$sd6=$_POST['sd6'];
$Bplow=$_POST['Bplow'];
$Bphigh=$_POST['Bphigh'];
$bft1=$_POST['bft1'];
$bft2=$_POST['bft2'];
$bft3=$_POST['bft3'];
$l1=$_POST['l1'];
$l2=$_POST['l2'];
$l3=$_POST['l3'];
$d1=$_POST['d1'];
$d2=$_POST['d2'];
$d3=$_POST['d3'];
if(!empty($_POST['game']))
	foreach ($_POST['game'] as $value) {
		$game=$value;
		# code...
	}
if(!empty($_POST['hobby']))
	foreach ($_POST['hobby'] as $value) {
		$hobby=$value;
		# code...
	}
$dn=$_POST['dn'];
$docId=$_POST['docId'];
$docName=$_POST['docName'];
$desig=$_POST['desig'];




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

$sql = "INSERT INTO patientinv (pid,height,weight, sd1, sd2,sd3,sd4,sd5,sd6,break1,break2,break3,lunch1,lunch2,lunch3,dinner1,dinner2,dinner3,bpLow,bpHigh,game,hobby,diseaName,docId,docName,designation)
VALUES ('$pid','$height','$weight', '$sd1','$sd2' ,'$sd3','$sd4','$sd5','$sd6','$bft1','$bft2','$bft3','$l1','$l2','$l3','$d1','$d2','$d3','$Bplow','$Bphigh','$game','$hobby','$dn','$docId','$docName','$desig')";

$_SESSION['docId']=$docId;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$str="<script type='text/javascript'> window.location.replace('http://localhost/medicalAdvice.php');</script>";
    echo($str);
?>