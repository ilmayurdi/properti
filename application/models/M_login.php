<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

    function cek($email, $password) {
    	$this->db->select('user.id_user, user.password, user.email, user.nama, user.id_role, role.role');
        $this->db->from('tbl_user as user');
        $this->db->join('tbl_role as role','role.id_role = user.id_role');
        $this->db->where('user.email', $email);
        $this->db->where('user.password', $password);
        $this->db->where('user.isDeleted', 0);
        
        $query = $this->db->get();
        return $query;
        // $user = $query->result();

        // if(!empty($user)){
        //     if(md5($password, $user[0]->password)){
        //         return $user;
        //     } else {
        //         return array();
        //     }
        // } else {
        //     return array();
        // }
    }

}