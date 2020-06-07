<?php
   /**
   * @  PDO DATABASE CLASS, Connects Database Using PDO, Creates Prepeared Statements, Binds params to values, Returns rows and results
   * @author Alexander
   * @version 1.0
   * @since 28-10-2018
   **/
class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $dbh;
	private $error;
	private $stmt;

	/**
    * database constructor
    * @  Set DSN and creates a new PDO instanace
    * @param none
    * @return string $dsn
    **/
	public function __construct() {
		// Set DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		$options = array (
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		// Create a new PDO instanace
		try {
			$this->dbh = new PDO ($dsn, $this->user, $this->pass, $options);
		}		// Catch any errors
		catch ( PDOException $e ) {
			$this->error = $e->getMessage();
		}
	}

	/**
    * query method
    * @  Prepares statement with query
    * @param string $query
    * @return none
    **/
	public function query($query) {
		$this->stmt = $this->dbh->prepare($query);
	}

	/**
    * bind method
    * @  Binds values with the params
    * @param string $param | string $value | bool $type
    * @return none
    **/
	public function bind($param, $value, $type = null) {
		if (is_null ($type)) {
			switch (true) {
				case is_int ($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool ($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null ($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	/**
    * execute method
    * @  Executes the prepared statement
    * @param none
    * @return none
    **/
	public function execute(){
		return $this->stmt->execute();
	}

	/**
    * resultset method
    * @  Get result set as array of objects
    * @param none
    * @return string $stmt
    **/
	public function resultset(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		

	}

	/**
    * single method
    * @  Get single record as object
    * @param none
    * @return string $stmt
    **/
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}

	/**
    * row count method
    * @  Get record row count
    * @param none
    * @return string $stmt
    **/
	public function rowCount(){
		return $this->stmt->rowCount();
	}

	/**
    * lastinsertid method
    * @  Returns the last inserted ID
    * @param none
    * @return lastInsertId
    **/
	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}

	public function getColumn(){
		$this->execute();
		
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

	}


	
}
