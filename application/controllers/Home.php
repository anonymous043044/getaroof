<?php

	class Home extends CI_Controller
	{
		public function index()
		{	
			$this->load->view('homepage.php');
			/*just for trial  i  commented this */
			/*$this->load->view('homepage');*/
			$this->load->view('footer');
						

		}
		public function search()
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
	}

?>