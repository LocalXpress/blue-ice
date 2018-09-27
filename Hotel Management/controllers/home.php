<?php
require_once 'Controller.php';

	class home extends Controller
	{
		public function index()
		{
			echo $this->render('views/index.php');
		}
	} 
?>