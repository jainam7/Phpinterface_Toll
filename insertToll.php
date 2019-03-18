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
<h1><center><b><u>Insert Toll Data</center></h1>
<tr><td><font size="4"><b>Toll Plaza Id :<td><label class="sr-only" for="form-mobile-no"> </label>
											
<select class="form-control"placeholder="Toll Plaza Id" name="tpid" >
											<option value=""disabled selected>Select Toll Plaza Id</option>
                                            <?php
                                            require '../Phpinterface_Toll/Shared/classTollPlaza.php';
                                            $conn=new toll_plaza;
                                            $result=$conn-> select_all();
                                             if ($result->num_rows > 0)
                                             {
                                                 while($row = $result->fetch_assoc())
                                                 {
                                                     $_tid=$row["toll_plaza_id"];
                                                     echo  '<option value="'.$row["toll_plaza_id"].'">' . $row["toll_name"] . '</option>' . "\n";
                                                 }
                                             
                                                 echo '</select>';
                                              }
                                            ?>
  								 </select>	
                                </td>
                                </tr>
                                <tr><td><font size="4"><b>2 wheel One:<td><input type="text" class="form-control" name="txt2w" placeholder="Enter 2 Wheel Prize"required>
                                <td><font size="4"><b>Return:<td><input type="text" class="form-control" name="txt2wr" placeholder="Enter 2 Wheel Prize With Return"></td>
                                </tr><br>
                                <tr><td><font size="4"><b>4 wheel One:<td><input type="text" class="form-control" name="txt4w" placeholder="Enter 4 Wheel Prize"required>
                                <td><font size="4"><b>Return:<td><input type="text" class="form-control" name="txt4wr" placeholder="Enter 4 Wheel Prize With Return"required></td>
                                </tr><br>
                                <tr><td><font size="4"><b>6 wheel One:<td><input type="text" class="form-control" name="txt6w" placeholder="Enter 6 Wheel Prize"required>
                                <td><font size="4"><b>Return:<td><input type="text" class="form-control" name="txt6wr" placeholder="Enter 6 Wheel Prize With Return"required></td>
                                </tr><br>
                                <tr><td><font size="4"><b>Bus One:<td><input type="text" class="form-control" name="txtb" placeholder="Enter Bus Prize  "required>
                                <td><font size="4"><b>Return:<td><input type="text" class="form-control" name="txtbr" placeholder="Enter Bus Prize With Return"required></td>
                                </tr><br>
                                <tr><td><font size="4"><b>truck One:<td><input type="text" class="form-control" name="txttr" placeholder="Enter Truck Prize "required>
                                <td><font size="4"><b>Return:<td><input type="text" class="form-control" name="txttre" placeholder="Enter Truck Prize With Return"required></td>
                                </tr><br>
                                <tr><td><font size="4"><b>HCM One:<td><input type="text" class="form-control" name="txth" placeholder="Enter HCM Prize "required>
                                <td><font size="4"><b>Return:<td><input type="text" class="form-control" name="txthr" placeholder="Enter HCM Prize With Return"required></td>
                                </tr><br>
</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>
<?php
 $_tpid="";
 $_tw="";
 $_twr="";
 $_fw="";
 $_fwr="";
 $_sw="";
 $_swr="";
 $_bus="";
 $_busr="";
 $_truck="";
 $_truckr="";
 $_hcm="";
 $_hcmr="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_tpid=$_POST["tpid"];
    $_tw=$_POST["txt2w"];
    $_twr=$_POST["txt2wr"];
    $_fw=$_POST["txt4w"];
    $_fwr=$_POST["txt4wr"];
    $_sw=$_POST["txt6w"];
    $_swr=$_POST["txt6wr"];
    $_bus=$_POST["txtb"];
    $_busr=$_POST["txtbr"];
    $_truck=$_POST["txttr"];
    $_truckr=$_POST["txttre"];
    $_hcm=$_POST["txth"];
    $_hcmr=$_POST["txthr"];


    require '../Phpinterface_Toll/Shared/classToll.php';
    $conn=new toll;
    $result=$conn->insert($_tpid,$_tw,$_fw,$_sw,$_bus,$_truck,$_hcm,$_twr,$_fwr,$_swr,$_busr,$_truckr,$_hcmr);
    $result;
    if($result===true)
    {
        echo "Done";
       
    }
    else
    {
        
        echo " Not Successfully Insert";
        //header('location:../web/index.php');
    }

}
?>
</body>
</html>