<?php
class Export_csv_model extends CI_Model
{
 function fetch_data()
 {
  $this->db->select("name, phone,email,qulification,experience,designating,post");
  $this->db->from('career');
  return $this->db->get();
 }
 function loan_data()
 {
  $this->db->select("name, residence_phone,office_phone,phone,dob,email,city,m_income,occupation,cdate");
  $this->db->from('loan');
  return $this->db->get();
 }
 function inquery_data($table,$where,$key){
  $this->db->select($key);
  $this->db->where($where);
  $this->db->from($table);
  return $this->db->get();
 }
// function inquery_data($where){
//  $this->db->select("`name`, `email`, `phone`, `message`, `date`");
//  $this->db->where($where);
//  $this->db->from('inquiry');
//  return $this->db->get();
// }
}

?>