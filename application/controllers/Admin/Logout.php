<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
         public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model','ad_model');
      }
	public function index()
	{	
         $newdata = array(
                'userid'  =>'',
                'password' => '',
               );
              
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
        redirect(base_url('Admin/Login'));
	}
}
