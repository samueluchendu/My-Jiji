<?php  


class Db_connection{

   private static $servername = "localhost";
   private static $username = "root";
   private static  $password = "";
   private  static $dbName = "jiji";
   public static  $conn = "";

  //  public function __construct(){

  //   return $this->connection();
     
  //  }

   public static function connection(){

    self::$conn = mysqli_connect(self::$servername, self::$username, self::$password, self::$dbName);

    //Check connection
    if (!self::$conn) {

      die("Connection failed: " . mysqli_connect_error());
    }
       return self::$conn;

   }



}













?>