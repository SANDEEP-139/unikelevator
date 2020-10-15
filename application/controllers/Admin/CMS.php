<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMS extends CI_Controller {
        public function __construct() {
        parent::__construct();
        session_check();
        $this->load->model('Admin_model','ad_model');
        }
	public function index()
	{      
                $alldata = $this->ad_model->getAll('cms','Id ASC');
                $data['data'] = $alldata;
		fortable('admin/cms_view', $data); 
	}
        public function Add(){
            $data = array();
            form('admin/cms_add', $data); 
            $this->load->view('admin/qlite');
        }
        public function cms_id(){
            $id = $this->input->get('id');
            $alldata = $this->ad_model->getSingle('cms',array('id'=>$id));
            $data['data'] = $alldata;
            form('admin/cms_upd', $data); 
            $this->load->view('admin/qlite');
        }

        public function cmssave(){
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
                    $config['quality'] = '85%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
               
            $post = $this->input->post();
            $datai['pagename'] = $post['pagename'];
            $datai['title'] = $post['title'];
            $datai['m_keyword'] = $post['m_keyword'];
            $datai['m_desc'] = $post['m_desc'];
            $datai['heading'] = $post['heading'];
            $datai['description'] = $post['desc'];
            $datai['image'] = $image;
            $datai['status'] = !empty($post['status']) ? 'Yes' : 'No';
            
            $query = $this->ad_model->saveupdate('cms',$datai);
            if(!empty($query)){
                $this->session->set_flashdata('success','Record Added Sucessfully!!!');
                redirect(base_url('Admin/CMS/Add'));
            } else {
                $this->session->set_flashdata('error','Some Thing Went Wrong!!!');
                redirect(base_url('Admin/CMS/Add'));
            }
           
        }
        public function cmsupd(){
            $id = $this->input->get('id');
            $cmsimg = $this->ad_model->getSingle('cms',array('id'=>$id));
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
                    $config['quality'] = '85%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
                if(!empty($_FILES['image']['name'])){
                        unlink('images/'.$cmsimg['image']);
                    }else{
                       $image = $cmsimg['image'];
                    }
               
            $post = $this->input->post();
            $datai['pagename'] = $post['pagename'];
            $datai['title'] = $post['title'];
            $datai['m_keyword'] = $post['m_keyword'];
            $datai['m_desc'] = $post['m_desc'];
            $datai['heading'] = $post['heading'];
            $datai['description'] = $post['desc'];
            $datai['image'] = $image;
            $datai['status'] = !empty($post['status']) ? 'Yes' : 'No';
            
            $query = $this->ad_model->saveupdate('cms',$datai, NULL , array('id'=>$id));
            if(!empty($query)){
                $this->session->set_flashdata('success','Record Updated Sucessfully!!!');
                redirect(base_url('Admin/CMS'));
            } else {
                $this->session->set_flashdata('error','Some Thing Went Wrong!!!');
                redirect(base_url('Admin/CMS'));
            }
        }

        public function cms_del(){
            $id = $this->input->get('id');
            $cmsimg = $this->ad_model->getSingle('cms',array('id'=>$id));
            unlink('images/'.$cmsimg['image']);
            $query = $this->ad_model->delete('cms',array('id'=>$id));
            if(!empty($query)){
                $this->session->set_flashdata('success','Record is deleted successfully.');
                redirect(base_url('Admin/CMS'));
            } else {
                $this->session->set_flashdata('error','Something Went Wrong');
                redirect(base_url('Admin/CMS'));
            }
        }
}