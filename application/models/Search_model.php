<?php
class Search_model extends CI_Model
{
	//returns all properties following these filters
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
	//pass property id as a param and get all the details of property provided in property_details table

	//returns only 1 row or first row
	public function getpropertydetails($id)
	{
		$this->db->where('property_id',$id);
		$query=$this->db->get('property_details');
		return $query->row();
	}
}


?>