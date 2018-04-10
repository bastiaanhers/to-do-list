<?php
    class tasks extends CI_Controller{
        public function index(){

            $data['title'] = "Your task lists";
            $data['tasks'] = $this->tasks_model->get_tasks();

            $this->load->view('templates/header');
            $this->load->view('tasks/index' , $data);
            $this->load->view('templates/footer');
           
        }
        public function create($id){
            $data['id'] = $id;
            //validate post values
            $this->form_validation->set_rules('Name', 'Name','required');

            //check if validation passed
            if($this->form_validation->run() == FALSE){
                //stay on create is validation fails  
                $this->load->view('templates/header');
                $this->load->view('tasks/create' , $data);
                $this->load->view('templates/footer');
            } else {
                //save list to db
                $this->tasks_model->create_task($id);
                //load index
                redirect('lists/view/'.$id);
            }
        }
        public function delete($taskID){
            $this->tasks_model->delete_task($taskID);
            redirect('lists');
        }
        public function edit($taskID){
            $data['title'] = 'edit task';
            $data['taskID'] = $taskID;
            $data['task'] = $this->tasks_model->get_task_by_id($taskID);

            $this->load->view('templates/header');
            $this->load->view('tasks/edit', $data);
            $this->load->view('templates/footer');
        }
        public function update($taskID){
            $this->tasks_model->update_task($taskID);
            redirect('lists/');
        }
        public function changeStatus($taskID){
            $this->tasks_model->change_task_status($taskID);
            redirect('lists/');
        }
    }