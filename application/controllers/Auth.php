<?php
	class Auth extends CI_Controller
	{
		public function signin()
		{
			//have to display navbar ,footer and login form 
			  $this->load->helper('url');
			$this->load->view('signin');

		}
		public function signup()
		{
			//have to display navbar ,footer and signup form
			$this->load->helper('url');
			$this->load->view('signup');
		}
		public function nav()
		{
			//have to display navbar ,footer and signup form
			$this->load->helper('url');
			$this->load->view('nav');
		}
		public function property_detail()
		{
			//have to display navbar ,footer and signup form
			$this->load->helper('url');
			$this->load->view('property_detail');
		}
	}
?>