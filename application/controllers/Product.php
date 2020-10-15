<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model','ad_model');
        }
	public function index()
	{   
            $url              = $this->uri->segment(2);
            $data['setting']  = $this->ad_model->getSingle('settings',array('id'=>1));
            $productd         = $this->ad_model->getSingle( 'product',array('url'=>$url,'status'=>'Yes'));
            $data['singleslider']= $this->ad_model->getfilter('slider',array('s_id'=>$productd['id'],'status'=>'Yes'),1);
            $data['slider']   = $this->ad_model->getAll( 'slider','id ASC',array('s_id'=>$productd['id'],'status'=>'Yes'));
            $data['productd'] = $productd;
            detailspage('web/product',$data);
	}
}

