<?php
class User_model extends CI_Model
{
	public function user_login($username,$password)
	{
			// called when user has provided username and password
			// returns true if user has signed up and false if he hasnt
		$this->db->where('username',$username);
		$query=$this->db->get('user_details');
			//makes query SELECT * from user_details where username=$username
		if($query->num_rows() > 0)
		{	
			$result=$query->row();
			if($password==$result->user_password)
			{
				$data=array(
					'status'=>true,
					'message'=>'Successfully Logged In',
					'username'=>$result->username,
					'email'=>$result->user_email,
					'phoneno'=>$result->user_phone_number
					);
			}
			else
			{
				$data=array(
					'status'=>false,
					'message'=>'Incorrect Password',
					'username'=>$result->username,
					'email'=>$result->user_email,
					'phoneno'=>$result->user_phone_number
					);
				$this->session->set_flashdata('error', 'Incorrect password for given username');
			}
			return $data;
		}
		else
		{
			$data=array(
				'status'=>false,
				'message'=>'User Does Not Exist , Please Sign UP'
				);
			$this->session->set_flashdata('error', 'User Does Not Exist , Please Sign UP');
			return $data;

		}

	}
	public function email_login($email,$password)
	{
			// called when user has provided email and password
			// returns true if user has signed up and false if he hasnt
		$this->db->where('user_email',$email);
		$query=$this->db->get('user_details');
			//makes query SELECT * from user_details where username=$username
		if($query->num_rows() > 0)
		{	
			$result=$query->row();
			if($password==$result->user_password)
			{
				$data=array(
					'status'=>true,
					'message'=>'Successfully Logged In',
					'username'=>$result->username,
					'email'=>$result->user_email,
					'phoneno'=>$result->user_phone_number
					);
			}
			else
			{
				$data=array(
					'status'=>false,
					'message'=>'Incorrect Password',
					'username'=>$result->username,
					'email'=>$result->user_email,
					'phoneno'=>$result->user_phone_number
					);
				$this->session->set_flashdata('error', 'Incorrect password for given Email-Id');
			}
			return $data;
		}
		else
		{
			$data=array(
				'status'=>false,
				'message'=>'User Does Not Exist , Please Sign UP',

				);
			$this->session->set_flashdata('error', 'User Does Not Exist , Please Sign UP');
			return $data;

		}

	}
}


?>