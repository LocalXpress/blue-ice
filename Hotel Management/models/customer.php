<?php
require_once 'data.php';

	class customer
	{
		public function fetchAllCustomerList()
		{
			$database 		= new database();
			$queryString	= "select * from hotel order by customerId desc";
			$query 			= $database->pdo->prepare($queryString);
			$query->execute();
			return $query->fetchAll();
		}
	}	

?>