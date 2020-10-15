<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
        public function __construct() {
        parent::__construct();
        session_check();
        $this->load->model('Admin_model','ad_model');
        }
	public function index()
	{      
            $setting = $this->ad_model->getSingle('settings',array('id'=>1));
             $data['data'] = $setting;
            form('admin/setting_add', $data);
	}
  
        public function setting_upd(){
            $cmsimg = $this->ad_model->getSingle('settings',array('id'=>1));
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
                if(!empty($_FILES['image']['name'])){
                        unlink('images/'.$cmsimg['logo']);
                    }else{
                       $image = $cmsimg['logo'];
                    }
            $post = $this->input->post();
            $datai['name'] = $post['name'];
            $datai['cname'] = $post['cname'];
            $datai['phoneno'] = $post['phoneno'];
            $datai['whatsapp'] = $post['whatsapp'];
            $datai['emailid'] = $post['emailid1'];
            $datai['semailid'] = $post['emailid2'];
            
            $datai['p_address'] = $post['p_address'];
            $datai['o_address'] = $post['o_address'];
            $datai['rss_link'] = $post['rsslink'];
            $datai['fb_link'] = $post['fblink'];
            
            $datai['twitter_link'] = $post['twitter'];
            $datai['linkedin_link'] = $post['linkedin'];
            $datai['ofiicetime'] = $post['ofiicetime'];
            $datai['status'] = !empty($post['status'])?'Yes':'No';
            $datai['logo'] = $image;
            $query = $this->ad_model->saveupdate('settings', $datai, null, array('id'=>1));
            if(!empty($query)){
                $this->session->set_flashdata('success','Record is updated successfully!!');
                redirect(base_url('Admin/Settings'));
            }else{
                $this->session->set_flashdata('error','Something went Wrong!!');
                redirect(base_url('Admin/Settings'));
            }
        }
}