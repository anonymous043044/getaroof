<?php
class Search_model extends CI_Model
{
	public function getproperties($gender,$distancelower,$distanceupper,$rent)
	{
		$this->db->where('Institute_Distance >=',$distancelower);
		$this->db->where('Institute_Distance <=',$distanceupper);
		$this->db->where('rent_pm <=',$rent);
		if($gender=='Any')
		{

			$result=$this->db->get('property_listings');

		}
		else
		{
			$this->db->where('gender',$gender);
			$result=$this->db->get('property_listings');

		}
		return $result;
	}
}


?>