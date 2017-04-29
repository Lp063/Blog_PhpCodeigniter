<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Categories extends CI_Controller{
    public function create(){
        $data['title'] = "Create Category";
        
        $this->form_validation->set_rules('name','Name','required');
        
        if($this->form_valudation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('templates/create',$data);
            $this->load->view('templates/footer');
        }else{
            $this->category_model->create_categoty();
            
            redirect('categories');
        }
    }
}