<?php
/**
 * 
 */
class post_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}



	

    /* public function getbooks($booking_id=false)
	{
		if ($booking_id === FALSE) {
		$query = $this->db->get('booking');
		return $query->result_array();
		}

		$query = $this->db->get_where('booking', array('booking_id' => $booking_id));
		return $query->row_array();
		
	}
	public function getprof()
	{ 	
		/* if ($customer_id === FALSE) {
		$query = $this->db->get('customer');
		return $query->result_array();
		}
*/		

		public function register_user($user){


		$this->db->insert('customer', $user);

		}
		public function register_worker($user){


		$this->db->insert('employee', $user);

		}

		public function login_user($email,$pass){

		 /* $this->db->select('*');
		  $this->db->from('Users');
		  $this->db->where('user_email',$email);
		  $this->db->where('user_password',$pass);*/

		  $query = $this->db->get_where('customer', array('Email' => $email,'password' => $pass));
		  return $query->row_array();
		  /*if($query=$this->db->get())
		  {
		      return $query->row_array();
		  }
		  else{
		    return false;
		  }*/


		}
		public function login_worker($email,$pass){

		 /* $this->db->select('*');
		  $this->db->from('Users');
		  $this->db->where('user_email',$email);
		  $this->db->where('user_password',$pass);*/

		  $query = $this->db->get_where('employee', array('Email' => $email,'password' => $pass));
		  return $query->row_array();
		  /*if($query=$this->db->get())
		  {
		      return $query->row_array();
		  }
		  else{
		    return false;
		  }*/


		}
		public function login_admin($email,$pass){

	
		  $query = $this->db->get_where('admin', array('Email' => $email,'password' => $pass));
		  return $query->row_array();
	


		}
		public function email_check($email){

		  $this->db->select('*');
		  $this->db->from('customer');
		  $this->db->where('Email',$email);
		  $query=$this->db->get();

		  if($query->num_rows()>0){
		    return false;
		  }else{
		    return true;
		  }

		}
		public function email_check_W($email){

		  $this->db->select('*');
		  $this->db->from('employee');
		  $this->db->where('Email',$email);
		  $query=$this->db->get();

		  if($query->num_rows()>0){
		    return false;
		  }else{
		    return true;
		  }

		}

		public function change_status(){

			$status = "Accepted";
			$data = array(
			'status' => $status
		);
		$this->db->where('booking_id', $this->input->post('booking_id'));
		return $this->db->update('booking', $data);

}
}

?>