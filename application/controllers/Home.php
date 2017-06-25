<?php

	class Home extends CI_Controller
	{
		public function index()
		{
			$this->load->view('homepage');
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
			foreach ($result->result() as $row)
			{
				$this->db->where('property_id',$row->property_id);
				$query=$this->db->get('property_details');
				$a=$query->row();
				$data=array(
 						'address'=>$a['property_address']
					);
				$this->load->view('property_template',$data);

			}
			$this->load->view('footer');


		}
	}

?>