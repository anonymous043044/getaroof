<?php
	class Property_model extends CI_Model
	{
		public function getdetails($id)
		{
			$this->db->where('property_id',$id);
			$query=$this->db->get('property_full_details');
			if ($query->num_rows()) 
			{
				$data=array(
					'status'=>true,
					'food'=>$query->food_prov,
					'drinking_water'=>$query->drinkingwater_prov,
					'filter_prov'=>$query->filter_prov,
					'furnishing_type'=>$query->furnishing_type,
					'elec_bill'=>$query->elec_bill,
					'geyser'=>$query->geyser,
					'cooler'=>$query->cooler,
					'ac'=>$query->ac,
					'room_cleaning'=>$query->room_cleaning,
					'wifi'=>$query->wifi,
					'tv'=>$query->tv,
					'fridge'=>$query->fridge,
					'power_backup'=>$query->power_backup,
					'laundry'=>$query->laundry,
					'no_of_bathroom'=>$query->no_of_bathroom,
					'timestamp'=>$query->timestamp
					);	

			}

			else 
			{
				$data=array(
					'status'=>false
					);
			}
			



		}

	}


?>







