<?php
/*Ansluter till databasen och hämtar alla kategorier*/

class categoryModel
{
	private $pdo;
	
	function __construct()
	{
		$host = 'localhost';
		$dbname = 'ehandel';
		$username = 'root';
		$password = '';

		$this->pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
	}

	public function getCategory() {
		$query = $this->pdo->query("SELECT * FROM category");

		return $query->fetchAll();
	}
}
 ?>
