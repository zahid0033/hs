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

	
$supplie=$_POST['sid'];
$sName=$_POST['sName'];
$dos=$_POST['dos'];
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);


$pdf->Cell(0,10,"Medicine Bill",1,1);
$pdf->Cell(40,10,"Supplie Id",1,0);
$pdf->Cell(40,10,"{$supplie}",1,0);

$pdf->Cell(40,10,"Supplie Name",1,0);
$pdf->Cell(40,10,"{$sName}",1,1);

$pdf->Cell(40,10,"Person Id",1,0);
$pdf->Cell(40,10,"{$pid}",1,1);

$pdf->Cell(40,10,"",0,1);
$pdf->Cell(40,10,"",0,1);

$pdf->Cell(40,10,"Medicine id:",1,0);
$pdf->Cell(40,10,"Name:",1,0);
$pdf->Cell(40,10,"Unite Price:",1,0);
$pdf->Cell(40,10,"Quantity:",1,0);
$pdf->Cell(30,10,"Total",1,1);
$total=0;
foreach($mNo as $value)
	{
		
	                 $sql="select name,type,unitPrice,mfc,exr from medicine where id=$value";
	                   $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                    // outpu t data of each row
                     while($row = $result->fetch_assoc()) {
	                                          $name=$row['name'];
		                                     $type[$j]=$row['type'];
		                                    $up=$row['unitPrice'];
		                                    $mfc[$j]=$row['mfc'];
		                                     $exr[$j]=$row['exr'];
		                                    $mid[$j]=$value;
											$pdf->Cell(40,10,"{$value}",1,0);
								$pdf->Cell(40,10,"{$name}",1,0);			
$pdf->Cell(40,10,"{$up}",1,0);
$pdf->Cell(40,10,"{$qNo[$j]}",1,0);
$val=$up*$qNo[$j];
$total+=$val;
$pdf->Cell(30,10,"{$val}",1,1);
					 }
						}
	}
	$pdf->Cell(50,10,"",1,0);
	$pdf->Cell(50,10,"",1,0);
	$pdf->Cell(60,10,"Total Bill",1,0);
$pdf->Cell(30,10,"{$total}",1,0);
$pdf->output();
?>