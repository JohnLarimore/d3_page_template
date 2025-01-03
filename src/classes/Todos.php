<?php
class Todos
{
	protected $db;
	public function __construct(Database $db){
		$this->db = $db;
	}
	public function getAll(){
		$sql = "SELECT * FROM todos;";
		return $this->db->runSQL($sql)->fetchAll();
	}
}