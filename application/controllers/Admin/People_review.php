<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People_review extends CI_Controller {
        public function __construct() {
            parent::__construct();
            session_check();
            $this->load->model('Admin_model','ad_model');
            }
            
        public function index()
	{
            $alldata = $this->ad_model->getAll('testimonial', 'Id DESC');
            $data['data'] = $alldata;
            form('admin/people_view', $data); 
	}
        public function Add(){
            $data = array();
            fortable('admin/people_add', $data); 
        }
        public function people_id(){
            $id = $this->input->get('id');
            $alldata = $this->ad_model->getSingle('testimonial',array('id'=>$id));
            $data['data'] = $alldata;
            fortable('admin/people_upd', $data); 
        }

        public function peoplesave(){
        $image = "";
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
        $data = array();
        fortable('admin/blog', $data); 
        }
        else
        { 
               if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
              
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './images/'.$image;
                    $config['new_image'] = './images/';
                    $config['maintain_ratio'] = TRUE;
                    $config['quality'] = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
            
            
            $post = $this->input->post();
            $user['name'] = $post['name'];
            $user['review'] = $post['description'];
            $user['image'] = $image;
            $user['status'] = !empty($post['status']) ? 'Yes' : 'No'; 
            $query = $this->ad_model->saveupdate('testimonial', $user);
            if(!empty($query)){
            $this->session->set_flashdata('success','Record Is Added successfully!!!');
            redirect(base_url('Admin/People_review/Add'));
            } else {
            $this->session->set_flashdata('error','Some Thing Went Wrong!!!!');
            redirect(base_url('Admin/People_review/Add'));
            }
            }
        }
        public function peopleupd(){
                $image = "";
                $id = $this->input->get('id');
                $alldata = $this->ad_model->getSingle('testimonial',array('id'=>$id));
                if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
              
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './images/'.$image;
                    $config['new_image'] = './images/';
                    $config['maintain_ratio'] = TRUE;
                    $config['quality'] = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
            if(!empty($id)){
                    if(!empty($_FILES['image']['name'])){
                        unlink('images/'.$alldata['image']);
                    }else{
                       $image = $alldata['image'];
                    } 
                }else{
                    
                }
            
            $post = $this->input->post();
            $user['name'] = $post['name'];
            $user['review'] = $post['description'];
            $user['image'] = $image;
            $user['status'] = !empty($post['status']) ? 'Yes' : 'No'; 
            $query = $this->ad_model->saveupdate('testimonial', $user,NULL,array('id'=>$id));
            if(!empty($query)){
            $this->session->set_flashdata('success','Record Is Added successfully!!!');
            redirect(base_url('Admin/People_review'));
            } else {
            $this->session->set_flashdata('error','Some Thing Went Wrong!!!!');
            redirect(base_url('Admin/People_review'));
            }
        }

        public function people_del(){
           $id = $this->input->get('id');
            $getdata = $this->ad_model->getSingle('testimonial',array('id'=>$id));
           // $filename = base_url('images/'.$getdata['image']); 
           
                unlink('images/'.$getdata['image']);
            $query = $this->ad_model->delete('testimonial',array('id'=>$id));
            if(!empty($query)){
                $this->session->set_flashdata('success','Record Is Deleted Successfully!!!');
                redirect(base_url('Admin/People_review'));
            }else{
                $this->session->set_flashdata('error','Something Went Wrong!!!');
                redirect(base_url('Admin/People_review'));
            }
        }
}