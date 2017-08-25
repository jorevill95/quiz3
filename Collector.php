<?php
include_once('dataBase.php'); //Incluye la base

// Define configuration
define("DB_HOST", "ec2-174-129-218-106.compute-1.amazonaws.com");
define("DB_USER", "hxcfzdkbqbohvc");
define("DB_PASS", "39494f640a60c51690fc9ef199b158759dd632369c989e615dda594a13717c4c");
define("DB_NAME", "d8iml79r188c7c");


class Collector extends dataBase
{
  public static $db; //Es una sola instancia
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
