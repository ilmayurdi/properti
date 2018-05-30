<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

    function cek($email, $password) {
        $this->db->where("email", $email);
        $this->db->where("password", $password);
        $this->db->where("isDeleted", 0);
        
        return $this->db->get("tbl_user");
    }

}