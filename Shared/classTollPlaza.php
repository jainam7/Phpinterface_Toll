<?php
class toll_plaza
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
        $cnn=toll_plaza::connect();
        $q="select * from toll_plaza";
        $result=$cnn->query($q);
        return $result;
        toll_plaza::disconnect();
    }
    public function select_id()
    {
        $cnn=toll_plaza::connect();
        $q="select toll_plaza_id from toll_plaza";
        $result=$cnn->query($q);
        return $result;
        toll_plaza::disconnect();
    }
  
  public function insert($_Tname,$_lat,$_long,$_hn,$_en)
       {
           $cnn=toll_plaza::connect();
           $q="insert into toll_plaza values ('". null ."','". $_Tname ."','". $_lat ."','". $_long ."','". $_hn ."','". $_en ."')";
           $result=$cnn->query($q);
           return $result;
           toll_plaza::disconnect();
   
       }
          
        
}
?>