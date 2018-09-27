<?php
	class database
	{
		public $pdo;

		public function __construct()
		{
			try
			{
				$this->pdo = new PDO('mysql:host=localhost;dbname=hotel','root','');
			}
			catch(PDOExcetion $e)
			{
				echo "Not Connected";
			}
		}
	}
?>