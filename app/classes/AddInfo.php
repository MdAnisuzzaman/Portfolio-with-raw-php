<?php 
namespace App\classes;
class AddInfo {

    public $dbHost,$dbUser,$dbPass,$dbName,$connection;

    public function __construct()
    {
      $this->dbHost = 'localhost';
      $this->dbUser = 'root';
      $this->dbPass = '';
      $this->dbName = 'portfolio';

    }
    
    public function dbConnect(){
        $this->connection = mysqli_connect($this->dbHost, $this->dbUser,$this->dbPass,$this->dbName );
        return $this->connection;
    }

}