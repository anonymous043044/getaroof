<?php
	defined('BASEPATH') OR exit('No direct script access allowed');  

	class Auth extends CI_Controller
	{

		public function signin()
		{	
			//user comes to this then clicks on subkit in form then goes to signin_validation then cpmes back here if not validated else goes to home page 
			//have to display navbar ,footer and login form 
			$this->load->library('form_validation');
			if($this->session->isloggedin)
			{
				$this->load->view('prompt');
			}
			else if(!$this->session->isloggedin || isset($_SESSION['isloggedin']))
			{
				
				$this->load->view('signin');
			}



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
			$this->load->library('form_validation');
			$this->load->view('signup');
		}
		public function signup_validation()
		{

			$this->load->library('form_validation');
			$rules=array(
				array(
					'field'=>'username',
					'label'=>'Username',
					'rules'=>'required|callback_username_check',
					
					),

				array(
					'field'=>'email',
					'label'=>'Email',
					'rules'=>'required|valid_email'
					),
				//send otp to user phone number 
				array(
					'field'=>'phoneNo',
					'label'=>'Phone Number',
					'rules'=>'required|regex_match[/^[0-9]{10}$/]|callback_phone_check'

					),
				array(
					'field'=>'registration',
					'label'=>'Registration Number',
					'rules'=>'required'
					),
				array(
					'field'=>'password',
					'label'=>'Password',
					'rules'=>'required'
					),
				array(
					'field'=>'passwordconf',
					'label'=>'Confirm Password',
					'rules'=>'required|matches[password]'
					),

				);
				$this->form_validation->set_rules($rules);	
				if($this->form_validation->run()==true)
				{	
					$this->load->helper('security');
					$this->load->model('User_model');

					$result=$this->User_model->insert_user_data();
					if($result)
					{

						//session variable changes
						redirect(base_url().'index.php/Home/index');			
					}
					else
					{
						$this->signup();
					}

				}
				else
				{
					$this->signup();
				}
		}





		public function username_check($str)
		{

			$this->db->where('username',$str);
			$result=$this->db->get('user_details');
			if($result->num_rows()>0)
			{	
				$this->form_validation->set_message('username_check', 'The username already exists');
				return false;
			}
			else
			{
				return true;
			}
		}

		public function phone_check($str)
		{
			$this->db->where('user_phone_number',$str);
			$result=$this->db->get('user_details');
			if($result->num_rows()>0)
			{	
				$this->form_validation->set_message('phone_check', 'Phone Number Already Registered');
				return false;
			}
			else
			{
				return true;
			}
		}


		public function logout()
		{
			//unset session variables
		}
		
		
		
	}
?>