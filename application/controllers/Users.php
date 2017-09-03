<?php

class Users extends CI_Controller{
    
    public function register(){
        $data['title'] = "Sign Up";
        //echo "<pre>";print_r($_POST);echo "</pre>";
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('zipcode','Zipcode','required');
        $this->form_validation->set_rules('username','Username','required|callback_check_username_exist');
        $this->form_validation->set_rules('email','Email','required|callback_check_email_exist');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','Confirm Password','matches[password]');
        
        if($this->form_validation->run() == FALSE){
            
            //echo "<pre>";print_r($_POST);echo "</pre>".$enc_password;exit;
            $this->load->view('templates/header');
            $this->load->view('users/register',$data);
            $this->load->view('templates/footer');
        }else{
            $enc_password = md5($this->input->post('password'));
            $this->user_model->register($enc_password);
            $flash_message = "<div class='alert alert-success'><strong>Success!</strong> You are now registered and can log in.</div>";
            $this->session->set_flashdata('flash_message',$flash_message);
            redirect('posts/index');
        }
    }
    function check_username_exist($username){
        $this->form_validation->set_message('check_username_exist','Username already taken.');
        if($this->user_model->check_username_exist($username)){
            return true;
        }else{
            return false;
        }
    }
    function check_email_exist($email){
        $this->form_validation->set_message('check_email_exist','Email already registered.');
        if($this->user_model->check_email_exist($email)){
            return true;
        }else{
            return false;
        }
    }
        
}
