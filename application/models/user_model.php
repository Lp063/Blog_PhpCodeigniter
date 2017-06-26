<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_model
 *
 * @author Asus
 */
class user_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function register($enc_password){
        $data=[
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'zipcode' => $this->input->post('zipcode')
        ];
        return $this->db->insert('users',$data);
    }
    public function check_username_exist($username){
        $query = $this->db->get_where('users',array('username'=>$username));
        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }
    public function check_email_exist($email){
        $query = $this->db->get_where('users',array('email'=>$email));
        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }
}
