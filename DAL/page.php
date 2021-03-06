<?php
/*
Author:			This code was generated by DALGen version 1.1.0.0 available at https://github.com/H0r53/DALGen 
Date:			10/19/2018
Description:	Creates the DAL class for  page table and respective stored procedures

*/



class Page {

	// This is for local purposes only! In hosted environments the db_settings.php file should be outside of the webroot, such as: include("/outside-webroot/db_settings.php");
	protected static function getDbSettings() { return "DAL/db_localsettings.php"; }

	/******************************************************************/
	// Properties
	/******************************************************************/

	protected $Id;
	protected $Name;
	protected $Description;
	protected $FileName;


	/******************************************************************/
	// Constructors
	/******************************************************************/
	public function __construct() {
		$argv = func_get_args();
		switch( func_num_args() ) {
			case 0:
				self::__constructBase();
				break;
			case 1:
				self::__constructPK( $argv[0] );
				break;
			case 4:
				self::__constructFull( $argv[0], $argv[1], $argv[2], $argv[3] );
		}
	}


	public function __constructBase() {
		$this->Id = 0;
		$this->Name = "";
		$this->Description = "";
		$this->FileName = "";
	}


	public function __constructPK($paramId) {
		$this->load($paramId);
	}


	public function __constructFull($paramId,$paramName,$paramDescription,$paramFileName) {
		$this->Id = $paramId;
		$this->Name = $paramName;
		$this->Description = $paramDescription;
		$this->FileName = $paramFileName;
	}


	/******************************************************************/
	// Accessors / Mutators
	/******************************************************************/

	public function getId(){
		return $this->Id;
	}
	public function setId($value){
		$this->Id = $value;
	}
	public function getName(){
		return $this->Name;
	}
	public function setName($value){
		$this->Name = $value;
	}
	public function getDescription(){
		return $this->Description;
	}
	public function setDescription($value){
		$this->Description = $value;
	}
	public function getFileName(){
		return $this->FileName;
	}
	public function setFileName($value){
		$this->FileName = $value;
	}


	/******************************************************************/
	// Public Methods
	/******************************************************************/


	public function load($paramId) {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_page_Load(?)');
		$stmt->bind_param('i', $paramId);
		$stmt->execute();

		$result = $stmt->get_result();
		if (!$result) die($conn->error);

		while ($row = $result->fetch_assoc()) {
		 $this->setId($row['Id']);
		 $this->setName($row['Name']);
		 $this->setDescription($row['Description']);
		 $this->setFileName($row['FileName']);
		}
	}


	public function save() {
		if ($this->getId() == 0)
			$this->insert();
		else
			$this->update();
	}

	/******************************************************************/
	// Private Methods
	/******************************************************************/



	private function insert() {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_page_Add(?,?,?)');
		$arg1 = $this->getName();
		$arg2 = $this->getDescription();
		$arg3 = $this->getFileName();
		$stmt->bind_param('sss',$arg1,$arg2,$arg3);
		$stmt->execute();

		$result = $stmt->get_result();
		if (!$result) die($conn->error);
		while ($row = $result->fetch_assoc()) {
			// By default, the DALGen generated INSERT procedure returns the scope identity as id
			$this->load($row['id']);
		}
	}


	private function update() {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_page_Update(?,?,?,?)');
		$arg1 = $this->getId();
		$arg2 = $this->getName();
		$arg3 = $this->getDescription();
		$arg4 = $this->getFileName();
		$stmt->bind_param('isss',$arg1,$arg2,$arg3,$arg4);
		$stmt->execute();
	}

	private static function setNullValue($value){
		if ($value == "")
			return null;
		else
			return $value;
	}

	/******************************************************************/
	// Static Methods
	/******************************************************************/



	public static function loadall() {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_page_LoadAll()');
		$stmt->execute();

		$result = $stmt->get_result();
		if (!$result) die($conn->error);
		if ($result->num_rows > 0) {
			$arr = array();
			while ($row = $result->fetch_assoc()) {
				$page = new Page($row['Id'],$row['Name'],$row['Description'],$row['FileName']);
				$arr[] = $page;
			}
			return $arr;
		}
		else {
			return array();
		}
	}


	public static function remove($paramId) {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_page_Delete(?)');
		$stmt->bind_param('i', $paramId);
		$stmt->execute();
	}


	public static function search($paramId,$paramName,$paramDescription,$paramFileName) {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_page_Search(?,?,?,?)');
		$arg1 = Page::setNullValue($paramId);
		$arg2 = Page::setNullValue($paramName);
		$arg3 = Page::setNullValue($paramDescription);
		$arg4 = Page::setNullValue($paramFileName);
		$stmt->bind_param('isss',$arg1,$arg2,$arg3,$arg4);
		$stmt->execute();

		$result = $stmt->get_result();
		if (!$result) die($conn->error);
		if ($result->num_rows > 0) {
			$arr = array();
			while ($row = $result->fetch_assoc()) {
				$page = new Page($row['Id'],$row['Name'],$row['Description'],$row['FileName']);
				$arr[] = $page;
			}
			return $arr;
		}
		else {
			return array();
		}
	}
}
