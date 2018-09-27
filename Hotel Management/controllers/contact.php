<?php
require_once 'Controller.php';

	class contact extends Controller
	{
		public function index()
		{
			echo $this->render('views/contact.php');
		}
	} 
?>