<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 11/10/2016
 * Time: 1:04 AM
 */

class Posts extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
    }
    
    public function index($offset = 0){

        /* $config['base_url'] = base_url().'posts/index';
        $config['total_rows'] = $this->db->count_all('posts');
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config); */
        $data['title']= "Latest Posts";
        /* $data['posts']=$this->post_model->get_post(FALSE,$config['per_page'],$offset); */
        
        $assets['assets']=[
            "js"=>[
                base_url()."assets/js/posts/index.js"
            ],
            "css"=>[
                base_url()."assets/css/posts/index.css"
            ]
        ];

        $this->load->view('templates/header',$assets);
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer',$assets);
    }

    public function apiloadPosts(){
        $response["success"] = 0;

        $data = $this->post_model->loadPosts($this->input->post('from'));
        if (count($data)) {
            $response["success"] = 1;
        }
        $response["data"] = $data;

        echo json_encode($response);
    }

    public function view($slug= NULL){
        $data['post']= $this->post_model->get_post($slug);
        $post_id = $data['post']['id'];
        //$data['comments']=$this->comment_model->get_comments($post_id);
        if(empty($data['post'])){
            show_404();
        }

        $data['title']=$data['post']['title'];
        $data['comments']=[];
        $assets['assets']=[
            "js"=>[
            ],
            "css"=>[
                base_url()."assets/css/posts/view.css"
            ]
        ];

        $this->load->view('templates/header',$assets);
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer',$assets);
    }

    function create(){
        if($this->session->userdata('logged_id') == 0){
            //redirect('users/login');
        }
        //echo "<pre>";print_r($_FILES);echo "</pre>";exit();
        $data['title']="Create Post";
        $data['categories']=$this->post_model->get_categories();

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');
        
        $data['assets']=[
            "js"=>[
                
            ],
            "css"=>[
                
            ]
        ];
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header',$data);
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
                $flash_message = "<div class='alert alert-success'><strong>Success!</strong> Your post has been created.</div>";
                $this->session->set_flashdata('flash_message',$flash_message);
		redirect('posts/index');
        }
    }

    public function delete($id){
        if(!$this->session->userdata('logged_id')){
            redirect('users/login');
        }
        $this->post_model->delete_post($id);
        redirect('posts/index');
    }

    public function edit($slug){
        $data['post']= $this->post_model->get_post($slug);
        
        if($this->session->userdata('user_id') != $this->post_model->get_post($slug)['user_id']){
            redirect('posts');
        }
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
        //echo '<pre>';print_r($_SESSION); echo $this->session->userdata('logged_id');exit();
        if($this->session->userdata('logged_id') === 0){
            redirect('users/login');
        }
       $this->post_model->update_post();
       $flash_message = "<div class='alert alert-success'><strong>Success!</strong> Your post has been Updated.</div>";
        $this->session->set_flashdata('flash_message',$flash_message);
        redirect('posts/index');
    }
}
