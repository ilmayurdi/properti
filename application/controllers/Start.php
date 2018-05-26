<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function view($page = 'pilih'){
	       if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php')){
                        // Whoops, we don't have a page for that!
                        show_404();
                }
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('admin/'.$page, $data);
        }
}