<?php
require_once 'Controller.php';
require_once 'Models/customer.php';	

	class customerlist extends Controller
	{
		public function index()
		{
			$customer = new customer();
			echo $this->render('views/customerlist.php',$customer->fetchAllCustomerList());
		}
	}
?>