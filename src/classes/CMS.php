<?php
class CMS
{
	protected $db = null;
	protected $Mtcars = null;

	public function __construct($dsn, $username, $password){
		$this->db = new Database($dsn, $username, $password);
	}
	
	public function mtcars(){
		if($this->Mtcars === null){
			$this->Mtcars = new Mtcars($this->db);
		}
		return $this->Mtcars;
	}
}