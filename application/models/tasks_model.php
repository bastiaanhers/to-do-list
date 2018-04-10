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
    public function get_task_by_id($id){
        //get all tasks from db
        $allTasks = $this->tasks_model->get_tasks();

        foreach ($allTasks as $task) {
            if($task['id'] == $id){
              $taskById = $task  ;
            }
         }
        return $taskById;   
    }
    public function delete_task($taskID){
        $this->db->where('id',$taskID);
        $this->db->delete('taken');
        return true;
    } 

    //edit list
    public function update_task($taskID){
        $data = array(
            'id' => $taskID,
            'naam' => $this->input->post('Naam'),
            'uitleg' => $this->input->post('Uitleg'),
            'duur' => $this->input->post('Duur'),
            'status' => $this->input->post('Status'),
        );
        $this->db->replace('taken', $data);
    } 
        //edit status
    public function change_task_status($taskID){
        $data = array(
            'status' => 1,
        );
            $this->db->where('id',$taskID);
            $this->db->replace('taken', $data);
        $this->db->set('status', 1);
        $this->db->where('id', $taskID);
        $this->db->update('taken');
    }   
}
