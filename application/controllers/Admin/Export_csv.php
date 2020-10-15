<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_csv extends CI_Controller {
 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('export_csv_model');
  $this->load->model('Admin_model','ad_model');
 }

 function career()
 {  
     
     $file_name = 'Job'.date('Ymd').'.csv'; 
     header("Content-Description: File Transfer"); 
     header("Content-Disposition: attachment; filename=$file_name"); 
     header("Content-Type: application/csv;");
   
     // get data 
     $student_data = $this->export_csv_model->fetch_data();

     // file creation 
     $file = fopen('php://output', 'w');
 
     $header = array("Name","Phone","Email","Education Qualification","Work Experience","Position","Apply For"); 
     fputcsv($file, $header);
     foreach ($student_data->result_array() as $key => $value)
     { 
       fputcsv($file, $value); 
     }
     fclose($file); 
     exit; 
 }
 public function loan(){
     $file_name = 'Loan'.date('Ymd').'.csv'; 
     header("Content-Description: File Transfer"); 
     header("Content-Disposition: attachment; filename=$file_name"); 
     header("Content-Type: application/csv;");
     // get data 
     $student_data = $this->export_csv_model->loan_data();
     // file creation 
     $file = fopen('php://output', 'w');
 
     $header = array("Name","Residence Phone","Office phone","Phone","DOB","Email Address","City","Monthly Income","Occupation","Date"); 
     fputcsv($file, $header);
     foreach ($student_data->result_array() as $key => $value)
     { 
       fputcsv($file, $value); 
     }
     fclose($file); 
     exit; 
 }
 public function inquery(){
     $type = $this->input->get('type');
     $file_name = 'Enquery'.date('Ymd').'.csv'; 
     header("Content-Description: File Transfer"); 
     header("Content-Disposition: attachment; filename=$file_name"); 
     header("Content-Type: application/csv;");
     // get data 
     $student_data = $this->export_csv_model->inquery_data('inquiry',array('type'=>$type),"name, email, phone, message, date");
    // file creation 
     $file = fopen('php://output', 'w');
 
     $header = array("Name","Email","Phone","Message","Date"); 
     fputcsv($file, $header);
     foreach ($student_data->result_array() as $key => $value)
     { 
       fputcsv($file, $value); 
     }
     fclose($file); 
     exit; 
 }
  
}