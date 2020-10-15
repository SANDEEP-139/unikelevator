<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inquiry extends CI_Controller {
        public function __construct() {
            parent::__construct();
            session_check();
            $this->load->model('Admin_model','ad_model');
            }
	public function index()
	{   
            $alldata = $this->ad_model->getAll('inquiry','Id DESC');
            $data['data'] = $alldata;
            fortable('admin/inquiry', $data); 
	}
        public function today()
	{      
                $alldata = $this->ad_model->getAll('inquiry','id DESC',array("MONTH(date) " => date('m'),"DAYOFMONTH(date) " => date('d'),"YEAR(date) " =>date('Y')));
                $data['data'] = $alldata;
		fortable('admin/todayin', $data); 
	}
}