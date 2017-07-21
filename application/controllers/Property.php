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
			$data = file_get_contents(base_url() .'index.php/property/propertydetails?property_id='.$id);

			$result=json_decode($data);
			//echo $result['data'];
			echo $result->data->food ;
			$this->load->view('property_detail',$result->data);
			$this->load->view('footer');
		}

		public function propertydetails()
		{
			$id=$_REQUEST['property_id'];
			$this->load->Model('Property_model');
			$response=$this->Property_model->getdetails($id);
			$data=json_encode($response);
			echo $data;
		}

		public function reach_property()
		{
			$id = filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_NUMBER_INT);
			echo $id;
			$this->load->Model('Property_model');
			$location=$this->Property_model->getlocation($id);
			if($location['status']==true)
			{	
				echo '
				<script>
				
				window.location = "https://www.google.com/maps/dir/?api=1&origin=&destination='.$location['lat'].','.$location['long'].'";

				</script>

				';
			
			}
			else
			{
				//prints alert to the string
				print "<script type=\"text/javascript\">alert('Property Location Not Found !');</script>";
			}




		}

	}

?>