<?php
class Home extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->helper(array('url', 'html'));
  $this->load->library('session');
  $this->load->database();
  $this->load->model('User_model');
 }
 
 function index()
 {
  $data['user'] = $this->User_model->all_users();
  $this->load->view('HomePage', $data);
 }

 

}
?>