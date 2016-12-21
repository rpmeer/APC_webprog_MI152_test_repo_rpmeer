<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('User_model');
    }

    function index()
    {
        // set form validation rules
        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('phoneNum', 'Phone No.', 'required');
        $this->form_validation->set_rules('comment', 'Comment');

        // submit
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('create_user_view');
        }
        else
        {
            //insert user details into db
            $data_users = array(
                'fullname' => $this->input->post('fullname'),
                'nickname' => $this->input->post('nickname'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'gender' => $this->input->post('gender'),
                'phoneNum' => $this->input->post('phoneNum'),
                'comment' => $this->input->post('comment')


            );

            if ($this->User_model->insert_user($data_users))
            {
                redirect('home', $data);
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','Oops! Error.  Please try again later!!!');
                redirect('Users/index');
            }
        }
    }

    function edit($user_id)
    {
        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('phoneNum', 'Phone No.', 'required');
        $this->form_validation->set_rules('comment', 'Comment');


        // submit
        if ($this->form_validation->run() == FALSE)
        {
            $data['user'] = $this->User_model->find($user_id);
            $this->load->view('update_user_view',$data);
        }
        else
        {
            if($_FILES['userfile']['name'] != '')
            {
                //insert user details into db
                $data_users = array(
                'fullname' => $this->input->post('fullname'),
                'nickname' => $this->input->post('nickname'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'gender' => $this->input->post('gender'),
                'phoneNum' => $this->input->post('phoneNum'),
                'comment' => $this->input->post('comment')
                );

                if ($this->User_model->edit($id, $data_users))
                {
                    redirect('home', $data);
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','Oops! Error.  Please try again later!!!');
                    redirect('Users/index');
                }
            } else {
                //insert user details into db
                $data_users = array(
                'fullname' => $this->input->post('fullname'),
                'nickname' => $this->input->post('nickname'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'gender' => $this->input->post('gender'),
                'phoneNum' => $this->input->post('phoneNum'),
                'comment' => $this->input->post('comment')
                );

                if ($this->User_model->edit($user_id, $data_users))
                {
                    redirect('home', $data);
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','Oops! Error.  Please try again later!!!');
                    redirect('Users/index');
                }
            }
        
        }
    }
    function delete($user_id)
    {
        $this->User_model->delete($user_id);
        redirect('home');
    }
}
?>