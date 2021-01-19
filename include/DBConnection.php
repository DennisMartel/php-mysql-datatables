<?php
include "constants.php";
// Parametros de conexion
class DBConnection {
    protected $host = DB_SERVER;
    protected $dbname = DB_DATABASE;
    protected $user = DB_USERNAME;
    protected $pass = DB_PASSWORD;
    protected $_db;

    function __construct() {

        try {

            $this->_db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    // Conexión de retorno
    function returnConnection() {
		return $this->_db;
	}

	// Cerramos la conexion
    public function closeConnection() {
        $this->_db = null;
    }
}

