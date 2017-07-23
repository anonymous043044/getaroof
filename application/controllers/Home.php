<?php

	class Home extends CI_Controller
	{
		public function index()
		{	

			if($this->session->show_snack_login)
			{ 
				$message="Welcome ".$this->session->username." You Are Logged In ";

				//$message="hi";
				$data=array(
					'message'=>$message

					);
				$this->load->view('snackbar.php',$data);
				//$this->session->set_userdata('show_snack_login',false);
			}
			if($this->session->show_snack_signup)
			{ 
				$message="Welcome ".$this->session->username." Sucessfully Signed Up";

				//$message="hi";
				$data=array(
					'message'=>$message

					);
				$this->load->view('snackbar.php',$data);
				$this->session->set_userdata('show_snack_signup',false);
				$this->session->set_userdata('show_snack_login',true);
			}
			$this->load->view('homepage.php');
			/*just for trial  i  commented this */
			/*$this->load->view('homepage');*/
			$this->load->view('footer');
						

		}
		public function search()
		{	

			if($this->session->isloggedin)
			{

				$this->load->view('nav');
			$this->load->model('Search_model');
			$gender=$this->input->post('Gender');
			$distanceupper=$this->input->post('Distance');
			$distancelower=$distanceupper-2;
			$rent=$this->input->post('Budget');

			$result=$this->Search_model->getproperties($gender,$distancelower,$distanceupper,$rent);
			if($result)
			foreach ($result->result() as $row)
			{
				$a=$this->Search_model->getpropertydetails($row->property_id);
				$data=array(
 						'address'=>$a->property_address,
 						'gender'=>$row->gender,
 						'rent'=>$row->rent_pm,
 						'total_seats'=>$a->property_total_beds,
 						'property_id'=>$row->property_id
					);
				$this->load->view('property_template',$data);

			}
			

			$this->load->view('footer');

				
			}
			else if(!$this->session->isloggedin || isset($_SESSION['isloggedin']))
			{		
				$this->load->library('form_validation');
					$message="Please Login/Sign Up First";
					$data=array(
 						'message'=>$message
					);
					$this->load->view('snackbar.php',$data);
					$this->load->view('signin.php');
			}  



			
		}
	}

?>