<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comments
 *
 * @author Asus
 */
class Comments extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    } 
    public function create($post_id){
        $slug = $this->input->post('slug');
        $data['post'] = $this->post_model->get_post($slug);
        //echo $post_id.'<pre>'; print_r($_POST);print_r($data);echo '</pre>';exit;
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('body','Body','required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/view',$data);
            $this->load->view('templates/footer');
        }else{
            $this->comment_model->create_comment($post_id);
            redirect('post/'.$slug);
        }
    }
}
