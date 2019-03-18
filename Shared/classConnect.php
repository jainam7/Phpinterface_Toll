<?php
class connect_tab
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
        $cnn=connect_tab::connect();
        $q="select * from connect_tbl";
        $result=$cnn->query($q);
        return $result;
        connect_tab::disconnect();
    }
  
  public function insert($_ftpid,$_ttpid)
       {
           $cnn=connect_tab::connect();
           $q="insert into connect_tbl values ('". $_ftpid ."','". $_ttpid ."')";
           echo $q;
           $result=$cnn->query($q);
           return $result;
           connect_tab::disconnect();
   
       }
          
        
}
?>