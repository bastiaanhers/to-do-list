<?php
 class lists_model extends CI_model{
    public function __construct(){
        $this->load->database();
    }
    public function get_lists($naam = FALSE){
        if($naam == FALSE){
            $query = $this->db->get('lijsten');
            return $query->result_array();
        }

        $query = $this->db->get_where('lijsten', array('naam'=> $naam));
        return $query->row_array();
        
    }
    public function create_list(){

        $data = array(
            'naam' => $this->input->post('Name'),
        );
        return $this->db->insert('lijsten', $data);
    }
 }