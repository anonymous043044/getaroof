<?php
	class Property_model extends CI_Model
	{
		public function getdetails($id)
		{
			$this->db->where('property_id',$id);
			$query=$this->db->get('property_full_details');
			if ($query->num_rows()) 
			{	
				$response['status']=true;
				$response['message']="successful attempt";
				$a=$query->row();
				$data=array(
					'id'=>$id,
					'food'=>$a->food_prov,
					'security_money'=>$a->security_money,
					'drinking_water'=>$a->drinkingwater_prov,
					'filter_prov'=>$a->filter_prov,
					'furnishing_type'=>$a->furnishing_type,
					'elec_bill'=>$a->elec_bill,
					'geyser'=>$a->geyser,
					'cooler'=>$a->cooler,
					'ac'=>$a->ac,
					'room_cleaning'=>$a->room_cleaning,
					'wifi'=>$a->wifi,
					'tv'=>$a->tv,
					'fridge'=>$a->fridge,
					'power_backup'=>$a->power_backup,
					'laundry'=>$a->laundry,
					'no_of_bathroom'=>$a->no_of_bathroom,
					'timestamp'=>$a->timestamp
					);	
				$response['data']=$data;

			}

			else 
			{
				
				$response['status']=false;
				$response['message']="unsuccessful attempt";
				$data=array(
					'food'=>"",
					'drinking_water'=>"",
					'filter_prov'=>"",
					'furnishing_type'=>"",
					'elec_bill'=>"",
					'geyser'=>"",
					'cooler'=>"",
					'ac'=>"",
					'room_cleaning'=>"",
					'wifi'=>"",
					'tv'=>"",
					'fridge'=>"",
					'power_backup'=>"",
					'laundry'=>"",
					'no_of_bathroom'=>"",
					'timestamp'=>""
					);
				$response['data']=$data;
			}
			return $response;



		}



		public function getlocation($id)
		{
			$this->db->where('property_id',$id);
			$query=$this->db->get('property_location');
			if($query->num_rows())
			{
				$response['status']=true;
				$response['lat']=$query->row()->property_lat;
				$response['long']=$query->row()->property_long;

			}
			else
			{
				$response['status']=false;
			}
			return $response;





		}

	}


?>







