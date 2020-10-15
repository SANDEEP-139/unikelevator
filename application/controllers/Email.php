<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model','ad_model');
        }
	public function emailsend(){ 
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {       
         redirect(base_url());
        } else {
            
                $post       = $this->input->post();
                $data['name']       = $post['name'];
                $data['phone']      = $post['phone'];
                $data['type']       = $post['type'];
                $data['message']    = $post['message'];
                $data['email']      = $post['email'];
                $data['date']       = date('Y-m-d H:i:s');
                $subject    = "You have new query from ".$phone." ".date('Y-m-d H:i:s');
                $message    ="
                <html>
                <head>
                <title>HTML email</title>
                </head>
                <body>
                <p>Enquiry Details</p>
                <table border='1'>
                <tr>
                <th>Where</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Type</th>
                <th>Message</th>
                </tr>
                <tr>
                <th>Home Page Popup Detail</th>
                <th>".$post['name']."</th>
                <th>".$post['phone']."</th>
                <th>".$post['email']."</th>
                <th>".$post['type']."</th>
                <th>".$post['message']."</th>
                </tr>
                </table>
                </body>
                </html>
                ";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From:'. FROMMAIL . "\r\n";
                $ok = mail(TO,$subject,$message,$headers);
                $query = $this->ad_model->saveupdate('inquiry',$data);
                if(!empty($ok)){
                    redirect(base_url(''));
                } else {
                    redirect(base_url(''));
                }
              }
             }
 	public function contact(){ 
        $this->form_validation->set_rules('phone', 'Contact Number', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {       
         redirect(base_url());
        } else {
            
$post = $this->input->post();
$subject = "You have new query from ".$post['phone']." ".date('Y-m-d H:i:s');
 $message="
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Enquiry Details</p>
<table border='1'>
<tr>
<th>Where</th>
<th>Name</th>
<th>Phone</th>
<th>Enail id</th>
<th>Subject</th>
<th>Message</th>
</tr>
<tr>
<th>Home Contact Us</th>
<th>".$post['name']."</th>
<th>".$post['phone']."</th>
<th>".$post['mail']."</th>
<th>".$post['subject']."</th>
<th>".$post['comment']."</th>
</tr>
</table>
</body>
</html>
";
$data['name']       = $post['name'];
$data['phone']      = $post['phone'];
$data['type']       = $post['subject'];
$data['message']    = $post['comment'];
$data['email']      = $post['mail'];
$data['date']       = date('Y-m-d H:i:s');
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:'. FROMMAIL . "\r\n";
$query = $this->ad_model->saveupdate('inquiry',$data);
$ok = mail(TO,$subject,$message,$headers);
if(!empty($ok)){
    redirect(base_url('Contact'));
} else {
    redirect(base_url('Contact'));
    }
  }
 }
}
     