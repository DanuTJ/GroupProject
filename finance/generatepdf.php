<?php
/*include connection file 
include_once("conforpdf.php");
include_once('libs/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    
   
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Employee List',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('customername'=>'Name', 'type'=> 'Type', 'phoneno'=> 'Phone','email'=> 'Email',);

$result = mysqli_query($connString, "SELECT customername, type, phoneno, email FROM details") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM details");

$pdf = new PDF();
//header
$pdf->AddPage();
//footer page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>*/

<?php
$con = mysqli_connect("localhost","root"," ","cusdetails");
require('libs/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
 
$pdf->SetFont('Arial','B',12);	
$ret ="SELECT customername,type,phoneno,email FROM INFORMATION_SCHEMA.COLUMNS 
WHERE `TABLE_SCHEMA`='cusdetails' AND `TABLE_NAME`='details'";
$query1 = $con -> prepare($ret);
$query1->execute();
$header=$query1->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query1->rowCount() > 0)
{
foreach($header as $heading) {
foreach($heading as $column_heading)
$pdf->Cell(39,12,$column_heading,1);
}}
//code for print data
$sql = "SELECT * from  details";
$query = $con -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) {
$pdf->SetFont('Arial','',7);	
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(39,7,$column,1);
} }
$pdf->Output();
?>