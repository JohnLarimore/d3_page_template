<?php
class Stats
{
	protected $db;
	public function __construct(Database $db){
		$this->db = $db;
	}
	public function ls(){
		$sql = "SELECT * FROM mtcars;";
		return $this->db->runSQL($sql)->fetchAll();
	}
}