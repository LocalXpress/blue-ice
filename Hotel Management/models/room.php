<?php
require_once 'data.php';

	class room
	{	
		public function roomList()
		{
			$database 		= new database();
			$queryString	= "select * from room";
			$query 			= $database->pdo->prepare($queryString);
			$query->execute();
			return $query->fetchAll();
		}

		public function addCustomer($name,$phone,$email,$adhar,$roomId)
		{
			$database 		= new database();
			$queryString	= "insert into hotel (name,phone,email,adhar,roomId) values (?,?,?,?,?)";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$name);
			$query->bindValue(2,$phone);
			$query->bindValue(3,$email);
			$query->bindValue(4,$adhar);
			$query->bindValue(5,$roomId);
			$query->execute();

			$queryString	= "update room set booked = 1 where roomId = ?";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$roomId);
			$query->execute();
		}

		public function checkOutARoom($roomId)
		{
			$database 		= new database();
			$queryString	= "update hotel set checked=1 where roomId=? and checked=0";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$roomId);
			$query->execute();
			
			$queryString	= "update room set booked = 0 where roomId = ?";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$roomId);
			$query->execute();
		}

		public function checkCost($roomId)
		{
			$database 		= new database();
			$queryString	= "select * from hotel,room where hotel.roomId=room.roomId and hotel.roomId=? and checked = 0";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$roomId);
			$query->execute();
			return $query->fetch();
		}
	}
?>