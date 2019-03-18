<!DOCTYPE html>
<html>
    <head>
    <script src="../GpsToll_PhpInterFace/Shared/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../GpsToll_PhpInterFace/Shared/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../GpsToll_PhpInterFace/Shared/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../GpsToll_PhpInterFace/Shared/js/bootstrap.min.js" ></script>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table class="table">
<h1><center><b>Insert Toll Plaza Data</center></h1>

<tr><td><font size="4"><b>Toll Plaza Id:<td><input type="text" class="form-control" name="txtname" placeholder="Enter Toll Plaza Name"required></tr><br>
<tr><td><font size="4"><b>Enter Vehicle Type :<td><label class="sr-only" for="form-mobile-no">Blood Group </label>
											
											<select placeholder="Blood Group" name="bgrp" >
											<option value=""disabled selected>Select your Blood Group</option>
 								 <option value="O+">O+</option>
  								 <option value="O-">O-</option>
                                 <option value="A+">A+</option>
                                 <option value="A-">A-</option>
								 <option value="B+">B+</option>
								 <option value="B-">B-</option>
								 <option value="AB+">AB+</option>
								 <option value="AB-">AB-</option>
                                </select>	
                                </td>
                                </tr>
</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php

$_Tname="";
$_lat="";
$_long="";
$_hn="";
$_en="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_Tname=$_POST["txtname"];
    $_lat=$_POST["txtlat"];
    $_long=$_POST["txtlong"];
    $_hn=$_POST["txthn"];
    $_en=$_POST["txten"];

    require '../GpsToll_PhpInterFace/Shared/classTollPlaza.php';
    $conn=new toll_plaza;
    $result=$conn->insert($_Tname,$_lat,$_long,$_hn,$_en);
    

    if($result===true)
    {
        echo "Done";
         //header('location:Toll.php');
    }
    else
    {
        echo $sql;
        echo " Not Successfully Insert";
        header('location:../web/index.php');
    }

}
?>
</body>
</html>