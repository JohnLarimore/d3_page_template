<?php
class Mtcars
{
	protected $db;
	public function __construct(Database $db){
		$this->db = $db;
	}
	public function getAll(){
		$sql = "SELECT * FROM mtcars;";
		$table = $this->db->runSQL($sql)->fetchAll();
		 
		$continuous_vars = ["cyl","mpg", "disp", "hp", "drat", "wt", "qsec", "gear", "carb"];
		foreach($continuous_vars as $continuous_var){
			$sql = "SELECT 
				min(".$continuous_var.") as min,
				percentile_cont(0.25) within group (order by ".$continuous_var.") as Q1,
				percentile_cont(0.5) within group (order by ".$continuous_var.") as median,				
				round(sum(".$continuous_var.")/count(".$continuous_var."), 1) as mean, 
				percentile_cont(0.75) within group (order by ".$continuous_var.") as Q3,
				max(".$continuous_var.") as max				
				from mtcars;";
			#echo $sql."<br>";
			$res = $this->db->runSQL($sql)->fetch();
			#var_dump($res);
			#$averages[$continuous_var] = $res['round'];
			#echo "<br><br>";
			$summaries[$continuous_var] = $res;
			
		}
		#var_dump($summaries);
		#echo "<br><br>";
		#select round(sum(hp)/count(hp), 1) from mtcars as mean;
		
		$discrete_vars = [ "vs", "am"];
		$final['stats'] = $summaries;
		$final['data'] = $table;
		return $final;
		
		foreach($final as $key=>$value){
			echo $key."<br>";
			var_dump($value);
			echo "<br>";
		}
		#var_dump($final);
		#var_dump($table);
		
		
		#return $data['table'] = $table; 
		#return $this->db->runSQL($sql)->fetchAll();
	}
}