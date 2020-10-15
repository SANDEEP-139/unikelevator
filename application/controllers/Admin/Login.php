<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
         public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model','ad_model');
      }
	public function index()
	{	
            $this->load->view('admin/login');
	}
        public function login(){
        $this->form_validation->set_rules('userid', 'User Id', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {      
        $this->load->view('Admin/Login');
        }
        else
        { 
        $post = $this->input->post();
        $user['user_id'] = $post['userid'];
        $user['user_pass'] = MD5($post['password']); 
        $query = $this->ad_model->getSingle('mst_login',$user);
       if(!empty($query)) {
           if($query['user_id'] == $user['user_id']&& $query['user_pass'] == $user['user_pass']){
                $data = [
                    'userid' => $query['user_id'],
                    'password' => $query['user_pass']
                ];
                $this->session->set_userdata($data);
                redirect(base_url('Admin/Dashboard'));
           }else{
              $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect(base_url('Admin/Login'));
           }} else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect(base_url('Admin/Login'));
            }
        }
    }
}
