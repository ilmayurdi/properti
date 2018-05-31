<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
		// session_start();
        $this->load->model('m_login');
    }

	function index()
	{
		//$this->isLoggedIn();
    $this->load->view('admin/login');
	}

  // function isLoggedIn(){
  //      $isLoggedIn = $this->session->userdata('isLoggedIn');
      
  //     if(!isset($isLoggedIn) || $isLoggedIn != TRUE){
  //         $this->load->view('admin/login');
  //     }
  //     else{
  //         redirect('/index');
  //     }
  // }
	function proses() {
      $this->load->library('form_validation');
      $this->load->helper('url');

      $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim|xss_clean');
      $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]|trim|xss_clean');

      if ($this->form_validation->run() === FALSE){
          $this->session->set_flashdata('error', 'Email or password mismatch');
          $this->index();
      }
      else{
          //$this->load->view('admin/index');
          $tgl_login=date("Y-m-d"); 
          $jam_login=date("H:i:s");
          $email = $this->input->post('email');
          $psw = $this->input->post('password');
          $e = $email;
          $p = md5($psw);
          $cek = $this->m_login->cek($e, $p);
          //$this->load->view('admin/index');
          if($cek->num_rows() > 0)
          {
              foreach ($cek->result() as $res)
              {
                  $sessionArray = array('id_user'=>$res->id_user,                    
                                          'id_role'=>$res->id_role,
                                          'roleText'=>$res->role,
                                          'nama'=>$res->nama,
                                          'email' => $res->email,
                                          'tgl_login' => $tgl_login,
                                          'jam_login' => $jam_login,
                                          'isLoggedIn' => TRUE
                                  );
                                  
                  $this->session->set_userdata($sessionArray);
                  
                     
              }
            redirect('login/dashboard');
          }
          else
          {
              $this->session->set_flashdata('error', 'Email or password mismatch');
              redirect('login');
          }
          
      }   
  }
  function dashboard(){
    $this->load->view('admin/index');
  }
  function logout() {
      $this->session->sess_destroy();
      redirect('/admin/login');
  }

}