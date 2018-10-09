<?php 

	class Webpage_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();

		}

		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$query = $this-> db->get('WEBPAGES');
				return $query->result_array();
			}
			$query = $this->db->get_where('WEBPAGES',array('slug'=>$slug));
			return $query->row_array();
		}


	}

 ?>