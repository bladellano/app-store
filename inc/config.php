<?php 	

session_start();

class Sql {

	public $conn;

	public function __construct(){ 
		return $this->conn = pg_connect("host=ec2-174-129-33-176.compute-1.amazonaws.com port=5432 dbname=dafc63ist3q4tl user=ydmakxaikhgonn password=295bcfc92919f5d99e1475514828d412426ff3b33fe1e94dae0995532e176ecd");
	}

	public function query($string_query){
		return pg_query($this->conn,$string_query);
	}

	public function select($string_query){
		$result = $this->query($string_query);

		$data = array();
		while($row = pg_fetch_array($result)){
			foreach ($row as $key => $value) {
				$row[$key] = utf8_encode($value);
			}
			array_push($data,$row);
		}
		unset($result);
		return $data;
	}

	public function insert($string_query){
		$result = $this->query($string_query);
	}
	public function update($string_query){
		$result = $this->query($string_query);	
	}
	public function __destruct(){

		pg_close($this->conn);

	}

}

// $c = new Sql();
// print_r($c->conn);