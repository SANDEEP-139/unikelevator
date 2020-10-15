<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model','ad_model');
        }
	public function index()
	{   
            $data['setting'] = $this->ad_model->getSingle('settings',array('id'=>1,'status'=>'Yes'));
            $data['about'] = $this->ad_model->getSingle('cms',array('pagename'=>1,'status'=>'Yes'));
            $data['slider'] = $this->ad_model->getAll('mst_slider','priority ASC',array('status'=>'Yes'));
            $data['productd'] = $this->ad_model->getAll( 'product','priority ASC',array('status'=>'Yes'));
            frontin('web/index',$data);
	}
}
