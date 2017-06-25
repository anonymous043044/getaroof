<?php
	class Property extends CI_Controller
	{
		public function viewproperty()
		{
			
			//defining what all we need to transfer via $data
			// 0 means false , 1 means true for values which have to defined by yes/no
			//1 means option 1 and so on for values which have various options 
			//values needed
			// 1.








			$id = filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_NUMBER_INT);
			$a=$this->Search_model->getpropertydetails($id);

			$this->load->view('property_detail',$data);
			$this->load->view('footer');
		}
	}

?>