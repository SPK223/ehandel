<?php 

/**
 Ansluter till databasen och hämtar alla produkter.

 */
class produkterModel
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

	public function getProdukter() {
		$query = $this->pdo->query("SELECT * FROM produkter");

		return $query->fetchAll();
	}
}
 ?>