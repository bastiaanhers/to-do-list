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
        return $query;
        
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
    public function get_tasks_by_id($id){
        //get all tasks from db
        $allTasks = $this->tasks_model->get_tasks();
        //array for all taks with same id
        $tasksById= [];
        //check if id of tasks = id of list
        foreach ($allTasks as $task) {
           if($task['lijst_id'] == $id){
                array_push($tasksById, $task);
           }
        }
        return $tasksById;   
    }
 }