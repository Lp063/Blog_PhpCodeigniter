<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comment_model
 *
 * @author Asus
 */
class Comment_model extends CI_Model {
    public function _construct(){
        $this->load->database();
    }
    
    public function create_comment($post_id){
        //echo $post_id.'<pre>'; print_r($_POST);echo '</pre>';exit;
        $data =[
            'post_id' => $post_id,
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'body' => $this->input->post('body')
        ];
        return $this->db->insert('comments',$data);
    }
}
