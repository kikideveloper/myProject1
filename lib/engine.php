<?php
/**
* class query
*/
class Engine
{
	private $db;
	function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=127.0.0.1;dbname=sales_system","root","");
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			die($e->getMessage());
		}
		return $this->db;
	}
	public function query($q)
	{
		try {
			$sql = $this->db->prepare($q);
			$sql->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function execute($sql , $param)
		{
			try{
				$result = $this->db->prepare($sql);
					$result->execute($param);
			}catch(Exception $e){
				die($e->getMessage());
			}
		}
	public function getField($sql, $param)
	{
		try {
			$result = $this->db->prepare($sql);
			$result->execute($param);
			$row = $result->fetch();
		} catch (Exception $e) {
			die($e->getMessage());
		}
		return $row[0];
	}
	public function getRow($sql, $param)
	{
		try {
			$result = $this->db->prepare($sql);
			$result->execute($param);
			$row = $result->fetch();
		} catch (Exception $e) {
			die($e->getMessage());
		}
		return $row;
	}
	public function getResult($sql, $param)
	{
		try {
			$result = $this->db->prepare($sql);
			$result->execute($param);
		} catch (Exception $e) {
			die($e->getMessage());
		}
		return $result;
	}
	public function sant($type)
	{
		$data = filter_input_array($type, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		return $data;
	}
	public function select($table,$param="*")
	{
		try {
			$res=$this->db->prepare("SELECT $param FROM $table");
			$res->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}
		return $res;
	}
	public function insert($table,$param)
	{
		try {
			$query=$this->db->prepare("INSERT INTO $table VALUES($param)");
			$query->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function update($table,$param)
	{
		try {
			$res=$this->db->prepare("UPDATE $table SET $param");
			$res->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function delete($table)
	{
		try {
			$res=$this->db->prepare("DELETE FROM $table");
			$res->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function LastID()
	{
		return $this->db->lastInsertId();
	}
}
$eng = new Engine();
?>