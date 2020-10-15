<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
        public function __construct() {
        parent::__construct();
        session_check();
        $this->load->model('Admin_model','ad_model');
        }
	public function index()
	{      
            $alldata = $this->ad_model->getAll('product','Id DESC',array('status'=>'Yes'));
            $data['data'] = $alldata;
            fortable('admin/product_view', $data); 
	}
        public function Add(){
            $data['']  = array();
            fortable('admin/product_add', $data); 
            $this->load->view('admin/qlite');
        }
        public function product_id(){
            $id = $this->input->get('id');
            $data[''] = array();
            $alldata = $this->ad_model->getSingle('product',array('id'=>$id));
            $data['data'] = $alldata;
            fortable('admin/product_upd', $data); 
            $this->load->view('admin/qlite');
        }

        public function save(){
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
       fortable('admin/product_add', $data); 
        $this->load->view('admin/qlite');   }
        else  {       
            $post = $this->input->post();
            $user['title'] = $post['title'];
            $user['metakeyword'] = $post['metakeyword'];
            $user['metadesc'] = $post['metadescription'];
            $user['url'] = seoUrl($post['url']);
            $user['heading'] = $post['headig'];
            $user['priority'] = $post['priority'];
            $user['description'] = $post['desc'];
            $user['status'] = !empty($post['status']) ? 'Yes' : 'No'; 
            $query = $this->ad_model->saveupdate('product',$user);
            if($query){
            $this->session->set_flashdata('success','Record Added successfully!!!');
            redirect(base_url('Admin/Product/Add'));
           }
           else{
              $this->session->set_flashdata('error','Some Thing Went Wrong!!!!');
              redirect(base_url('Admin/Product/Add'));
           }
        }
        }
        public function upd(){
            $id = $this->input->get('id');
            $this->form_validation->set_rules('url', 'Url', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
        fortable('admin/product_add', $data); 
        $this->load->view('admin/qlite');   }
        else  {       
            $post = $this->input->post();
            
           
            $user['title'] = $post['title'];
            $user['metakeyword'] = $post['metakeyword'];
            $user['metadesc'] = $post['metadescription'];
            $user['url'] = seoUrl($post['url']);
            $user['heading'] = $post['headig'];
            $user['priority'] = $post['priority'];
            $user['description'] = $post['desc'];
            $user['status'] = !empty($post['status']) ? 'Yes' : 'No'; 
            $query = $this->ad_model->saveupdate('product',$user,null,array('id'=>$id));
            if($query){
            $this->session->set_flashdata('success','Record Updated successfully!!!');
            redirect(base_url('Admin/Product'));
           }
           else{
              $this->session->set_flashdata('error','Some Thing Went Wrong!!!!');
              redirect(base_url('Admin/Product'));
           }
        } 
        }

        public function product_del(){
            $id = $this->input->get('id');
           $slider = $this->ad_model->getAll('slider','Id ASC',array('s_id'=>$id));
            foreach ($slider as $sliderval) {
                unlink('images/'.$sliderval['image']);
                $this->ad_model->delete('slider',array('id'=>$sliderval['id']));
            }
            $guery = $this->ad_model->delete('product',array('id'=>$id));
            
            if(!empty($query)){
                $this->session->set_flashdata('success','Record Deleted successfully!!!');
            redirect(base_url('Admin/Product'));
            }else{
                 $this->session->set_flashdata('error','Some Thing Went Wrong!!!!');
              redirect(base_url('Admin/Product'));
            }
        }
}