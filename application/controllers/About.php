<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model','ad_model');
        }
	public function index()
	{   
            $data['setting'] = $this->ad_model->getSingle('settings',array('id'=>1));
            $data['cms'] = $this->ad_model->getSingle('cms',array('pagename'=>1,'status'=>'Yes'));
            $data['testimonial'] = $this->ad_model->getAll('testimonial', 'Id DESC',array('status'=>'Yes'));
            cmspage('web/about-us',$data);
	}
}

