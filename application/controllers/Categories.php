<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Categories extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function index(){
        $data['title']="categories";
        $data['categories'] = $this->category_model->get_categories();

        $data['assets']=[
            "js"=>[
                
            ],
            "css"=>[
                
            ]
        ];

        $this->load->view('templates/header',$data);
        $this->load->view('categories/index',$data);
        $this->load->view('templates/footer');
    }


    public function create(){
        $data['title'] = "Create Category";
        
        $this->form_validation->set_rules('name','Name','required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('categories/create',$data);
            $this->load->view('templates/footer');
        }else{
            $this->category_model->create_category();
            $this->post_model->create_post($post_image);
            $flash_message = "<div class='alert alert-success'><strong>Success!</strong> Your category has been created.</div>";
            $this->session->set_flashdata('flash_message',$flash_message);
            redirect('categories/index');
        }
    }
    
    public function posts($id){
        $data['title'] = $this->category_model->get_category($id)->name;
        $data['posts']= $this->post_model->get_post_by_category($id);

        $data['assets']=[
            "js"=>[
                
            ],
            "css"=>[
                
            ]
        ];
        $this->load->view('templates/header',$data);
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');
    }
}