<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model','ad_model');
        }
	public function index()
	{   
            $data['setting'] = $this->ad_model->getSingle('settings',array('id'=>1));
            frontin('web/contact-us',$data);
	}
}

