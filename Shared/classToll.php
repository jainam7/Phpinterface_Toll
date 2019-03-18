<?php
class toll
{
   
    private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","toll_collection");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
    public function select_all()
    {
        $cnn=toll::connect();
        $q="select * from toll";
        $result=$cnn->query($q);
        return $result;
        toll::disconnect();
    }
  
  public function insert($_tpid,$_tw,$_fw,$_sw,$_bus,$_truck,$_hcm,$_twr,$_fwr,$_swr,$_busr,$_truckr,$_hcmr)
       {
           $cnn=toll::connect();
           $q="insert into toll values ('". null ."','". $_tpid ."','". $_tw ."','". $_fw ."','". $_sw ."','". $_bus ."','". $_truck  ."','". $_hcm ."','". $_twr ."','". $_fwr ."','". $_swr ."','". $_busr ."','". $_truckr  ."','". $_hcmr ."')";
           echo $q;
           $result=$cnn->query($q);
           return $result;
           toll::disconnect();
   
       }
          
        
}
?>