<?php
//this is just for testing views 
	class Trial extends CI_Controller
	{
		public function index()
		{
			$this->load->helper('url');
			$this->load->view('footer');

		}
	}
?>