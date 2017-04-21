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
        //echo "<pre>";print_r($_FILES);echo "</pre>";exit();
        $data['title']="Create Post";
        $data['categories']=$this->post_model->get_categories();

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/create',$data);
            $this->load->view('templates/footer');

        }else{
		$fileName = $_FILES['userfiles']['name'];
		$postsImg = getcwd()."/assets/images/posts/";
		if($_FILES['userfiles']['tmp_name'] != NULL || $_FILES['userfiles']['tmp_name'] !=""){
			//sudo chmod -R 0777 /opt/lampp/htdocs/Blog_PhpCodeigniter/assets/images/posts
			move_uploaded_file($_FILES['userfiles']['tmp_name'],$postsImg.$fileName);
			$post_image = $_FILES['userfiles']['name'];
		}else{
			$post_image = 'noimage.jpg';
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
