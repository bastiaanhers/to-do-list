<?php
 class tasks_model extends CI_model{
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

    //create task
    public function create_task($id){

        $data = array(
            'naam' => $this->input->post('Name'),
            'uitleg'=> $this->input->post('Description'),
            'duur'=> $this->input->post('Time'),
            'lijst_id'=> $id,
        );
        return $this->db->insert('taken', $data);
    }
 }