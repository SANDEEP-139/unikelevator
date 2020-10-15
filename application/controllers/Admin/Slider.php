<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
        public function __construct() {
            parent::__construct();
            session_check();
            $this->load->model('Admin_model','ad_model');
            ini_set('post_max_size', '256M');
            ini_set('upload_max_filesize', '256M');
            ini_set('max_execution_time', '420');
            
            }
	public function index()
	{           
            $sid = $this->input->get('sid');
            $data['sid'] = $sid;
            $alldata = $this->ad_model->getAll('slider','Id ASC',array('s_id'=>$sid));
            $data['data'] = $alldata;
            fortable('Admin/slider_view', $data); 
	}
        public function Add(){
                $sid = $this->input->get('sid');
                $data['sid'] = $sid;
		form('Admin/slider_add',$data); 
        }
        public function slider_id(){
                $id = $this->input->get('id');
                $sid = $this->input->get('sid');
                $data['sid'] = $sid;
                $alldata = $this->ad_model->getSingle('slider',array('id'=>$id));
                $data['data'] = $alldata;
                form('Admin/slider_upd', $data);
        }
        
        public function slidersave(){
                $sid = $this->input->get('sid');
                $image = "";
               
                
                $post = $this->input->post();
                if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
              
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                    $config['max_size']    = '1024*5'; 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './images/'.$image;
                    $config['new_image'] = './images/';
                    $config['maintain_ratio'] = TRUE;
                    $config['quality'] = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
                
                $user['s_id'] = $sid;
                $user['image'] = $image;
                $user['status'] = !empty($post['status']) ? 'Yes' : 'No';
                $query = $this->ad_model->saveupdate('slider',$user);
                if($query){
                $this->session->set_flashdata('success','Slider Added successfully!!!');
                redirect(base_url('Admin/Slider/Add?sid='.$sid));
                }
                else{

              $this->session->set_flashdata('error','Some Thing Went Wrong!!!!');
              redirect(base_url('Admin/Slider/Add?sid='.$sid));
           }
        }
        public function slider_up(){
            $image = "";
            $id = $this->input->get('id');
            $sid = $this->input->get('sid');
            $post = $this->input->post();
            $alldata = $this->ad_model->getSingle('slider',array('id'=>$id));
             if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
              
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                    $config['max_size']    = '1024*5'; 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './images/'.$image;
                    $config['new_image'] = './images/';
                    $config['maintain_ratio'] = TRUE;
                    $config['quality'] = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
                $filename = base_url('images/'.$alldata['image']); 
                if(!empty($_FILES['image']['name'])){
                    unlink('images/'.$alldata['image']);
                   }else{
                       $image = $alldata['image'];
                    }
                $user['s_id'] = $sid;
                $user['image'] = $image;
                $user['status'] = !empty($post['status']) ? 'Yes' : 'No';
                $query = $this->ad_model->saveupdate('slider',$user,null,array('id'=>$id));
                if($query){
                $this->session->set_flashdata('success','Slider Updated successfully!!!');
                redirect(base_url('Admin/Slider?sid='.$sid));
                }
                else{

              $this->session->set_flashdata('error','Some Thing Went Wrong!!!!');
              redirect(base_url('Admin/Slider?sid='.$sid));
           }
                
        }

        public function slider_del(){
            $sid = $this->input->get('sid');
            $id = $this->input->get('id');
             $alldata = $this->ad_model->getSingle('slider',array('id'=>$id));
             $filename = base_url('images/'.$alldata['image']); 
               
                if (file_exists($filename)) {
                unlink('images/'.$alldata['image']);
                } else {
   
                }
            $query = $this->ad_model->delete('slider',array('id'=>$id));
            if(!empty($query)){
            $this->session->set_flashdata('success','Record is deleted sussessfully!!');
            redirect(base_url('Admin/Slider?sid='.$sid));
            } else {
                $this->seesion->set_flashdata('error','Something Went Wrong!!!'); 
                redirect(base_url('Admin/Slider?sid='.$sid));
            }   
        }
}