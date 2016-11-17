<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
function __construct()
{
parent::__construct();
#$this->load->helper('url');
$this->load->model('users_model');
}
public function index(){
	$this->load->view('HomePage');
}
public function users_view(){
	$data['user_list'] = $this->users_model->get_all_users();
	$this->load->view('Users_view',$data);
	
}


public function add_form()
{
$this->load->view('Users_add');
}
public function insert_users_db()
{
$udata['complete_name'] = $this->input->post('complete_name');
$udata['nickname'] = $this->input->post('nickname');
$udata['Email_Address'] = $this->input->post('Email_Address');
$udata['Home_Address'] = $this->input->post('Home_Address');
$udata['gender'] = $this->input->post('gender');
$udata['cellphone'] = $this->input->post('cellphone');
$udata['comment'] = $this->input->post('comment');
$res = $this->users_model->insert_users_to_db($udata);
if($res){
header('location:'.base_url()."index.php/users/users_view");
}
}
public function Users_edit(){
$user_id = $this->uri->segment(3);
 $data['users'] = $this->users_model->getById($user_id);
$this->load->view('Users_edit', $data);
}
public function update()
{
$mdata['complete_name']=$_POST['complete_name'];
$mdata['nickname']=$_POST['nickname'];
$mdata['Email_Address']=$_POST['Email_Address'];
$mdata['Home_Address']=$_POST['Home_Address'];
$mdata['gender']=$_POST['gender'];
$mdata['cellphone']=$_POST['cellphone'];
$mdata['comment']=$_POST['comment'];
$res=$this->users_model->update_info($mdata, $_POST['user_id']);
if($res){
header('location:'.base_url()."index.php/users/users_view");
}
}
public function delete($user_id)
{
$this->users_model->delete_a_user($user_id);
$this->users_view();
}
}