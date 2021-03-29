<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "cusdetails");  
      $sql = "SELECT * FROM sorders";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["orderdate"].'</td>  
                          <td>'.$row["suppliername"].'</td>  
                          <td>'.$row["numofunits"].'</td> 
                          <td>'.$row["arrivingdate"].'</td>	
                          <td>'.$row["totalprice"].'</td>	
                          
						  

                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Supplier Order Details");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">Supplier Order Details</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="20%">Order Date</th>  
                <th width="20%">Supplier Name</th>  
                <th width="20%">No.of Units</th>  
				<th width="20%">Arriving Date</th> 
                <th width="20%">Price</th>  
				
				


           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('supplierorder_details.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>
<html lang="en">
<head>
<style>
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);}
  </style>
<title>Supplier Order Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/Print.css">

</head>
<body>

<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddSupOrder.php">Add Supplier Order</a></li>
		  <li><a href="ViewSupOrder.php">View Supplier Order</a></li>
		  <li><a href="ManageSupOrder.php">Manage Supplier Order</a></li>
		  <li><a class="active" href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form method="POST">
		    <label for="Rname">Click to download your detail report:</label>
		    <br><br>
		  
		  	 <div class="center">
    	<input type="submit" name="generate_pdf" value="Download">
  </div>
		  
			 
		 </form>
  	</div>
</div>

  
</body>
</html>