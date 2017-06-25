<?php
	defined('BASEPATH') OR exit('No direct script access allowed');  

	class Auth extends CI_Controller
	{

		public function signin()
		{
			//have to display navbar ,footer and login form 
			$this->load->library('form_validation');
			$this->load->view('signin');

		}
		public function signin_validation()
		{
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('EmailORUsername','Email Or Username','required');
			$this->form_validation->set_rules('Password','Password','required');
			if($this->form_validation->run()==true)
			{
				//user has entered emailorusername and password
				//now check if the user exists in db


				//first we have to check if we are given an email or username 
				$EmailORUsername=$this->input->post('EmailORUsername');
				$password=$this->input->post('Password');

				$this->load->helper('email');
				$this->load->model('User_model');
				if(valid_email($EmailORUsername))
				{
					//user has entered email
					$email=$EmailORUsername;
					$data=$this->User_model->email_login($email,$password);
					if($data['status']==true)
					{
						//login successful
						$this->session->set_userdata($data);
						redirect(base_url().'index.php/Home/index');
					}
					else
					{
						$this->session->set_userdata($data);
						redirect(base_url().'index.php/Auth/signin');	
						//login not successful
					}
				}
				else
				{
					//user has entered username
					$username=$EmailORUsername;
					$data=$this->User_model->user_login($username,$password);
					if($data['status']==true)
					{
						//login successful
						$this->session->set_userdata($data);
						redirect(base_url().'index.php/Home/index');
					}
					else
					{
						$this->session->set_userdata($data);
						redirect(base_url().'index.php/Auth/signin');	
						//login not successful
					}

				}
			}
			else
			{
				//redirect to login controller
				$this->signin();
			}

		}
		public function signup()
		{
			//have to display navbar ,footer and signup form
			
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