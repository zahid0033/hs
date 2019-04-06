<?php session_start();
$pid=$_SESSION['pid'];
$docId=$_SESSION['docId'];

$bedNo=$_POST['bedNo'];
$wardNo=$_POST['wardNo'];
$date = new DateTime($_POST['dateOA']);
$dateOA = $date->format('d-m-Y');
$date = new DateTime();
$time =date('r',strtotime((string)$_POST['time']));

$slNo=$_POST['slNo'];
$mId=$_POST['mId'];
$quantity=$_POST['quantity']; 
$perDay=$_POST['perDay']; 
$morning=$_POST['morning']; 
$noon=$_POST['noon'];
$evening=$_POST['evening'];


$slNo2=$_POST['slNo2'];
$mId2=$_POST['mId2'];
$quantity2=$_POST['quantity2']; 
$perDay2=$_POST['perDay2']; 
$morning2=$_POST['morning2']; 
$noon2=$_POST['noon2'];
$evening2=$_POST['evening2'];

$test1=$_POST['test1'];
$test2=$_POST['test2'];


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

$sql = "INSERT INTO specaladvice (pid,docId,bedNo,wardNo,slNo,mId,quantity,perDay,morning,noon,evening,testId,AdmitDate )
VALUES ('$pid','$docId','$bedNo', '$wardNo','$slNo' ,'$mId','$quantity','$perDay','$morning','$noon','$evening','$test2','$time')";

$_SESSION['docId']=$docId;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO specaladvice (pid,docId,bedNo,wardNo,slNo,mId,quantity,perDay,morning,noon,evening,testId,AdmitDate )
VALUES ('$pid','$docId','$bedNo', '$wardNo','$slNo2' ,'$mId2','$quantity2','$perDay2','$morning2','$noon2','$evening2','$test2','$time')";

$_SESSION['docId']=$docId;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
$_SESSION['wardNo']=$wardNo;
$_SESSION['bedNo']=$bedNo;
$str="<script type='text/javascript'> window.location.replace('http://localhost/wardInfo.php');</script>";
    echo($str);

?>