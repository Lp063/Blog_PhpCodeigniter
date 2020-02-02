<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 11/10/2016
 * Time: 1:23 AM
 */

class Post_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_post($slug = FALSE, $limit=FALSE,$offset = FALSE){
        if($limit){
            $this->db->limit($limit,$offset);
        }
        if($slug == FALSE){
            $this->db->order_by('posts.id','DESC');
            $this->db->join('categories','categories.id = posts.category_id');
            $query=$this->db->get('posts');
            return $query->result_array();
        }

        $query=$this->db->get_where('posts',array('slug' => $slug));
        return $query->row_array();
    }

    public function loadPosts($from){
        if($from>0){
            $pagination="limit ".$from.", 9";
        }else{
            $pagination = "limit 9";
        }
        $query = $this->db->query("SELECT * FROM `posts` ".$pagination);
        $result = $query->result_array();
        foreach ($result as $key => $post) {
            $return[]=[
                "id"=>$post["id"],
                "blogthumbnail"=>base_url()."assets/images/posts/".$post["post_image"],
                "blogsource"=>"arstechnica.com",
                "blogpostdate"=> date("jS M Y",strtotime($post["created_at"])),
                "blogtitle"=>$post["title"],
                "blogsummary"=> substr($post["body"],0,150)
            ];
        }
        return $return;
    }

    public function create_post($post_image){
        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => rand(100*10,1000*1000),
            'body' =>$this->input->post('body'),
            'category_id' => $this->input->post('category_id'),
            'user_id' => $this->session->userdata('user_id'),
            'post_image' => $post_image
        );
        return $this->db->insert('posts',$data);
    }

    public function delete_post($id){
        $this->db->where('id',$id);
        $this->db->delete('posts');
        return true;
    }

    public function update_post(){
        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' =>$this->input->post('body'),
            'category_id' => $this->input->post('category_id')
        );
        $this->db->where('id',$this->input->post('id'));
        return $this->db->update('posts',$data);
    }

    public function get_categories(){
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    
    public function get_post_by_category($category_id){
        $this->db->order_by('posts.id','DESC');
        $this->db->join('categories','categories.id = posts.category_id');
        $query=$this->db->get_where('posts',array('category_id'=>$category_id));
        return $query->result_array();
    }
}