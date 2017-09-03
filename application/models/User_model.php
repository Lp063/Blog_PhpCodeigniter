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
class User_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function register($enc_password){
        $data=[
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'zipcode' => $this->input->post('zipcode'),
            'password' => $enc_password,
        ];
        return $this->db->insert('users',$data);
    }
    public function login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('users');
        //echo'<pre>';print_r($result->result_array());exit();
        if($result->num_rows() == 1){
            return $result->result_array()[0]['id'];
        }else{
            return false;
        }
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
