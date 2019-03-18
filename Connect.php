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
<?php
 require '../Phpinterface_Toll/Shared/classTollPlaza.php';
 $conn=new toll_plaza;
 $result=$conn-> select_id();
 $res1=$conn->select_id();
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table class="table">
<h1><center><b><u>Insert In Connect Table</center></h1>
<tr><td><font size="4"><b>From :<td><label class="sr-only" for="form-mobile-no"> </label>
<select class="form-control"placeholder="Toll Plaza Id" name="ftpid" >
											<option value=""disabled selected>Select Toll Plaza Id</option>
                                            <?php
                                             if ($result->num_rows > 0)
                                             {
                                                 while($row = $result->fetch_assoc())
                                                 {
                                                     $ftid=$row["toll_plaza_id"];
                                                     
                                                   echo  '<option>' . $row["toll_plaza_id"] . '</option>' . "\n";
                                                 }
                                                 
                                             
                                                
                                              }
                                            ?>

                                            	 </select>	
                                </td>
                                </tr>

                                <tr><td><font size="4"><b>To:<td><label class="sr-only" for="form-mobile-no"> </label>
<select class="form-control"placeholder="Toll Plaza Id" name="ttpid" >
											<option value=""disabled selected>Select Toll Plaza Id</option>
                                            <?php
                                             if ($res1->num_rows > 0)
                                             {
                                                 while($row1= $res1->fetch_assoc())
                                                 {
                                                     $ttpid=$row1["toll_plaza_id"];
                                                     
                                                   echo  '<option>' . $row1["toll_plaza_id"] . '</option>' . "\n";
                                                 }
                                                 
                                             
                                                
                                              }
                                            ?>

                                            	 </select>	
                                </td>
                                </tr>

                                </tr><br></table>
                                
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>
<?php
 $_ftpid="";
 $_ttpid="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     $_ftpid=$_POST["ftpid"];
     $_ttpid=$_POST["ttpid"];
 
 require '../Phpinterface_Toll/Shared/classConnect.php';
 $conn=new connect_tab;
 $result=$conn->insert($_ftpid,$_ttpid);
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