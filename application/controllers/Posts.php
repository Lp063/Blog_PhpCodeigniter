<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 11/10/2016
 * Time: 1:04 AM
 */

class Posts extends CI_Controller{
    public function index(){
        $data['title']= "Latest Posts";
        $data['posts']=$this->post_model->get_post();

        $this->load->view('templates/header');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');
    }

    public function view($slug= NULL){
        $data['post']= $this->post_model->get_post($slug);
        if(empty($data['post'])){
            show_404();
        }

        $data['title']=$data['post']['title'];
        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
    }

    function create(){
        echo "<pre>";print_r($_FILES);echo "</pre>";exit();
        $data['title']="Create Post";
        $data['categories']=$this->post_model->get_categories();

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/create',$data);
            $this->load->view('templates/footer');

        }else{
            $config['upload_path']='./assets/images/posts';
            $config['allowed_types']='gif|jpg|png';
            $config['max_size']='2048';
            $config['max_width']='500';
            $config['max_height']='500';
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            }else{
                //echo "<pre>";print_r($_FILES);echo "</pre>";exit();
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfiles']['name'];
                //echo "Else";
                //echo "<pre>"; echo print_r($_FILES); echo "</pre>";
               // exit();

            }

            $this->post_model->create_post($post_image);
            redirect('posts/index');
        }
    }

    public function delete($id){
        $this->post_model->delete_post($id);
        redirect('posts/index');
    }

    public function edit($slug){
        $data['post']= $this->post_model->get_post($slug);
        $data['categories']=$this->post_model->get_categories();

        if(empty($data['post'])){
            show_404();
        }

        $data['title']="Edit Post";
        $this->load->view('templates/header');
        $this->load->view('posts/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update_post(){
       $this->post_model->update_post();
        redirect('posts/index');
    }
}
