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
  
  public function insert($_Tname,$_lat,$_long,$_hn,$_en)
       {
           $cnn=toll::connect();
           $q="insert into toll values ('". null ."','". $_Tname ."','". $_lat ."','". $_long ."','". $_hn ."','". $_en ."')";
           $result=$cnn->query($q);
           return $result;
           toll::disconnect();
   
       }
          
        
}
?>