<!DOCTYPE html>
<html>
    <head>
    <script src="../Phpinterface_Toll/Shared/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../Phpinterface_Toll/Shared/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../Phpinterface_Toll/Shared/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../Phpinterface_Toll/Shared/js/bootstrap.min.js" ></script>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table class="table">
<h1><center><b>Insert Toll Plaza Data</center></h1>

<tr><td><font size="4"><b>Toll Name:<td><input type="text" class="form-control" name="txtname" placeholder="Enter Toll Plaza Name"required></tr><br>
<tr><td><font size="4"><b>Latitude:<td><input type="text" class="form-control" name="txtlat"   placeholder="Enter Latitude" required></tr><br>
<tr><td><font size="4"><b>Longitude:<td><input type="text" class="form-control" name="txtlong"  placeholder="Enter Longitude" required></tr><br>
<tr><td><font size="4"><b>HighWay Name:<td><input type="text" class="form-control" name="txthn" placeholder="Enter HighWay Name" required></tr><br>
<tr><td><font size="4"><b>Emegency Number:<td><input type="text" class="form-control" name="txten"  placeholder="Enter Emergency Number" ></tr><br>

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

    require '../Phpinterface_Toll/Shared/classTollPlaza.php';
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