<?php defined("BASEPATH") OR exit("No Direct Access Allowed!");

class Admin_model extends CI_Model{


public function __construct(){
parent::__construct(); 
}



public function getAll( $table, $orderby = null, $where = null,$keys = null ){
if(!is_null($keys)){
$this->db->select($keys);
}

if(!is_null($orderby)){
$this->db->order_by($orderby);
}

if(!is_null($where)){
$this->db->where($where);
}

return $this->db->get($table)->result_array();
}


public function groupData( $table, $groupby = null, $where = null,$keys = null ){
if(!is_null($keys)){
$this->db->select($keys);
}

if(!is_null($groupby)){
$this->db->group_by($groupby);
}

if(!is_null($where)){
$this->db->where($where);
}

return $this->db->get($table)->result_array();
}

public function getSingle( $table,$where,$keys = null ){
if(!is_null($keys)){
$this->db->select($keys);
}
return $this->db->where($where)->get($table)->row_array();
}

public function delete($table,$where){
return $this->db->where($where)->delete($table);
}



public function countitem($table,$where = null, $whereor = null,$whereorkey = null ){

if(!is_null($where)){

$query = $this->db->where($where);

if( !is_null($whereor)){ 
$query = $this->db->group_start();
foreach($whereor as $row){ $query = $this->db->or_where($whereorkey,$row ); }
$query = $this->db->group_end();
}

$query = $this->db->get($table);
}else{ $query = $this->db->get($table);}
$count = $query->num_rows();
return ( $count > 0 ? $count : 0 );
}


public function saveupdate($table, $dataarray, $validation = null, $where = null, $id = null ){

if(!is_null( $where )){
$status = $this->db->where( $where )->update($table,$dataarray);
return !is_null( $id ) ? $id : $status;
}else{

if(!is_null($validation)){
$this->db->where($validation);
}

if( !is_null($validation) && $this->db->get($table)->num_rows() > 0 ){
return false;
}else {
$this->db->insert($table,$dataarray);
return $this->db->insert_id();
}
}
}	


public function getfilter($tablename,$wherearray = null,$limit = null,$start = null, $orderby = null, $orderbykey = null, $whereor = null,$whereorkey = null, $like = null, $likekey = null, $getorcount = null ){

if( !is_null($limit) && !is_null($start) && $start > 0 && $limit > 0 ){ 

if( !is_null($orderby) && ( $orderby == 'ASC' || $orderby == 'DESC')){ $query = $this->db->order_by($orderbykey, $orderby ); }

if(!is_null($likekey) && !is_null($like)){ $this->db->like($likekey,$like,'both'); }


$query = $this->db->limit($limit, $start);
if( !is_null($whereor) && !is_null($whereorkey) ){ 
$query = $this->db->group_start();
foreach($whereor as $row){ $query = $this->db->or_where($whereorkey,$row ); } 
$query = $this->db->group_end();
}

if( !is_null($whereor) && !is_null($whereorkey) && !empty($whereand)){ 
$query = $this->db->group_start();
foreach($whereand as $datet){ $query = $this->db->or_where($whereorkey,$datet ); }
$query = $this->db->group_end();
}
$query = $this->db->where($wherearray);
$query = $this->db->get($tablename);
}




else if( !is_null($limit) && $limit > 0){

if( !is_null($orderby) && ( $orderby == 'ASC' || $orderby == 'DESC')){ $query = $this->db->order_by($orderbykey, $orderby ); }

if(!is_null($likekey) && !is_null($like)){ $this->db->like($likekey,$like,'both'); }
$query = $this->db->limit($limit);
if( !is_null($whereor) && !is_null($whereorkey) ){ 
$query = $this->db->group_start();
foreach($whereor as $row){ $query = $this->db->or_where($whereorkey,$row ); }
$query = $this->db->group_end();
}
$query = $this->db->where($wherearray);
$query = $this->db->get($tablename);

}


else{ 
if( !is_null($orderby) && ( $orderby == 'ASC' || $orderby == 'DESC')){ $query = $this->db->order_by('id', $orderby ); }

if(!is_null($likekey) && !is_null($like)){ $this->db->like($likekey,$like,'both'); }

if( !is_null($whereor) && !is_null($whereorkey)){ 
$query = $this->db->group_start();
foreach($whereor as $row){ $query = $this->db->or_where($whereorkey,$row ); }
$query = $this->db->group_end();
}
$query = $this->db->where($wherearray);
$query = $this->db->get($tablename);
}



$output = ($getorcount == 'count') && !is_null($getorcount) ? $query->num_rows() : $query->result_array();;

return $output ? $output : '' ;
}	




public function getAlllike( $table, $where = null,$keys = null ,$orderby = null, $like = null,$likekey = null,$likeaction = null ){ 
if(!is_null($keys)){
$this->db->select($keys);
}

if(!is_null($orderby)){
$this->db->order_by($orderby);
}


if(!is_null($like) && !is_null($likekey) && !is_null($likeaction) ){
$this->db->like($likekey,$like,$likeaction);
}

if(!is_null($where)){
$this->db->where($where);
}

return $this->db->get($table)->result_array();
}



public function getAllwherein( $table, $where = null,$keys = null ,$orderby = null, $inkey = null,$inlistarray = null ){ 

if(!is_null($keys)){
$this->db->select($keys);
}

if(!is_null($orderby)){
$this->db->order_by($orderby);
}


if(!is_null($inkey) && !is_null($inlistarray) ){
$this->db->where_in($inkey, $inlistarray);
}

if(!is_null($where)){
$this->db->where($where);
}

return $this->db->get($table)->result_array();
}


public function getAllwherenotin( $table, $where = null,$keys = null ,$orderby = null, $inkey = null,$inlistarray = null ){ 

if(!is_null($keys)){
$this->db->select($keys);
}

if(!is_null($orderby)){
$this->db->order_by($orderby);
}


if(!is_null($inkey) && !is_null($inlistarray) ){
$this->db->where_not_in($inkey, $inlistarray);
}

if(!is_null($where)){
$this->db->where($where);
}

return $this->db->get($table)->result_array();
}


function total_count($column_name,  $where, $table_name)
{
   $this->db->select_sum($column_name);
    if(!empty($where) && count($where) > 0 )
    {
       $this->db->where($where);
    }
      $this->db->from($table_name);
return $this->db->get()->row($column_name);
 }



function getLastInserted($table, $id) {
	$this->db->select_max($id);
	$Q = $this->db->get($table);
	$row = $Q->row_array();
	return $row[$id];
 }

public function broadCastview( $vendoruniqueid ){ 
        $this->db->select('brdcast.*');
        $this->db->group_by('policyadd.id');
        //$this->db->order_by('brdcast.id DESC');
        $this->db->from('corpo_brdcastbooking as brdcast');
        $this->db->join('bid_vendorcity as citylist','citylist.cityname = brdcast.cityid','inner'); 
        $this->db->where( array('brdcast.bidclosestatus'=>'no','citylist.uniqueid'=>trim($vendoruniqueid) ));

return $this->db->get()->result_array();
	}
        
         public function record_count_with_where($table_name,$column_name,$type)
  {
    $this->db->select($column_name);
    $this->db->where($type);
    $q=$this->db->get($table_name);
    $count=$q->result();
    return count($count);

  }
}

?>