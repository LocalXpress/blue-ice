<?php
	class Controller
	{
		public function render($filename, $data = [])
		{
  			if (is_array($data) && !empty($data)) 
  			{		
  				extract($data);
  			}

  			ob_start();
  			include $filename;
  			return ob_get_clean();
		}
	}
?>