<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
		session_start();
        $this->load->model('m_login');
    }

	function index()
	{
		$this->load->view('admin/login');
	}

  	function proses() {
        $this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
		
        if ($this->form_validation->run() == FALSE) {
             $this->session->set_flashdata('result_login', '<br>Email atau Password belum diisi.');
			 redirect();
        } else {
            $tgl_login=date("Y-m-d"); 
			$jam_login=date("H:i:s");
            $email = $this->input->post('email');
            $psw = $this->input->post('password');
            $e = mysql_real_escape_string($email);
            $p = md5(mysql_real_escape_string($psw));
            $cek = $this->m_login->cek($e, $p);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['email'] = $qad->email;
					$sess_data['password'] = $qad->password;
                    $sess_data['tgl_login'] = $tgl_login;
					$sess_data['jam_login'] = $jam_login;
                    $this->session->set_userdata($sess_data);
                }
                redirect('admin/index');
            } else {
                $this->session->set_flashdata('result_login', '<br>Email atau Password yang anda masukkan salah.');
	            redirect();
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}