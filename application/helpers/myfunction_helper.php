<?php
if(!function_exists('ci')){
    function ci(){
        return get_instance();
    }
}
function view($page,$data)
{
        ci()->load->view('admin/include/header', $data);
        ci()->load->view('admin/include/nav', $data);
        ci()->load->view($page, $data);
        ci()->load->view('admin/include/footer', $data);
}
function fortable($page,$data)
{
        ci()->load->view('admin/include/table/header', $data);
        ci()->load->view('admin/include/nav', $data);
        ci()->load->view($page, $data);
        ci()->load->view('admin/include/table/footer', $data);
}
function form($page,$data)
{
        ci()->load->view('admin/include/form/header', $data);
        ci()->load->view('admin/include/nav', $data);
        ci()->load->view($page, $data);
        ci()->load->view('admin/include/form/footer', $data);
}
function frontin($page,$data)
{
        ci()->load->view('web/include/css', $data);
        ci()->load->view('web/include/nav', $data);
        ci()->load->view($page, $data);
        ci()->load->view('web/include/footer', $data);
        ci()->load->view('web/include/js', $data);
        ci()->load->view('web/enquery');
}
function cmspage($page,$data)
{
        ci()->load->view('web/include/cmscss', $data);
        ci()->load->view('web/include/nav', $data);
        ci()->load->view($page, $data);
        ci()->load->view('web/include/footer', $data);
        ci()->load->view('web/include/js', $data);
        ci()->load->view('web/enquery');
}
function detailspage($page,$data)
{
        ci()->load->view('web/include/prodctcss', $data);
        ci()->load->view('web/include/nav', $data);
        ci()->load->view($page, $data);
        ci()->load->view('web/include/footer', $data);
        ci()->load->view('web/include/js', $data);
        ci()->load->view('web/enquery');
}
function session_check(){
       if(!empty(ci()->session->userdata('userid'))){
           return TRUE;
            } else {
                redirect(base_url('Admin/Login'));
            }
}
  function checkurl($page){
$url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($page == $url){
      echo 'active';  
  }
 }
function seoUrl($string) {
    $string = trim(strtolower($string));
    $string = preg_replace("/[^a-zA-Z0-9_\s-&_]/", "", $string);
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", "-", $string);
    return ($string);
} 

if(!function_exists('getftcharraysingle')){
function getftcharraysingle( $table,$where,$keys = null ){
if(!is_null($keys)){
ci()->db->select($keys);
}
return ci()->db->where($where)->get($table)->row_array();
}}

if(!function_exists('getftcharraylimit')){
function getftcharraylimit( $table,$where,$limit = null ,$keys = null){
if(!is_null($keys)){
ci()->db->select($keys);
}
if(!is_null($limit)){
ci()->db->limit($limit);
}
return ci()->db->where($where)->get($table)->row_array();
}}

if(!function_exists('getftcharraygroup')){
function getftcharraygroup( $table, $groupby = null, $where = null,$keys = null ){
if(!is_null($keys)){
ci()->db->select($keys);
}

if(!is_null($groupby)){
ci()->db->group_by($groupby);
}

if(!is_null($where)){
ci()->db->where($where);
}

return ci()->db->get($table)->result_array();
}}


if(!function_exists('getftcharrayall')){
function getftcharrayall( $table, $orderby = null, $where = null,$keys = null ){
if(!is_null($keys)){
ci()->db->select($keys);
}

if(!is_null($orderby)){
ci()->db->order_by($orderby);
}

if(!is_null($where)){
ci()->db->where($where);
}

return ci()->db->get($table)->result_array();
}}
?>