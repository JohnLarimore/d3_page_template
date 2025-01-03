<?php
class CMS
{
	protected $db = null;
	protected $todos = null;

	public function __construct($dsn, $username, $password){
		$this->db = new Database($dsn, $username, $password);
	}
	
	public function todos(){
		if($this->Todos === null){
			$this->Todos = new Todos($this->db);
		}
		return $this->Todos;
	}
}