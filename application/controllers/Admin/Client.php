<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
        public function __construct() {
        parent::__construct();
        session_check();
        $this->load->model('Admin_model','ad_model');
        }
	public function index()
	{       
                $alldata        = $this->ad_model->getAll('mst_client','Id ASC');
                $data['data']   = $alldata;
		fortable('admin/client_view', $data); 
	}
        public function Add(){
            $data   = array();
            fortable('admin/client_add', $data);  
        }
        public function client_id(){
            $id             = $this->input->get('id');
            $alldata        = $this->ad_model->getSingle('mst_client',array('id'=>$id));
            $data['data']   = $alldata;
            fortable('admin/client_up', $data);
        }

        public function clientsave(){
            if(!empty($_FILES['image']['name'])){
                $config['upload_path']      = 'images/';
                $config['allowed_types']    = 'jpg|jpeg|png|gif';
                $config['file_name']        = $_FILES['image']['name'];
              
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image      = $uploadData['file_name'];
                    
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './images/'.$image;
                    $config['new_image']        = './images/';
                    $config['maintain_ratio']   = TRUE;
                    $config['quality']          = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
            $post               = $this->input->post();
            $user['priority']   = $post['priority'];
            $user['client']     = $post['client'];
            $user['image']      = $image;
            $user['status']     = !empty($post['status']) ? 'Yes' : 'No';
            
            $query = $this->ad_model->saveupdate('mst_client',$user);
            if(!empty($query)){
                $this->session->set_flashdata('success','Slider Added Sucessfully!!!');
                redirect(base_url('Admin/client/Add'));
            } else {
                $this->session->set_flashdata('error','Some Thing Went Wrong!!!');
                redirect(base_url('Admin/client/Add'));
            }
        }
        
        public function clientupd(){
            $id         = $this->input->get('id');
            $getdata    = $this->ad_model->getSingle('mst_client',array('id'=>$id));
            if(!empty($_FILES['image']['name'])){
                $config['upload_path']      = 'images/';
                $config['allowed_types']    = 'jpg|jpeg|png|gif';
                $config['file_name']        = $_FILES['image']['name'];
              
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image      = $uploadData['file_name'];
                    
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './images/'.$image;
                    $config['new_image']        = './images/';
                    $config['maintain_ratio']   = TRUE;
                    $config['quality']          = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
               if(!empty($_FILES['image']['name'])){
                        unlink('images/'.$getdata['image']);
                    }else{
                       $image = $getdata['image'];
                    }
            $post = $this->input->post();
            $user['image']      = $image;
            $user['priority']   = $post['priority'];
            $user['client']     = $post['client'];
            $user['status']     = !empty($post['status']) ? 'Yes' : 'No';
            
            
            $query = $this->ad_model->saveupdate('mst_client',$user,null,array('id'=>$id));
            if(!empty($query)){
                $this->session->set_flashdata('success','Slider Added Sucessfully!!!');
                redirect(base_url('Admin/Client'));
            } else {
                $this->session->set_flashdata('error','Some Thing Went Wrong!!!');
                redirect(base_url('Admin/Client'));
            }
        }
        
        public function client_del(){
            $id         = $this->input->get('id');
            $getdata    = $this->ad_model->getSingle('mst_client',array('id'=>$id));
            unlink('images/'.$getdata['image']);
            $query = $this->ad_model->delete('mst_client',array('id'=>$id));
            if(!empty($query)){
            $this->session->set_flashdata('success','Record is deleted sussessfully!!');
            redirect(base_url('Admin/Client'));
            } else {
               $this->seesion->set_flashdata('error','Something Went Wrong!!!'); 
               redirect(base_url('Admin/Client'));
            }
        }
}
