<?php 
 
	class M_login extends CI_Model{	
		function admin_login($table,$where){		
			return $this->db->get_where($table,$where);
		}	
}