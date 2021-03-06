<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "cusdetails");  
      $sql = "SELECT * FROM emp";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["Employee_ID"].'</td>  
                          <td>'.$row["Employee_Name"].'</td>  
					<td>'.$row["NIC"].'</td>  
                          <td>'.$row["Address"].'</td> 
                          <td>'.$row["Gender"].'</td>			
                          <td>'.$row["Telephone_No"].'</td>
                          <td>'.$row["Email"].'</td>						  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 function fetch_attendance()  
 {  
      $output1 = '';  
      $conn = mysqli_connect("localhost", "root", "", "cusdetails");  
      $sql = "SELECT * FROM attendance";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output1 .= '<tr>  
                          <td>'.$row["Emp_ID"].'</td>  
                          <td>'.$row["Name"].'</td>  
				      <td>'.$row["Date"].'</td>  
                          <td>'.$row["Status"].'</td> 
                          <td>'.$row["Work_type"].'</td>			
                          					  
                     </tr>  
                          ';  
      }  
      return $output1;
     }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Employee Details");  
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
      <h4 align="center">Employee Details</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="10%">ID</th> 
                <th width="15%">Name</th> 				
                <th width="15%">NIC</th>  
                <th width="15%">Address</th>
                <th width="10%">Gender</th>  
				<th width="15%">Phone</th>
				<th width="20%">Email</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('employeedetails.pdf', 'I');  
 }  
 if(isset($_POST["generate_attendance"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Employee Attendance");  
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
      <h4 align="center">Employee Attendance</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="10%">ID</th> 
                <th width="15%">Name</th> 				
                <th width="15%">Date</th>  
                <th width="15%">Status</th>
                <th width="10%">Work Type</th>  
				
           </tr>  
      ';  
      $content .= fetch_attendance();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('employeeattendance.pdf', 'I');  
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
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/css/Print1.css">

</head>
<body>

<?php include('../../public/includes/header.php') ?>


  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a  href="MarkAttendance.php">Mark Attendance</a></li>
		   <li><a href="ManageAttendance.php">Manage Attendance</a></li>

		  <li><a class="active" href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form method="POST">
		    <label for="Rname">Click to download your detail reports:</label>
		    <br><br>
		  
		  	 <div class="center">
    	<input type="submit" name="generate_pdf" value="Employee Details">
     <input type="submit" name="generate_attendance" value="Employee Attendance">
  </div>
		  
			 
		 </form>
  	</div>
</div>

  
</body>
</html>