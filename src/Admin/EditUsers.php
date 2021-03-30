<?php include('../../config/connection.php') ?>
<?php include('../../public/includes/session.php') ?>

<?php
    error_reporting(E_ALL & ~E_NOTICE);
	//Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'a'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:../login.php?msg=' . $message);
       exit();
       }

?>



<!DOCTYPE html>
<html>
    
<head>
    <title>Admin </title>
    <link rel="stylesheet" type="text/css" href="../../public/css/editAdminstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
    
<body>
    
    
<?php include('header.php') ?> 
    <hr>
    <div class="row-50"> 
        <h1 class="div-c">Edit Users</h1>
    </div>
   
    <?php
    
        echo "<table  border='1' class=\"user\" style='background-color:#FFFFFF;border-collapse:collapse;border:2px solid #6699FF;color:#000000;width:400'> 
                <tr style = 'background-color:#66b3ff;'>
                    <th>User id</th>
                    <th>User type</th>
                    <th>User name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Edit </th>
                    <th>Delete </th>
                </tr>";
        $allus = "SELECT * FROM users";
        $userquery = mysqli_query($conn,$allus);
        while($row = mysqli_fetch_assoc($userquery)){

            if($row['usertype']=='a'){
                    $type= "Admin";
                }
                elseif($row['usertype']=='s'){
                    $type="Stock Manager";
                }
                else{
                    $type="Accountant";
                }
            echo "<tr>
                <td>".$row['userID']."</td>
                <td>".$type."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['contact']."</td> "?> 

                <td><a href="#?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil" style="font-size:25px;color:blue"></i></a></td>
				<td><a href="3?id=<?php echo $row["id"]; ?>"><i class="fa fa-trash" style="font-size:25px;color:red"></i></a></td>
                <?php "
                </tr>";

        } 

         echo "</table>";

         ?>


    
    
</body>
    
</html>