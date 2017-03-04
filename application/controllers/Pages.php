<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 11/9/2016
 * Time: 9:43 PM
 */

class Pages extends CI_Controller{
    public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title']= ucfirst($page);
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');
    }
}