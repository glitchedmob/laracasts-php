<?php

class QueryBuilder 
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$sql = $this->pdo->prepare("SELECT * FROM {$table}");

		$sql->execute();

		return $sql->fetchAll(PDO::FETCH_CLASS);
	}
}