<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status')!="login"){
            
            redirect('login/loginUser');
            
        }
    }
    public function index()
    {
        $this->load->view('candah/dasboard');
        
    }

}

/* End of file Candah.php */
