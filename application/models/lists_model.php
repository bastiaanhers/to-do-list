<?php
 class lists_model extends CI_model{
    public function __construct(){
        $this->load->database();
    }
    //get all lists
    public function get_lists($naam = FALSE){
        if($naam == FALSE){
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('lijsten');
            return $query->result_array();
        }

        $query = $this->db->get_where('lijsten', array('naam'=> $naam));
        return $query->row_array();
        
    }
    //get 1 list
    public function get_list($listID){
        $query = $this->db->where('id', $listID);
        $query = $this->db->get('lijsten');        
        return $query->result_array();
         
    }

    //create list
    public function create_list(){

        $data = array(
            'naam' => $this->input->post('Name'),
        );
        return $this->db->insert('lijsten', $data);
    }

    //delete list
    public function delete_list($listID){
        $this->db->where('id',$listID);
        $this->db->delete('lijsten');
        return true;
    }

    //edit list
    public function update_list($listID){
        $data = array(
            'id' => $listID,
            'naam' => $this->input->post('Name'),
        );
        $this->db->replace('lijsten', $data);
    }
 }