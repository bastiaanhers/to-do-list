<?php
 class Tasks_model extends CI_model{
    public function __construct(){
        $this->load->database();
    }
    public function get_tasks($slug = FALSE){
        if($slug == FALSE){
            $query = $this->db->get('taken');
            return $query->result_array();
        }

        $query = $this->db->get_where('taken', array('slug'=> $slug));
        return $query->row_array();
        
    }
 }