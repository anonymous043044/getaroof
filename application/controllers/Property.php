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
			//$a=$this->Search_model->getpropertydetails($id);
			$data = file_get_contents('http://localhost/startup/index.php/property/propertydetails?property_id='.$id);
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

			//return json_encode($response);
			/*if($response->status==true)
			{
				$response=$data;
			}	
			else
			{
				$response
			}*/
			//


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
				
				var long = '.$location['long'].'
				var lat= '.$location['lat'].'
				

				function getLocation() {
				if (navigator.geolocation) {
				    navigator.geolocation.getCurrentPosition(showPosition,showError);
				} else { 
				   alert("Geolocation is not supported by this browser.");
				}
				}

				function showPosition(position) {
					
					window.location = "https://www.google.com/maps/dir/?api=1&origin=position.coords.latitude, position.coords.longitude&destination='.$location['lat'].','.$location['long'].'";	
				}
				
				function showError(error) {
				switch(error.code) {
				    case error.PERMISSION_DENIED:
				        alert("Denied Permission By User");
				        break;
				    case error.POSITION_UNAVAILABLE:
				    	alert("Location information is unavailable");
				    	break;
				    case error.TIMEOUT:
				        alert(The request to get user location timed out);
				        break;
				    case error.UNKNOWN_ERROR:
				    	alert("An unknown error");
				        break;
				}
				}
				
				window.location = "https://www.google.com/maps/dir/?api=1&origin=position.coords.latitude, position.coords.longitude&destination='.$location['lat'].','.$location['long'].'";
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