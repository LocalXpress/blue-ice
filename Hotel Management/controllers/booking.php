<?php
require_once 'Controller.php';
require_once 'models/room.php';


	class booking extends Controller
	{
		public function index()
		{
			$room = new room();
			echo $this->render('views/booking.php',$room->roomList());
		}

		public function bookARomm($data = [])
		{
			echo $this->render('views/bookARoom.php',$data[0]);
		}

		public function checkOutARomm($data = [])
		{
			$room = new room();
			$room->checkOutARoom($data[0]);
			header('Location:../../booking');	
		}

		public function checkCost($data=[])
		{
			$room = new room();
			echo $this->render('views/checkCost.php',$room->checkCost($data[0]));
		}
		public function insertRoomValues($data = [])
		{
			$room = new room();
			$room->addCustomer($_POST['name'],$_POST['phone'],$_POST['email'],$_POST['adhar'],$data[0]);
			header('Location:../../booking');
		}	
	}
?>