<?php session_start();
$pid=$_SESSION['pid'];
$wn=$_SESSION['wardNo'];
$bn=$_SESSION['bedNo'];



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
		$doa=  $row["doa"];
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
$Pthana=$row["Pthana"];
$Pdist=$row["Pdist"];
$amount=$row["amount"];

$job=$row["job"];
$room=$row["room"];


}


}
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(50,10,"Paitaint Id",1,0);
$pdf->Cell(50,10,"{$pid}",1,1);
$pdf->Cell(50,10,"",0,1);

$pdf->Cell(50,10,"First Name",1,0);
$pdf->Cell(50,10,"{$fName}",1,0);

$pdf->Cell(50,10,"Middle Name",1,0);
$pdf->Cell(40,10,"{$mName}",1,1);

$pdf->Cell(50,10,"Last Name",1,0);
$pdf->Cell(50,10,"{$lName}",1,1);
$pdf->Cell(50,10,"",0,1);
$pdf->Cell(50,10,"Phone Number 1:",1,0);
$pdf->Cell(50,10,"{$pn1}",1,0);
$pdf->Cell(50,10,"Phone Number 2:",1,0);
$pdf->Cell(40,10,"{$pn2}",1,1);

$pdf->Cell(50,10,"Date of birth",1,0);
$pdf->Cell(50,10,"{$dob}",1,1);
$pdf->Cell(50,10,"",0,1);
$pdf->Cell(0,10,"Present Address:",1,1);
$pdf->Cell(50,10,"Street:",1,0);
$pdf->Cell(50,10,"{$streetNo}",1,0);
$pdf->Cell(50,10,"Street Name:",1,0);
$pdf->Cell(40,10,"{$streetName}",1,1);

$pdf->Cell(50,10,"Area:",1,0);
$pdf->Cell(50,10,"{$area}",1,0);
$pdf->Cell(50,10,"Thana:",1,0);
$pdf->Cell(40,10,"{$streetNo}",1,1);
$pdf->Cell(50,10,"District:",1,0);
$pdf->Cell(50,10,"{$streetNo}",1,1);
$pdf->Cell(50,10,"",0,1);
$pdf->Cell(0,10,"Permanent Address:",1,1);
$pdf->Cell(50,10,"Street:",1,0);
$pdf->Cell(50,10,"{$PstreetNo}",1,0);
$pdf->Cell(50,10,"Street Name:",1,0);
$pdf->Cell(40,10,"{$PstreetName}",1,1);
$pdf->Cell(50,10,"Area:",1,0);
$pdf->Cell(50,10,"{$Parea}",1,0);
$pdf->Cell(50,10,"Thana:",1,0);
$pdf->Cell(40,10,"{$Pthana}",1,1);
$pdf->Cell(50,10,"District:",1,0);
$pdf->Cell(50,10,"{$Pdist}",1,1);
$pdf->Cell(50,10,"",0,1);
$pdf->Cell(40,10,"Job:",1,0);
$pdf->Cell(40,10,"{$job}",1,0);

$pdf->Cell(40,10,"Ward No",1,0);
$pdf->Cell(40,10,"{$wn}",1,1);
$pdf->Cell(40,10,"Bed No",1,0);
$pdf->Cell(40,10,"{$bn}",1,1);
$pdf->Cell(50,10,"",0,1);
$pdf->Cell(80,10,"Amount Deposited: ",1,0);
$pdf->Cell(80,10,"{$amount}",1,1);


$pdf->output();
$str="<script type='text/javascript'> window.location.replace('http://localhost/wardInfo.php');</script>";
    echo($str);
?>

