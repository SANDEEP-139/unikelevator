<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
         public function __construct() {
            parent::__construct();
            session_check();
            $this->load->model('Admin_model','ad_model');
            }
	public function index()
	{       
                $leads = $this->ad_model->record_count_with_where('inquiry','id',array("MONTH(date) " => date('m'),"DAYOFMONTH(date) " => date('d'),"YEAR(date) " =>date('Y')));
                $data['leads'] = $leads;
                $tleads = $this->ad_model->record_count_with_where('inquiry','id',array());
                $data['tleads'] = $tleads;
		view('admin/index', $data); 
	}
}
